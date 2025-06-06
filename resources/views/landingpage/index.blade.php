<!DOCTYPE html>
<html lang="en">
  <head>
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
    @include('script_head')
    <style>
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
      .slideshow-container {
        position: relative;
        max-width: 100%;
        overflow: hidden;
      }

      .slides {
        display: grid;
        grid-template-columns: 100% 100% 100%;
        grid-gap: 0;
        transition: transform 1s;
      }

      .slide {
      width: 100%;
      }

      img {
        width: 100%;
        height: auto;
      }

      .dots-container {
        text-align: center;
      }

      .dot {
        height: 15px;
        width: 15px;
        margin: 0 5px;
        background-color: #bbb;
        border-radius: 50%;
        display: inline-block;
        transition: background-color 0.3s;
      }

      .active {
        background-color: #717171;
      }

      .image-list {
        list-style: none;
        padding: 0;
        text-align: center;
      }

      .catalog {
        width: 30%;
        height: auto;
      }

      .card-list {
        list-style: none;
        padding: 0;
        text-align: center;
        justify-content: center; /* Mengatur gambar ke tengah secara horizontal */
        align-items: center; 
        display: flex; /* Mengatur tata letak Flexbox */
        /* justify-content: space-between; Membuat kartu berada di satu baris dengan jarak yang merata */
      }

      .card {
        width: 300px;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        margin: 20px;
      }

      .card img {
        width: 100%;
        height: auto;
      }

      .card-content {
        padding: 16px;
      }

      h3 {
        font-size: 20px;
        margin: 0;
      }

      p {
        margin: 10px 0;
      }

      @media screen and (max-width: 768px) {
      .card-list {
        flex-direction: column; /* Mengubah tata letak menjadi satu card per baris */
      }

      .card {
        margin-bottom: 15px; /* Tambahkan spasi antara card */
        /* Gaya lain yang sesuai untuk ponsel */
      }

      
}
button{
  margin-top: 10px;
  margin-bottom: 10px;
}
.btn-lihat{
        background-color: orange; 
        color: white; 
        border: none;
        padding: 10px 20px;
        margin-top: 100px;
        font-size: 16px;
        cursor: pointer; 
        transition: background-color 0.3s ease; 
        border-radius: 20px;
      }

      .btn-lihat:hover {
        background-color: white; 
        color: orange; 
      }

      .card {
        
        opacity: 0; 
        transition: opacity 1s ease-in-out; 
      }
      .card:hover {
        transform: scale(1.1); 
        transition: transform 0.2s ease-in-out; 
      }
  
      .card.is-visible {
        opacity: 1; 
      }

      .card:hover .card-content {
        box-shadow: 0 0 10px rgba(0,0,0,0.2); 
      }
    </style>
  </head>
  <body>
    @include('homeheader')
    <header class="hero-section">
      <div class="container">
        <div class="hero-section__content">
          <p class="hero-section__txt"></p>
          <!--<div class="hero-section__call-to-action"><a class="btn-round btn-round--primary">
              <svg class="btn-round__icon--center" xmlns="http://www.w3.org/2000/svg" width="15" viewBox="0 0 15.336 13.329">
                <path d="M6.663,13.329,1.107,7.768,0,6.661,1.107,5.553,6.663,0,7.77,1.1,3,5.878H15.336V7.443H3L7.77,12.219Z" transform="translate(15.336 13.329) rotate(180)" fill="#fff"></path>
              </svg></a><span class="btn-round__txt"> <a href="#">Shop now</a></span></div>
        </div>-->
      </div>
      <div class="hero-section__services">
        <div class="services-flex">
          <div class="service-item">
            <div class="service-item__icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="20.49" height="12.1" viewBox="0 0 20.49 12.1">
                <g id="Group_179" data-name="Group 179" transform="translate(-2.5 -21.9)">
                  <path id="Path_189" data-name="Path 189" d="M33.641,26.818l-.949-2.2A2.172,2.172,0,0,0,30.686,23.3H29.155v-.561a.842.842,0,0,0-.841-.841h-10.7a.557.557,0,0,0-.561.561.571.571,0,0,0,.561.561H27.99v4.141a.921.921,0,0,0,.927.927h3.731V30.7a.193.193,0,0,1-.194.194h-.69a2.075,2.075,0,0,0-1.79-1.035,2.122,2.122,0,0,0-1.79,1.035H22.425a2.075,2.075,0,0,0-1.79-1.035,2.122,2.122,0,0,0-1.79,1.035H16.861a.561.561,0,1,0,0,1.122h1.7a2.072,2.072,0,0,0,4.141,0h5.2a2.072,2.072,0,0,0,4.141,0H32.5A1.321,1.321,0,0,0,33.814,30.7V27.68A2.459,2.459,0,0,0,33.641,26.818ZM20.635,32.878a.949.949,0,1,1,.949-.949A.957.957,0,0,1,20.635,32.878Zm9.339,0a.949.949,0,1,1,.949-.949A.957.957,0,0,1,29.974,32.878Zm-.841-8.433h1.531a1.01,1.01,0,0,1,.949.625l.82,1.9h-3.3Z" transform="translate(-10.824)" fill="#fbb03b"></path>
                  <path id="Path_190" data-name="Path 190" d="M12.861,33.922h3.969a.561.561,0,1,0,0-1.122H12.861a.557.557,0,0,0-.561.561A.571.571,0,0,0,12.861,33.922Z" transform="translate(-7.686 -8.549)" fill="#fbb03b"></path>
                  <path id="Path_191" data-name="Path 191" d="M7.961,43.922h3.969a.561.561,0,1,0,0-1.122H7.961a.557.557,0,0,0-.561.561A.571.571,0,0,0,7.961,43.922Z" transform="translate(-3.843 -16.392)" fill="#fbb03b"></path>
                  <path id="Path_192" data-name="Path 192" d="M7.612,53.361a.557.557,0,0,0-.561-.561H3.061a.561.561,0,1,0,0,1.122H7.029A.549.549,0,0,0,7.612,53.361Z" transform="translate(0 -24.235)" fill="#fbb03b"></path>
                </g>
              </svg>
            </div>
            <div class="service-item__content"><span class="service-item__title">Pengiriman Cepat</span>
              <p class="service-item__txt">Siap Kirim ke Seluruh Indonesia</p>
            </div>
          </div>
          <div class="service-item">
            <div class="service-item__icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="17.333" height="17.333" viewBox="0 0 17.333 17.333">
                <g id="noun_Happy_1563582" transform="translate(-2 -2)">
                  <path id="Path_193" data-name="Path 193" d="M24.167,31.444a.722.722,0,0,1,.722.722.722.722,0,0,0,1.444,0,2.167,2.167,0,0,0-4.333,0,.722.722,0,0,0,1.444,0A.722.722,0,0,1,24.167,31.444Z" transform="translate(-16.389 -22.944)" fill="#fbb03b"></path>
                  <path id="Path_194" data-name="Path 194" d="M56.167,30A2.167,2.167,0,0,0,54,32.167a.722.722,0,0,0,1.444,0,.722.722,0,1,1,1.444,0,.722.722,0,0,0,1.444,0A2.167,2.167,0,0,0,56.167,30Z" transform="translate(-42.611 -22.944)" fill="#fbb03b"></path>
                  <path id="Path_195" data-name="Path 195" d="M10.667,2a8.667,8.667,0,1,0,8.667,8.667A8.667,8.667,0,0,0,10.667,2Zm0,15.889a7.222,7.222,0,1,1,7.222-7.222A7.222,7.222,0,0,1,10.667,17.889Z" fill="#fbb03b"></path>
                  <path id="Path_196" data-name="Path 196" d="M35.987,58.209l-.422.424a2.835,2.835,0,0,1-3.911,0l-.422-.424a.723.723,0,0,0-1.022,1.022l.424.422a4.207,4.207,0,0,0,5.958,0l.424-.422a.723.723,0,1,0-1.022-1.022Z" transform="translate(-22.943 -45.887)" fill="#fbb03b"></path>
                </g>
              </svg>
            </div>
            <div class="service-item__content"><span class="service-item__title">Terpercaya</span>
              <p class="service-item__txt">Brand lokal terpercaya</p>
            </div>
          </div>
          <div class="service-item">
            <div class="service-item__icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="19" height="20.057" viewBox="0 0 19 20.057">
                <g id="noun_guarantee_2519048" transform="translate(-5 -3.997)">
                  <path id="Path_91" data-name="Path 91" d="M23.493,6.584,14.7,4.026a.7.7,0,0,0-.4,0h0L5.5,6.584A.7.7,0,0,0,5,7.26v7.681c0,6.685,8.948,9,9.331,9.092a.689.689,0,0,0,.352,0C15.232,23.892,24,21.563,24,14.941V7.26A.7.7,0,0,0,23.493,6.584Zm-.9,8.356c0,5.137-6.91,7.354-8.093,7.681-1.182-.327-8.093-2.533-8.093-7.681V7.791L14.5,5.434l8.093,2.354Z" transform="translate(0)" fill="#fbb03b"></path>
                  <path id="Path_92" data-name="Path 92" d="M26.782,18.7v.735a2.111,2.111,0,0,0,.352,4.191h1.056a.7.7,0,1,1,0,1.407H26.078a.7.7,0,1,0,0,1.407h.7v.7a.7.7,0,1,0,1.407,0v-.7a2.111,2.111,0,1,0,0-4.222H27.133a.7.7,0,0,1,0-1.407h2.111a.7.7,0,0,0,0-1.407H28.189v-.7a.7.7,0,1,0-1.407,0Z" transform="translate(-12.985 -9.076)" fill="#fbb03b"></path>
                </g>
              </svg>
            </div>
            <div class="service-item__content"><span class="service-item__title">Produk Berkualitas</span>
              <p class="service-item__txt">100% berkualitas dan terjamin</p>
            </div>
          </div>
        </div>
      </div>
    </header>
    <div class="container">
      <main class="wrapper">
        <!-- <div class="container-card-ad spacing">
          <div class="card-ad card-ad--img-1 a">
            <div class="card-ad__content">
              <h3 class="card-ad__title">New arrivals are now in!</h3><a class="btn btn--white" href="#">Show collection</a>
            </div>
          </div>
          <div class="card-ad card-ad--img-2 b">
            <div class="card-ad__content">
              <h3 class="card-ad__title">Basic t-shirts $29,99</h3><a class="btn btn--white" href="#">More details</a>
            </div>
          </div>
          <div class="card-ad card-ad--img-3 c">
            <div class="card-ad__content"><span class="tag">-50 %</span>
              <h3 class="card-ad__title">Sale this summer</h3><a class="btn btn--white" href="#">VIEW ALL</a>
            </div>
          </div>
        </div> -->
        <div class="spacing">
          <div class="slideshow-container">
            <div class="slides" >
              <div class="slide">
                <img src="{{asset('assets/images/Banner/3.png')}}" alt="Slide 1">
              </div>
              <div class="slide">
                <img src="{{asset('assets/images/Banner/2.png')}}" alt="Slide 2">
              </div>
              <div class="slide">
                <img src="{{asset('assets/images/Banner/1.png')}}" alt="Slide 3">
              </div>
              </div>
            </div>
          <div class="dots-container">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
          </div>
        </div>
        <div class="spacing">
          <h1 class="section-title--default title--center">Katalog</h1>
          <ul class="image-list">
            <li class="card-list">
              <div class="card">
                <form action="{{ url('searchCatalog') }}" id="hoodie">
                  <a href="#" onclick="event.preventDefault(); document.getElementById('hoodie').submit();"><img src="{{asset('assets/images/1.png')}}" alt="Catalog Image"></a>
                  <div class="card-content">
                    <a href="#" onclick="event.preventDefault(); document.getElementById('hoodie').submit();"><h3>HOODIE</h3></a>
                    <p>HOODIE Custom PESAN SATUAN Desain Suka Suka, Full Colour Sablon DTF.</p>
                    <input type="hidden" name="kategori" value="hoodie">
                    <button>
                    <a href="#" type="button" class="btn-lihat mt-2" onclick="event.preventDefault(); document.getElementById('hoodie').submit();">Lihat</a>
                    </button>
                  </div>
                </form>
              </div>
              <div class="card">
                <form action="{{ url('searchCatalog') }}" id="kaos">
                  <a onclick="event.preventDefault(); document.getElementById('kaos').submit();"><img src="{{asset('assets/images/2.png')}}" alt="Catalog Image"></a>
                  <div class="card-content">
                    <a onclick="event.preventDefault(); document.getElementById('kaos').submit();"><h3>KAOS</h3></a>
                    <p>KAOS Custom PESAN SATUAN Desain Suka Suka, Full Colour Sablon DTF.</p>
                    <input type="hidden" name="kategori" value="kaos">
                    <button>
                    <a href="#" type="button" class="btn-lihat mt-2" onclick="event.preventDefault(); document.getElementById('kaos').submit();">Lihat</a>
                    </button>
                  </div>
                </form>
              </div>
              <div class="card">
                <form action="{{ url('searchCatalog') }}" id="sweater">
                  <a onclick="event.preventDefault(); document.getElementById('sweater').submit();"><img src="{{asset('assets/images/3.png')}}" alt="Catalog Image"></a>
                  <div class="card-content">
                    <a onclick="event.preventDefault(); document.getElementById('sweater').submit();"><h3>SWEATER</h3></a>
                    <p>SWEATER Custom PESAN SATUAN Desain Suka Suka, Full Colour Sablon DTF</p>
                    <input type="hidden" name="kategori" value="sweater">
                    <button>
                    <a href="#" type="button" class="btn-lihat mt-2" onclick="event.preventDefault(); document.getElementById('sweater').submit();">Lihat</a>
                    </button>
                  </div>
                </form>
              </div>
            </li>
            <li class="card-list">
              <div class="card">
                <form action="{{ url('searchCatalog') }}" id="pdh_pdl">
                  <a onclick="event.preventDefault(); document.getElementById('pdh_pdl').submit();"><img src="{{asset('assets/images/4.png')}}" alt="Catalog Image"></a>
                  <div class="card-content">
                    <a onclick="event.preventDefault(); document.getElementById('pdh_pdl').submit();"><h3>PDH/PDL</h3></a>
                    <p>Workshit PDH/PDL, Bahan Premium Desain Custom</p>
                    <input type="hidden" name="kategori" value="pdh_pdl">
                    <button>
                    <a href="#" type="button" class="btn-lihat mt-2" onclick="event.preventDefault(); document.getElementById('pdh_pdl').submit();">Lihat</a>
                    </button>
                  </div>
                </form>
              </div>
              <div class="card">
                <form action="{{ url('searchCatalog') }}" id="polo">
                  <a onclick="event.preventDefault(); document.getElementById('polo').submit();"><img src="{{asset('assets/images/5.png')}}" alt="Catalog Image"></a>
                  <div class="card-content">
                    <a onclick="event.preventDefault(); document.getElementById('polo').submit();"><h3>POLO</h3></a>
                    <p>Elegan Polo Shirt, Bahan Premium Desain Custom</p>
                    <input type="hidden" name="kategori" value="polo">
                    <button>
                    <a href="#" type="button" class="btn-lihat mt-2" onclick="event.preventDefault(); document.getElementById('polo').submit();">Lihat</a>
                    </button>
                  </div>
                </form>
              </div>
              <div class="card">
                <form action="{{ url('searchCatalog') }}" id="tote_bag">
                  <a onclick="event.preventDefault(); document.getElementById('tote_bag').submit();"><img src="{{asset('assets/images/6.png')}}" alt="Catalog Image"></a>
                  <div class="card-content">
                    <a onclick="event.preventDefault(); document.getElementById('tote_bag').submit();"><h3>TOTE BAG</h3></a>
                    <p> TOTE BAGE Custom, Bahan CANVAS Full Colour, Fit Style</p>
                    <input type="hidden" name="kategori" value="tote_bag">
                    <button>
                    <a href="#" type="button" class="btn-lihat mt-2" onclick="event.preventDefault(); document.getElementById('tote_bag').submit();">Lihat</a>
                    </button>
                  </div>
                </form>
              </div>
            </li>
            <li class="card-list">
              <div class="card">
                <form action="{{ url('searchCatalog') }}" id="topi">
                  <a onclick="event.preventDefault(); document.getElementById('topi').submit();"><img src="{{asset('assets/images/7.png')}}" alt="Catalog Image"></a>
                  <div class="card-content">
                    <a onclick="event.preventDefault(); document.getElementById('topi').submit();"><h3>Topi</h3></a>
                    <p>Topi Custom, All Size Desain Suka-suka</p>
                    <input type="hidden" name="kategori" value="topi">
                    <button>
                    <a href="#" type="button" class="btn-lihat mt-2" onclick="event.preventDefault(); document.getElementById('topi').submit();">Lihat</a>
                    </button>
                  </div>
                </form>
              </div>
              <div class="card">
                <form action="{{ url('searchCatalog') }}" id="jersey">
                  <a onclick="event.preventDefault(); document.getElementById('jersey').submit();"><img src="{{asset('assets/images/8.png')}}" alt="Catalog Image"></a>
                  <div class="card-content">
                    <a onclick="event.preventDefault(); document.getElementById('jersey').submit();"><h3>JERSEY</h3></a>
                    <p> JERSEY Custom, Full Colour, Bahan Nyerap Keringat.</p>
                    <input type="hidden" name="kategori" value="jersey">
                    <button>
                    <a href="#" type="button" class="btn-lihat mt-2" onclick="event.preventDefault(); document.getElementById('jersey').submit();">Lihat</a>
                    </button>
                  </div>
                </form>
              </div>
              <div class="card">
                <form action="{{ url('searchCatalog') }}" id="kaos">
                  <a onclick="event.preventDefault(); document.getElementById('kaos').submit();"><img src="{{asset('assets/images/2.png')}}" alt="Catalog Image"></a>
                  <div class="card-content">
                    <a onclick="event.preventDefault(); document.getElementById('kaos').submit();"><h3>KAOS</h3></a>
                    <p>KAOS Custom PESAN SATUAN Desain Suka Suka, Full Colour Sablon DTF.</p>
                    <input type="hidden" name="kategori" value="kaos">
                    <button>
                    <a href="#" type="button" class="btn-lihat mt-2" onclick="event.preventDefault(); document.getElementById('kaos').submit();">Lihat</a>
                    </button>
                  </div>
                </form>
              </div>
            </li>
            <!-- Tambahkan lebih banyak gambar sesuai kebutuhan -->
          </ul>
        </div>
        <!--div class="row spacing">
          <div class="sub-row">
            <h1 class="section-title--default">Rekomendasi khusus untuk Anda</h1><a class="btn btn--default" href="{{ route('product.search') }}">Lihat Lebih</a>
          </div>
          <div class="product-cards-slider">
            <--<svg class="product-cards-slider_left-arrow" id="leftArrow" xmlns="http://www.w3.org/2000/svg" width="23.336" height="20.281" viewBox="0 0 23.336 20.281">
              <path d="M10.139,20.281,1.685,11.82,0,10.135,1.685,8.45,10.139,0l1.685,1.681L4.561,8.944H23.336v2.383H4.561l7.263,7.266Z" fill="#cecece"></path>
            </svg>->
            <div class="product-cards-slider__cards-container">
              <-- <div class="product-card">
                <div class="product-card__img">
                  <div class="product-card__actions"><span class="tag">30 %</span>
                    <div class="btn-round btn-round--secondary">
                      <svg class="btn-round__icon--center" xmlns="http://www.w3.org/2000/svg" width="16.5" height="16.5" viewBox="0 0 16.5 16.5">
                        <path d="M17.679,6A4.631,4.631,0,0,0,14.25,7.554,4.631,4.631,0,0,0,10.821,6,5.045,5.045,0,0,0,6,11.233c0,4.212,7.478,10.817,7.8,11.1a.688.688,0,0,0,.9.008c.319-.27,7.805-6.664,7.805-11.1A5.045,5.045,0,0,0,17.679,6ZM14.257,20.9c-2.271-2.079-6.882-6.877-6.882-9.663a3.673,3.673,0,0,1,3.446-3.858,3.361,3.361,0,0,1,2.843,1.679.687.687,0,0,0,1.172,0,3.362,3.362,0,0,1,2.843-1.679,3.673,3.673,0,0,1,3.446,3.858C21.125,14.179,16.527,18.876,14.257,20.9Z" transform="translate(-6 -6)"></path>
                      </svg>
                    </div>
                  </div><a href="#"><img src="images/model.png" alt="product image"/></a>
                </div>
                <div class="product-card__content">
                  <h2 class="product-card__title"> <a href="#">T-Shirt Summer Vibes</a></h2><span class="product-card__price product-card__price--new">$119.99</span><span class="product-card__price product-card__price--old">$119.99</span>
                </div>
              </div> ->
              @foreach ($sablon as $produk)
              <form id="detailForm{{ $produk->id }}" action="detail" method="GET">
                @csrf
                <div class="product-card">
                  <div class="product-card__img">
                    <div class="product-card__actions" style="justify-content: flex-end;">
                      <div class="btn-round btn-round--secondary">
                        <svg class="btn-round__icon--center" xmlns="http://www.w3.org/2000/svg" width="16.5" height="16.5" viewBox="0 0 16.5 16.5">
                          <path d="M17.679,6A4.631,4.631,0,0,0,14.25,7.554,4.631,4.631,0,0,0,10.821,6,5.045,5.045,0,0,0,6,11.233c0,4.212,7.478,10.817,7.8,11.1a.688.688,0,0,0,.9.008c.319-.27,7.805-6.664,7.805-11.1A5.045,5.045,0,0,0,17.679,6ZM14.257,20.9c-2.271-2.079-6.882-6.877-6.882-9.663a3.673,3.673,0,0,1,3.446-3.858,3.361,3.361,0,0,1,2.843,1.679.687.687,0,0,0,1.172,0,3.362,3.362,0,0,1,2.843-1.679,3.673,3.673,0,0,1,3.446,3.858C21.125,14.179,16.527,18.876,14.257,20.9Z" transform="translate(-6 -6)"></path>
                        </svg>
                      </div>
                    </div><a href="#" onclick="event.preventDefault(); document.getElementById('detailForm{{ $produk->id }}').submit();"><img src="{{asset('storage/assets/images/'. $produk->gambar)}}" alt="product image"/></a>
                  </div>
                  <div class="product-card__content">
                    <h2 class="product-card__title"> 
                      <a href="#" onclick="event.preventDefault(); document.getElementById('detailForm{{ $produk->id }}').submit();">{{$produk->judul}}</a>
                    </h2><span class="product-card__price">Rp. {{$produk->harga}}</span>
                  </div>
                </div>
                <input type="hidden" name="id" value="{{$produk->id}}">
              </form>
              @endforeach
              
            </div>
            <!-<svg class="product-cards-slider_right-arrow" id="rightArrow" xmlns="http://www.w3.org/2000/svg" width="23.336" height="20.281" viewBox="0 0 23.336 20.281">
              <path d="M10.139,20.281,1.685,11.82,0,10.135,1.685,8.45,10.139,0l1.685,1.681L4.561,8.944H23.336v2.383H4.561l7.263,7.266Z" transform="translate(23.336 20.281) rotate(180)"></path>
            </svg>->
          </div
        </div-->
        <div class="spacing">
          <h1 class="section-title--default title--center">Alasan Anda Memilih Kami</h1>
          <div class="items-4-grid-container">
            <div class="service__grid-item  ">
              <div class="service-item__icon--lg  ">
                <svg xmlns="http://www.w3.org/2000/svg" width="36.777" height="21.718" viewBox="0 0 36.777 21.718">
                  <path d="M47.425,30.727l-1.7-3.949a3.9,3.9,0,0,0-3.6-2.361H39.373V23.41a1.512,1.512,0,0,0-1.51-1.51h-19.2a1,1,0,0,0-1.007,1.007,1.025,1.025,0,0,0,1.007,1.007H37.282v7.433a1.652,1.652,0,0,0,1.665,1.665h6.7v4.684a.347.347,0,0,1-.348.348H44.057a3.725,3.725,0,0,0-3.213-1.858,3.809,3.809,0,0,0-3.213,1.858H27.294a3.725,3.725,0,0,0-3.213-1.858,3.809,3.809,0,0,0-3.213,1.858H17.307a1.007,1.007,0,1,0,0,2.013h3.058a3.72,3.72,0,0,0,7.433,0h9.33a3.72,3.72,0,0,0,7.433,0h.813a2.371,2.371,0,0,0,2.361-2.361v-5.42A4.414,4.414,0,0,0,47.425,30.727ZM24.081,41.6a1.7,1.7,0,1,1,1.7-1.7A1.718,1.718,0,0,1,24.081,41.6Zm16.763,0a1.7,1.7,0,1,1,1.7-1.7A1.718,1.718,0,0,1,40.844,41.6Zm-1.51-15.137h2.749a1.814,1.814,0,0,1,1.7,1.123L45.257,31H39.334Z" transform="translate(-10.958 -21.9)"></path>
                  <path d="M13.307,34.813H20.43a1.007,1.007,0,1,0,0-2.013H13.307A1,1,0,0,0,12.3,33.807,1.025,1.025,0,0,0,13.307,34.813Z" transform="translate(-8.506 -28.58)"></path>
                  <path d="M8.407,44.813H15.53a1.007,1.007,0,1,0,0-2.013H8.407A1,1,0,0,0,7.4,43.807,1.025,1.025,0,0,0,8.407,44.813Z" transform="translate(-5.503 -34.709)"></path>
                  <path d="M11.675,53.807A1,1,0,0,0,10.668,52.8H3.507a1.007,1.007,0,1,0,0,2.013H10.63A.986.986,0,0,0,11.675,53.807Z" transform="translate(-2.5 -40.838)"></path>
                </svg>
              </div>
              <h3 class="service-item__title--lg">Pengiriman Cepat</h3>
              <p class="service-item__txt--lg">Kami siap mengirimkan produk kami ke seluruh wilayah Indonesia dengan waktu yang singkat dan harga terjangkau.</p>
            </div>
            <div class="service__grid-item">
              <div class="service-item__icon--lg">
                <svg xmlns="http://www.w3.org/2000/svg" width="34.5" height="34.5" viewBox="0 0 34.5 34.5">
                  <path d="M6.938,88.531a.721.721,0,1,1,.513-.21A.721.721,0,0,1,6.938,88.531Z" transform="translate(-4.074 -57.042)"></path>
                  <path d="M6.67,76.642H0V74.915H4.944v-8.85H0V64.339H6.67Z" transform="translate(0 -42.142)"></path>
                  <path d="M31.754,72.171h-9.1v-8.76l.1-.191a5.676,5.676,0,0,1,2.418-2.278,7.49,7.49,0,0,1,6.13-.161,17.948,17.948,0,0,1,1.836.875c.489.256.951.5,1.429.7a4.671,4.671,0,0,0,.617.179,2.767,2.767,0,0,1,2.118,1.352,4.063,4.063,0,0,1,.26,1.875L41.91,65.7l2.255-2.5a2.359,2.359,0,0,1,3.508,3.155l-3.4,3.791Zm-7.368-1.727h7.23l11.78-1.9L46.387,65.2a.632.632,0,0,0-.94-.845l-2.759,3.055L32,67.572l-.025-1.726,3.867-.057a2.766,2.766,0,0,0-.111-1.207c-.066-.15-.641-.292-.95-.368a5.849,5.849,0,0,1-.875-.265c-.544-.23-1.06-.5-1.559-.762a16.41,16.41,0,0,0-1.659-.794,5.767,5.767,0,0,0-4.713.085,4.142,4.142,0,0,0-1.586,1.384Z" transform="translate(-14.842 -39.433)"></path>
                  <path d="M51.989,3.854V2.018L46.489,0,35.867,5.461H26.7V18.313H47.745v-3.64c.286.01.569.021.845.041.173.01.345.017.518.017a8.7,8.7,0,0,0,2.881-.514V12.372l-.024.01a7.094,7.094,0,0,1-3.26.611c-.314-.021-.631-.034-.959-.045-.552-.014-1.121-.01-1.725.01-.831.028-1.722.093-2.694.193l-1.063.11a1.009,1.009,0,0,1-.276-2l4.023-.7a.013.013,0,0,0,.01,0A2.537,2.537,0,0,0,47.745,9.4a2.574,2.574,0,0,0-2.174-3.943H39.637L46.607,1.88ZM45.572,7.186a.822.822,0,0,1,.449.128.85.85,0,0,1,0,1.439.827.827,0,0,1-.3.114l-4.023.7a2.733,2.733,0,0,0,.466,5.427,2.5,2.5,0,0,0,.276-.014s2.808-.262,3.585-.29v1.9h-17.6v-9.4Z" transform="translate(-17.489)"></path>
                  <rect width="1.725" height="1.725" transform="translate(18.984 11.024)"></rect>
                </svg>
              </div>
              <h3 class="service-item__title--lg">Tanpa Batas Pembelian</h3>
              <p class="service-item__txt--lg">Tidak ada batasan pembelian yang mengikat. Menerima pesanan satuan maupun grosir.</p>
            </div>
            <div class="service__grid-item">
              <div class="service-item__icon--lg">
                <svg xmlns="http://www.w3.org/2000/svg" width="29" height="30.613" viewBox="0 0 29 30.613">
                  <g transform="translate(-5 -3.997)">
                    <path d="M33.227,7.946,19.8,4.042a1.074,1.074,0,0,0-.612,0h0L5.763,7.946A1.074,1.074,0,0,0,5,8.977V20.7C5,30.9,18.657,34.433,19.242,34.578a1.052,1.052,0,0,0,.537-.005C20.617,34.363,34,30.808,34,20.7V8.977a1.074,1.074,0,0,0-.773-1.031ZM31.852,20.7c0,7.841-10.547,11.224-12.352,11.724-1.8-.5-12.352-3.867-12.352-11.724V9.788L19.5,6.19,31.852,9.783Z"></path>
                    <path d="M27.7,19.074V20.2a3.222,3.222,0,0,0,.537,6.4h1.611a1.074,1.074,0,1,1,0,2.148H26.627a1.074,1.074,0,0,0,0,2.148H27.7v1.074a1.074,1.074,0,1,0,2.148,0V30.889a3.222,3.222,0,1,0,0-6.444H28.238a1.074,1.074,0,0,1,0-2.148H31.46a1.074,1.074,0,0,0,0-2.148H29.849V19.074a1.074,1.074,0,1,0-2.148,0Z" transform="translate(-9.275 -6.483)"></path>
                  </g>
                </svg>
              </div>
              <h3 class="service-item__title--lg">Terpercaya</h3>
              <p class="service-item__txt--lg">Kami dengan bangga menyediakan beragam produk dari brand lokal yang telah terbukti menjadi pilihan terpercaya oleh masyarakat</p>
            </div>
            <div class="service__grid-item">
              <div class="service-item__icon--lg">
                <svg xmlns="http://www.w3.org/2000/svg" width="34.265" height="34.667" viewBox="0 0 34.265 34.667">
                  <g transform="translate(-6.615 -5.977)">
                    <circle cx="1.032" cy="1.032" r="1.032" transform="translate(15.489 27.354)"></circle>
                    <path d="M40.881,5.977H17.742V17.506H6.615V40.644H29.753V29.115H40.881V5.977Zm-1.8,4.93-9.326,9.326V17.506h-3.43l9.647-9.647-.08-.08h3.189v3.129ZM27.952,29.057c-1.546-.26-3.946-.553-4.809,2.355a19.028,19.028,0,0,1-2.715,4.772,15.354,15.354,0,0,0-1.643,2.658H15.932a6.191,6.191,0,0,1,1.292-3.814,6.1,6.1,0,0,1,1.358-1.144,6.184,6.184,0,0,0,3.073-4.671,8.928,8.928,0,0,0-.6-5.106,9.078,9.078,0,0,1-.645-4.8h2.638c.074.368.138.749.2,1.151.378,2.276.848,5.108,3.873,6.664.169.087.279.147.349.188a1.288,1.288,0,0,0,.481.315v1.432Zm-14.638,1.6a8.253,8.253,0,0,1,.178-2.744,7.639,7.639,0,0,1,1.232-2.485,10.334,10.334,0,0,0,2-6.123H18.6a10.8,10.8,0,0,0,.763,5.422,7.224,7.224,0,0,1,.516,4.207A4.433,4.433,0,0,1,17.558,32.4a7.59,7.59,0,0,0-1.74,1.5,7.977,7.977,0,0,0-1.687,4.939H12.249A21.928,21.928,0,0,0,13.314,30.659Zm14.638-5.135-.007,0c-2.22-1.142-2.56-3.19-2.92-5.358-.047-.283-.1-.57-.149-.856h3.076Zm-8.408-9.613,8.133-8.133H33.5l-9.727,9.727H19.544ZM25.13,7.778l-5.586,5.586V7.778ZM11.215,19.307a28.132,28.132,0,0,1-1.681,4.645c-.367.872-.75,1.783-1.117,2.727V19.307Zm-2.8,13.747a38.446,38.446,0,0,1,2.777-8.4,25.647,25.647,0,0,0,1.849-5.344h1.88a8.55,8.55,0,0,1-1.7,5.125,9.331,9.331,0,0,0-1.477,3.031,9.94,9.94,0,0,0-.234,3.285,21,21,0,0,1-1.142,8.094H8.417V33.054Zm12.393,5.788c.309-.5.739-1.118,1.094-1.625a20.251,20.251,0,0,0,2.966-5.292c.405-1.365,1.134-1.375,2.963-1.061l.12.02v7.958ZM29.753,22.78l9.326-9.326v6.071L31.29,27.314H29.753V22.78Zm4.084,4.534,5.242-5.242v5.242Z"></path>
                  </g>
                </svg>
              </div>
              <h3 class="service-item__title--lg">Produk Berkualitas</h3>
              <p class="service-item__txt--lg">Semua produk kami 100% terbuat dari bahan berkualitas tinggi, dan kualitasnya telah teruji serta terjamin untuk memberikan kepuasan yang tak tertandingi.</p>
            </div>
          </div>
        </div>
        <div class="spacing">
          <h1 class="section-title--default title--center">Telah Dipercaya Oleh 4 Klien</h1>
          <ul class="image-list">
            <li class="card-list" style="margin-left: auto; margin-right: auto;">
              <img src="{{asset('assets/images/logo-amikom.png')}}" style="width: 173px; heigth: 147px; margin-right: 10px;" alt="logo-amikom"> 
              <img src="{{asset('assets/images/logo-ABP.png')}}" style="width: 323px; heigth: 147px; margin-right: 10px;" alt="logo-ABP"> 
              <!--<img src="{{asset('assets/images/logo-PMW.png')}}" style="width: 320px; heigth: 147px;" alt="logo-PMW">-->
              <img src="{{asset('assets/images/hipmi-logo.png')}}" style="width: 173px; heigth: 147px; margin-right: 10px;" alt="logo-hipmi"> 
              <img src="{{asset('assets/images/logo-DML.png')}}" style="width: 173px; heigth: 147px; margin-right: 10px;" alt="logo-DML">
            </li>
          </ul>
        </div>
        <div class="spacing">
          <img src="{{asset('assets/images/gambar-kinerja.jpeg')}}" alt="kinerja terkini">
        </div>
        <!-- <div class="spacing" >
          <h1 class="section-title--default title--center">Produk Terbaru Kami</h1>
          <div class="products-grid-container">
          @foreach ($terbaru as $produk)
              <form id="detailForm{{ $produk->id }}" action="{{ route('detail', ['id' => request('id')]) }}" method="GET">
                @csrf
                <div class="product-card" >
                  <div class="product-card__img">
                    <div class="product-card__actions" style="justify-content: flex-end;">
                      <div class="btn-round btn-round--secondary">
                        <svg class="btn-round__icon--center" xmlns="http://www.w3.org/2000/svg" width="16.5" height="16.5" viewBox="0 0 16.5 16.5">
                          <path d="M17.679,6A4.631,4.631,0,0,0,14.25,7.554,4.631,4.631,0,0,0,10.821,6,5.045,5.045,0,0,0,6,11.233c0,4.212,7.478,10.817,7.8,11.1a.688.688,0,0,0,.9.008c.319-.27,7.805-6.664,7.805-11.1A5.045,5.045,0,0,0,17.679,6ZM14.257,20.9c-2.271-2.079-6.882-6.877-6.882-9.663a3.673,3.673,0,0,1,3.446-3.858,3.361,3.361,0,0,1,2.843,1.679.687.687,0,0,0,1.172,0,3.362,3.362,0,0,1,2.843-1.679,3.673,3.673,0,0,1,3.446,3.858C21.125,14.179,16.527,18.876,14.257,20.9Z" transform="translate(-6 -6)"></path>
                        </svg>
                      </div>
                    </div><a href="#" onclick="event.preventDefault(); document.getElementById('detailForm{{ $produk->id }}').submit();"><img src="{{asset('storage/assets/images/'. $produk->gambar)}}" alt="product image"/></a>
                  </div>
                  <div class="product-card__content">
                    <h2 class="product-card__title"> 
                      <a href="#" onclick="event.preventDefault(); document.getElementById('detailForm{{ $produk->id }}').submit();">{{$produk->judul}}</a>
                    </h2><span class="product-card__price">Rp. {{$produk->harga}}</span>
                  </div>
                </div>
                <input type="hidden" name="id" value="{{$produk->id}}">
              </form>
              @endforeach
            
          </div>
        </div> -->
      </main>
    </div>
    
    <div class="floating-button">
      <a href="https://wa.me/6281228615885"></a>
    </div>
    <!--div class="container"> -->
      @include('footer')
    <!-- </div> -->

    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script> -->
    <script defer src="scripts/product-cards-slider.js"></script>
    <script>
      let slideIndex = 0;
      showSlides();

      function showSlides() {
        let slides = document.querySelector(".slides");
        let dots = document.getElementsByClassName("dot");

        slideIndex++;
        if (slideIndex > slides.children.length - 1) {
            slideIndex = 0;
        }

        const offset = -slideIndex * 100;
        slides.style.transform = `translateX(${offset}%)`;

        for (let i = 0; i < dots.length; i++) {
            dots[i].classList.remove("active");
        }
        dots[slideIndex].classList.add("active");

        setTimeout(showSlides, 2000); // Ganti gambar setiap 2 detik
      }
    </script>
    <script>

const cards = document.querySelectorAll('.card');

const observer = new IntersectionObserver(entri => {
  entri.forEach(entri => {
    if (entri.isIntersecting) {
      entri.target.classList.add('is-visible');
    } else {
      entri.target.classList.remove('is-visible');
    }
  });
});

cards.forEach(card => {
  observer.observe(card);
});
    </script>
  </body>
</html>