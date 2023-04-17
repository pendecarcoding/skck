<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Kartu Pendaftaran</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.3.0/paper.css">
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
  <style>@page { size: A5 }</style>
</head>

<body onload="convertToImage()">
  <div class="container-fluid">
    <div class="container">
      <div class="row">
        <div id="myDiv" class="col-md-4 mx-auto cf-container">
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
                          <tr>
                            <td>LOKASI CETAK</td>
                            <td>:</td>
                            <td><b>{{ $data->alamat_cetak }}</b></td>
                          </tr>

                      </table>


                    </div>
                    <div class="card-footer">
                      <p>Perhatian tunjukan kartu ini kepada petugas guna untuk memperoses pembuatan SKCK </p>
                    </div>
            </div>

        </div>
      </div>
    </div>
  </div>
  <script src="{{ asset('html2canvas.js') }}"></script>
  <script>
    function convertToImage() {
      html2canvas(document.querySelector("#myDiv")).then(function(canvas) {
        var img = canvas.toDataURL("image/png");
        var link = document.createElement('a');
        link.download = 'myimage.png';
        link.href = img;
        link.click();
      });
    }
    </script>

</body>

</html
