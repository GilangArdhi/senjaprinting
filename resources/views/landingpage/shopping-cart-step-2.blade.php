<!DOCTYPE html>
<html lang="en">
  <head>
    @include('script_head')
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <style>
      .scrollable-div {
        width: 644px; /* Sesuaikan lebar sesuai kebutuhan */
        height: 200px; /* Sesuaikan tinggi sesuai kebutuhan */
        overflow-y: scroll; /* Munculkan scroll bar vertikal saat konten melebihi tinggi div */
        /* border: 1px solid #ccc; Tambahkan bingkai untuk div */
        padding: 10px; /* Tambahkan padding sesuai kebutuhan */
        /* display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center; */
      }
      .kartu {
      width: 590px;
      padding: 42px;
      border-radius: 10px;
      background-color: #ffffff;
      box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.3);
      overflow: auto; /* Mencegah konten melebihi batas kartu */
    }

    .kartu-title {
      font-size: 24px;
      margin-bottom: 10px;
    }

    .kartu-content {
      font-size: 16px;
      /* Anda juga dapat menambahkan properti berikut untuk memastikan teks tidak terlalu panjang */
      /* word-wrap: break-word;
      overflow: hidden;
      text-overflow: ellipsis; */
    }
    </style>
  </head>
  <body>
    @include('header')
    <div class="top-spacing">
    <form action="#" id="donation_form">
      @csrf
      <div class="container">
        <div class="page-row">
          <h1 class="side-title">Address data and type of delivery</h1>
          <svg xmlns="http://www.w3.org/2000/svg" width="296.701" height="36" viewBox="0 0 296.701 36">
            <g transform="translate(-1139 -983)">
              <g id="unactive">
                <g transform="translate(1139 983)" fill="#fff" stroke="#fbb03b" stroke-width="1">
                  <circle cx="18" cy="18" r="18" stroke="none"></circle>
                  <circle cx="18" cy="18" r="17.5" fill="none"></circle>
                </g>
                <g transform="translate(1142 986.5)">
                  <path d="M6.729,7.458H7.947L9.773,15.7a2.617,2.617,0,0,0-1.489,2.42,2.492,2.492,0,0,0,2.356,2.6h9.669a.729.729,0,1,0,0-1.458H10.64a1.06,1.06,0,0,1-.9-1.146,1.06,1.06,0,0,1,.9-1.147h9.669a.729.729,0,0,0,.686-.482l2.462-6.834a.729.729,0,0,0-.686-.976H9.711l-.466-2.1A.729.729,0,0,0,8.532,6h-1.8a.729.729,0,0,0,0,1.458Zm15,2.676L19.8,15.51H11.225l-1.191-5.375h11.7Z" fill="#fbb03b"></path>
                  <path d="M19.074,50a.729.729,0,1,0,0,1.458H20A.729.729,0,1,0,20,50Z" transform="translate(-7.844 -27.958)" fill="#fbb03b"></path>
                  <path d="M37.526,50a.729.729,0,0,0,0,1.458h.926a.729.729,0,1,0,0-1.458Z" transform="translate(-19.569 -27.958)" fill="#fbb03b"></path>
                </g>
              </g>
              <g id="active">
                <circle cx="18" cy="18" r="18" transform="translate(1272 983)" fill="#fbb03b"></circle>
                <path d="M33.4,22.59H22.767a.708.708,0,0,0-.708.708v3.533H19.942a.706.706,0,0,0-.589.315l-2.124,3.2a.708.708,0,0,0-.119.393v3.189a.708.708,0,0,0,.708.708h.039a2.468,2.468,0,0,0,4.887,0h4.318a2.468,2.468,0,0,0,4.887,0H33.4a.708.708,0,0,0,.708-.708V23.3A.708.708,0,0,0,33.4,22.59ZM18.526,30.95l1.809-2.693h1.734v4.287c-.028-.028-.059-.047-.088-.072-.07-.065-.14-.124-.215-.181l-.15-.1a2.017,2.017,0,0,0-.258-.134c-.1-.041-.1-.052-.16-.075a2.3,2.3,0,0,0-.295-.093c-.049-.013-.1-.028-.147-.039a2.362,2.362,0,0,0-.47-.049,2.326,2.326,0,0,0-.468.049.641.641,0,0,0-.15.039,2.258,2.258,0,0,0-.292.093c-.057.023-.111.049-.165.078a2.171,2.171,0,0,0-.24.132c-.054.034-.106.07-.16.109a2.479,2.479,0,0,0-.2.165c-.062.057-.067.052-.1.083Zm1.77,4.393a1.065,1.065,0,0,1-1.062-1.062,1.313,1.313,0,0,1,.021-.214,1.062,1.062,0,0,1,2.083,0,1.189,1.189,0,0,1,.021.217A1.065,1.065,0,0,1,20.3,35.341Zm9.211,0a1.065,1.065,0,1,1,1.034-1.292,1.189,1.189,0,0,1,.023.217,1.065,1.065,0,0,1-1.057,1.073Zm2.238-2.127c-.023-.049-.054-.1-.083-.145s-.039-.078-.062-.114a2.887,2.887,0,0,0-.2-.258.432.432,0,0,1-.031-.041,2.488,2.488,0,0,0-.279-.258l-.085-.065a2.041,2.041,0,0,0-.233-.158l-.119-.065A1.9,1.9,0,0,0,30.422,32a1.361,1.361,0,0,0-.132-.049,2.3,2.3,0,0,0-.258-.072l-.124-.026a2.223,2.223,0,0,0-.8,0l-.121.026a2.344,2.344,0,0,0-.258.072A.433.433,0,0,0,28.6,32a2.558,2.558,0,0,0-.24.114l-.111.059a2.4,2.4,0,0,0-.258.173l-.065.047a2.559,2.559,0,0,0-.517.6l-.044.078c-.031.057-.067.111-.093.168H23.486V24.006h9.208v2.127H27.734a.708.708,0,0,0,0,1.416h4.959v5.665Z" transform="translate(1263.891 972.409)" fill="#fff"></path>
              </g>
              <rect width="70" height="1" transform="translate(1190 1001)" fill="#eee"></rect>
              <!-- <rect width="70" height="1" transform="translate(1324 1001)" fill="#eee"></rect> -->
              <!-- <g transform="translate(1412 986.63)">
                <path d="M22.944,9.4H20.061a.757.757,0,0,0-.757.757v.6H18.033L15.892,8.6a4.2,4.2,0,0,0-5.948,0L8.173,10.374H1.757A.757.757,0,0,0,1,11.131v3.526H1v4.956a.757.757,0,0,0,.757.757H14.666a.757.757,0,0,0,.757-.757V16.738h1.143a3.027,3.027,0,0,0,2.27,1.059h.439V18.4a.757.757,0,0,0,.757.757h2.913A.757.757,0,0,0,23.7,18.4V10.154A.757.757,0,0,0,22.944,9.4ZM8.469,11.9h5.448v1.2H11.949a1.816,1.816,0,0,0-1.513.84H2.513V11.9Zm5.448,7H2.513V15.413h7.7a1.816,1.816,0,0,0,1.733,1.294h1.967Zm4.956-2.618a1.513,1.513,0,0,1-1.279-.7.757.757,0,0,0-.643-.355H11.942a.31.31,0,1,1,0-.613h5a.757.757,0,0,0,0-1.513H15.43V11.146a.757.757,0,0,0-.757-.757H10.323l.7-.7a2.754,2.754,0,0,1,3.783,0l2.361,2.361a.757.757,0,0,0,.537.219h1.589v4.018Zm3.314,1.362h-1.37V10.911h1.37Z" fill="#d8d8d8"></path>
              </g> -->
            </g>
          </svg>
        </div>
        <div class="flex-display">
          @foreach ($user as $users)
          @csrf  
          <div class="address-form">
            <div class="address-form__row">
              <div class="input-container">
                <label class="label" for="firstName">Nama</label>
                <input class="txt-input default-input" type="text" name="name" id="name" placeholder="Nama Lengkap" value="{{ $users->nama }}">
              </div>
              <div class="input-container">
                <label class="label" for="phoneNumber">Nomor Handphone</label>
                <input class="txt-input default-input" type="text" name="phoneNumber" id="phoneNumber" placeholder="Phone number" value="{{$users->no_hp}}">
              </div>
            </div>
            <div class="address-form__row">
            <div class="input-container">
                <label class="label" for="address">Alamat</label>
                <input class="txt-input default-input" type="text" name="address" id="address" placeholder="Address" value="{{$users->alamat}}">
              </div>
              <!--div class="input-container">
                <label class="label" for="first-name">E-mail</label>
                <input class="txt-input default-input" type="text" name="first-name" id="first-name" placeholder="E-mail">
              </div> -->
            </div>
            <div class="address-form__row">
              <div class="input-container">
                <label class="label" for="city">Kota</label>
                <input class="txt-input default-input" type="text" name="city" id="city" placeholder="City" required>
              </div>
              <div class="input-container">
                <label class="label" for="first-name">Kode Pos</label>
                <input class="txt-input default-input" type="text" name="kdPos" id="kdPos" placeholder="Kode Pos" required>
              </div>
            </div>
            <div class="address-form__row">
              <!-- <div class="input-container">
                <label class="label" for="zip">Postal Code / ZIP</label>
                <input class="txt-input default-input" type="text" name="zip" id="zip" placeholder="Postal Code / ZIP">
              </div> -->
              <div class="input-container">
                <label class="label" for="first-name">E-mail</label>
                <input class="txt-input default-input" type="email" name="email" id="email" placeholder="E-mail" value="{{$users->email}}">
              </div>
              
            </div>
          @endforeach
            @php
            $allIds = [];
            $grosir = [];
            @endphp

          </div>
          <div class="grid-layout">
            @php
              $totalQty = 0;
            @endphp
            <div class="kartu">
              <!-- <h2 class="kartu-title">Judul Kartu</h2> -->
              <p class="kartu-content">Isi Trolimu</p>
              <div class="table-sc">
                <table class="shopping-cart-table">
                  @foreach ($rincian as $details)
                    @csrf
                      @php
                        $grosir[] = $details->qty;
                        $totalQty += $details->qty; // Menambahkan qty ke total
                        $allIds[] = $details->id; // Menambahkan ID ke array $allIds
                      @endphp
                        <!-- $harga[] = $details->qty * $details->harga; // Menambahkan ID ke array $allIds -->
                    <tr class="scrollable-div">
                      <td>
                        <div class="product-cart">
                          <div class="product-card__img" style="height: 75px; width: 78px;"><img src="{{asset('storage/assets/images/'. $details->gambar)}}" alt="gambar produk" style="border-radius: 50%;" ></div>
                            <div class="product-cart__info">
                              <div class="kartu-content" style="font-size: 14px;">{{ $details->judul }}</div>
                              <!-- <div class="product-cart__info-nb">#{{ $details->id_produk }}</div> -->
                            </div>
                          </div>
                        </td>
                        <td>
                          <div style="font-size: 14px;">
                            Rp.{{$details->qty * $details->harga}}
                          </div>
                        </td>
                      </tr>
                      <input class="number-input col-4 quantity-input" type="hidden" name="quantity-{{$details->id}}" value="{{$details->qty}}" data-price="{{$details->harga}}">
                      @endforeach
                      <input type="hidden" name="harga" id="harga" value="">
                      <input type="hidden" id="jmlBrg" name="jmlBrg"   value="{{$totalQty}}">
                      <input type="hidden" id="allId" name="allId" value="{{ implode(',', $allIds) }}">
                      <input type="hidden" id="grosir" name="grosir" value="{{ implode(',', $grosir) }}">
                      <tr>
                        <td colspan="2" >
                          <div class="total-sum" style="display: flex; height: 100%; justify-content: center; align-items: center;">
                            <p class="btn" style="background-color: #F1F1F1;"><span class="total-sum__title">Total cost</span><span class="total-sum__nb " name="totalHarga" id="totalHarga"> </span></p>
                          </div>
                        </td>
                      </tr>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="page-row-bottom"><a class="back-link" href="#"> 
            <svg xmlns="http://www.w3.org/2000/svg" width="13.336" height="11.59" viewBox="0 0 13.336 11.59">
              <path d="M5.794,0,.963,4.835,0,5.8l.963.963L5.794,11.59l.963-.961-4.15-4.15H13.336V5.118H2.606L6.757.965Z"></path>
            </svg>Back</a>
          <div class="btn-actions">
            <button class="btn btn--default"><a href="/">Continue shopping</a></button>
            <button class="btn btn--primary" type="submit">Bayar Sekarang</button>
          </div>
        </div>
      </div>
    </form>
    </div>
    <div class="container spacing">
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
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <!-- Midtrans Production -->
    <!-- <script type="text/javascript" 
            src="https://app.midtrans.com/snap/snap.js" 
            data-client-key="{{ config('services.midtrans.clientKey') }}">
    </script> -->
    <!-- Midtrans Sandbox -->
    <script type="text/javascript" 
            src="https://app.sandbox.midtrans.com/snap/snap.js" 
            data-client-key="{{ config('services.midtrans.clientKey') }}">
    </script>
    <script>
      $("#donation_form").submit(function (event) {
        event.preventDefault();

        $.ajax({
          method: 'POST',
          url: "api/donation", //"{ { route('api.donation.store') }}",
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          data: {
            name: $('input#name').val(),
            idProduk: $('input#allId').val(),
            email: $('input#email').val(),
            alamat: $('input#address').val(),
            kota: $('input#city').val(),
            noHp: $('input#phoneNumber').val(),
            kdPos: $('input#kdPos').val(),
            amount: $('input#harga').val(),
            qty: $('input#jmlBrg').val(),
            grosir: $('input#grosir').val(),
          },
          success: function (data) {
            snap.pay(data.snap_token, {
              onSuccess: function (result) {
                console.log(result);
                location.reload();
              },
              onPending: function (result) {
                console.log(result);
                location.reload();
              },
              onError: function (result) {
                console.log(result);
                location.reload();
              }
            });
            
            return false;
          },
          
        })
      })
    </script>
    <!-- <script>
      var allIdsInput = document.getElementById('all-ids');
      var allIds = allIdsInput.value.split(','); // Memisahkan ID yang disimpan
    </script> -->
    <script>
      // Ambil semua elemen input dengan class "quantity-input"
      const quantityInputs = document.querySelectorAll('.quantity-input');

      // Fungsi untuk menghitung total dan memperbarui tampilan
      function updateTotal() {
        let total = 0;

        // Loop melalui setiap elemen input
        quantityInputs.forEach((input) => {
          const quantity = parseInt(input.value, 10);
          const price = parseFloat(input.dataset.price);

          // Pastikan kuantitas dan harga valid
          if (!isNaN(quantity) && !isNaN(price)) {
            total += quantity * price;
          }
        });
        
        // Isi nilai sumPrice ke elemen input tersembunyi
        const sumPrice = document.getElementById('harga');
        sumPrice.value = total.toFixed(2);

        // Tampilkan total pada elemen dengan ID "total-display"
        const totalDisplay = document.getElementById('totalHarga');
        totalDisplay.textContent = 'Rp. ' + total.toFixed(2); // Ubah sesuai format angka yang diinginkan
      }

      // Panggil fungsi updateTotal saat input berubah
      quantityInputs.forEach((input) => {
        input.addEventListener('input', updateTotal);
      });

      // Panggil fungsi updateTotal saat halaman dimuat pertama kali
      updateTotal();
    </script>
  </body>
</html>