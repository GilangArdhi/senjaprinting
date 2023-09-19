<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Admin | Dashboard</title>

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{asset('assets/tempad/plugins/fontawesome-free/css/all.min.css')}}" />

        <link rel="stylesheet" href="{{asset('assets/tempad/dist/css/adminlte.min.css')}}" />
        <script nonce="24b1c56c-ca8d-418e-8098-7723180c6061">
            (function(w,d){!function(bg,bh,bi,bj){bg[bi]=bg[bi]||{};bg[bi].executed=[];bg.zaraz={deferred:[],listeners:[]};bg.zaraz.q=[];bg.zaraz._f=function(bk){return async function(){var bl=Array.prototype.slice.call(arguments);bg.zaraz.q.push({m:bk,a:bl}')}};for(const bm of["track","set","debug"])bg.zaraz[bm]=bg.zaraz._f(bm);bg.zaraz.init=()=>{var bn=bh.getElementsByTagName(bj)[0],bo=bh.createElement(bj),bp=bh.getElementsByTagName("title")[0];bp&&(bg[bi].t=bh.getElementsByTagName("title")[0].text);bg[bi].x=Math.random();bg[bi].w=bg.screen.width;bg[bi].h=bg.screen.height;bg[bi].j=bg.innerHeight;bg[bi].e=bg.innerWidth;bg[bi].l=bg.location.href;bg[bi].r=bh.referrer;bg[bi].k=bg.screen.colorDepth;bg[bi].n=bh.characterSet;bg[bi].o=(new Date).getTimezoneOffset();if(bg.dataLayer)for(const bt of Object.entries(Object.entries(dataLayer).reduce(((bu,bv)=>({...bu[1],...bv[1]})),{})))zaraz.set(bt[0],bt[1],{scope:"page"});bg[bi].q=[];for(;bg.zaraz.q.length;){const bw=bg.zaraz.q.shift();bg[bi].q.push(bw)}bo.defer=!0;for(const bx of[localStorage,sessionStorage])Object.keys(bx||{}).filter((bz=>bz.startsWith("_zaraz_"))).forEach((by=>{try{bg[bi]["z_"+by.slice(7)]=JSON.parse(bx.getItem(by))}catch{bg[bi]["z_"+by.slice(7)]=bx.getItem(by')}}));bo.referrerPolicy="origin";bo.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(bg[bi])));bn.parentNode.insertBefore(bo,bn)};["complete","interactive"].includes(bh.readyState)?zaraz.init():bg.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document);
        </script>
    </head>
    <body class="hold-transition sidebar-mini sidebar-collapse">
        <div class="wrapper">
            @include('admin.headeradmin')

            <div class="content-wrapper">
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1>Senja Printing</h1>
                            </div>
                            <!-- <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item">
                                        <a href="#">Home</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="#">Layout</a>
                                    </li>
                                    <li class="breadcrumb-item active">
                                        Collapsed Sidebar
                                    </li>
                                </ol>
                            </div> -->
                        </div>
                    </div>
                </section>

            <!-- Main content -->
            <section class="content">
            <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Form Edit Data</h3>
                    </div>
                    @foreach ($product as $produk)
                        <Form action="{{ url('edit') }}" method="POST" enctype="multipart/form-data">
                            <div class="card-body">
                                
                                    @csrf
                                    <div class="form-group">
                                    <label for="idProduk" class="form-label">Id Produk</label>
                                        <input type="text" class="form-control" id="idProduk" value="{{$produk->id}}" name="idProduk" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="nama" class="form-label">Nama Produk</label>
                                        <input type="text" class="form-control" id="nama" value="{{$produk -> judul}}" name="nama">
                                    </div>
                                    <div class="form-group">
                                        <label for="gambar1" class="form-label">Gambar Utama</label>
                                        <div class="container my-2">
                                            <img src="{{asset('storage/assets/images/'. $produk -> gambar)}}" alt="gambar produk" class="img w-25">
                                        </div>
                                        <input type="file" class="form-control" id="gambar1" name="gambar1">
                                    </div>
                                    @foreach ($foto as $index => $potret)
                                    @csrf
                                        <div class="form-group">
                                            <label for="gambar{{$index + 2}}" class="form-label">Gambar {{$index + 2}}</label>
                                            <div class="container d-flex justify-text-left my-2">
                                                <img src="{{asset('storage/assets/images/'. $potret -> fotoProduk)}}" alt="{{$potret->fotoProduk}}" class="img w-25">
                                            </div>
                                            <input type="text" class="form-control" id="idFoto{{$index + 2}}" value="{{$potret->id}}" name="idFoto{{$index + 2}}" readonly>
                                            <input type="file" class="form-control" id="gambar{{$index + 2}}" name="gambar{{$index + 2}}" value="{{$potret -> id}}">
                                        </div>
                                    @endforeach
                                    <div id="tambah-gambar"></div>
                                    <button type="button" id="tambah-gambar-btn" class="btn btn-secondary btn-sm">Tambah Gambar</button>
                                    <div class="form-group">
                                        <label for="ukuran" class="form-label">Ukuran</label>
                                        <input type="text" class="form-control" id="ukuran" value="{{$produk -> ukuran}}" name="ukuran">
                                    </div>
                                    <div class="form-group">
                                        <label for="deskripsi" class="form-label">Ukuran</label>
                                        <textarea type="text" class="form-control" rows="4" id="deskripsi" name="deskripsi">{{$produk -> deskripsi}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="harga" class="form-label">Harga</label>
                                        <input type="number" class="form-control" id="harga" value="{{$produk->harga}}" name="harga">
                                    </div>
                                    
                                
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary" name="btnKd" value="{{$produk->id}}">Submit</button>
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><a href="/dashboard" class="text-white">Close</a></button>
                            </div>
                        </form>
                    @endforeach
                </div>
                
            </section>
            <footer class="main-footer">
                <div class="float-right d-none d-sm-block">
                    <b>Version</b> 0.1.0
                </div>
                <strong
                    >Copyright &copy; 2014-2021
                    <a href="https://adminlte.io">Senja Printing</a>.</strong
                >
                All rights reserved.
            </footer>

            <aside class="control-sidebar control-sidebar-dark"></aside>
        </div>

        <script src="{{asset('assets/tempad/plugins/jquery/jquery.min.js')}}"></script>

        <script src="{{asset('assets/tempad/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

        <script src="{{asset('assets/tempad/dist/js/adminlte.min.js')}}"></script>

        <script src="{{asset('assets/tempad/dist/js/demo.js')}}"></script>
        <script>
        // JavaScript untuk menambahkan elemen gambar secara dinamis
        const tambahGambarBtn = document.getElementById('tambah-gambar-btn');
        const tambahGambarContainer = document.getElementById('tambah-gambar');
        let nextIndex = {{ count($foto) + 2 }}; // Mulai dari index berikutnya

        tambahGambarBtn.addEventListener('click', () => {
            const div = document.createElement('div');
            div.classList.add('form-group');

            const label = document.createElement('label');
            label.setAttribute('for', `gambar${nextIndex}`);
            label.classList.add('form-label');
            label.textContent = `Gambar ${nextIndex}`;

            const input = document.createElement('input');
            input.setAttribute('type', 'file');
            input.setAttribute('class', 'form-control');
            input.setAttribute('id', `gambar${nextIndex}`);
            input.setAttribute('name', `gambar${nextIndex}`);
            
            div.appendChild(label);
            div.appendChild(input);
            
            tambahGambarContainer.appendChild(div);
            nextIndex++;

            // Jika jumlah gambar mencapai 4, sembunyikan tombol "Tambah Gambar"
            if (nextIndex > 4) {
                    tambahGambarBtn.style.display = 'none';
                }
        });
    </script>
    </body>
</html>
