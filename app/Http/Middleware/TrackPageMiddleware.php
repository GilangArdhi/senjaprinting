<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\TrackRecord;
use App\Models\User;

class TrackPageMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::check() || !Auth::user()->isAdminRestoran()) {
            $sessionId = Session::getId();
            $id_user = Auth::id() ?? $sessionId;
    
            $trackId = TrackRecord::where('user_id', $id_user)->first();
            $date = TrackRecord::where('user_id', $id_user)
                ->whereDate('created_at', now()->toDateString())
                ->where('page_visited', $request->getPathInfo())
                ->get();
    
            if ($date->count() == (0 || null)) {
                TrackRecord::create([
                    'user_id' => $id_user,
                    'page_visited' => $request->getPathInfo(),
                    'visit_start' => now(),
                ]);
            } else {
                foreach ($date as $dates) {
                    $dates->update(['updated_at' => now()]);
                }
            }
        }
        return $next($request);
    }
}
