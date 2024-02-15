<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Models\TrackRecord;

class TrackPageMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $sessionId = Session::getId();

        $trackId = TrackRecord::where('user_id', $sessionId)->get();
        $date = TrackRecord::where('user_id', $sessionId)
        ->whereDate('created_at', now()->toDateString())
        ->where('page_visited', $request->getPathInfo())
        ->get();
        
        if ($date->count() == 0){
            #dd($sessionId, $trackId);
            TrackRecord::create([
                'user_id' => $sessionId,
                'page_visited' => $request->getPathInfo(),
                'visit_start' => now(),
            ]);
        } else {
            // dd($request->getPathInfo());
            foreach ($date as $dates) {
                $dates->update(['updated_at' => now()]);
            }
        }

        return $next($request);
    }
}
