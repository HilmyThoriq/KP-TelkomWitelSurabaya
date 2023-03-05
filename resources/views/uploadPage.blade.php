<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="icon" href="{{asset('images/favicon-16x16.png')}}" type="image/x-icon">

    <title>CDC Telkom Surabaya</title>
    <style>
      body {
        /* display: flex;
        justify-content: center;
        align-items: center; */
        /* height: 100vh; */
        background-image: url("{{ asset('images/background_telkom2.jpg') }}");
        background-position: center;
        background-size: cover;
        /* background-repeat: no-repeat; */
      }

      .navbar {
        background-color: #fff;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 15px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        
      }

      .navbar-logo img {
        height: 75px;
        
      }

      .navbar-logo {
        display: flex;
        align-items: center;
      }

      .container{
        margin-top: 20px;
      }

      
    </style>

  </head>
  <body>
    <nav class="navbar">
      <a class="navbar-logo">
        <img src="{{ asset('images/logo_telkom2.jpg') }}" alt="Logo">
      </a>
    <div class="navbar-buttons">
        <!-- <form action="/logout" method="POST">
        @csrf
          <button button type="summit" class="btn btn-danger mb-2">Logout</button>
        </form> -->
      </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col">
              <a href="/daftarMitra" class="btn btn-secondary mb-2">Back</a>
              <div class="card mb-4">
                <div class="card-body">
                <h1 class="text-center mb-4 mt-2">Upload Lampiran Mitra</h1>
                    <form action="/upload" method="POST" enctype="multipart/form-data">
                    @csrf
                  <div class="mb-3">
                  @if ($errors->has('namafile'))
                      <div class="alert alert-danger">
                          {{ $errors->first('namafile') }}
                      </div>
                  @endif
                    <label for="Mitra" class="form-label">Jenis File</label>
                    <input type="text" class="form-control" name="jenisfile" id="exampleInputEmail1" aria-describedby="emailHelp" required autofocus>
                    <div id="emailHelp" class="form-text">Wajib Diisi!</div>
                    <input type="hidden" class="form-control" name="kodemitra" id="exampleInputPassword1" value="{{$kodemitra}}">
                  </div>  
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Upload File</label>
                    <input type="file" class="form-control" name="namafile" id="exampleInputPassword1" required autofocus>
                  </div>
                  <button type="submit" class="btn btn-outline-danger">Submit</button>
        
                </div>
        </div>

    </div>
        </div>
    </div>
    <script> 
      
    </script>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>