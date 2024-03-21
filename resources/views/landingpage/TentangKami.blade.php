<!DOCTYPE html>
<html lang="en">
  <head>
    @include('script_head')
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<style>
@import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css");
  .hero {
    position: relative;
	z-index: 1; 
}
.hero img {
    width: 100%;
    min-width: 1000px;
    height: auto;
    position: relative;
}
.heroinner {
    position: absolute;
    top: 70%;
    left: 50%;
    transform: translate(-50%, -50%);
    max-width: 800px;
    z-index: 1;
    display: flex; 
    flex-direction: column;
    align-items: center;
    text-align: center;
}
.herotitle {
    color: #fff;
    font-weight: 600;
    font-size: 36px;
    text-shadow: 1px 1px #141414;
    margin-bottom: 16px; 
}
.herosubtitle {
    color: #fff;
    font-size: 18px;
    font-weight: 600;
    text-shadow: 1px 1px #141414;
    margin-bottom: 16px; 
}
button {
    min-width: 44px;
    min-height: 44px;
    margin-right: 10px;
}
@media (max-width: 1199px) {
    .hero img {
        min-width: 0; 
    }
}
.heroinner {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    max-width: 800px;
    z-index: 1;
}
.herotitle {
    color: #fff;
    font-weight: 600;
    font-size: 36px;
    text-shadow: 1px 1px #141414;
    text-align: center;
}
.herosubtitle {
    color: #fff;
    margin-top: 16px;
    font-size: 18px;
    font-weight: 600;
    text-shadow: 1px 1px #141414;
    text-align: center;
}
@media (max-width: 768px) {
    .hero img {
        min-width: 0; 
	}
    .heroinner {
        max-width: 100%; 
    }
    .herotitle {
        font-size: 24px; 
    }
    .herosubtitle {
        font-size: 16px; 
    }
}
.judul {
  text-align: center;
  margin-top: 50px; 
}
/* visi misi */
.container {
        display: flex;
        flex-wrap: wrap;
       
        margin: 0 auto;
        padding: 20px;
    }
    
    /* Image Container */
    .image-container {
        width: 50%;
        padding: 20px;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    
    .image-container img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    
    /* Caption Container */
    .caption-container {
        width: 50%;
        padding: 20px;
        background-color: #f7f7f7;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    
    .caption-container h2 {
        font-size: 24px;
        margin-bottom: 10px;
    }
    
    .caption-container p {
        font-size: 16px;
        line-height: 1.5;
    }
    
    /* Media Queries */
    @media (max-width: 768px) {
        .container {
            flex-direction: column;
        }
    
        .image-container, .caption-container {
            width: 100%;
        }
    }
/* konten kantor dan workshop */
/* konten */
.konten {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  margin: 0 auto;
  padding: 20px;
}
/* Images */
.konten img {
  width: calc(33.33% - 10px);
  height: auto;
  margin: 5px;
  object-fit: cover;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0,0,0,0.1);
}
/* Media Queries */
@media (max-width: 768px) {
  .konten img {
      width: calc(50% - 10px);
      margin: 5px;
  }
  
  @media (max-width: 480px) {
      .konten img {
          width: calc(100% - 10px);
          margin: 5px;
      }
  }
}
.konten img {
  width: 400px;
  height: 400px;
  transition: all 0.3s ease-in-out;
}
.konten img:hover {
  width: 410px;
  height: 410px;
}
</style>

  </head>
  <body>
    @include('homeheader')
    <div class="hero" >
    <img src="{{asset('assets/images/hero/Rimberio2.jpg')}}" alt="Hero Image">
    <div class="heroinner">
    <div class="transbox">
      <h1 class="herotitle">Tentang Kami</h1>
      <p class="herosubtitle">Senja Printing didirikan sejak ../../.. dan telah dipercaya menjadi penyedia layanan sablon diberbagai perusahaan diseluruh Indonesia. Lebih dari 20 perusahaan telah menjadi loyal customer kami.</p>
    </div>
    </div>
  </div>


<!-- visi misi -->
  <h1 class="judul">Visi Misi</h1>
  <div class="container" data-aos="fade-up">
        <div class="image-container">
            <img src="{{asset('assets/images/hero/logo.png')}}" alt="Visi Misi">
        </div>
        <div class="caption-container">
            <h2>VISI</h2>
            <p>Pelayanan produk custome satuan taanpa minimal order berkualitas dengan harga yang terjangkau.</p>
            <h2 style="margin-top: 50px;">MISI</h2>
            <ul style="list-style-type: circle;">
                <li>Memberikan pelayanan yang ramah</li>
                <li>memajukan minat kreativitas dalam produk custome</li>
                <li>meningkatkan keberhasilan UMKM</li>
            </ul>

          </div>
    </div>

    <!-- Kantor & Workshop -->
    <h1 class="judul">Kantor & Workshop</h1>
    <div class="konten"  data-aos="zoom-in">
        <img src="{{asset('assets/images/hero/kantor1.jpeg')}}" alt="Image 1">
        <img src="{{asset('assets/images/hero/kantor2.jpeg')}}" alt="Image 2">
        <img src="{{asset('assets/images/hero/kantor3.jpg')}}" alt="Image 3">
    </div>
    <div class="konten" data-aos="zoom-in">
        <img src="{{asset('assets/images/hero/kantor4.jpeg')}}" alt="Image 4">
        <img src="{{asset('assets/images/hero/kantor5.jpeg')}}" alt="Image 5">
        <img src="{{asset('assets/images/hero/kantor6.jpg')}}" alt="Image 6">
    </div>


    <!--aksi nyata  -->
  <h1 class="judul ">Aksi Nyata</h1>
  <div class="container" data-aos="fade-right">
        <div class="image-container">
            <img src="{{asset('assets/images/hero/aksinyata.jpg')}}" alt="aksi nyata">
        </div>
        <div class="caption-container">
        <h3>Kunjungi media sosial kami!</h3>

        <div style="margin-top: 25px;">
        <a href="https://www.instagram.com/senjaprintingg/" ><i class="bi bi-instagram" style="font-size: 24px;"> </i>@Senjaprinting</a>
        </div>
        <div style="margin-top: 25px;">
        <a href="https://www.instagram.com/senjaprintingg/" ><i class="bi bi-tiktok" style="font-size: 24px;"></i>Senjaprinting</a>
        </div>


          </div>
    </div>

    <div class="container">

    <div class="caption-container" style="text-align: center;" data-aos="fade-left">
        <h3>Quotes (Kalau ada)</h3>
          </div>
        <div class="image-container">
            <img src="{{asset('assets/images/hero/aksinyata.jpg')}}" alt="aksi nyata">
        </div>

    </div>


      @include('footer')
      <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

      <script>
        AOS.init();
      </script>
   <script>
    
   </script>
  </body>
</html>