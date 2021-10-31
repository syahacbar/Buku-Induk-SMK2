<!doctype html>
<html>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Buku Induk</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/datatables/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/datatables/dataTables.bootstrap4.min.css"/>
<!--     <link rel="stylesheet" href="<?php echo base_url(); ?>assets/fontawesome.css" /> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />

    <script type="text/javascript" charset="utf8" src="<?php echo base_url(); ?>assets/datatables/jquery-3.5.1.js"></script> 
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/DataTables/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/DataTables/dataTables.bootstrap4.min.js"></script>
</head>

<body>

<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th rowspan="3">#</th>
                <th rowspan="3">No</th>
                <th colspan="14" rowspan="2">A. KETERANGAN TENTANG DIRI SISWA</th>
                <th colspan="4" rowspan="2">B. KETERANGAN TEMPAT TINGGAL</th>
                <th colspan="4" rowspan="2">C. KETERANGAN KESEHATAN</th>
                <th colspan="9">D. KETERANGAN PENDIDIKAN</th>
                <th colspan="9" rowspan="2">E. KETERANGAN TENTANG AYAH KANDUNG</th>
                <th colspan="9" rowspan="2">F. KETERANGAN TENTANG IBU KANDUNG</th>
                <th colspan="9" rowspan="2">G. KETERANGAN TENTANG WALI</th>
                <th colspan="4" rowspan="2">H. KEGEMARAN SISWA</th>
                <th colspan="10">I. KETERANGAN PERKEMBANGAN SISWA</th>
            </tr>
            <tr>
                <th colspan="3">Pendidikan Sebelumnya</th>
                <th colspan="2">Pindahan</th>
                <th colspan="4">Diterima di Sekolah ini</th>
                <th colspan="3">Menerima Beasiswa</th>
                <th colspan="2">Meninggalkan Sekolah</th>
                <th colspan="2">Akhir Pendidikan</th>
                <th rowspan="2">Melanjutkan di</th>
                <th colspan="2">Bekerja</th>
            </tr>
            <tr>
                <th>Nama Lengkap</th>
                <th>Nama Panggilan</th>
                <th>NIPD</th>
                <th>NISN</th>
                <th>NIK</th>
                <th>JK</th>
                <th>Tempat Tanggal Lahir</th>
                <th>Agama</th>
                <th>Anak Ke Berapa</th>
                <th>Jumlah Sdr. Kandung</th>
                <th>Jumlah Sdr. Tiri</th>
                <th>Jumlah Sdr. Angkat</th>
                <th>Anak Yatim/Piatu/Yatim Piatu</th>
                <th>Bahasa Sehari-hari Di Rumah</th>
                <th>Alamat</th>
                <th>No. Telp</th>
                <th>Tinggal Dengan (Orang Tua/Asrama/Kos)</th>
                <th>Jarak Tempat Tinggal Ke Sekolah</th>
                <th>Gol. Darah</th>
                <th>Penyakit Yang Pernah Diderita</th>
                <th>Kelainan Jasmani</th>
                <th>Tinggi dan Berat Badan</th>
                <th>Lulusan Dari</th>
                <th>Tanggal dan Nomor STTB</th>
                <th>Lama Belajar</th>
                <th>Dari Sekolah</th>
                <th>Alasan</th>
                <th>Ditingkat</th>
                <th>Prog. Keahlian</th>
                <th>Komp. Keahlian</th>
                <th>Tanggal</th>
                <th>Nama</th>
                <th>Tempat Tanggal Lahir</th>
                <th>Agama</th>
                <th>Kewarganegaraan</th>
                <th>Pendidikan Terakhir</th>
                <th>Pekerjaan</th>
                <th>Penghasilan Per Bulan</th>
                <th>Alamat Rumah/No. Telp</th>
                <th>Masih Hidup/Meninggal Dunia Tahun</th>
                <th>Nama</th>
                <th>Tempat Tanggal Lahir</th>
                <th>Agama</th>
                <th>Kewarganegaraan</th>
                <th>Pendidikan Terakhir</th>
                <th>Pekerjaan</th>
                <th>Penghasilan Per Bulan</th>
                <th>Alamat Rumah/No. Telp</th>
                <th>Masih Hidup/Meninggal Dunia Tahun</th>
                <th>Nama</th>
                <th>Tempat Tanggal Lahir</th>
                <th>Agama</th>
                <th>Kewarganegaraan</th>
                <th>Pendidikan Terakhir</th>
                <th>Pekerjaan</th>
                <th>Penghasilan Per Bulan</th>
                <th>Alamat Rumah/No. Telp</th>
                <th>Masih Hidup/Meninggal Dunia Tahun</th>
                <th>Kesenian</th>
                <th>Olaharaga</th>
                <th>Kemasyarakatan/Organisasi</th>
                <th>Lain-lain</th>
                <th>I</th>
                <th>II</th>
                <th>III</th>
                <th>Tanggal Meninggalkan Sekolah</th>
                <th>Alasan</th>
                <th>Tamat Belajar Tahun</th>
                <th>Nomor STTB / Ijazah</th>
                <th>Tanggal Mulai Bekerja</th>
                <th>Nama Perusahaan / Lembaga </th>
            </tr>
        </thead>
        <tbody>
        <?php 
            $no = 1;
            foreach ($datasiswa AS $ds) : 
        ?>
            <tr>
                <td><a class="btn btn-sm btn-info"><i class="fa fa-eye"></i></a>&nbsp;<a class="btn btn-sm btn-success"><i class="fa fa-edit"></i></a></td>
                <td><?php echo $no++; ?></td>
                <td><?php echo $ds->namalengkap;?></td>
                <td><?php echo $ds->namapanggilan;?></td>
                <td><?php echo $ds->nipd;?></td>
                <td><?php echo $ds->nisn;?></td>
                <td><?php echo $ds->nik;?></td>
                <td><?php echo $ds->jeniskelamin;?></td>
                <td><?php echo $ds->ttl;?></td>
                <td><?php echo $ds->agama;?></td>
                <td><?php echo $ds->anakke;?></td>
                <td><?php echo $ds->sdrkandung;?></td>
                <td><?php echo $ds->sdrtiri;?></td>
                <td><?php echo $ds->sdrangkat;?></td>
                <td><?php echo $ds->anakyatim;?></td>
                <td><?php echo $ds->bahasa;?></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    
    <!-- DataTables JavaScript -->
    <script src="<?php echo base_url();?>/assets/startbootstrap/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>/assets/startbootstrap/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>/assets/startbootstrap/vendor/datatables-responsive/dataTables.responsive.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                responsive: true
            });
        } );
    </script>
</body>
</html>