<!DOCTYPE html>
<html lang="en">
  <head>
    @include('script_head')
  </head>
  <body>
    @include('header')
    <div class="top-spacing">
      <div class="container">
        <div class="breadcrumbs__flex-row breadcrumbs__row">
          <ol class="breadcrumbs">
            <li class="breadcrumb"><a href="/">
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15">
                  <path d="M7.028,12.906l.327-.276v7.745A.625.625,0,0,0,7.98,21H19.02a.625.625,0,0,0,.625-.625V12.63l.327.276a.625.625,0,0,0,.806-.955l-3-2.533V7.039a.625.625,0,1,0-1.25,0V8.363L13.9,6.147a.625.625,0,0,0-.806,0l-6.875,5.8a.625.625,0,1,0,.806.955ZM12.1,19.75V15.238H14.9V19.75ZM13.5,7.443l4.895,4.132V19.75H16.147V14.613a.625.625,0,0,0-.625-.625H11.478a.625.625,0,0,0-.625.625V19.75H8.605V11.575Z" transform="translate(-6 -6)" fill="#b2b2b2"></path>
                </svg></a></li>
            <li class="breadcrumb"><a href="#">Semua Produk</a></li>
          </ol>
        </div>
        <div class="search-flex-layout">
          <div class="filters-container">
            <div class="filter-container">
              <!--<div class="filter-title-row product-typ-btn-js">
                <div class="filter-title">PRODUCT TYPE</div>
                <div class="filter-title-arrow">
                  <svg xmlns="http://www.w3.org/2000/svg" width="11.34" height="6.475" viewBox="0 0 11.34 6.475">
                    <g transform="translate(-26.464 45.94) rotate(-90)">
                      <path d="M45.657,32.815l-4.739,4.739a.852.852,0,0,1-1.2-1.2l4.216-4.216-4.216-4.216a.852.852,0,0,1,1.2-1.2l4.739,4.739A.963.963,0,0,1,45.657,32.815Z" transform="translate(0 0)"></path>
                    </g>
                  </svg>
                </div>
              </div>-->
              <!-- <div class="filter product-tab-js" style="display: block;">
                <div class="checkbox-wrapper">
                  <label class="checkbox-label" for="tshirts">T-Shirts&nbsp;<span class="muted-txt">(411)</span>
                    <input class="checkbox-input" type="checkbox" name="tshirts" id="tshirts"><span class="checkbox-custom" role="checkbox" aria-checked="false" aria-labelledby="tshirts">
                      <svg xmlns="http://www.w3.org/2000/svg" width="13.371" height="11.063" viewBox="0 0 13.371 11.063">
                        <path d="M11.763.25l-.876.929-6.1,6.473L2.955,5.821l-.9-.9-1.8,1.8.9.9L3.91,10.384l.929.929.9-.955,7-7.428L13.62,2Z" transform="translate(-0.249 -0.25)" fill="#fff"></path>
                      </svg></span>
                  </label>
                </div>
                <div class="checkbox-wrapper">
                  <label class="checkbox-label" for="sweatshirts">Sweatshirts&nbsp;<span class="muted-txt">(131)</span>
                    <input class="checkbox-input" type="checkbox" name="sweatshirts" id="sweatshirts"><span class="checkbox-custom" role="checkbox" aria-checked="false" aria-labelledby="sweatshirts">
                      <svg xmlns="http://www.w3.org/2000/svg" width="13.371" height="11.063" viewBox="0 0 13.371 11.063">
                        <path d="M11.763.25l-.876.929-6.1,6.473L2.955,5.821l-.9-.9-1.8,1.8.9.9L3.91,10.384l.929.929.9-.955,7-7.428L13.62,2Z" transform="translate(-0.249 -0.25)" fill="#fff"></path>
                      </svg></span>
                  </label>
                </div>
                <div class="checkbox-wrapper">
                  <label class="checkbox-label" for="tank-tops">Tank Tops&nbsp;<span class="muted-txt">(56)</span>
                    <input class="checkbox-input" type="checkbox" name="tank-tops" id="tank-tops"><span class="checkbox-custom" role="checkbox" aria-checked="false" aria-labelledby="tank-tops">
                      <svg xmlns="http://www.w3.org/2000/svg" width="13.371" height="11.063" viewBox="0 0 13.371 11.063">
                        <path d="M11.763.25l-.876.929-6.1,6.473L2.955,5.821l-.9-.9-1.8,1.8.9.9L3.91,10.384l.929.929.9-.955,7-7.428L13.62,2Z" transform="translate(-0.249 -0.25)" fill="#fff"></path>
                      </svg></span>
                  </label>
                </div>
                <div class="checkbox-wrapper">
                  <label class="checkbox-label" for="dress-shirts">Dress shirts&nbsp;<span class="muted-txt">(8)</span>
                    <input class="checkbox-input" type="checkbox" name="dress-shirts" id="dress-shirts"><span class="checkbox-custom" role="checkbox" aria-checked="false" aria-labelledby="dress-shirts">
                      <svg xmlns="http://www.w3.org/2000/svg" width="13.371" height="11.063" viewBox="0 0 13.371 11.063">
                        <path d="M11.763.25l-.876.929-6.1,6.473L2.955,5.821l-.9-.9-1.8,1.8.9.9L3.91,10.384l.929.929.9-.955,7-7.428L13.62,2Z" transform="translate(-0.249 -0.25)" fill="#fff"></path>
                      </svg></span>
                  </label>
                </div>
              </div> -->
            </div>
            <div class="filter-container">
              <div class="filter-title-row product-typ-btn-js">
                <div class="filter-title">Size</div>
                <!--<div class="filter-title-arrow">
                  <svg xmlns="http://www.w3.org/2000/svg" width="11.34" height="6.475" viewBox="0 0 11.34 6.475">
                    <g transform="translate(-26.464 45.94) rotate(-90)">
                      <path d="M45.657,32.815l-4.739,4.739a.852.852,0,0,1-1.2-1.2l4.216-4.216-4.216-4.216a.852.852,0,0,1,1.2-1.2l4.739,4.739A.963.963,0,0,1,45.657,32.815Z" transform="translate(0 0)"></path>
                    </g>
                  </svg>
                </div>-->
              </div>
              <div class="filter product-tab-js">
                <!--<div class="radio-btn-container">
                  <input class="input-r" id="xs" type="radio" name="size" value="XS">
                  <label class="filter-radio__label" for="xs"> <span>xs</span></label>
                </div>-->
                <div class="radio-btn-container">
                  <input class="input-r" id="s" type="radio" name="size" value="S">
                  <label class="filter-radio__label" for="s"> <span>s</span></label>
                </div>
                <div class="radio-btn-container">
                  <input class="input-r" id="m" type="radio" name="size" value="M">
                  <label class="filter-radio__label" for="m"> <span>m</span></label>
                </div>
                <div class="radio-btn-container">
                  <input class="input-r" id="l" type="radio" name="size" value="L">
                  <label class="filter-radio__label" for="l"> <span>l</span></label>
                </div>
                <div class="radio-btn-container">
                  <input class="input-r" id="xl" type="radio" name="size" value="XL">
                  <label class="filter-radio__label" for="xl"> <span>xl</span></label>
                </div>
                <div class="radio-btn-container">
                  <input class="input-r" id="xxl" type="radio" name="size" value="XXL">
                  <label class="filter-radio__label" for="xxl"> <span>xxl</span></label>
                </div>
              </div>
            </div>
            
          </div>
          <div class="search-display">
            <div class="search-row">
              <!-- <h1 class="section-title--default search-title">Men's Tops <span class="light-txt">(133)</span></h1>
              <div class="search-row__form">
                <div class="row-filter">
                  <label class="search-row__label" for="nbProducts">Show products:</label>
                  <select class="select-input" id="nbProducts" name="nbProducts">
                    <option value="10">10</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                    <option value="200">200</option>
                  </select>
                </div>
                <div class="row-filter">
                  <label class="search-row__label" for="sort">Sort:</label>
                  <select class="select-input" id="sort" name="sort">
                    <option value="popular">POPULAR</option>
                    <option value="on sale">ON SALE</option>
                    <option value="most recent">MOST RECENT</option>
                  </select>
                </div>
              </div> -->
            </div>
            <div class="search-grid-display">
              
              @foreach ($sablon as $produk)
              <form id="detailForm{{ $produk->id }}" data-ukuran="{{ $produk->ukuran }}" action="{{ route('detail', ['id' => request('id')]) }}" method="GET">
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
                <input type="hidden" name="ukuran" value="{{$produk->ukuran}}">
                <input type="hidden" name="id" value="{{$produk->id}}">
              </form>
              @endforeach
              
            </div> 
            <!-- <div class="pagination"><span>Page</span>
              <ol class="pages">
                <li class="page-num"><a href="#">1</a></li>
                <li class="page-num"><a href="#">2</a></li>
                <li class="page-num">...</li>
                <li class="page-num"><a href="#">45</a></li>
              </ol>
            </div> -->
          </div>
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
    </div-->
    <div class="floating-button">
      <a href="https://wa.me/6281228615885"></a>
    </div>
    <!--div class="container"> -->
      @include('footer')
    <!-- </div> -->
    <script src="scripts/filter.js"></script>
    <script>
      // Ambil semua radio button ukuran
      const sizeRadios = document.querySelectorAll('input[type="radio"][name="size"]');
      const searchGridDisplay = document.querySelector('.search-grid-display');

      // Tambahkan event listener pada setiap radio button
      sizeRadios.forEach((radio) => {
          radio.addEventListener('change', function () {
              // Ambil nilai ukuran yang dipilih
              const selectedSize = document.querySelector('input[type="radio"][name="size"]:checked').value;

              // Saring form-form berdasarkan ukuran yang dipilih
              const forms = searchGridDisplay.querySelectorAll('form');
              forms.forEach((form) => {
                  const ukuran = form.getAttribute('data-ukuran');

                  // Tampilkan atau sembunyikan form sesuai dengan pilihan ukuran
                  if (ukuran.includes(selectedSize)) {
                      form.style.display = 'block';
                  } else {
                      form.style.display = 'none';
                  }
              });
          });
      });
    </script>
  </body>
</html>