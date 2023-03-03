<!doctype html>
<html lang="en">
  <head>
    <link rel="icon" href="{{asset('images/favicon-16x16.png')}}" type="image/x-icon">

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

      .card {
        background-color: #f0f0f3;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
        border-radius: 5px;
        padding: 20px;
        /* max-width: 400px;
        width: 100%; */
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
      }

    </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>CDC Telkom Surabaya</title>
  </head>
  <body>
    <nav class="navbar">
      <a class="navbar-logo">
        <img src="{{ asset('images/logo_telkom2.jpg') }}" alt="Logo">
      </a>
    <!-- <div class="navbar-buttons">
      <a href="#" class="navbar-button">Home</a>
      <a href="#" class="navbar-button">About</a>
      <a href="#" class="navbar-button">Services</a>
      <a href="#" class="navbar-button">Contact</a>
      </div> -->
    </nav>

    <div class="container">
      <a href="/daftarMitra" class="btn btn-secondary mb-2">Back</a>
      <form action="/insertData" method="POST" enctype="multipart/form-data" id="form">
        @csrf
        <div class="row">
            <div class="col">
              <div class="card mb-4">
                <div class="card-body">
                  <div class="mb-3">
                    <h1 style="text-align: center;">Tambah Mitra</h1>
                    <label for="Mitra" class="form-label">Nama Mitra</label>
                    <input type="text" class="form-control" name="namamitra" id="exampleInputEmail1" aria-describedby="emailHelp" required autofocus>
                    <div id="emailHelp" class="form-text">Wajib Diisi!</div>
                  </div>
            
                  <div class="mb-3">
                    <label for="Mitra" class="form-label">Kode Mitra</label>
                    <input type="number" class="form-control" name="kodemitra" id="kodeForm" aria-describedby="emailHelp" required autofocus>
                    <div id="emailHelp" class="form-text">Wajib Diisi 11!</div>
                  </div>

                  <div class="mb-3">
                    <label for="Mitra" class="form-label">Catatan</label>
                    <input type="text" class="form-control" name="catatan" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>

                  <button type="submit" class="btn btn-outline-danger">Submit</button>
                 
              </div>
              </div>
            </div>
            
                </div>
        </div>

        
      </form>
    </div>

    
  </body>
  <script>
      const form = document.getElementById("form");
      const inputField = document.getElementById("kodeForm");

      form.addEventListener("submit", (event) => {
      if (inputField.value.replace(/\D/g, '').length < 11) {
      event.preventDefault();
      alert("Silahkan masukkan 11 Digit Kode Mitra");
      }
      });
    </script>
</html>