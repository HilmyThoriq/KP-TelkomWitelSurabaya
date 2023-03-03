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
      .container {
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
      </div>
    </nav>
    
    
    <div class="container">
      
      <a href="/daftarAdmin" type="button" class="btn btn-secondary mb-4">Back</a>
      <!-- <a href="/daftarMitra" class="btn btn-secondary mb-2">Back</a> -->
      <form action="/insertAdmin" method="post" enctype="multipart/form-data">
        @csrf
        @if ($message = Session::get('success'))
          <div class="alert alert-success alert mt-2" role="alert">
            {{ $message }}
          </div>
          @endif
        <div class="row">
            <div class="col">
              <div class="card mb-4">
              <div class="card-body">
                  <h1 class="text-center mb-4 mt-2">Tambah Admin</h1>
                  <div class="mb-3">
                    <label for="Mitra" class="form-label">Username</label>
                    <input type="text" class="form-control" name="username" id="exampleInputEmail1" aria-describedby="emailHelp" required autofocus>
                  </div>

                  <div class="mb-3">
                    <label for="Mitra" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="exampleInputEmail1" aria-describedby="emailHelp" required autofocus>
                  </div>

                  <!-- <div class="mb-3">
                    <label for="Mitra" class="form-label">Role</label>
                    <select type="form-select" class="form-control" name="role" id="exampleInputPassword1">
                      <option selected>Pilih Jenis Admin</option>
                      <option value="superadmin">Superadmin</option>
                      <option value="admin">Admin</option>
                    </select>
                  </div> -->

                  <button type="submit" class="btn btn-outline-danger mb-2">Submit</button>
                  
              </div>
              </form>
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