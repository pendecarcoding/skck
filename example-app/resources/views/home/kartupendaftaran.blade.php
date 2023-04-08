<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Sales Contact Form</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
</head>

<body>
  <div id="myDiv" class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col-md-4 mx-auto cf-container">
            <div class="kartu-skck">
                <div class="card-header">
                    <center><h5>Kartu Pendaftaran SKCK</h5></center>
                </div>
                <div class="card-body">
                    <center>{!! QrCode::size(200)->generate($data->id) !!}</center>
<table>
                        <tr>
                          <th></th>
                          <th></th>
                        </tr>
                        <tr>
                          <td>NAMA</td>
                          <td>:</td>
                          <td><b>{{ $data->nama }}</b></td>
                        </tr>
                        <tr>
                            <td>NO PENDAFTARAN</td>
                            <td>:</td>
                            <td><b>{{ $data->id }}</b></td>
                          </tr>
                          <tr>
                            <td>NO HP</td>
                            <td>:</td>
                            <td><b>{{ $data->nohp }}</b></td>
                          </tr>
                          <tr>
                            <td>KECAMATAN</td>
                            <td>:</td>
                            <td><b>{{ $data->kecamatan }}</b></td>
                          </tr>
                          <tr>
                            <td>ALAMAT</td>
                            <td>:</td>
                            <td><b>{{ $data->alamat }}</b></td>
                          </tr>
                          <tr>
                            <td>STATUS</td>
                            <td>:</td>
                            <td><b>@if($data->status=='T') MENDAFTAR @endif</b></td>
                          </tr>

                      </table>


                    </div>
                    <div class="card-footer">
                        <a href="{{ url('downloadkartu/'.$data->id) }}" class="btn btn-danger" style="width:100%;color:white;">Download Kartu</a>
                    </div>
            </div>

        </div>
      </div>
    </div>
  </div>

</body>

</html
