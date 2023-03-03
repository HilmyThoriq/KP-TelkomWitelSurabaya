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

      .navbar-buttons {
        display: flex;
        margin-right: 60px;
      }

      .navbar-button:hover {
        background-color: #e0e0e0;
      }

      .container{
        margin-top: 20px;
      }
      a[type=button]{
        font-weight: bold;
      }
      
      .action{
        text-align: center;
      }
      
      .action_button {
        text-align: center;
      }

    </style>
  </head>
  <body>
    <nav class="navbar">
      <a class="navbar-logo">
        <img src="{{ asset('images/logo_telkom2.jpg') }}" alt="Logo">
      </a>
      <div class="navbar-buttons">
        <a href="/daftarMitra_Admin" class="btn btn-outline danger mb-2" style="margin-right: 10px; font-weight: bold;">Daftar Mitra</a>
        <form action="/logout" method="POST">
        @csrf
          <button button type="summit" class="btn btn-danger mb-2">Logout</button>
        </form>
    </nav>

    <div class="container">
      <h1 style="text-align: center;"">Daftar Admin</h1>
      <a href="/tambahAdmin" type="button" class="btn btn-outline-danger mb-2">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16">
          <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
          <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
        </svg> Tambah Admin</a>
      <div class="row">
            <table class="table">
            <thead>
                <tr>
                <th scope="col" style="border-bottom: 3px solid #e42313;">Username</th>
                <!-- <th scope="col">Password</th> -->
                <th scope="col" style="border-bottom: 3px solid #e42313;">Role</th>
                <th scope="col" class="action" style="border-bottom: 3px solid #e42313;">Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                  $no = 1;
                @endphp
                @foreach ($data as $index=> $row)
                    <tr>
                    <td>{{$row->username}}</td>
                @if ($row->role==0)
                    <td>Admin</td>
                @endif
                    <td class="action_button">
                    <!-- <a href="/editAdmin/{{$row->id}}" type="button" class="btn btn-warning">Edit</a> -->
                    <a href="/deleteAdmin/{{$row->id}}" type="button" class="btn btn-danger"> 
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                        <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                      </svg> Delete</a>
                    </td>
                    </tr>
                @endforeach
            </tbody>
            </table>
        </div>
    
      </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>