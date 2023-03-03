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

      .container {
        margin-top: 20px;
      }
      
      .navbar {
        background-color: #fff;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 15px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        position: fixed;
      }

      .navbar-logo img {
        height: 75px;
        
      }

      .navbar-logo {
        display: flex;
        align-items: center;
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
    </nav>
    <div class="container">
      
      <a href="/daftarMitra" class="btn btn-secondary mb-2">Back</a>
      
      <form action="/detailData/{{ $data->kodemitra }}" method="GET" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col">
              <div class="card mb-4">
                <div class="card-title mt-2" style="text-align: center;">
                  <h1>Detail Mitra</h1>
                </div>
              <div class="card-body">
                  <div class="mb-3">
                    <label for="Mitra" class="form-label">Nama Mitra</label>
                    <input type="text" class="form-control" name="namamitra" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->namamitra }}" readonly>
                  </div>
                  <div class="mb-3">
                    <label for="Mitra" class="form-label">Kode Mitra</label>
                    <input type="text" class="form-control" name="kodemitra" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->kodemitra }}" readonly>
                  </div>
                  <div class="mb-3">
                    <label for="Mitra" class="form-label">Catatan</label>
                    <input type="text" class="form-control " name="catatan" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->catatan }}" readonly>
                  </div>
                  
                  </form>
              </div>
              </div>
            </div>
            
                </div>
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col" style="border-bottom: 3px solid #e42313;">Kode Mitra</th>
                      <th scope="col" style="border-bottom: 3px solid #e42313;">Jenis File</th>
                      <th scope="col" style="border-bottom: 3px solid #e42313;">Nama File</th>
                      <th scope="col" style="border-bottom: 3px solid #e42313;">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  @php
                    $no = 1;
                  @endphp
                  @foreach ($file as $index => $row)
                  <tr>
                  <td>{{ $row->kodemitra }}</td>
                  <td>{{ $row->jenisfile }}</td>
                  <td>{{ $row->namafile }}</td>
                  <td>
                  <a href="{{ url('/download?file=' .$row->namafile) }}"type="button" class="btn btn-success">Download</a>
                  <a href="/deleteFile/{{$row->kodemitra}}/{{$row->namafile}}"type="button" class="btn btn-danger">Delete</a>
                  </td>
                  </tr>
                  @endforeach
                  </tbody>
                </table>
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