<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Sales Contact Form</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
</head>

<body>
  <div class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col-md-6 mx-auto cf-container">
          <form action="" method="post">
            <div class="cf-cover">
              <center><img style="width:30%"
                  src="https://polresokuselatan.com/wp-content/uploads/2020/09/tribrata_PNG_12-removebg-preview-1-293x300.png">
              </center>
              <div class="session-title row">
                <h2>FORMULIR PENDAFTARAN SKC ONLINE KABUPATEN BENGKALIS</h2>
                <p>Mohon isi data dibawah ini dengan benar. Pemalsuan data dapat dikenakan SANKSI</p>

              </div>
              <center style="align-items: center"><a href="{{ url('/') }}" class="btn btn-danger">Halaman Awal</a></center>

              <hr>
              <div id="datadiri">
                <p>Yang Bertanda Tangan dibawah ini</p>
                <div class="form-row row">
                  <div class="col-md-12">
                    <label for="">Nama Lengkap</label>
                    <input type="text" required="" placeholder="Enter First Name" class="form-control">
                  </div>
                </div>
                <div class="form-row row">
                  <div class="col-md-6">
                    <label for="">Tempat Lahir</label>
                    <input type="text" placeholder="Enter Last Name" class="form-control">
                  </div>
                  <div class="col-md-6">
                    <label for="">Tgl Lahir</label>
                    <input type="date" placeholder="Enter Last Name" class="form-control">
                  </div>
                </div>
                <div class="form-row row">
                  <div class="col-md-6">
                    <label for="">Agama</label>
                    <input type="text" placeholder="Enter Your Company Name" class="form-control">
                  </div>
                  <div class="col-md-6">
                    <label for="">Kebangsaan</label>
                    <input type="text" placeholder="Enter Your Company Name" class="form-control">
                  </div>

                </div>
                <div class="form-row row">
                  <div class="col-md-6">
                    <label for="">Jenis Kelamin</label>
                    <input type="text" placeholder="Enter Your Company Name" class="form-control">
                  </div>
                  <div class="col-md-6">
                    <label for="">Status Perkawinan</label>
                    <input type="text" placeholder="Enter Your Company Name" class="form-control">
                  </div>

                </div>
                <div class="form-row row">
                  <div class="col-md-12">
                    <label for="">Pekerjaan</label>
                    <input type="text" placeholder="Enter Email Address" class="form-control">
                  </div>
                </div>
                <div class="form-row row">
                  <div class="col-md-12">
                    <label for="">Alamat saat ini</label>
                    <textarea placeholder="Enter Message" rows="3" class="form-control"></textarea>
                  </div>
                </div>
                <div class="form-row row">
                  <div class="col-md-12">
                    <label for="">KECAMATAN</label>
                    <input type="text" placeholder="Enter Phone Name" class="form-control">
                  </div>
                </div>
                <div class="form-row row">
                  <div class="col-md-12">
                    <label for="">NO KTP</label>
                    <input type="text" placeholder="Enter Phone Name" class="form-control">
                  </div>
                </div>
                <div class="form-row row">
                  <div class="col-md-12">
                    <label for="">NO PASPORT</label>
                    <input type="text" placeholder="Enter Phone Name" class="form-control">
                  </div>
                </div>

                <div class="form-row row">
                  <div class="col-md-12">
                    <label for="">NO KITAS/KITAP</label>
                    <input type="text" placeholder="Enter Phone Name" class="form-control">
                  </div>
                </div>
                <div class="form-row row">
                  <div class="col-md-12">
                    <label for="">NO TELP/HP</label>
                    <input type="text" placeholder="Enter Phone Name" class="form-control">
                  </div>
                </div>
                <div class="form-row row right">
                  <div class="col-md-12">
                    <a class="btn btn-success w-100">Selanjutnya</a>
                  </div>
                </div>
              </div>
              <div id="datasuis">
                <h5>1. Istri/Suami</h5>
                <p>Menerangkan hal-hal sebagai jawaban/keterangan atas pertanyaan-pertanyaan diajukan sebagai berikut</p>

                <div class="form-row row">
                  <div class="col-md-12">
                    <label for="">Nama</label>
                    <input type="text" name="nmisu" required="" placeholder="Nama Istri/Suami" class="form-control">
                  </div>
                </div>
                <div class="form-row row">
                  <div class="col-md-6">
                    <label for="">Umur</label>
                    <input type="text" name="umisu" placeholder="Umur Istri/Suami" class="form-control">
                  </div>
                  <div class="col-md-6">
                    <label for="">Agama</label>
                    <input type="date" name="agisu" placeholder="Agama Istri/Suami" class="form-control">
                  </div>
                </div>
                <div class="form-row row">
                  <div class="col-md-6">
                    <label for="">Kebangsaan</label>
                    <input type="text" name="keisu" placeholder="Kebangsaan Istri/Suami" class="form-control">
                  </div>
                  <div class="col-md-6">
                    <label for="">Pekerjaan</label>
                    <input type="text" name="pekisu" placeholder="Pekerjaan Istri/Suami" class="form-control">
                  </div>

                </div>

                <div class="form-row row">
                  <div class="col-md-12">
                    <label for="">Alamat saat ini</label>
                    <textarea placeholder="Enter Message" name="alisu" rows="3" class="form-control"></textarea>
                  </div>
                </div>


                <div  class="flex-row">
                  <div class="col-md-6">
                    <a class="btn btn-success w-100">Sebelumnya</a>
                  </div>
                  <div class="col-md-6">
                    <a class="btn btn-success w-100">Selanjutnya</a>
                  </div>

                </div>
              </div>

              <div id="databapak">
                <h5>2. Bapak Sendiri</h5>

                <div class="form-row row">
                  <div class="col-md-12">
                    <label for="">Nama</label>
                    <input type="text" name="nmbpk" required="" placeholder="Nama Bapak" class="form-control">
                  </div>
                </div>
                <div class="form-row row">
                  <div class="col-md-6">
                    <label for="">Umur</label>
                    <input type="text" name="umbpk" placeholder="Umur Bapak " class="form-control">
                  </div>
                  <div class="col-md-6">
                    <label for="">Agama</label>
                    <select name="agbpk" class="form-control">
                      <option value="">--PILIH AGAMA----</option>
                      <option value="ISLAM">ISLAM</option>
                      <option value="KRISTEN">KRISTEN</option>
                      <option value="KATOLIK">KATOLIK</option>
                      <option value="HINDU">HINDU</option>
                      <option value="BUDHA">BUDHA</option>
                      <option value="KONGHUCU">KONGHUCU</option>
                    </select>
                  </div>
                </div>
                <div class="form-row row">
                  <div class="col-md-6">
                    <label for="">Kebangsaan</label>
                    <input type="text" name="kebpk" placeholder="Kebangsaan Bapak" class="form-control">
                  </div>
                  <div class="col-md-6">
                    <label for="">Pekerjaan</label>
                    <input type="text" name="pekbpk" placeholder="Pekerjaan Bapak" class="form-control">
                  </div>

                </div>

                <div class="form-row row">
                  <div class="col-md-12">
                    <label for="">Alamat saat ini</label>
                    <textarea placeholder="Alamat Bapak" name="albpk" rows="3" class="form-control"></textarea>
                  </div>
                </div>


                <div  class="flex-row">
                  <div class="col-md-6">
                    <a class="btn btn-success w-100">Sebelumnya</a>
                  </div>
                  <div class="col-md-6">
                    <a class="btn btn-success w-100">Selanjutnya</a>
                  </div>

                </div>
              </div>

              <div id="dataibu">
                <h5>3. Ibu Sendiri</h5>

                <div class="form-row row">
                  <div class="col-md-12">
                    <label for="">Nama</label>
                    <input type="text" name="nmib" required="" placeholder="Nama Ibu" class="form-control">
                  </div>
                </div>
                <div class="form-row row">
                  <div class="col-md-6">
                    <label for="">Umur</label>
                    <input type="text" name="umib" placeholder="Umur Ibu " class="form-control">
                  </div>
                  <div class="col-md-6">
                    <label for="">Agama</label>
                    <select name="agib" class="form-control">
                      <option value="">--PILIH AGAMA----</option>
                      <option value="ISLAM">ISLAM</option>
                      <option value="KRISTEN">KRISTEN</option>
                      <option value="KATOLIK">KATOLIK</option>
                      <option value="HINDU">HINDU</option>
                      <option value="BUDHA">BUDHA</option>
                      <option value="KONGHUCU">KONGHUCU</option>
                    </select>

                  </div>
                </div>
                <div class="form-row row">
                  <div class="col-md-6">
                    <label for="">Kebangsaan</label>
                    <input type="text" name="keib" placeholder="Kebangsaan Ibu" class="form-control">
                  </div>
                  <div class="col-md-6">
                    <label for="">Pekerjaan</label>
                    <input type="text" name="pekib" placeholder="Pekerjaan Ibu" class="form-control">
                  </div>

                </div>

                <div class="form-row row">
                  <div class="col-md-12">
                    <label for="">Alamat saat ini</label>
                    <textarea placeholder="Alamat Ibu" name="alib" rows="3" class="form-control"></textarea>
                  </div>
                </div>


                <div  class="flex-row">
                  <div class="col-md-6">
                    <a class="btn btn-success w-100">Sebelumnya</a>
                  </div>
                  <div class="col-md-6">
                    <a class="btn btn-success w-100">Selanjutnya</a>
                  </div>

                </div>
              </div>

              <!-- <div class="form-row row agre">
                 <div class="col-md-12">
                   <p><input type="checkbox"> By Selecting This you Agree our <a href="#">Terms & Conditions</a></p>
                 </div>
               </div>
               <div class="form-row row">
                 <div class="col-md-12">
                   <button class="btn btn-primary w-100">Submit</button>
                 </div>
               </div> -->
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

</body>

</html
