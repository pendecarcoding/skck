@extends('crudbooster::admin_template')
@section('content')
<style>
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    td, th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }

    tr:nth-child(even) {
      background-color: #dddddd;
    }
    </style>
<section id="content_section" class="content">
    <div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <strong><i class="fa fa-cog"></i>Rekam Sidik Jari</strong>
            </div>
            <div class="panel-body" style="padding:20px 0px 0px 0px">

                    <input type="hidden" name="_token" value="GqeQBikBMZvK7IxVfcWERTNeCWDjV1FRCdFIHMzu">
                    <input type="hidden" name="return_url" value="">
                    <input type="hidden" name="ref_mainpath" value="http://localhost:8001/admin/settings">
                    <input type="hidden" name="ref_parameter" value="">
                    <div class="box-body" id="parent-form-area">
                        <div class="form-group header-group-0 " id="form-group-group_setting" style="">
                            <label class="control-label col-sm-2">
                                Masukan Kode Pendaftaran
                            </label>
                            <div class="col-sm-9">
                                <input type="text" title="Group" placeholder="Scan QR Code" class="form-control"
                                    id="kodescan" value="">
                                <div class="text-danger"></div>
                                <p class="help-block"></p>
                            </div>

                        </div>
                    </div>

                <div class="row">
                    <div id="data-scan">

                    <div class="col-md-12">
                        <table>

                            <tr>
                                <td rowspan="9"><center><img id="image" style="width:170px;height:200px" src="{{ asset('frontend/assets/img/noimage.png') }}" alt=""></center>
                                </td>
                                <td><b>NAMA</b></td>

                                <td><div id="nama-data"></div></td>
                            </tr>
                            <tr>
                                <td><b>NO KTP</b></td>

                                <td><div id="noktp-data"></div></td>
                            </tr>
                            <tr>
                                <td><b>NO PASPORT</b></td>

                                <td><div id="nopasport-data"></div></td>
                            </tr>
                            <tr>
                                <td><b>AGAMA</b></td>

                                <td><div id="agama-data"></div></td>
                            </tr>
                            <tr>
                                <td><b> LAHIR /UMUR</b></td>

                                <td colspan="2"><div id="tgllahir-data"></div></td>
                            </tr>
                            <tr>
                                <td><b>TEMPAT LAHIR</b></td>

                                <td colspan="2"><div id="tempatlahir-data"></div></td>
                            </tr>
                            <tr>
                                <td><b>ALAMAT</b></td>

                                <td colspan="2"><div id="alamat-data"></div></td>
                            </tr>
                            <tr>
                                <td><b>KEDUDUKAN DALAM KELUARGA</b></td>

                                <td colspan="2"><div id="kedudukan-data"></div></td>
                            </tr>
                            <tr>
                                <td><b>PEKERJAAN</b></td>

                                <td colspan="2"><div id="pekerjaan-data"></div></td>
                            </tr>
                            <tr>
                                <td><b> SUAMI/ISTRI</b></td>

                                <td colspan="2"><div id="nama-suis"></div></td>
                            </tr>



                            <tr>
                                <td colspan="3" style="font-weight:bold">CIRI-CIRI BADAN</td>
                            </tr>
                            <tr>
                                <td >RAMBUT</td>

                                <td colspan="2">KOSONG</td>
                            </tr>
                            <tr>
                                <td>TINGGI</td>

                                <td colspan="2">KOSONG</td>
                            </tr>
                            <tr>
                                <td>MUKA</td>

                                <td colspan="2">KOSONG</td>
                            </tr>
                            <tr>
                                <td>TANDA ISTIMEWA</td>

                                <td colspan="2">KOSONG</td>
                            </tr>
                            <tr>
                                <td>KULIT</td>

                                <td colspan="2">KOSONG</td>
                            </tr>
                            <tr>
                                <td style="font-weight:bold">RUMUS SIDIK JARI</td>

                                <td colspan="2"><input id="sidikjari" type="text" class="form-control"></td>
                            </tr>
                            <tr>
                                <td colspan="3" style="font-weight:bold">RIWAYAT SEKOLAH</td>
                            </tr>
                            <tr>
                                <td colspan="3" style="font-weight:bold"><div id="riwayat-sekolah"></div></td>
                            </tr>
                            <tr>
                                <td colspan="3" style="font-weight:bold">KESENANGAN/KEGEMARAN/HOBI</td>
                            </tr>
                            <tr>
                                <td colspan="3" style="font-weight:bold"><div id="hobbies"></div></td>
                            </tr>
                            <tr>
                                <td colspan="3" style="font-weight:bold">CATATAN KRIMINAL YANG ADA</td>
                            </tr>
                            <tr>
                                <td colspan="3" style="font-weight:bold"><div id="catatankriminal"></div></td>
                            </tr>
                            <tr>
                                <td colspan="3" style="font-weight:bold">DATA KETERANGAN LAIN</td>
                            </tr>
                            <tr>
                                <td colspan="3" style="font-weight:bold"></td>
                            </tr>
                        </table>
                        <div class="container-fluid">

                                <label for=""></label>
                                <label for="">Status Pembayaran</label>
                                <br>
                                <input type="hidden" id="nodaftar">
                                <input  id="bayar" type="radio" value="L"> SUDAH BAYAR<br>
                                <button id="btnupdate" style="margin-top:20px;margin-bottom:2x0px;"class="btn btn-success">UPDATE</button>

                        </div>

                    </div>
                    </div>
                </div>
            </div>

            <div class="box-footer" style="background: #F5F5F5">

            </div><!-- /.box-footer-->
            </form>
        </div>
    </div>

    <!--END AUTO MARGIN-->
</section>
<script>
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    const updateBtn = document.getElementById('btnupdate');
    const bayar = document.querySelector('#bayar');
    const id = document.querySelector('#nodaftar');
    const sidikjari = document.querySelector('#sidikjari');

    updateBtn.addEventListener('click', function() {
        if(sidikjari.value ==''){
            alert("Data sidik jari belum diisi");
        }else{
            if (bayar.checked) {
            const xhr = new XMLHttpRequest();
            const url = '{{ Route('updatesidikjari') }}';
            const data = {bayar: bayar.value, id:id.value,sidikjari:sidikjari.value }; // Your data to be saved

            xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                console.log(xhr.responseText);
            }
            };

            xhr.open('POST', url, true);
            xhr.setRequestHeader("Content-Type", "application/json");
            xhr.setRequestHeader("X-CSRF-Token", "{{ csrf_token() }}");
            xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    var data = JSON.parse(xhr.responseText);
                    if(data.status=='success'){
                        document.getElementById('kodescan').value="";
                        document.getElementById("data-scan").style.display="none";
                        alert("Data berhasil diupdate");

                    }
                } else {
                console.error(xhr.statusText);
                }
            }
            };
            xhr.send(JSON.stringify(data));
        }else{
            alert("Klik bagian bayar. dan pastikan apakah pendaftar sudah benar benar bayar");
        }
        }


  });

</script>
<script>
    var nama = document.getElementById("nama-data");
    var noktp = document.getElementById("noktp-data");
    var nopasport = document.getElementById("nopasport-data");
    var agama = document.getElementById("agama-data");
    var tgllahir = document.getElementById("tgllahir-data");
    var tempatlahir = document.getElementById("tempatlahir-data");
    var alamat = document.getElementById("alamat-data");
    var pekerjaan = document.getElementById("pekerjaan-data");
    var namasuis = document.getElementById("nama-suis");
    var namabapak = document.getElementById("nama-bapak");
    var namaibu = document.getElementById("nama-ibu");
    var alamatkl = document.getElementById("alamat-keluarga");
    var riwayatsekolah = document.getElementById("riwayat-sekolah");
    var hobbies = document.getElementById("hobbies");
    var catatankriminal = document.getElementById("catatankriminal");
    var input = document.getElementById("kodescan");
    var nodaftar = document.getElementById("nodaftar");
    var datascan =  document.getElementById("data-scan");
    var image = document.getElementById("image");

input.addEventListener("change", function() {
  var inputValue = input.value;
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    fetch('{{ url('getdatafromtoken') }}', {
    method: 'POST',
    headers: {
    'Content-Type': 'application/json',
    'X-CSRF-Token': csrfToken
  },
    body: JSON.stringify({ token: inputValue })
    })
    .then(response => response.json())
    .then(data => {
    if (data) {
        if(data.status=='L'){
            updateBtn.style.display="none";
            sidikjari.value=data.sidikjari;
            sidikjari.disabled = true;
            bayar.checked = true;
            datascan.style.display="block";
            image.src= data.foto;
            nama.innerHTML = data.nama;
            noktp.innerHTML = data.noktp;
            nopasport.innerHTML = data.nopasport;
            agama.innerHTML = data.agama;
            tgllahir.innerHTML = data.tgllahir;
            tempatlahir.innerHTML = data.tempat_lahir;
            alamat.innerHTML = data.alamat;
            pekerjaan.innerHTML = data.pekerjaan;
            namasuis.innerHTML = data.nmisu;
            namabapak.innerHTML = data.nmbpk;
            namaibu.innerHTML = data.nmib;
            alamatkl.innerHTML = 'Alamat Suami/Istri: '+data.alisu+' | Alamat Ayah: '+data.albpk+' | Alamat Ibu: '+data.alib;
            riwayatsekolah.innerHTML = data.pendidikan;
            hobbies.innerHTML = data.hobbies;
            nodaftar.value= data.id;

            catatankriminal.innerHTML = 'Pernah Perkara : '+data.perkaraapa+', Perkara Saat ini : '+data.currentcriminal+', Bentuk Pelanggaran :'+data.bentukpelanggaran;


        }else{
            updateBtn.style.display="block";
            sidikjari.value=data.sidikjari;
            sidikjari.disabled = false;
            bayar.checked = false;

            datascan.style.display="block";
            image.src= data.foto;
            nama.innerHTML = data.nama;
            noktp.innerHTML = data.noktp;
            nopasport.innerHTML = data.nopasport;
            agama.innerHTML = data.agama;
            tgllahir.innerHTML = data.tgllahir;
            tempatlahir.innerHTML = data.tempat_lahir;
            alamat.innerHTML = data.alamat;
            pekerjaan.innerHTML = data.pekerjaan;
            namasuis.innerHTML = data.nmisu;
            namabapak.innerHTML = data.nmbpk;
            namaibu.innerHTML = data.nmib;
            alamatkl.innerHTML = 'Alamat Suami/Istri: '+data.alisu+' | Alamat Ayah: '+data.albpk+' | Alamat Ibu: '+data.alib;
            riwayatsekolah.innerHTML = data.pendidikan;
            hobbies.innerHTML = data.hobbies;
            nodaftar.value= data.id;

            catatankriminal.innerHTML = 'Pernah Perkara : '+data.perkaraapa+', Perkara Saat ini : '+data.currentcriminal+', Bentuk Pelanggaran :'+data.bentukpelanggaran;


        }



      } else {
      datascan.style.display="none";

      console.log('Data is null or undefined');
    }
  })
    .catch(error => console.error(error));
    });

    </script>
@endsection
