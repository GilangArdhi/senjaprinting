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
          
          <form action="daftar" method="post">
            @csrf
              <h1 class="auth-title">Buat Akun</h1>
              <p class="auth-paragraph">Masukkan data untuk membuat akun baru.</p>
            @error('nama')
              <div class="alert alert-danger" style="color: red;">{{ $message }}</div>
            @enderror
              <input class="txt-input default-input" type="text" name="nama" placeholder="Nama">
            @error('username')
              <div class="alert alert-danger" style="color: red;">{{ $message }}</div>
            @enderror
              <input class="txt-input default-input" type="text" name="username" placeholder="Username">
            @error('alamat')
              <div class="alert alert-danger" style="color: red;">{{ $message }}</div>
            @enderror
              <input class="txt-input default-input" type="text" name="alamat" placeholder="Alamat">
            @error('no_hp')
              <div class="alert alert-danger" style="color: red;">{{ $message }}</div>
            @enderror
              <input class="txt-input default-input" type="number" name="no_hp" placeholder="No. Telepon">
            @error('email')
              <div class="alert alert-danger" style="color: red;">{{ $message }}</div>
            @enderror
              <input class="txt-input default-input" type="email" name="email" placeholder="E-mail">
            @error('password')
              <div class="alert alert-danger" style="color: red;">{{ $message }}</div>
            @enderror
            <input class="txt-input default-input" type="password" name="password" placeholder="Password">
            <label class="checkbox-label" for="agree">Saya menyetujui kebijakan yang di buat oleh SenjaPrinting
              <input class="checkbox-input" type="checkbox" name="agree" id="agree"><span class="checkbox-custom" role="checkbox" aria-checked="false" aria-labelledby="agree">
                <svg xmlns="http://www.w3.org/2000/svg" width="13.371" height="11.063" viewBox="0 0 13.371 11.063">
                  <path d="M11.763.25l-.876.929-6.1,6.473L2.955,5.821l-.9-.9-1.8,1.8.9.9L3.91,10.384l.929.929.9-.955,7-7.428L13.62,2Z" transform="translate(-0.249 -0.25)" fill="#fff"></path>
                </svg></span>
            </label>
            <button class="btn btn--primary auth-btn top-margin" id="signup-button">Sign up</button>
          </form>
          <!-- <a id="resend-email-link" class="info-link" href="{{ route('verification.resend') }}">Tidak mendapat email?</a> -->
          <a class="info-link" href="masuk">Sudah Mendaftar?</a>
        </div>
      </div>
    </div>
    <div class="container spacing">
      <div class="newsletter">
        <div class="newsletter__content">
          <p class="newsletter__title">Subscribe to our newsletter and receive exclusive offers every week</p>
          <div class="newsletter__form">
            <input class="txt-input newsletter__input" type="text" name="Newsletter" placeholder="Enter your email">
            <input class="btn btn--primary newsletter__btn" type="submit" value="Subscribe">
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      @include('footer')
    </div>
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    // Ketika tombol Sign Up ditekan
    $('#signup-button').click(function() {
        // Gabungkan pesan kesalahan menjadi satu string
        var errorMessages = '';

        $('.text-danger').each(function() {
            errorMessages += $(this).text() + '\n';
        });

        if (errorMessages.trim() === '') {
            // Jika tidak ada pesan kesalahan, tampilkan tautan "Tidak mendapat email?"
            $('#resend-email-link').show();
        } else {
            // Jika ada pesan kesalahan, sembunyikan tautan "Tidak mendapat email?"
            $('#resend-email-link').hide();
        }
    });
</script> -->
  </body>
</html>