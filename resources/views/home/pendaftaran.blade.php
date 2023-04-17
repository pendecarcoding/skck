<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
  <title>Form Pendaftaran SKCK</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
  <link href="{{ asset('frontend/assets/css/home.css') }}" rel="stylesheet" />
</head>

<body style="background-color: #990d0a;color:white">
  <div class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col-md-6 mx-auto cf-container">
          <form action="{{ route('addpendaftaran') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="cf-cover">
              <center><img style="width:30%"
                  src="https://polresokuselatan.com/wp-content/uploads/2020/09/tribrata_PNG_12-removebg-preview-1-293x300.png">
              </center>
              <div class="session-title row">
                <h2>FORMULIR PENDAFTARAN SKCK MASUK DESA POLRES BENGKALIS</h2>
                <p>Mohon isi data dibawah ini dengan benar. Pemalsuan data dapat dikenakan SANKSI</p>

              </div>
              <center style="align-items: center"><a href="{{ url('/') }}" class="btn btn-danger">Halaman Awal</a></center>

              <hr>
              <div id="datadiri">
                <p>Yang Bertanda Tangan dibawah ini</p>
                <div class="form-row row">
                    <div class="col-md-12">
                      <label for="">Upload Foto diri</label><br>
                      <center><image id="preview" src="{{ asset('frontend/assets/img/noimage.png') }}" style="width:200px;height:200px;"></image></center>
                       <br>
                      <input type="file" required="" placeholder="Nama Lengkap" name="foto" id="file"  onchange="tampilkanPreview(this,'preview')" class="form-control">
                    </div>
                  </div>
                  <div class="form-row row">
                    <div class="col-md-12">
                      <label for="">Jenis Pendaftaran</label>
                      <select name="jenis_p" class="form-control" required>
                        <option value="BARU">BARU</option>
                        <option value="PERPANJANG">PERPANJANG</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-row row">
                    <div class="col-md-12">
                      <label for="">Lokasi Pencetakan</label>
                      <select name="lokasi_cetak" class="form-control" required>
                         <option value="">--Pilih Lokasi Cetak--</option>
                         @foreach($lokasicetak as $i => $v)
                         <option value="{{ $v->id }}">{{ $v->alamat_cetak}}</option>
                         @endforeach
                      </select>
                    </div>
                  </div>

                <div class="form-row row">
                  <div class="col-md-12">
                    <label for="">Nama Lengkap</label>
                    <input type="text" required="" placeholder="Nama Lengkap" name="nama" class="form-control">
                  </div>
                </div>
                <div class="form-row row">
                  <div class="col-md-6">
                    <label for="">Tempat Lahir</label>
                    <input type="text" placeholder="Tempat Lahir" name="tempat_lahir" class="form-control">
                  </div>
                  <div class="col-md-6">
                    <label for="">Tgl Lahir</label>
                    <input type="date" placeholder="Tgl Lahir" name="tgllahir" class="form-control">
                  </div>
                </div>
                <div class="form-row row">
                  <div class="col-md-6">
                    <label for="">Agama</label>
                    <select name="agama" class="form-control">
                      <option value="">--PILIH AGAMA----</option>
                      <option value="ISLAM">ISLAM</option>
                      <option value="KRISTEN">KRISTEN</option>
                      <option value="KATOLIK">KATOLIK</option>
                      <option value="HINDU">HINDU</option>
                      <option value="BUDHA">BUDHA</option>
                      <option value="KONGHUCU">KONGHUCU</option>
                    </select>
                  </div>
                  <div class="col-md-6">
                    <label for="">Kebangsaan</label>
                    <input type="text" placeholder="Kebangsaan" name="kebangsaan" class="form-control">
                  </div>

                </div>
                <div class="form-row row">
                  <div class="col-md-6">
                    <label for="">Jenis Kelamin</label>
                      <div class="jk-space">
                        <input type="radio" name="jk" value="Laki-laki">Laki-laki</input>
                        <input type="radio" name="jk" value="Perempuan">Perempuan</input>
                      </div>


                  </div>
                  <div class="col-md-6">
                    <label for="">Status Perkawinan</label>
                    <select required name="statuskawin" class="form-control" id="">
                        <option value="">--Pilih Jenis--</option>
                        <option value="Belum Kawin">Belum Kawin</option>
                        <option value="Kawin">Kawin</option>
                        <option value="Cerai Hidup">Cerai Hidup</option>
                        <option value="Cerai Mati">Cerai Mati</option>
                    </select>
                  </div>

                </div>
                <h5>Ciri Ciri Fisik</h5>
                <div class="form-row row">
                    <div class="col-md-12">
                      <label for="">Rambut</label>
                      <input type="text" placeholder="Tuliskan ciri fisik untuk rambut" name="rambut" class="form-control" required>
                    </div>
                </div>
                <div class="form-row row">
                    <div class="col-md-12">
                      <label for="">Tinggi Badan</label>
                      <input type="number" name="tinggi" class="form-control" required>
                    </div>
                </div>
                <div class="form-row row">
                    <div class="col-md-12">
                      <label for="">Muka</label>
                      <input type="text" placeholder="Tuliskan ciri fisik bentuk muka" name="muka" class="form-control" required>
                    </div>
                </div>
                <div class="form-row row">
                    <div class="col-md-12">
                      <label for="">Tanda Istimewa</label>
                      <input type="text" placeholder="Jika memiliki tanda istimewa tuliskan disini" name="tanda_istimewa" class="form-control" required>
                    </div>
                </div>
                <div class="form-row row">
                    <div class="col-md-12">
                      <label for="">Kulit</label>
                      <input type="text" placeholder="Tuliskan Ciri ciri Kulit" name="kulit" class="form-control" required>
                    </div>
                </div>
                <div class="form-row row">
                  <div class="col-md-12">
                    <label for="">Pekerjaan</label>
                    <input type="text" placeholder="Pekerjaan" name="pekerjaan" class="form-control" required>
                  </div>
                </div>
                <div class="form-row row">
                  <div class="col-md-12">
                    <label for="">Alamat saat ini</label>
                    <textarea placeholder="Alamat" rows="3" class="form-control" name="alamat" required></textarea>
                  </div>
                </div>
                <div class="form-row row">
                  <div class="col-md-12">
                    <label for="">KECAMATAN</label>
                    <select class="form-control" name="kecamatan" required>
                        <option value="">--Pilih Kecamatan--</option>
                        @foreach($kecamatan as $i => $v)
                        <option value="{{ $v->kecamatan }}">{{ $v->kecamatan }}</option>
                        @endforeach
                    </select>
                  </div>
                </div>
                <div class="form-row row">
                  <div class="col-md-12">
                    <label for="">NO KTP</label>
                    <input type="text" placeholder="NO KTP" name="noktp" class="form-control" required>
                  </div>
                </div>


                <div class="form-row row">
                  <div class="col-md-12">
                    <label for="">NO TELP/HP</label>
                    <input type="text" placeholder="NO HP" name="nohp" class="form-control" required>
                  </div>
                </div>
                <div class="space-button">
                <div class="form-row row right">
                  <div class="col-md-12">
                    <a onclick="goto('datadiri','datasuis')" style="color:white" class="btn btn-success w-100 cl-white">Selanjutnya</a>
                  </div>
                </div>
                </div>
              </div>
              <div id="datasuis">
                <h5>1. Istri/Suami</h5>
                <p>Menerangkan hal-hal sebagai jawaban/keterangan atas pertanyaan-pertanyaan diajukan sebagai berikut</p>

                <div class="form-row row">
                  <div class="col-md-12">
                    <label for="">Nama</label>
                    <input type="text" name="nmisu" placeholder="Nama Istri/Suami" class="form-control">
                  </div>
                </div>
                <div class="form-row row">
                  <div class="col-md-6">
                    <label for="">Umur</label>
                    <input type="text" name="umisu" placeholder="Umur Istri/Suami" class="form-control">
                  </div>
                  <div class="col-md-6">
                    <label for="">Agama</label>
                    <select name="agisu" class="form-control">
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

                <div class="space-button">
                <div  class="flex-row">
                  <div class="col-md-6">
                    <a onclick="goto('datasuis','datadiri')" style="color:white" class="btn btn-success w-100">Sebelumnya</a>
                  </div>
                  <div class="col-md-6">
                    <a onclick="goto('datasuis','perkara')" style="color:white" class="btn btn-success w-100 cl-white">Selanjutnya</a>
                  </div>

                </div>
                </div>
              </div>

              <div id="perkara">
                <h5>2. Riwayat Sekolah</h5>


                <div class="form-row row">
                  <div class="col-md-12">
                    <label for="">Jenjang Pendidikan , Tahun Lulus</label>
                    <textarea placeholder="contoh: 1 . SMA , 2015" name="pendidikan" rows="3" class="form-control"></textarea>
                  </div>
                </div>

                <h5>II. Tersangkut Perkara Pidana dan Pelanggaran <i>Criminal case Lodged and Abuse</i></h5>


                <div class="form-row row">
                  <div class="col-md-12">
                    <label for="">1. Perkara Pidana <i>(Criminal Case)</i> : </label>
                    <label>a. Apakah Saudara pernah tersangkut perkara pidana ? <i>Have you ever caught in a criminal case ? </i></label>
                    <textarea placeholder="tuliskan jika ada jika tidak beri tanda  - " name="pernahpidana" rows="3" class="form-control"></textarea>
                  </div>
                </div>

                <div class="form-row row">
                    <div class="col-md-12">
                      <label>b. Dalam perkara apa ? <i>(In what kind of case)</i></label>
                      <textarea placeholder="tuliskan jika ada jika tidak beri tanda  - " name="perkaraapa" rows="3" class="form-control"></textarea>
                    </div>
                  </div>

                  <div class="form-row row">
                    <div class="col-md-12">
                      <label>c. Bagaimana putusannya dan Vonis hakim ?<i>(What is the decision of the judge and verdict ?)</i></label>
                      <textarea placeholder="tuliskan jika ada jika tidak beri tanda  - " name="putusan" rows="3" class="form-control"></textarea>
                    </div>
                  </div>

                  <div class="form-row row">
                    <div class="col-md-12">
                      <label>d. Apakah saudara sedang dalam proses perkara pidana ? Kasus apa ? <i>(Are you currently in the process of a criminal case ? what kind of case?)</i></label>
                      <textarea placeholder="tuliskan jika ada jika tidak beri tanda  - " name="currentcriminal" rows="3" class="form-control"></textarea>
                    </div>
                  </div>

                  <div class="form-row row">
                    <div class="col-md-12">
                      <label>e. Sampai sejauh mana proses hukumnya  ?<i>(what extend is the legal process ?)</i></label>
                      <textarea placeholder="tuliskan jika ada jika tidak beri tanda  - " name="extendlegal" rows="3" class="form-control"></textarea>
                    </div>
                  </div>

                  <div class="form-row row">
                    <div class="col-md-12">
                      <label for="">2. Pelanggaran <i>(Violation)</i> : </label>
                      <label>a. Apakah Saudara pernah melakukan pelanggaran hukum dan atau norma-norma sosial ? <i>Have you ever Violation of the law ? </i></label>
                      <textarea placeholder="tuliskan jika ada jika tidak beri tanda  - " name="pernahmelanggar" rows="3" class="form-control" required></textarea>
                    </div>
                  </div>

                  <div class="form-row row">
                    <div class="col-md-12">
                      <label>b. Pelanggaran hukum atau norma-norma sosial apa saja ? <i>What kind of Violation of the law? </i></label>
                      <textarea placeholder="tuliskan jika ada jika tidak beri tanda  - " name="bentukpelanggaran" rows="3" class="form-control" required></textarea>
                    </div>
                  </div>

                  <div class="form-row row">
                    <div class="col-md-12">
                      <label>c. Sampai sejauh mana prosesnya ? <i>To what extend is the process? </i></label>
                      <textarea placeholder="tuliskan jika ada jika tidak beri tanda  - " name="extendprocess" rows="3" class="form-control" required></textarea>
                    </div>
                  </div>

                  <h5>III. Informasi Lain <i>OTHER INFORMATION</i></h5>


                <div class="form-row row">
                  <div class="col-md-12">
                    <label for="">1. Riwayat Pekerjaan / negara-negara yang pernah dikunjungi / <i>Work experience and countries you have ever visited before</i> (Sebutkan tahun berapa, dalam rangka apa dan negara mana yang dikunjungi): </label>

                    <textarea placeholder="tuliskan jika ada jika tidak beri tanda  - " name="experiencecountry" rows="3" class="form-control"></textarea>
                  </div>
                </div>

                 <div class="form-row row">
                  <div class="col-md-12">
                    <label for="">2. Kesenangan / Kegemaran / Hobi / <i>Pleasure / Foudness / Hobbies</i> </label>

                    <textarea placeholder="tuliskan jika ada jika tidak beri tanda  - " name="hobbies" rows="3" class="form-control"></textarea>
                  </div>
                </div>

                  <div class="form-row row">
                  <div class="col-md-12">
                    <label for="">3. Alamat yang mudah dihubungi (no. telpon)<i> Contact no. in case of emergency (phone number)</i> </label>

                    <textarea placeholder="tuliskan jika ada jika tidak beri tanda  - " name="phonenumber" rows="3" class="form-control"></textarea>
                  </div>
                </div>




                <div class="form-row row">
                    <div class="col-md-12">
                        <label for="">Keterangan diatas saya buat sebenarnya atas sumpah menurut kepercayaan saya, apabila dikemudian hari ternyata keterangan ini tidak benar maka saya sanggup dituntut berdasarkan hukum yane berlaku<i>I have made the above statement the truth according to my own belief, if in the near future this information trun out to be false then i could be prosecuted under applicable laws</i></label>
                        <canvas  id="signature-pad" width="400" height="200"></canvas>
						<input type="hidden" name="ttd" id="ttdresult" value="">
                    </div>
                    <div class="clear-btn" style="margin-left:5px;">
                        <a onclick="clearsignature()" class="btn btn-primary" ><span> Clear </span></a>
                    </div>
                </div>







                <div class="space-button">
                    <div  class="flex-row">
                        <div class="col-md-6">
                          <a onclick="goto('perkara','datasuis')" style="color:white" class="btn btn-success w-100">Sebelumnya</a>
                        </div>
                        <div class="col-md-6">
                          <button style="width:100%" class="btn btn-success" type="submit">Simpan</button>
                        </div>

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
  <script src="https://cdn.jsdelivr.net/npm/signature_pad@4.0.0/dist/signature_pad.umd.min.js"></script>

  <script>
       const canvas = document.getElementById("signature-pad");

const signaturePad = new SignaturePad(canvas);

// Returns signature image as data URL (see https://mdn.io/todataurl for the list of possible parameters)
signaturePad.toDataURL(); // save image as PNG
signaturePad.toDataURL("image/jpeg"); // save image as JPEG
signaturePad.toDataURL("image/jpeg", 0.5); // save image as JPEG with 0.5 image quality
signaturePad.toDataURL("image/svg+xml"); // save image as SVG data url

// Return svg string without converting to base64



// // Draws signature image from data URL (mostly uses https://mdn.io/drawImage under-the-hood)
// // NOTE: This method does not populate internal data structure that represents drawn signature. Thus, after using #fromDataURL, #toData won't work properly.
// signaturePad.fromDataURL("data:image/png;base64,iVBORw0K...");

// // Draws signature image from data URL and alters it with the given options
// signaturePad.fromDataURL("data:image/png;base64,iVBORw0K...", { ratio: 1, width: 400, height: 200, xOffset: 100, yOffset: 50 });

// Returns signature image as an array of point groups
const data = signaturePad.toData();

// Draws signature image from an array of point groups
signaturePad.fromData(data);

// Draws signature image from an array of point groups, without clearing your existing image (clear defaults to true if not provided)
signaturePad.fromData(data, { clear: false });

// Clears the canvas
signaturePad.clear();

// Returns true if canvas is empty, otherwise returns false
signaturePad.isEmpty();

// Unbinds all event handlers
signaturePad.off();

// Rebinds all event handlers
signaturePad.on();

canvas.addEventListener("mouseleave", function(event) {
        // Do something when the user releases the mouse button
		document.getElementById("ttdresult").value = signaturePad.toDataURL();
        console.log("User has finished drawing on the canvas"+signaturePad.toDataURL());


    });


     </script>

     <script>
        function getimage() {
            var img = signaturePad.toDataURL();
            console.log(img);
        }

        function clearsignature() {

            signaturePad.clear();
        }

     </script>
  <script>
    function goto(from,to) {
        document.getElementById(from).style.display = "none";
        document.getElementById(to).style.display = "block";
    }
    </script>

<script>
    function tampilkanPreview(gambar,idpreview){
      //membuat objek gambar
        var gb = gambar.files;
      //loop untuk merender gambar
          for (var i = 0; i < gb.length; i++){
            //bikin variabel
              var gbPreview = gb[i];
              var imageType = /image.*/;
              var preview=document.getElementById(idpreview);
              var reader = new FileReader();
                if (gbPreview.type.match(imageType)) {
                //jika tipe data sesuai
                  preview.file = gbPreview;
                  reader.onload = (function(element) {
                    return function(e) {
                        element.src = e.target.result;
                    };
                  })(preview);
                  //membaca data URL gambar
                  reader.readAsDataURL(gbPreview);
                }
                else{
                //jika tipe data tidak sesuai
                  alert("Type file tidak sesuai. Khusus image.");
                  document.getElementById("file").value = "";
                }
          }
    }
    </script>

</body>

</html
