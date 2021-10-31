<!doctype html>
<html>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Buku Induk</title>
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css' rel='stylesheet'>
    <link href='' rel='stylesheet'>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>

    <style>
        .container {
            padding: 5px 2%;
            width: 96%;
        }
        
        .dataTables_wrapper .dataTables_length,
        .dataTables_wrapper .dataTables_filter,
        .dataTables_wrapper .dataTables_info,
        .dataTables_wrapper .dataTables_processing,
        .dataTables_wrapper .dataTables_paginate {
            color: #333;
            display: none;
        }
        
        table.dataTable tbody th,
        table.dataTable tbody td {
            padding: 1px !important;
        }
        
        table#example {
            border: 0;
        }
        
        .table-bordered>thead>tr>td,
        .table-bordered>tbody>tr>td,
        .table-bordered>tfoot>tr>td {
            border: 0 !important;
            padding: 1px !important;
            color: #000;
        }
        
        .table-bordered>thead>tr>th,
        .table-bordered>tbody>tr>th,
        .table-bordered>tfoot>tr>th {
            border: 0 !important;
            width: auto !important;
            padding: 1px 5px 1px 0 !important;
            color: #000;
        }
        
        .row.header img {
            width: 113px;
            position: fixed;
            z-index: 999;
            right: 0;
            border: 2px solid #ecf0f6;
            padding: 2px;
        }
        
        .row.footer img {
            width: 113px;
            position: fixed;
            z-index: 999;
            right: 0;
            bottom: 10vh;
            border: 2px solid #ecf0f6;
            padding: 2px;
        }
        
        @page container {
            size: 595.45pt 841.7pt;
            margin: 42.55pt 23pt;
            mso-header-margin: .5in;
            mso-footer-margin: .5in;
            mso-paper-source: 0;
            font-size: 11px;
        }
        
        div.Section1 {
            page: Section1;
        }
        
        @page container {
            size: 841.7pt 612pt;
            mso-page-orientation: landscape;
            margin: 42.55pt 23pt;
            mso-header-margin: .5in;
            mso-footer-margin: .5in;
            mso-paper-source: 0;
            font-size: 11px;
        }
        
        div.Section2 {
            page: Section2;
        }
        
        @page img {
            width: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 auto;
        }
        
        @page {
            size: A3 landscape;
            margin: 0.5in 1in 0 1in;
            font-size: 11px;
        }
    </style>

</head>

<body class='snippet-body'>
    <div class="container">
        <div class="row header">
           <img src="<?php echo base_url('upload/foto/').$detail->nipd.'.jpg';?>" alt="foto_pas">
        </div>
        <div class="row">
            <div class="col-md-6">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <tbody>
                        <tr>
                            <th>I.</th>
                            <th colspan="5">LEMBAR BUKU INDUK SISWA SMK NEGERI 2 MANOKWARI</th>
                        </tr>
                        <tr>
                            <td></td>
                            <th colspan="5">Nomor Induk Siswa : <?php echo $detail->nipd;?></th>
                        </tr>
                        <tr>
                            <td></td>
                            <th colspan="5">Nomor Induk Siswa Nasional: <?php echo $detail->nisn;?></th>
                        </tr>
                        <tr>
                            <td></td>
                            <th colspan="5">Nomor Induk Kependudukan : <?php echo $detail->nik;?></th>
                        </tr>
                        <tr>
                            <th>A.</th>
                            <th colspan="5">KETERANGAN TENTANG DIRI SISWA</th>
                        </tr>
                        <tr>
                            <td></td>
                            <td>1.</td>
                            <td colspan="2">Nama Siswa</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>a.</td>
                            <td>Nama Lengkap</td>
                            <td>:</td>
                            <td width="280px"><?php echo $detail->namalengkap;?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>b.</td>
                            <td>Nama Panggilan</td>
                            <td>:</td>
                            <td><?php echo $detail->namapanggilan;?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>2.</td>
                            <td colspan="2">Jenis Kelamin</td>
                            <td>:</td>
                            <td width="280px"><?php echo $detail->jeniskelamin;?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>3.</td>
                            <td colspan="2">Tempat dan Tanggal Lahir</td>
                            <td>:</td>
                            <td width="280px"><?php echo $detail->ttl;?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>4.</td>
                            <td colspan="2">Agama</td>
                            <td>:</td>
                            <td width="280px"><?php echo $detail->agama;?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>5.</td>
                            <td colspan="2">Kewarganegaraan</td>
                            <td>:</td>
                            <td width="280px"><?php echo $detail->kewarganegaraan;?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>6.</td>
                            <td colspan="2">Anak Keberapa</td>
                            <td>:</td>
                            <td width="280px"><?php echo $detail->anakke;?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>7.</td>
                            <td colspan="2">Jumlah Saudara kandung</td>
                            <td>:</td>
                            <td width="280px"><?php echo $detail->sdrkandung;?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>8.</td>
                            <td colspan="2">Jumlah Saudara Tiri</td>
                            <td>:</td>
                            <td width="280px"><?php echo $detail->sdrtiri;?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>9.</td>
                            <td colspan="2">Jumlah Saudara Angkat</td>
                            <td>:</td>
                            <td width="280px"><?php echo $detail->sdrangkat;?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>10.</td>
                            <td colspan="2">Anak Yatim / Piatu / Yatim Piatu</td>
                            <td>:</td>
                            <td><?php echo $detail->anakyatim;?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>11.</td>
                            <td colspan="2">Bahasa Sehari-hari di Rumah</td>
                            <td>:</td>
                            <td><?php echo $detail->bahasa;?></td>
                        </tr>
                        <tr>
                            <th>B.</th>
                            <th colspan="5">KETERANGAN TEMPAT TINGGAL</th>
                        </tr>
                        <tr>
                            <td></td>
                            <td>12.</td>
                            <td colspan="2">Alamat</td>
                            <td>:</td>
                            <td><?php echo $detail->alamat;?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>13.</td>
                            <td colspan="2">Nomor Telepon</td>
                            <td>:</td>
                            <td><?php echo $detail->no_hp;?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>14.</td>
                            <td colspan="2">Tinggal dengan Orang Tua/Saudara/ Di Asrama/Kost</td>
                            <td>:</td>
                            <td width="280px"><?php echo $detail->jenis_tinggal;?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>15.</td>
                            <td colspan="2">Jarak Tempat Tinggal ke Sekolah</td>
                            <td>:</td>
                            <td width="280px"><?php echo $detail->jarak;?></td>
                        </tr>
                        <tr>
                            <th>C.</th>
                            <th colspan="5">KETERANGAN KESEHATAN</th>
                        </tr>
                        <tr>
                            <td></td>
                            <td>16.</td>
                            <td colspan="2">Golongan Darah</td>
                            <td>:</td>
                            <td><?php echo $detail->gol_darah;?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>17.</td>
                            <td colspan="2">Penyakit yang Pernah di Derita,TBC / Cacar / Malaria dan lain-lain</td>
                            <td>:</td>
                            <td width="280px"><?php echo $detail->riwayat_sakit;?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>18.</td>
                            <td colspan="2">Kelainan Jasmani</td>
                            <td>:</td>
                            <td><?php echo $detail->kelainan;?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>19.</td>
                            <td colspan="2">Tinggi dan Berat Badan</td>
                            <td>:</td>
                            <td><?php echo $detail->tinggi_berat;?></td>
                        </tr>
                        <tr>
                            <th>D.</th>
                            <th colspan="5">KETERANGAN PENDIDIKAN</th>
                        </tr>
                        <tr>
                            <td></td>
                            <td>20.</td>
                            <td colspan="2">Pendidikan Sebelumnya</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>a.</td>
                            <td>Lulusan dari</td>
                            <td>:</td>
                            <td><?php echo $detail->lulus_dari;?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>b.</td>
                            <td>Tanggal dan Nomor STTB</td>
                            <td>:</td>
                            <td><?php echo $detail->tglno_sttb;?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>c.</td>
                            <td>Lama Belajar </td>
                            <td>:</td>
                            <td><?php echo $detail->lama_belajar;?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>21.</td>
                            <td colspan="2">Pindahan</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>a.</td>
                            <td>Dari Sekolah</td>
                            <td>:</td>
                            <td><?php echo $detail->pindah_dari;?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>b.</td>
                            <td>Alasan</td>
                            <td>:</td>
                            <td><?php echo $detail->alasan;?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>22.</td>
                            <td colspan="2">Diterima di Sekolah ini</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>a.</td>
                            <td>Di Tingkat</td>
                            <td>:</td>
                            <td><?php echo $detail->kelas;?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>b.</td>
                            <td>Program Keahlian</td>
                            <td>:</td>
                            <td><?php echo $detail->progkeahlian;?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>c.</td>
                            <td>Kompetensi Keahlian</td>
                            <td>:</td>
                            <td><?php echo $detail->kompkeahlian;?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>d.</td>
                            <td>Tanggal</td>
                            <td>:</td>
                            <td><?php echo $detail->tgl_terima;?></td>
                        </tr>
                        <tr>
                            <th>E.</th>
                            <th colspan="5">KETERANGAN TENTANG AYAH KANDUNG</th>
                        </tr>
                        <tr>
                            <td></td>
                            <td>23.</td>
                            <td colspan="2">Nama</td>
                            <td>:</td>
                            <td><?php echo $detail->nama_ayah;?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>24.</td>
                            <td colspan="2">Tempat dan Tanggal Lahir</td>
                            <td>:</td>
                            <td><?php echo $detail->ttl_ayah;?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>25.</td>
                            <td colspan="2">Agama</td>
                            <td>:</td>
                            <td><?php echo $detail->agama_ayah;?></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="col-md-6">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <tbody>
                        <tr>
                            <td></td>
                            <td>26.</td>
                            <td colspan="2">Kewarganegaraan</td>
                            <td>:</td>
                            <td><?php echo $detail->kewarganegaraan_ayah;?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>27.</td>
                            <td colspan="2">Pendidikan Terakhir</td>
                            <td>:</td>
                            <td><?php echo $detail->pendidikan_ayah;?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>28.</td>
                            <td colspan="2">Pekerjaan</td>
                            <td>:</td>
                            <td><?php echo $detail->pekerjaan_ayah;?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>29.</td>
                            <td colspan="2">Penghasilan per Bulan</td>
                            <td>:</td>
                            <td><?php echo $detail->penghasilan_ayah;?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>30.</td>
                            <td colspan="2">Alamat Rumah/Nomor Telepon</td>
                            <td>:</td>
                            <td><?php echo $detail->alamat_ayah;?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>31.</td>
                            <td colspan="2">Masih Hidup / Meninggal Dunia Tahun</td>
                            <td>:</td>
                            <td><?php echo $detail->status_ayah;?></td>
                        </tr>

                        <tr>
                            <th>F.</th>
                            <th colspan="5">KETERANGAN TENTANG IBU KANDUNG</th>
                        </tr>
                        <tr>
                            <td></td>
                            <td>32.</td>
                            <td colspan="2">Nama</td>
                            <td>:</td>
                            <td><?php echo $detail->nama_ibu;?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>33.</td>
                            <td colspan="2">Tempat dan Tanggal Lahir</td>
                            <td>:</td>
                            <td><?php echo $detail->ttl_ibu;?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>34.</td>
                            <td colspan="2">Agama</td>
                            <td>:</td>
                            <td><?php echo $detail->agama_ibu;?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>35.</td>
                            <td colspan="2">Kewarganegaraan</td>
                            <td>:</td>
                            <td><?php echo $detail->kewarganegaraan_ibu;?></td>
                        </tr>

                        <tr>
                            <td></td>
                            <td>36.</td>
                            <td colspan="2">Pendidikan Terakhir</td>
                            <td>:</td>
                            <td><?php echo $detail->pendidikan_ibu;?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>37.</td>
                            <td colspan="2">Pekerjaan</td>
                            <td>:</td>
                            <td><?php echo $detail->pendidikan_ibu; ?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>38.</td>
                            <td colspan="2">Penghasilan per Bulan</td>
                            <td>:</td>
                            <td><?php echo $detail->penghasilan_ibu;?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>39.</td>
                            <td colspan="2">Alamat Rumah/Nomor Telepon</td>
                            <td>:</td>
                            <td><?php echo $detail->alamat_ibu;?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>40.</td>
                            <td colspan="2">Masih Hidup / Meninggal Dunia Tahun</td>
                            <td>:</td>
                            <td><?php echo $detail->status_ibu;?></td>
                        </tr>

                        <tr>
                            <th>G.</th>
                            <th colspan="5">KETERANGAN TENTANG WALI</th>
                        </tr>
                        <tr>
                            <td></td>
                            <td>41.</td>
                            <td colspan="2">Nama</td>
                            <td>:</td>
                            <td><?php echo $detail->nama_wali;?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>42.</td>
                            <td colspan="2">Tempat dan Tanggal Lahir</td>
                            <td>:</td>
                            <td><?php echo $detail->ttl_wali;?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>43.</td>
                            <td colspan="2">Agama</td>
                            <td>:</td>
                            <td><?php echo $detail->agama_wali;?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>44.</td>
                            <td colspan="2">Kewarganegaraan</td>
                            <td>:</td>
                            <td><?php echo $detail->kewarganegaraan_wali;?></td>
                        </tr>

                        <tr>
                            <td></td>
                            <td>45.</td>
                            <td colspan="2">Pendidikan Terakhir</td>
                            <td>:</td>
                            <td><?php echo $detail->pendidikan_wali;?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>46.</td>
                            <td colspan="2">Pekerjaan</td>
                            <td>:</td>
                            <td><?php echo $detail->pekerjaan_wali;?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>47.</td>
                            <td colspan="2">Penghasilan per Bulan</td>
                            <td>:</td>
                            <td><?php echo $detail->penghasilan_wali;?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>48.</td>
                            <td colspan="2">Alamat Rumah/Nomor Telepon</td>
                            <td>:</td>
                            <td><?php echo $detail->alamat_wali;?></td>
                        </tr>

                        <tr>
                            <th>H.</th>
                            <th colspan="5">KEGEMARAN SISWA</th>
                        </tr>
                        <tr>
                            <td></td>
                            <td>49.</td>
                            <td colspan="2">Kesenian</td>
                            <td>:</td>
                            <td><?php echo $detail->kesenian;?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>50.</td>
                            <td colspan="2">Olahraga</td>
                            <td>:</td>
                            <td><?php echo $detail->olahraga;?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>51.</td>
                            <td colspan="2">Kemasyarakatan / Organisasi</td>
                            <td>:</td>
                            <td><?php echo $detail->organisasi;?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>52.</td>
                            <td colspan="2">Lain-Lain</td>
                            <td>:</td>
                            <td><?php echo $detail->lain_lain;?></td>
                        </tr>

                        <tr>
                            <th>I.</th>
                            <th colspan="5">KETERANGAN PERKEMBANGAN SISWA</th>
                        </tr>
                        <tr>
                            <td></td>
                            <td>53.</td>
                            <td colspan="2">Menerima Beasiswa</td>
                            <td>:</td>
                            <td>Tahun ........... / TK ........... Dari ............. </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td colspan="2"></td>
                            <td>:</td>
                            <td>Tahun ........... / TK ........... Dari ............. </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td colspan="2"></td>
                            <td>:</td>
                            <td>Tahun ........... / TK ........... Dari ............. </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>54.</td>
                            <td colspan="2">Meninggalkan Sekolah</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>a.</td>
                            <td>Tanggal Meninggalkan Sekolah</td>
                            <td>:</td>
                            <td><?php echo $detail->tgl_keluarsekolah;?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>b.</td>
                            <td>Alasan</td>
                            <td>:</td>
                            <td><?php echo $detail->alasan_keluar;?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>55.</td>
                            <td colspan="2">Akhir Pendidikan</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>a.</td>
                            <td>Tamat Belajar Tahun</td>
                            <td>:</td>
                            <td><?php echo $detail->tahun_tamat;?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>b.</td>
                            <td>Nomor STTB / Ijazah</td>
                            <td>:</td>
                            <td><?php echo $detail->nomor_ijazah;?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>56.</td>
                            <td colspan="2">Melanjutkan di</td>
                            <td>:</td>
                            <td><?php echo $detail->sekolah_lanjutan;?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>57.</td>
                            <td colspan="2">Bekerja</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>a.</td>
                            <td>Tanggal Mulai Bekerja</td>
                            <td>:</td>
                            <td><?php echo $detail->tanggal_kerja;?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>b.</td>
                            <td>Nama Perusahaan / Lembaga / dan Lain – lain</td>
                            <td>:</td>
                            <td><?php echo $detail->nama_perusahaan;?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>c.</td>
                            <td>Penghasilan</td>
                            <td>:</td>
                            <td><?php echo $detail->penghasilan_kerja;?></td>
                        </tr>
                    </tbody>
                </table>
                <div class="row footer">
                    <img src="<?php echo base_url('upload/foto/').$detail->nipd.'.jpg';?>" alt="foto_pas">
                </div>
            </div>
        </div>
    </div>
    <script type='text/javascript' src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js'></script>
    <script type='text/javascript'>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
</body>

</html>