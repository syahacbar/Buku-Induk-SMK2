<style type="text/css">
  .modal-body {
    height: 450px;
    min-height: 450px;
    max-height: 450px;
    overflow-y: scroll;
  }

  .tanggalterima label,
  .col-md-6.jeniskelamin label {
    font-weight: normal;
  }
</style>
<div id="page-wrapper">
  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Data Buku Induk</h1>
    </div>
    <!-- /.col-lg-12 -->
  </div>
  <!-- /.row -->
  <div class="row">
    <div class="col-lg-12">
      <div class="panel panel-default">
        <div class="panel-heading">
          <button id="btnAdd" type="button" class="btn btn-sm btn-info">Tambah Data</button>
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
          <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
              <tr>
                <th width="100">#</th>
                <th>#</th>
                <th>Nama Lengkap</th>
                <th>Nama Panggilan</th>
                <th>NIPD</th>
                <th>NISN</th>
                <th>NIK</th>
                <th>JK</th>
                <th>Tempat Tanggal Lahir</th>
                <th>Kelas</th>
              </tr>
            </thead>
            <tbody>
              <?php 
              $no = 1;
              foreach ($datasiswa AS $ds) : 
                ?>
                <tr>
                  <td>
                    <a target="_blank" href="<?php echo site_url('welcome/detail/').$ds->nipd;?>" class="btn btn-sm btn-success"><i class="fa fa-print"></i></a>
                    <a class="btn btn-sm btn-primary btnEdit" data-nipd="<?php echo $ds->nipd;?>"><i class="fa fa-edit"></i></a>
                    <a class="btn btn-sm btn-danger btnDelete" data-nipd="<?php echo $ds->nipd;?>"><i class="fa fa-trash"></i></a>
                  </td>
                  <td><?php echo $no++; ?></td>
                  <!-- ket diri siswa -->
                  <td><?php echo $ds->namalengkap;?></td>
                  <td><?php echo $ds->namapanggilan;?></td>
                  <td><?php echo $ds->nipd;?></td>
                  <td><?php echo $ds->nisn;?></td>
                  <td><?php echo $ds->nik;?></td>
                  <td><?php echo $ds->jeniskelamin;?></td>
                  <td><?php echo $ds->ttl;?></td>
                  <td><?php echo $ds->kompkeahlian;?></td>

                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
        <!-- /.panel-body -->
      </div>
      <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
  </div>

</div>

<!-- Modal -->
<div class="modal fade" id="modalRegister" tabindex="-1" role="dialog" aria-labelledby="modalRegisterLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form id="formbukuinduk" method="POST">
      <div class="modal-content">
        <div class="modal-header">
          <div id="titlemodal"></div>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="form-group">
                <input type="text" class="form-control" id="nipd" name="nipd" placeholder="NIPD" required>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="form-group">
                <input type="text" class="form-control" id="nisn" name="nisn" placeholder="NISN" >
              </div>   
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="form-group">
                <input type="text" class="form-control" id="nik" name="nik" placeholder="NIK" >
              </div>   
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <h6>KETERANGAN DIRI SISWA</h6>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="form-group">
                <input type="text" class="form-control" id="namalengkap" name="namalengkap" placeholder="Nama Lengkap Siswa" >
              </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="form-group">
                <input type="text" class="form-control" id="namapanggilan" name="namapanggilan" placeholder="Nama Panggilan Siswa" >
              </div>
            </div>

            <div class="col-md-6 jeniskelamin">
              <label>Jenis Kelamin</label>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-check">
                    <input class="form-check-input jeniskelamin" type="radio" name="jeniskelamin" id="jeniskelamin" value="Laki-laki" required checked>
                    <label class="form-check-label" for="jeniskelamin">Laki-Laki</label>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-check">
                    <input class="form-check-input jeniskelamin" type="radio" name="jeniskelamin" id="jeniskelamin" value="Perempuan" required>
                    <label class="form-check-label" for="jeniskelamin">Perempuan</label>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="form-group">
                <input type="text" class="form-control" id="ttl" name="ttl" placeholder="Tempat, Tanggal Lahir" required>
              </div>
            </div>


            <div class="col-md-6">
              <div class="form-group">
                <!-- <label>Agama</label> -->
                <select id="agama" name="agama" class="form-control form-select" required>
                  <option>Pilih Agama</option>
                  <option value="Islam">Islam</option>
                  <option value="Kristen">Kristen</option>
                  <option value="Katolik">Katolik</option>
                  <option value="Hindu">Hindu</option>
                  <option value="Budha">Budha</option>
                  <option value="Konghucu">Konghucu</option>
                </select>
              </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="form-group">
                <input type="text" class="form-control" id="kewarganegaraan" name="kewarganegaraan" placeholder="Kewarganegaraan" >
              </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="form-group">
                <input type="number" class="form-control" id="anakke" name="anakke" placeholder="Anak ke Berapa" >
              </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="form-group">
                <input type="number" class="form-control" id="sdrkandung" name="sdrkandung" placeholder="Jumlah Saudara Kandung" >
              </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="form-group">
                <input type="number" class="form-control" id="sdrtiri" name="sdrtiri" placeholder="Jumlah Saudara Tiri" >
              </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="form-group">
                <input type="number" class="form-control" id="sdrangkat" name="sdrangkat" placeholder="Jumlah Saudara Angkat" >
              </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="form-group">
                <input type="text" class="form-control" id="anakyatim" name="anakyatim" placeholder="Anak Yatim/Piatu/Yatim-Piatu" >
              </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="form-group">
                <input type="text" class="form-control" id="bahasa" name="bahasa" placeholder="Bahasa Sehari-hari di Rumah" >
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-12">
              <h6>KETERANGAN TEMPAT TINGGAL</h6>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="form-group">
                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat Tinggal Siswa" >
              </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="form-group">
                <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="Nomor HP" >
              </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="form-group">
                <input type="text" class="form-control" id="jenis_tinggal" name="jenis_tinggal" placeholder="Jenis Tinggal" >
              </div>
            </div>


            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="form-group">
                <input type="number" class="form-control" id="jarak" name="jarak" placeholder="Jarak Tempat Tinggal ke Sekolah" >
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <h6>KETERANGAN KESEHATAN</h6>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="form-group">
                <input type="text" class="form-control" id="gol_darah" name="gol_darah" placeholder="Golongan Darah" >
              </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="form-group">
                <input type="text" class="form-control" id="riwayat_sakit" name="riwayat_sakit" placeholder="Penyakit yang Pernah Diderita" >
              </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="form-group">
                <input type="text" class="form-control" id="kelainan" name="kelainan" placeholder="Kelainan Jasmani" >
              </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="form-group">
                <input type="text" class="form-control" id="tinggi_berat" name="tinggi_berat" placeholder="Tinggi dan Berat Badan" >
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-12">
              <h6>KETERANGAN PENDIDIKAN</h6>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="form-group">
                <input type="text" class="form-control" id="lulus_dari" name="lulus_dari" placeholder="Lulusan Dari" >
              </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="form-group">
                <input type="text" class="form-control" id="tglno_sttb" name="tglno_sttb" placeholder="Tanggal dan Nomor STTB" >
              </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="form-group">
                <input type="text" class="form-control" id="lama_belajar" name="lama_belajar" placeholder="Lama Belajar" >
              </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="form-group">
                <input type="text" class="form-control" id="pindah_dari" name="pindah_dari" placeholder="Pindahan Dari" >
              </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="form-group">
                <input type="text" class="form-control" id="alasan" name="alasan" placeholder="Alasan Pindah" >
              </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="form-group">
                <input type="text" class="form-control" id="kelas" name="kelas" placeholder="Di Tingkat" >
              </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="form-group">
                <input type="text" class="form-control" id="progkeahlian" name="progkeahlian" placeholder="Program Keahlian" >
              </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="form-group">
                <input type="text" class="form-control" id="kompkeahlian" name="kompkeahlian" placeholder="Kompetensi Keahlian" >
              </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 tanggalterima">
              <div class="form-group">
                <label>Tanggal Terima</label>
                <input type="text" class="form-control" id="tgl_terima" name="tgl_terima" placeholder="Tanggal Terima" >
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-12">
              <h6>KETERANGAN AYAH KANDUNG</h6>
            </div>                
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="form-group">
                <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" placeholder="Nama Lengkap Ayah" >
              </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="form-group">
                <input type="text" class="form-control" id="ttl_ayah" name="ttl_ayah" placeholder="Tempat, Tanggal Lahir" >
              </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="form-group">
                <input type="text" class="form-control" id="agama_ayah" name="agama_ayah" placeholder="Agama Ayah" >
              </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="form-group">
                <input type="text" class="form-control" id="kewarganegaraan_ayah" name="kewarganegaraan_ayah" placeholder="Kewarganegaraan" >
              </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="form-group">
                <input type="text" class="form-control" id="pendidikan_ayah" name="pendidikan_ayah" placeholder="Pendidikan Terakhir Ayah" >
              </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="form-group">
                <input type="text" class="form-control" id="pekerjaan_ayah" name="pekerjaan_ayah" placeholder="Pekerjaan Ayah" >
              </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="form-group">
                <input type="text" class="form-control" id="penghasilan_ayah" name="penghasilan_ayah" placeholder="Penghasilan Ayah" >
              </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="form-group">
                <input type="text" class="form-control" id="alamat_ayah" name="alamat_ayah" placeholder="Alamat Rumah & Nomor HP" >
              </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="form-group">
                <input type="text" class="form-control" id="status_ayah" name="status_ayah" placeholder="Status Ayah" >
              </div>
            </div>
          </div>


          <div class="row">
            <div class="col-sm-12">
              <h6>KETERANGAN IBU KANDUNG</h6>
            </div>                
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="form-group">
                <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" placeholder="Nama Lengkap Ibu" >
              </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="form-group">
                <input type="text" class="form-control" id="ttl_ibu" name="ttl_ibu" placeholder="Tempat, Tanggal Lahir" >
              </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="form-group">
                <input type="text" class="form-control" id="agama_ibu" name="agama_ibu" placeholder="Agama Ibu" >
              </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="form-group">
                <input type="text" class="form-control" id="kewarganegaraan_ibu" name="kewarganegaraan_ibu" placeholder="Kewarganegaraan" >
              </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="form-group">
                <input type="text" class="form-control" id="pendidikan_ibu" name="pendidikan_ibu" placeholder="Pendidikan Terakhir Ibu" >
              </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="form-group">
                <input type="text" class="form-control" id="pekerjaan_ibu" name="pekerjaan_ibu" placeholder="Pekerjaan Ibu" >
              </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="form-group">
                <input type="text" class="form-control" id="penghasilan_ibu" name="penghasilan_ibu" placeholder="Penghasilan Ibu" >
              </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="form-group">
                <input type="text" class="form-control" id="alamat_ibu" name="alamat_ibu" placeholder="Alamat Rumah & Nomor HP" >
              </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="form-group">
                <input type="text" class="form-control" id="status_ibu" name="status_ibu" placeholder="Status Ibu" >
              </div>
            </div>
          </div>


          <div class="row">
            <div class="col-sm-12">
              <h6>KETERANGAN WALI</h6>
            </div>                
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="form-group">
                <input type="text" class="form-control" id="nama_wali" name="nama_wali" placeholder="Nama Lengkap Wali" >
              </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="form-group">
                <input type="text" class="form-control" id="ttl_wali" name="ttl_wali" placeholder="Tempat, Tanggal Lahir" >
              </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="form-group">
                <input type="text" class="form-control" id="agama_wali" name="agama_wali" placeholder="Agama Wali" >
              </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="form-group">
                <input type="text" class="form-control" id="kewarganegaraan_wali" name="kewarganegaraan_wali" placeholder="Kewarganegaraan" >
              </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="form-group">
                <input type="text" class="form-control" id="pendidikan_wali" name="pendidikan_wali" placeholder="Pendidikan Terakhir Wali" >
              </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="form-group">
                <input type="text" class="form-control" id="pekerjaan_wali" name="pekerjaan_wali" placeholder="Pekerjaan Wali" >
              </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="form-group">
                <input type="text" class="form-control" id="penghasilan_wali" name="penghasilan_wali" placeholder="Penghasilan Wali" >
              </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="form-group">
                <input type="text" class="form-control" id="alamat_wali" name="alamat_wali" placeholder="Alamat Rumah & Nomor HP" >
              </div>
            </div>

          </div>

          <div class="row">
            <div class="col-sm-12">
              <h6>KEGEMARAN SISWA</h6>
            </div>  
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="form-group">
                <input type="text" class="form-control" id="kesenian" name="kesenian" placeholder="Kesenian" >
              </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="form-group">
                <input type="text" class="form-control" id="olahraga" name="olahraga" placeholder="Olahraga" >
              </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="form-group">
                <input type="text" class="form-control" id="organisasi" name="organisasi" placeholder="Kemasyarakatan/Organisasi" >
              </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="form-group">
                <input type="text" class="form-control" id="lain_lain" name="lain_lain" placeholder="Lain-Lain" >
              </div>
            </div>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-light" data-dismiss="modal">Batal</button>
          <input type="hidden" name="actionform" id="actionform">
          <input id="btnsubmitform" type="submit" name="submit" class="btn btn-primary btn-sm" value="SIMPAN">
        </div>
      </div>
    </form>
  </div>
</div>

 <!-- The Modal -->
        <div class="modal fade" id="modalEdit">
            <div class="modal-dialog">
                <div class="modal-content">
                <!-- Modal Header -->
                <form id="formedit" method="POST">
                <div class="modal-header">
                    <h4 class="modal-title" id="judul"></h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <div id="tampil_modal">
                        <!-- Data akan di tampilkan disini-->
                    </div>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Batal</button>
                    <input type="hidden" name="actionform" id="actionform">
                    <input id="save_edit" type="submit" name="submit" class="btn btn-primary btn-sm" value="SIMPAN">
                </div>
              </form>
                </div>
            </div>
        </div>
<!-- /#page-wrapper -->
<!-- DataTables JavaScript -->
<script src="<?php echo base_url();?>/assets/startbootstrap/vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>/assets/startbootstrap/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url();?>/assets/startbootstrap/vendor/datatables-responsive/dataTables.responsive.js"></script>
<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script>
  $(document).ready(function() {
    $('#dataTables-example').DataTable({
      responsive: true
    });
    $("#btnAdd").click(function () {
      $('#formbukuinduk').trigger("reset");  
      $('#modalRegister').modal('show');
      $('input#actionform').val('add');
      $('div#titlemodal').html('<h5 class="modal-title" id="modalRegisterLabel">TAMBAH DATA BARU</h5>');
    });

    // $("#btnEdit").click(function () { 
    //   $('#modalRegister').modal('show');
    //   $('input#actionform').val('edit');
    //   $('div#titlemodal').html('<h5 class="modal-title" id="modalRegisterLabel">EDIT DATA</h5>');
    //   $('input#nipd').val($(this).attr('data-nipd'));
    //   $('input#nipd').attr('readonly','readonly');
    //   var nipd = $(this).attr('data-nipd');
    // });

    $("#dataTables-example").on("click", ".btnEdit", function(){
        var nipd = $(this).attr("data-nipd");
        $.ajax({
            url: '<?php echo base_url(); ?>/welcome/edit',
            method: 'post',
            data: {nipd:nipd},
            success:function(data){
                $('#modalEdit').modal("show");
                $('#tampil_modal').html(data);
                $('input#tampilNIPD').attr('readonly','readonly');
                 $('input#actionform').val('edit');
                document.getElementById("judul").innerHTML='Edit Data Buku Induk';  
            }
        });
    });

    $("#save_edit").click(function(){
        var data = $('#formedit').serialize();
        $.ajax({
            type  : 'POST',
            url:"<?php echo site_url('welcome/editsave');?>",  
            data: data,
            cache : false,
            success : function(data){
                var objData = jQuery.parseJSON(data);
                console.log(objData.status);
                //$('#modalEdit').modal('hide');  
            }
        });
    });

    $("#dataTables-example").on("click", ".btnDelete", function(){
      var nipd = $(this).attr("data-nipd");
      var confirmation = confirm("Anda yakin akan menghapus?");
      if (confirmation) {
        $.ajax({
            url: '<?php echo base_url(); ?>/welcome/delete',
            method: 'post',
            data: {nipd:nipd},
            success:function(data){
              var objData = jQuery.parseJSON(data);
              console.log(objData.status);  
              location.reload();
            }
        });
      }
    });


    $("#formbukuinduk").submit(function (e) {
      e.preventDefault();
      //KET DIRI SISWA
      var nipd = $('input#nipd').val();
      var nisn = $('input#nisn').val();
      var nik = $('input#nik').val();
      var namalengkap = $('input#namalengkap').val();
      var namapanggilan = $('input#namapanggilan').val();
      var jeniskelamin = $('input#jeniskelamin').val();
      var ttl = $('input#ttl').val();
      var agama = $('select#agama').val();
      var kewarganegaraan = $('input#kewarganegaraan').val();
      var anakke = $('input#anakke').val();
      var sdrkandung = $('input#sdrkandung').val();
      var sdrtiri = $('input#sdrtiri').val();
      var sdrangkat = $('input#sdrangkat').val();
      var anakyatim = $('input#anakyatim').val();
      var bahasa = $('input#bahasa').val();
      //KET ALAMAT
      var alamat = $('input#alamat').val();
      var no_hp = $('input#no_hp').val();
      var jenis_tinggal = $('input#jenis_tinggal').val();
      var jarak = $('input#jarak').val();
      //KET KESEHATAN
      var gol_darah = $('input#gol_darah').val();
      var riwayat_sakit = $('input#riwayat_sakit').val();
      var kelainan = $('input#kelainan').val();
      var tinggi_berat = $('input#tinggi_berat').val();
      //KET PENDIDIKAN
      var lulus_dari = $('input#lulus_dari').val();
      var tglno_sttb = $('input#tglno_sttb').val();
      var lama_belajar = $('input#lama_belajar').val();
      var pindah_dari = $('input#pindah_dari').val();
      var alasan = $('input#alasan').val();
      var kelas = $('input#kelas').val();
      var progkeahlian = $('input#progkeahlian').val();
      var kompkeahlian = $('input#kompkeahlian').val();
      var tgl_terima = $('input#tgl_terima').val();
      //KET AYAH KANDUNG
      var nama_ayah = $('input#nama_ayah').val();
      var ttl_ayah = $('input#ttl_ayah').val();
      var agama_ayah = $('input#agama_ayah').val();
      var kewarganegaraan_ayah = $('input#kewarganegaraan_ayah').val();
      var pendidikan_ayah = $('input#pendidikan_ayah').val();
      var pekerjaan_ayah = $('input#pekerjaan_ayah').val();
      var penghasilan_ayah = $('input#penghasilan_ayah').val();
      var alamat_ayah = $('input#alamat_ayah').val();
      var status_ayah = $('input#status_ayah').val();
      //KET IBU KANDUNG
      var nama_ibu = $('input#nama_ibu').val();
      var ttl_ibu = $('input#ttl_ibu').val();
      var agama_ibu = $('input#agama_ibu').val();
      var kewarganegaraan_ibu = $('input#kewarganegaraan_ibu').val();
      var pendidikan_ibu = $('input#pendidikan_ibu').val();
      var pekerjaan_ibu = $('input#pekerjaan_ibu').val();
      var penghasilan_ibu = $('input#penghasilan_ibu').val();
      var alamat_ibu = $('input#alamat_ibu').val();
      var status_ibu = $('input#status_ibu').val();
      //KET WALI
      var nama_wali = $('input#nama_wali').val();
      var ttl_wali = $('input#ttl_wali').val();
      var agama_wali = $('input#agama_wali').val();
      var kewarganegaraan_wali = $('input#kewarganegaraan_wali').val();
      var pendidikan_wali = $('input#pendidikan_wali').val();
      var pekerjaan_wali = $('input#pekerjaan_wali').val();
      var penghasilan_wali = $('input#penghasilan_wali').val();
      var alamat_wali = $('input#alamat_wali').val();
      //KET HOBI
      var kesenian = $('input#kesenian').val();
      var olahraga = $('input#olahraga').val();
      var organisasi = $('input#organisasi').val();
      var lain_lain = $('input#lain_lain').val();
      var actionform = $('input#actionform').val();
      $.ajax({  
           url:"<?php echo site_url('welcome/add');?>",  
           method:"POST",  
           data:$('#formbukuinduk').serialize(),  
           success:function(data){  
              $('#formbukuinduk').trigger("reset");  
              var objData = jQuery.parseJSON(data);
              console.log(objData.status);
              $('#modalRegister').modal('hide');
           }  
      });  
    });


  });
</script>