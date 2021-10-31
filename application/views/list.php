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
                        <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#modalRegister">Tambah Data</button>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>#</th>
                                <th>Nama Lengkap</th>
                                <th>Nama Panggilan</th>
                                <th>NIPD</th>
                                <th>NISN</th>
                                <th>NIK</th>
                                <th>JK</th>
                                <th>Tempat Tanggal Lahir</th>
                                <th>Agama</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                            $no = 1;
                            foreach ($datasiswa AS $ds) : 
                        ?>
                            <tr>
                                <td><a target="_blank" href="<?php echo site_url('welcome/detail/').$ds->nipd;?>" class="btn btn-sm btn-info">Detail</a></td>
                                <td><?php echo $no++; ?></td>
                                <!-- ket diri siswa -->
                                <td><?php echo $ds->namalengkap;?></td>
                                <td><?php echo $ds->namapanggilan;?></td>
                                <td><?php echo $ds->nipd;?></td>
                                <td><?php echo $ds->nisn;?></td>
                                <td><?php echo $ds->nik;?></td>
                                <td><?php echo $ds->jeniskelamin;?></td>
                                <td><?php echo $ds->ttl;?></td>
                                <td><?php echo $ds->agama;?></td>
                                
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
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="modalRegisterLabel">TAMBAH DATA BARU</h5>
        </div>
        <?php// echo form_open("auth/create_user"); ?>
            <div class="modal-body">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <input type="text" class="form-control" id="nipd" name="nipd" placeholder="NIPD" required>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <input type="text" class="form-control" id="nisn" name="nisn" placeholder="NISN" required>
                  </div>   
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <input type="text" class="form-control" id="nik" name="nik" placeholder="NIK" required>
                  </div>   
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <h6>KETERANGAN DIRI SISWA</h6>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <input type="text" class="form-control" id="namalengkap" name="namalengkap" placeholder="Nama Lengkap Siswa" required>
                  </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <input type="text" class="form-control" id="namapanggilan" name="namapanggilan" placeholder="Nama Panggilan Siswa" required>
                  </div>
                </div>

<!--                 <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <input type="text" class="form-control" id="jeniskelamin" name="jeniskelamin" placeholder="Jenis Kelamin" required>
                  </div>
                </div> -->

                <div class="col-md-6 jeniskelamin">
                    <label>Jenis Kelamin</label>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input jeniskelamin" type="radio" name="jeniskelamin" id="jeniskelamin" value="Laki-laki">
                                <label class="form-check-label" for="jeniskelamin">Laki-Laki</label>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input jeniskelamin" type="radio" name="jeniskelamin" id="jeniskelamin" value="Perempuan">
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

<!--                 <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <input type="text" class="form-control" id="agama" name="agama" placeholder="Agama" required>
                  </div>
                </div> -->

                <div class="col-md-6">
                    <div class="form-group">
                        <!-- <label>Agama</label> -->
                        <select id="agama" name="agama" class="form-control form-select">
                            <option>Pilih Agama</option>
                            <option>Islam</option>
                            <option>Kristen Protestan</option>
                            <option>Katolik</option>
                        </select>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="form-group">
                    <input type="text" class="form-control" id="kewarganegaraan" name="kewarganegaraan" placeholder="Kewarganegaraan" required>
                  </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <input type="number" class="form-control" id="anakke" name="anakke" placeholder="Anak ke Berapa" required>
                  </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <input type="number" class="form-control" id="sdrkandung" name="sdrkandung" placeholder="Jumlah Saudara Kandung" required>
                  </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <input type="number" class="form-control" id="sdrtiri" name="sdrtiri" placeholder="Jumlah Saudara Tiri" required>
                  </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <input type="number" class="form-control" id="sdrangkat" name="sdrangkat" placeholder="Jumlah Saudara Angkat" required>
                  </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <input type="text" class="form-control" id="anakyatim" name="anakyatim" placeholder="Anak Yatim/Piatu/Yatim-Piatu" required>
                  </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <input type="text" class="form-control" id="bahasa" name="bahasa" placeholder="Bahasa Sehari-hari di Rumah" required>
                  </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <h6>KETERANGAN TEMPAT TINGGAL</h6>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat Tinggal Siswa" required>
                  </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="form-group">
                    <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="Nomor HP" required>
                  </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <input type="text" class="form-control" id="jenis_tinggal" name="jenis_tinggal" placeholder="Jenis Tinggal" required>
                  </div>
                </div>


                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <input type="number" class="form-control" id="jarak" name="jarak" placeholder="Jarak Tempat Tinggal ke Sekolah" required>
                  </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <h6>KETERANGAN KESEHATAN</h6>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <input type="text" class="form-control" id="gol_darah" name="gol_darah" placeholder="Golongan Darah" required>
                  </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <input type="text" class="form-control" id="riwayat_sakit" name="riwayat_sakit" placeholder="Penyakit yang Pernah Diderita" required>
                  </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <input type="text" class="form-control" id="kelainan" name="kelainan" placeholder="Kelainan Jasmani" required>
                  </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <input type="text" class="form-control" id="tinggi_berat" name="tinggi_berat" placeholder="Tinggi dan Berat Badan" required>
                  </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <h6>KETERANGAN PENDIDIKAN</h6>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="form-group">
                    <input type="text" class="form-control" id="lulus_dari" name="lulus_dari" placeholder="Lulusan Dari" required>
                  </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <input type="text" class="form-control" id="tglno_sttb" name="tglno_sttb" placeholder="Tanggal dan Nomor STTB" required>
                  </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <input type="text" class="form-control" id="lama_belajar" name="lama_belajar" placeholder="Lama Belajar" required>
                  </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <input type="text" class="form-control" id="pindah_dari" name="pindah_dari" placeholder="Pindahan Dari" required>
                  </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <input type="text" class="form-control" id="alasan" name="alasan" placeholder="Alasan Pindah" required>
                  </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <input type="text" class="form-control" id="kelas" name="kelas" placeholder="Di Tingkat" required>
                  </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <input type="text" class="form-control" id="progkeahlian" name="progkeahlian" placeholder="Program Keahlian" required>
                  </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <input type="text" class="form-control" id="kompkeahlian" name="kompkeahlian" placeholder="Kompetensi Keahlian" required>
                  </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 tanggalterima">
                  <div class="form-group">
                    <label>Tanggal Terima</label>
                    <input type="date" class="form-control" id="tgl_terima" name="tgl_terima" placeholder="Tanggal Terima" required>
                  </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <h6>KETERANGAN AYAH KANDUNG</h6>
                </div>                
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="form-group">
                    <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" placeholder="Nama Lengkap Ayah" required>
                  </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <input type="text" class="form-control" id="ttl_ayah" name="ttl_ayah" placeholder="Tempat, Tanggal Lahir" required>
                  </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <input type="text" class="form-control" id="agama_ayah" name="agama_ayah" placeholder="Agama Ayah" required>
                  </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <input type="text" class="form-control" id="kewarganegaraan_ayah" name="kewarganegaraan_ayah" placeholder="Kewarganegaraan" required>
                  </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <input type="text" class="form-control" id="pendidikan_ayah" name="pendidikan_ayah" placeholder="Pendidikan Terakhir Ayah" required>
                  </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <input type="text" class="form-control" id="pekerjaan_ayah" name="pekerjaan_ayah" placeholder="Pekerjaan Ayah" required>
                  </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <input type="text" class="form-control" id="penghasilan_ayah" name="penghasilan_ayah" placeholder="Penghasilan Ayah" required>
                  </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="form-group">
                    <input type="text" class="form-control" id="alamat_ayah" name="alamat_ayah" placeholder="Alamat Rumah & Nomor HP" required>
                  </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <input type="text" class="form-control" id="status_ayah" name="status_ayah" placeholder="Status Ayah" required>
                  </div>
                </div>
            </div>


            <div class="row">
                <div class="col-sm-12">
                    <h6>KETERANGAN IBU KANDUNG</h6>
                </div>                
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="form-group">
                    <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" placeholder="Nama Lengkap Ibu" required>
                  </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <input type="text" class="form-control" id="ttl_ibu" name="ttl_ibu" placeholder="Tempat, Tanggal Lahir" required>
                  </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <input type="text" class="form-control" id="agama_ibu" name="agama_ibu" placeholder="Agama Ibu" required>
                  </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <input type="text" class="form-control" id="kewarganegaraan_ibu" name="kewarganegaraan_ibu" placeholder="Kewarganegaraan" required>
                  </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <input type="text" class="form-control" id="pendidikan_ibu" name="pendidikan_ibu" placeholder="Pendidikan Terakhir Ibu" required>
                  </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <input type="text" class="form-control" id="pekerjaan_ibu" name="pekerjaan_ibu" placeholder="Pekerjaan Ibu" required>
                  </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <input type="text" class="form-control" id="penghasilan_ibu" name="penghasilan_ibu" placeholder="Penghasilan Ibu" required>
                  </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="form-group">
                    <input type="text" class="form-control" id="alamat_ibu" name="alamat_ibu" placeholder="Alamat Rumah & Nomor HP" required>
                  </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <input type="text" class="form-control" id="status_ibu" name="status_ibu" placeholder="Status Ibu" required>
                  </div>
                </div>
            </div>


            <div class="row">
                <div class="col-sm-12">
                    <h6>KETERANGAN WALI</h6>
                </div>                
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="form-group">
                    <input type="text" class="form-control" id="nama_wali" name="nama_wali" placeholder="Nama Lengkap Wali" required>
                  </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <input type="text" class="form-control" id="ttl_wali" name="ttl_wali" placeholder="Tempat, Tanggal Lahir" required>
                  </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <input type="text" class="form-control" id="agama_wali" name="agama_wali" placeholder="Agama Wali" required>
                  </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <input type="text" class="form-control" id="kewarganegaraan_wali" name="kewarganegaraan_wali" placeholder="Kewarganegaraan" required>
                  </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <input type="text" class="form-control" id="pendidikan_wali" name="pendidikan_wali" placeholder="Pendidikan Terakhir Wali" required>
                  </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <input type="text" class="form-control" id="pekerjaan_wali" name="pekerjaan_wali" placeholder="Pekerjaan Wali" required>
                  </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <input type="text" class="form-control" id="penghasilan_wali" name="penghasilan_wali" placeholder="Penghasilan Wali" required>
                  </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="form-group">
                    <input type="text" class="form-control" id="alamat_wali" name="alamat_wali" placeholder="Alamat Rumah & Nomor HP" required>
                  </div>
                </div>

            </div>

            <div class="row">
                <div class="col-sm-12">
                    <h6>KEGEMARAN SISWA</h6>
                </div>  
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <input type="text" class="form-control" id="kesenian" name="kesenian" placeholder="Kesenian" required>
                  </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <input type="text" class="form-control" id="olahraga" name="olahraga" placeholder="Olahraga" required>
                  </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <input type="text" class="form-control" id="organisasi" name="organisasi" placeholder="Kemasyarakatan/Organisasi" required>
                  </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <input type="text" class="form-control" id="lain_lain" name="lain_lain" placeholder="Lain-Lain" required>
                  </div>
                </div>
            </div>

            </div>
            <div class="modal-footer">
                <button type="submit" name="submit" class="btn btn-primary btn-sm">SIMPAN</button>
            </div>
        <?php// echo form_close();?>

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
    });
    </script>