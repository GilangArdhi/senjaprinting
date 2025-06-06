<!DOCTYPE html>
<html lang="en">
  <head>
    @include('script_head')
  </head>
  <body>
    @include('header')
    <div class="top-spacing">
      <div class="container"><a class="back-link" href="/"> 
          <svg xmlns="http://www.w3.org/2000/svg" width="13.336" height="11.59" viewBox="0 0 13.336 11.59">
            <path d="M5.794,0,.963,4.835,0,5.8l.963.963L5.794,11.59l.963-.961-4.15-4.15H13.336V5.118H2.606L6.757.965Z"></path>
          </svg>Back to store</a>
        <div class="auth-block--center">
          <h1 class="auth-title">Masuk</h1>
          <p class="auth-paragraph">Masukkan akun dan password yang sudah didaftarkan sebelumnya.</p>
          @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                  <div class="text-dark ">
                    <li><label>{{ $error }}</label></li>
                  </div>
                @endforeach
              </ul>
            </div>
          @endif
          <form action="/masuk" method="POST">
            @csrf
            <input class="txt-input default-input" type="email" name="email" placeholder="E-mail">
            <div class="input-w-icon">
              <input class="txt-input default-input" type="password" name="password" id="inputPass" placeholder="Password">
              <div class="svg" style="transform: translateY(-38px)">
                <svg class="input-icon" xmlns="http://www.w3.org/2000/svg" width="21.174" height="14.899" onclick="tampilpw()">
                  <g fill="gray">
                    <path d="M20.977 6.859c-.178-.223-4.677-5.456-10.356-5.456a10.315 10.315 0 00-3.341.579l7.349 5.568a4.149 4.149 0 00-.334-3.519 17.207 17.207 0 014.766 3.407 19.661 19.661 0 01-2.16 1.848l1.492 1.136a20.654 20.654 0 002.584-2.405.937.937 0 000-1.158z"></path>
                    <path d="M19.775 13.273L2.515.173a.892.892 0 00-1.073 1.426l2.606 1.982A19.7 19.7 0 00.217 6.859a.881.881 0 000 1.158c.178.223 4.677 5.456 10.378 5.456a11.345 11.345 0 004.877-1.2l3.207 2.45a.96.96 0 00.535.178.865.865 0 00.713-.356.908.908 0 00-.152-1.272zm-9.176-1.6c-3.831 0-7.194-2.962-8.463-4.231a17.571 17.571 0 013.43-2.695l.869.646a4.605 4.605 0 00-.067.779 4.23 4.23 0 004.227 4.227 3.975 3.975 0 001.848-.445l1.382 1.045a8.293 8.293 0 01-3.23.671z"></path>
                  </g>
                </svg>
              </div>
            </div>
            <div class="auth-row">
              <!-- <label class="checkbox-label" for="remember-me">Keep me signed in
                <input class="checkbox-input" type="checkbox" name="remember-me" id="remember-me"><span class="checkbox-custom" role="checkbox" aria-checked="false" aria-labelledby="remember-me">
                  <svg xmlns="http://www.w3.org/2000/svg" width="13.371" height="11.063" viewBox="0 0 13.371 11.063">
                    <path d="M11.763.25l-.876.929-6.1,6.473L2.955,5.821l-.9-.9-1.8,1.8.9.9L3.91,10.384l.929.929.9-.955,7-7.428L13.62,2Z" transform="translate(-0.249 -0.25)" fill="#fff"></path>
                  </svg></span>
              </label> -->
              <a class="auth-link" href="#" style="margin: 10px">Lupa Kata Sandi?</a>
            </div>
            <!-- <div class="auth-row-2">
              <button class="btn-social-media btn-fb">
                <svg class="btn-social-media__icon" xmlns="http://www.w3.org/2000/svg" width="9.493" height="17.559" viewBox="0 0 9.493 17.559">
                  <path id="Path_4" data-name="Path 4" d="M31.213,0,28.936,0a4,4,0,0,0-4.211,4.321V6.314H22.435a.358.358,0,0,0-.358.358V9.559a.358.358,0,0,0,.358.358h2.289V17.2a.358.358,0,0,0,.358.358H28.07a.358.358,0,0,0,.358-.358V9.917H31.1a.358.358,0,0,0,.358-.358V6.672a.358.358,0,0,0-.358-.358H28.428V4.625c0-.812.193-1.224,1.251-1.224h1.534a.358.358,0,0,0,.358-.358V.362A.358.358,0,0,0,31.213,0Z" transform="translate(-22.077)" fill="#fff"></path>
                </svg><span>Facebook</span>
              </button>
              <button class="btn-social-media btn-gmail">
                <svg class="btn-social-media__icon" xmlns="http://www.w3.org/2000/svg" width="19.253" height="14.667" viewBox="0 0 19.253 14.667">
                  <g id="gmail" transform="translate(0 -60.983)">
                    <g transform="translate(1.255 0)">
                      <path d="M50.36,122.808,49.131,135.15H34.369l-.99-12.1,8.371,4.687Z" transform="translate(-33.379 -120.483)" fill="#f2f2f2"></path>
                      <path d="M54.5,60.983l-8.193,7.7-8.193-7.7H54.5Z" transform="translate(-37.936 -60.983)" fill="#f2f2f2"></path>
                    </g>
                    <path d="M2.245,113.6v11.113H.908A.908.908,0,0,1,0,123.809V111.967l1.467.04Z" transform="translate(0 -49.067)" fill="#f14336"></path>
                    <path d="M454.533,109.081v11.842a.908.908,0,0,1-.908.908h-1.337V110.717l.74-1.749Z" transform="translate(-435.28 -46.181)" fill="#d32e2a"></path>
                    <path d="M19.253,61.891V62.9l-2.245,1.637-7.381,5.38-7.381-5.38L0,62.9V61.891a.908.908,0,0,1,.908-.908h.526l8.193,5.972,8.193-5.972h.525A.908.908,0,0,1,19.253,61.891Z" fill="#f14336"></path>
                    <path d="M2.245,113.6,0,113.256v-1.289Z" transform="translate(0 -49.067)" fill="#d32e2a"></path>
                  </g>
                </svg><span>Gmail</span>
              </button>
            </div> -->
            <button type="submit" class="btn btn--primary auth-btn">Masuk</button>
            <div class="auth-info">Belum Punya Akun?<a class="auth-link--dark" href="daftar">Daftar</a></div>
          </form>
        </div>
      </div>
    </div>
    <!-- <div class="container spacing">
      <div class="newsletter">
        <div class="newsletter__content">
          <p class="newsletter__title">Subscribe to our newsletter and receive exclusive offers every week</p>
          <div class="newsletter__form">
            <input class="txt-input newsletter__input" type="text" name="Newsletter" placeholder="Enter your email">
            <input class="btn btn--primary newsletter__btn" type="submit" value="Subscribe">
          </div>
        </div>
      </div>
    </div> -->
    <div class="container">
      @include('footer')
    </div>
    <script>
        function tampilpw() {
            var inputPassword = document.getElementById("inputPass");
            
            if (inputPassword.type === "password") {
                inputPassword.type = "text";
            } else {
                inputPassword.type = "password";
            }
        }
    </script>
  </body>
</html>