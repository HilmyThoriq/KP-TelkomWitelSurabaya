<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <link rel="icon" href="{{asset('images/favicon-16x16.png')}}" type="image/x-icon">

    <title>CDC Telkom Surabaya</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
      /* Center the card */
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

      /* .navbar-buttons {
        display: flex;
      }

      .navbar-button {
        display: block;
        margin: 0 10px;
        padding: 10px 15px;
        border-radius: 5px;
        color: #333;
        text-decoration: none;
        background-color: #f2f2f2;
        transition: background-color 0.2s ease-in-out;
      }

      .navbar-button:hover {
        background-color: #e0e0e0;
      } */
      /* Style the card */
      .card {
        background-color: #fafaff;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
        border-radius: 5px;
        padding: 20px;
        max-width: 400px;
        width: 100%;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
      }
      /* Style the form */
      form {
        display: flex;
        flex-direction: column;
      }
      label {
        margin-bottom: 5px;
      }
      input[type="text"], input[type="password"] {
        margin-bottom: 10px;
        padding: 10px;
        border-radius: 3px;
        border: none;
        box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
      }
      input[type="submit"] {
        background-color: #ee2e24;
        color: #fff;
        border: none;
        border-radius: 3px;
        margin-top: 10px;
        padding: 10px;
        
        cursor: pointer;
        transition: background-color 0.2s ease;
      }
      /* input[type="submit"]:hover {
        background-color: #0069d9;
      } */
    </style>
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

    <div class="card">
      @if ($message = Session::get('failed'))
        <div class="alert alert-danger alert mt-2" role="alert">
        {{ $message }}
        </div>
      @endif
      <form action="/login" method="POST" enctype="multipart/form-data">
        @csrf     
        <label for="username">Username</label>
        <input type="text" id="username" name="username" required autofocus>
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required autofocus>
        <input type="submit" value="Login">
      </form>
    </div>

  </body>
  <script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
  </script>
</html>
