<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
<link rel="stylesheet" crossorigin="anonymous" href={{ asset('assets/css/main.css')}}>
<script defer src={{ asset('assets/js/main.js')}}></script>
<script src="https://app.midtrans.com/snap/snap.js" data-client-key="{{ config('midtrans.clientKey') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}"></script>
<style>
  #map {
    height: 100%;
  }
  html, body {
    height: 100%;
    margin: 0;
    padding: 0;
  }
  /* CSS untuk desktop (lebar > 600px) */
  @media (min-width: 601px) {
    .element {
      width: 600px;
    }
    .jarak{
      display: true;
    }
    .tampilkan{
      display: none;
    }
  }

  /* CSS untuk perangkat mobile (lebar <= 600px) */
  @media (max-width: 600px) {
    .element {
      width: 300px;
    }
    .jarak{
      display: none;
    }
    .tampilkan{
      display: true;
    }
  }
  #rightElement {
    display: none; /* Awalnya elemen disembunyikan */
    position: absolute;
    top: 0;
    right: 0;
    width: 200px; /* Sesuaikan lebar sesuai kebutuhan */
    background-color: lightgray;
    padding: 10px;
    box-shadow: -2px 2px 5px rgba(0, 0, 0, 0.2);
  }
  .floating-button {
      position: fixed;
      bottom: 20px; /* Atur jarak dari bawah */
      right: 20px; /* Atur jarak dari kanan */
      z-index: 1000; /* Atur urutan lapisan di atas elemen lain */
    }

    .floating-button a {
      display: inline-block; /* Membuat tautan menjadi elemen blok dengan lebar dan tinggi sesuai kontennya */
      background: url('{{ asset("assets/images/5ae21cc526c97415d3213554.png") }}');
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
      color: #25D366;
      text-decoration: none; /* Menghapus gaya bawaan tautan */
      padding: 30px 30px;
      border-radius: 50px;
      cursor: pointer;
      box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.5);
    }
</style>
<title>Senja Printing</title>