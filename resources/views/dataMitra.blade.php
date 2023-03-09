<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="icon" href="{{asset('images/favicon-16x16.png')}}" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

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

      .container {
        margin-top: 50px;
      }

      .feature {
        margin-bottom: 10px;
      }
      
      a[type=button]{
        font-weight: bold;
      }

      .action{
        text-align: center;
      }
      .action_button {
        text-align: right;
      }

      /* .button {
        display: block;
        margin-bottom: 5px;
      } */

      /* .alert alert-success alert{
        opacity: 1;
        transition: opacity 2s;
      } */

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
        margin-right: 80px;
      }

      input[type=search] {
      padding: 10px;
      border: 1px solid #8185a0;
      border-radius: 10px;
      margin-bottom: 10px;
    }

      /* .navbar-button {
        display: block;
        margin: 0 10px;
        padding: 10px 15px;
        border-radius: 5px;
        color: #333;
        text-decoration: none;
        background-color: #f2f2f2;
        transition: background-color 0.2s ease-in-out;
      } */

      .navbar-button:hover {
        background-color: #e0e0e0;
      }

    </style>
  </head>
  <body>
    <nav class="navbar">
      <a class="navbar-logo">
        <img src="{{ asset('images/logo_telkom2.jpg') }}" alt="Logo">
      </a>
    <div class="navbar-buttons">
        <form action="/logout" method="POST">
        @csrf
          <button button type="summit" class="btn btn-danger mb-2">Logout</button>
        </form>
      </div>
    </nav>
    
    <div class="container">
      <div class="feature">
        <a href="/tambahMitra" type="button" class="btn btn-outline-danger mb-2">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
            <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
          </svg> Tambah Mitra
          </a>
        <a href="/daftarMitra" type="button" class="btn btn-outline-danger mb-2">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-clockwise" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z"/>
            <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z"/>
          </svg> Reset Filter
          </a>
            <!-- Button trigger modal -->
        <a type="button" class="btn btn-outline-danger mb-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-database" viewBox="0 0 16 16">
            <path d="M4.318 2.687C5.234 2.271 6.536 2 8 2s2.766.27 3.682.687C12.644 3.125 13 3.627 13 4c0 .374-.356.875-1.318 1.313C10.766 5.729 9.464 6 8 6s-2.766-.27-3.682-.687C3.356 4.875 3 4.373 3 4c0-.374.356-.875 1.318-1.313ZM13 5.698V7c0 .374-.356.875-1.318 1.313C10.766 8.729 9.464 9 8 9s-2.766-.27-3.682-.687C3.356 7.875 3 7.373 3 7V5.698c.271.202.58.378.904.525C4.978 6.711 6.427 7 8 7s3.022-.289 4.096-.777A4.92 4.92 0 0 0 13 5.698ZM14 4c0-1.007-.875-1.755-1.904-2.223C11.022 1.289 9.573 1 8 1s-3.022.289-4.096.777C2.875 2.245 2 2.993 2 4v9c0 1.007.875 1.755 1.904 2.223C4.978 15.71 6.427 16 8 16s3.022-.289 4.096-.777C13.125 14.755 14 14.007 14 13V4Zm-1 4.698V10c0 .374-.356.875-1.318 1.313C10.766 11.729 9.464 12 8 12s-2.766-.27-3.682-.687C3.356 10.875 3 10.373 3 10V8.698c.271.202.58.378.904.525C4.978 9.71 6.427 10 8 10s3.022-.289 4.096-.777A4.92 4.92 0 0 0 13 8.698Zm0 3V13c0 .374-.356.875-1.318 1.313C10.766 14.729 9.464 15 8 15s-2.766-.27-3.682-.687C3.356 13.875 3 13.373 3 13v-1.302c.271.202.58.378.904.525C4.978 12.71 6.427 13 8 13s3.022-.289 4.096-.777c.324-.147.633-.323.904-.525Z"/>
          </svg> Import Data</a>
      </div>
      

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Import Data</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <form action="/importExcel" method="POST" enctype="multipart/form-data">
            @csrf
          <div class="modal-body">
            <div class="form-group">
              <input type="file" name="file_excel" required accept=".csv">
            </div>
            <div class="mt-2" style="color:grey;">Pastikan Kodemitra ada 11 Digit</div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-danger">Save changes</button>
          </div>
        </div>
        </form>
      </div>
    </div>

    <div class="row">
      <div class="col-sm">
        <form action="/daftarMitra" method="get">
          <input type="search" class="form-control" id="inputPassword2" placeholder="Nama Mitra" name="search" >
        </form>
      </div>
      <div class="col-sm">
        <form action="/daftarMitra" method="get">
          <input type="search" class="form-control" id="inputPassword2" placeholder="Kode Mitra" name="searchkodemitra">
        </form>
      </div>
      <!-- <div class="col-sm">
        <form action="/daftarMitra" method="get">
          <input type="search" class="form-control" id="inputPassword2" placeholder="Regional Mitra" name="searchregionalmitra">
        </form>
      </div>
    </div> -->
        @if ($message = Session::get('success'))
          <div class="alert alert-success alert" role="alert">
            {{ $message }}
          </div>
          @endif
        @if($message = Session::get('failed'))
          <div class="alert alert-danger alert" role="alert">
          {{ $message }}
          </div>
        @endif

    
        <div class="row">
                    <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col" style="border-bottom: 3px solid #e42313;">#</th>
                <th scope="col" style="border-bottom: 3px solid #e42313;">Nama Mitra</th>
                <th scope="col" style="border-bottom: 3px solid #e42313;">Kode Mitra</th>
                <th scope="col" style="border-bottom: 3px solid #e42313;">Catatan</th>
                <th class="action" scope="col" style="border-bottom: 3px solid #e42313;">Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                  $no = 1;
                @endphp
                @foreach ($data as $index => $row)
                <tr>
                  <th scope="row">{{ $index + $data->firstItem() }}</th>
                    <td>{{ $row->namamitra }}</td>
                    <td>{{ $row->kodemitra }}</td>
                    <td>{{ $row->catatan }}</td>

                    <td class="action_button"> 
                        <a href="/detailData/{{ $row->kodemitra }}"type="button" class="btn btn-secondary">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-circle" viewBox="0 0 16 16">
                          <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                          <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z"/>
                          </svg> Detail / Download</a>
                        <a href= "/tampilkanData/{{ $row->id }}" type="button" class="btn btn-warning">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                          </svg> Ubah Catatan</a>
                        <a href="/uploadPage/{{ $row->kodemitra }}" type="button" class="btn btn-success " data-id="{{ $row->id }}"data-namamitra="{{ $row->namamitra }}"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-upload" viewBox="0 0 16 16">
                          <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                          <path d="M7.646 1.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 2.707V11.5a.5.5 0 0 1-1 0V2.707L5.354 4.854a.5.5 0 1 1-.708-.708l3-3z"/>
                          </svg> Upload File</a>  
                        <a href="#" type="button" class="btn btn-danger delete" data-kodemitra="{{ $row->kodemitra }}"data-namamitra="{{ $row->namamitra }}">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                            <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                          </svg> Hapus</a>  
                    </td>
                </tr>
                @endforeach
            </tbody>
            </table>
            {{ $data->links() }}
        </div>
      </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.slim.js" integrity="sha256-DKU1CmJ8kBuEwumaLuh9Tl/6ZB6jzGOBV/5YpNE2BWc=" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
  <script>
    $('.delete').click(function(){
      var kodemitra = $(this).attr('data-kodemitra');
      var namamitra = $(this).attr('data-namamitra');
      swal({
        title: "Yakin ?",
        text: "Anda akan menghapus data mitra dengan nama "+namamitra+" ",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        })
      .then((willDelete) => {
        if (willDelete) {
          window.location = "/deleteData/"+kodemitra+""
          swal("Data mitra berhasil dihapus!", {
            icon: "success",
            });
        } else {
          swal("Data mitra tidak jadi dihapus!");
          }
      });
    });
  </script>
</html>