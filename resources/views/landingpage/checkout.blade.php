<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>IDonation</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <style>
        body {
            min-height: 75rem;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/donation">IDonation</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="/donation">Donation <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="jumbotron">
        <div class="container">
            <h1 class="display-4">IDonation</h1>
            <p class="lead">Platform donasi untuk saudara kita yang membutuhkan.</p>
        </div>
    </div>

    <div class="container">
        <form action="#" id="donation_form">
            <legend>Donation</legend>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" name="name" class="form-control" id="name">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">E-Mail</label>
                        <input type="email" name="email" class="form-control" id="email">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="">Jenis Donasi</label>
                        <select name="type" class="form-control" id="type">
                          <option value="medis_kesehatan">Medis & Kesehatan</option>
                          <option value="kemanusiaan">Kemanusiaan</option>
                          <option value="bencana_alam">Bencana Alam</option>
                          <option value="rumah_ibadah">Rumah Ibadah</option>
                          <option value="beasiswa_pendidikan">Beasiswa & Pendidikan</option>
                          <option value="sarana_infrastruktur">Sarana & Infrastruktur</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Jumlah</label>
                        <input type="number" name="amount" class="form-control" id="amount">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Catatan (Opsional)</label>
                        <textarea name="note" cols="30" rows="3" class="form-control" id="note"></textarea>
                    </div>
                </div>
            </div>

            <button class="btn btn-primary" type="submit">Kirim</button>
        </form>
    </div>



    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" 
            src="https://app.sandbox.midtrans.com/snap/snap.js" 
            data-client-key="{{ config('services.midtrans.clientKey') }}">
    </script>
    <script>
      $("#donation_form").submit(function (event) {
        event.preventDefault();

        $.ajax({
          method: 'POST',
          url: "/api/donation", //"{{ route('api.donation.store') }}",
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          data: {
            name: $('input#name').val(),
            email: $('input#email').val(),
            type: $('select#type').val(),
            amount: $('input#amount').val(),
            note: $('textarea#note').val(),
          },
          success: function (data) {
            snap.pay(data.snap_token, {
              onSuccess: function (result) {
                console.log(result);
                // location.reload();
              },
              onPending: function (result) {
                console.log(result);
                // location.reload();
              },
              onError: function (result) {
                console.log(result);
                // location.reload();
              }
            });

            return false;
          },
        })
        // $.post("{ route('donation.store') }}", {
        //   _method: 'POST',
        //   _token: { csrf_token() }},
        //   name: $('input#name').val(),
        //   email: $('input#email').val(),
        //   type: $('select#type').val(),
        //   amount: $('input#amount').val(),
        //   note: $('textarea#note').val(),
        // },
        // function (data, status) {
        //   console.log(data);
        //   snap.pay(data.snap_token, {
        //     onSuccess: function (result) {
        //       console.log(result);
        //       // location.reload();
        //     },
        //     onPending: function (result) {
        //       console.log(result);
        //       // location.reload();
        //     },
        //     onError: function (result) {
        //       console.log(result);
        //       // location.reload();
        //     }
        //   });

        //   return false;
        // }
        // )
      })
    </script>
</body>

</html>