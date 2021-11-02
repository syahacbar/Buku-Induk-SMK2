
  <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
      <div class="form-group">
        <input type="text" class="form-control" id="tampilNIPD" placeholder="NIPD" value="<?php echo $hasil->nipd;?>" required>
      </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
      <div class="form-group">
        <input type="text" class="form-control" id="nisn" name="nisn" placeholder="NISN" value="<?php echo $hasil->nisn;?>">
      </div>   
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
      <div class="form-group">
        <input type="text" class="form-control" id="nik" name="nik" placeholder="NIK" value="<?php echo $hasil->nik;?>">
      </div>   
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12">
      <h6>KETERANGAN DIRI SISWA</h6>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
      <div class="form-group">
        <input type="text" class="form-control" id="namalengkap" name="namalengkap" placeholder="Nama Lengkap Siswa" value="<?php echo $hasil->namalengkap;?>">
      </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
      <div class="form-group">
        <input type="text" class="form-control" id="namapanggilan" name="namapanggilan" placeholder="Nama Panggilan Siswa" value="<?php echo $hasil->namapanggilan;?>">
      </div>
    </div>

    <div class="col-md-6 jeniskelamin">
      <label>Jenis Kelamin</label>
      <div class="row">
        <div class="col-md-6">
          <div class="form-check">
            <input class="form-check-input jeniskelamin" type="radio" name="jeniskelamin" id="jeniskelamin" value="Laki-laki" <?php echo ($hasil->jeniskelamin == 'Laki-laki') ? 'checked' : '';?> required>
            <label class="form-check-label" for="jeniskelamin">Laki-Laki</label>
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-check">
            <input class="form-check-input jeniskelamin" type="radio" name="jeniskelamin" id="jeniskelamin" value="Perempuan" <?php echo ($hasil->jeniskelamin == 'Perempuan') ? 'checked' : '';?> required>
            <label class="form-check-label" for="jeniskelamin">Perempuan</label>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
      <div class="form-group">
        <input type="text" class="form-control" id="ttl" name="ttl" placeholder="Tempat, Tanggal Lahir" value="<?php echo $hasil->ttl;?>">
      </div>
    </div>


    <div class="col-md-6">
      <div class="form-group">
        <!-- <label>Agama</label> -->
        <select id="agama" name="agama" class="form-control form-select" required>
          <option>Pilih Agama</option>
          <option value="Islam" <?php echo ($hasil->agama =='Islam') ? 'selected' : '';?>>Islam</option>
          <option value="Kristen" <?php echo ($hasil->agama =='Kristen') ? 'selected' : '';?>>Kristen</option>
          <option value="Katolik" <?php echo ($hasil->agama =='Katolik') ? 'selected' : '';?>>Katolik</option>
          <option value="Hindu" <?php echo ($hasil->agama =='Hindu') ? 'selected' : '';?>>Hindu</option>
          <option value="Budha" <?php echo ($hasil->agama =='Budha') ? 'selected' : '';?>>Budha</option>
          <option value="Konghucu" <?php echo ($hasil->agama =='Konghucu') ? 'selected' : '';?>>Konghucu</option>
        </select>
      </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
      <div class="form-group">
        <input type="text" class="form-control" id="kewarganegaraan" name="kewarganegaraan" placeholder="Kewarganegaraan"  value="<?php echo $hasil->kewarganegaraan;?>">
      </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
      <div class="form-group">
        <input type="number" class="form-control" id="anakke" name="anakke" placeholder="Anak ke Berapa"  value="<?php echo $hasil->anakke;?>">
      </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
      <div class="form-group">
        <input type="number" class="form-control" id="sdrkandung" name="sdrkandung" placeholder="Jumlah Saudara Kandung"  value="<?php echo $hasil->sdrkandung;?>">
      </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
      <div class="form-group">
        <input type="number" class="form-control" id="sdrtiri" name="sdrtiri" placeholder="Jumlah Saudara Tiri"  value="<?php echo $hasil->sdrtiri;?>">
      </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
      <div class="form-group">
        <input type="number" class="form-control" id="sdrangkat" name="sdrangkat" placeholder="Jumlah Saudara Angkat"  value="<?php echo $hasil->sdrangkat;?>">
      </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
      <div class="form-group">
        <input type="text" class="form-control" id="anakyatim" name="anakyatim" placeholder="Anak Yatim/Piatu/Yatim-Piatu"  value="<?php echo $hasil->anakyatim;?>">
      </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
      <div class="form-group">
        <input type="text" class="form-control" id="bahasa" name="bahasa" placeholder="Bahasa Sehari-hari di Rumah"  value="<?php echo $hasil->bahasa;?>">
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-12">
      <h6>KETERANGAN TEMPAT TINGGAL</h6>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
      <div class="form-group">
        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat Tinggal Siswa"  value="<?php echo $hasil->alamat;?>">
      </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
      <div class="form-group">
        <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="Nomor HP"  value="<?php echo $hasil->no_hp;?>">
      </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
      <div class="form-group">
        <input type="text" class="form-control" id="jenis_tinggal" name="jenis_tinggal" placeholder="Jenis Tinggal"  value="<?php echo $hasil->jenis_tinggal;?>">
      </div>
    </div>


    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
      <div class="form-group">
        <input type="number" class="form-control" id="jarak" name="jarak" placeholder="Jarak Tempat Tinggal ke Sekolah"  value="<?php echo $hasil->jarak;?>">
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12">
      <h6>KETERANGAN KESEHATAN</h6>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
      <div class="form-group">
        <input type="text" class="form-control" id="gol_darah" name="gol_darah" placeholder="Golongan Darah"  value="<?php echo $hasil->gol_darah;?>">
      </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
      <div class="form-group">
        <input type="text" class="form-control" id="riwayat_sakit" name="riwayat_sakit" placeholder="Penyakit yang Pernah Diderita"  value="<?php echo $hasil->riwayat_sakit;?>">
      </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
      <div class="form-group">
        <input type="text" class="form-control" id="kelainan" name="kelainan" placeholder="Kelainan Jasmani"  value="<?php echo $hasil->kelainan;?>">
      </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
      <div class="form-group">
        <input type="text" class="form-control" id="tinggi_berat" name="tinggi_berat" placeholder="Tinggi dan Berat Badan"  value="<?php echo $hasil->tinggi_berat;?>">
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-12">
      <h6>KETERANGAN PENDIDIKAN</h6>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
      <div class="form-group">
        <input type="text" class="form-control" id="lulus_dari" name="lulus_dari" placeholder="Lulusan Dari"  value="<?php echo $hasil->lulus_dari;?>">
      </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
      <div class="form-group">
        <input type="text" class="form-control" id="tglno_sttb" name="tglno_sttb" placeholder="Tanggal dan Nomor STTB"  value="<?php echo $hasil->tglno_sttb;?>">
      </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
      <div class="form-group">
        <input type="text" class="form-control" id="lama_belajar" name="lama_belajar" placeholder="Lama Belajar"  value="<?php echo $hasil->lama_belajar;?>">
      </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
      <div class="form-group">
        <input type="text" class="form-control" id="pindah_dari" name="pindah_dari" placeholder="Pindahan Dari"  value="<?php echo $hasil->pindah_dari;?>">
      </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
      <div class="form-group">
        <input type="text" class="form-control" id="alasan" name="alasan" placeholder="Alasan Pindah" value="<?php echo $hasil->alasan;?>" >
      </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
      <div class="form-group">
        <input type="text" class="form-control" id="kelas" name="kelas" placeholder="Di Tingkat"  value="<?php echo $hasil->kelas;?>">
      </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
      <div class="form-group">
        <input type="text" class="form-control" id="progkeahlian" name="progkeahlian" placeholder="Program Keahlian"  value="<?php echo $hasil->progkeahlian;?>">
      </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
      <div class="form-group">
        <input type="text" class="form-control" id="kompkeahlian" name="kompkeahlian" placeholder="Kompetensi Keahlian"  value="<?php echo $hasil->kompkeahlian;?>">
      </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 tanggalterima">
      <div class="form-group">
        <label>Tanggal Terima</label>
        <input type="text" class="form-control" id="tgl_terima" name="tgl_terima" placeholder="Tanggal Terima" value="<?php echo $hasil->tgl_terima;?>" >
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-12">
      <h6>KETERANGAN AYAH KANDUNG</h6>
    </div>                
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
      <div class="form-group">
        <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" placeholder="Nama Lengkap Ayah"  value="<?php echo $hasil->nama_ayah;?>">
      </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
      <div class="form-group">
        <input type="text" class="form-control" id="ttl_ayah" name="ttl_ayah" placeholder="Tempat, Tanggal Lahir"  value="<?php echo $hasil->ttl_ayah;?>">
      </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
      <div class="form-group">
        <input type="text" class="form-control" id="agama_ayah" name="agama_ayah" placeholder="Agama Ayah"  value="<?php echo $hasil->agama_ayah;?>">
      </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
      <div class="form-group">
        <input type="text" class="form-control" id="kewarganegaraan_ayah" name="kewarganegaraan_ayah" placeholder="Kewarganegaraan" value="<?php echo $hasil->kewarganegaraan_ayah;?>" >
      </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
      <div class="form-group">
        <input type="text" class="form-control" id="pendidikan_ayah" name="pendidikan_ayah" placeholder="Pendidikan Terakhir Ayah"  value="<?php echo $hasil->pendidikan_ayah;?>">
      </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
      <div class="form-group">
        <input type="text" class="form-control" id="pekerjaan_ayah" name="pekerjaan_ayah" placeholder="Pekerjaan Ayah" value="<?php echo $hasil->pekerjaan_ayah;?>" >
      </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
      <div class="form-group">
        <input type="text" class="form-control" id="penghasilan_ayah" name="penghasilan_ayah" placeholder="Penghasilan Ayah" value="<?php echo $hasil->penghasilan_ayah;?>" >
      </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
      <div class="form-group">
        <input type="text" class="form-control" id="alamat_ayah" name="alamat_ayah" placeholder="Alamat Rumah & Nomor HP"  value="<?php echo $hasil->alamat_ayah;?>">
      </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
      <div class="form-group">
        <input type="text" class="form-control" id="status_ayah" name="status_ayah" placeholder="Status Ayah"  value="<?php echo $hasil->status_ayah;?>">
      </div>
    </div>
  </div>


  <div class="row">
    <div class="col-sm-12">
      <h6>KETERANGAN IBU KANDUNG</h6>
    </div>                
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
      <div class="form-group">
        <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" placeholder="Nama Lengkap Ibu"  value="<?php echo $hasil->nama_ibu;?>">
      </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
      <div class="form-group">
        <input type="text" class="form-control" id="ttl_ibu" name="ttl_ibu" placeholder="Tempat, Tanggal Lahir" value="<?php echo $hasil->ttl_ibu;?>" >
      </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
      <div class="form-group">
        <input type="text" class="form-control" id="agama_ibu" name="agama_ibu" placeholder="Agama Ibu" value="<?php echo $hasil->agama_ibu;?>" >
      </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
      <div class="form-group">
        <input type="text" class="form-control" id="kewarganegaraan_ibu" name="kewarganegaraan_ibu" placeholder="Kewarganegaraan" value="<?php echo $hasil->kewarganegaraan_ibu;?>" >
      </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
      <div class="form-group">
        <input type="text" class="form-control" id="pendidikan_ibu" name="pendidikan_ibu" placeholder="Pendidikan Terakhir Ibu" value="<?php echo $hasil->pendidikan_ibu;?>" >
      </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
      <div class="form-group">
        <input type="text" class="form-control" id="pekerjaan_ibu" name="pekerjaan_ibu" placeholder="Pekerjaan Ibu"  value="<?php echo $hasil->pekerjaan_ibu;?>">
      </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
      <div class="form-group">
        <input type="text" class="form-control" id="penghasilan_ibu" name="penghasilan_ibu" placeholder="Penghasilan Ibu" value="<?php echo $hasil->penghasilan_ibu;?>">
      </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
      <div class="form-group">
        <input type="text" class="form-control" id="alamat_ibu" name="alamat_ibu" placeholder="Alamat Rumah & Nomor HP"  value="<?php echo $hasil->alamat_ibu;?>">
      </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
      <div class="form-group">
        <input type="text" class="form-control" id="status_ibu" name="status_ibu" placeholder="Status Ibu"  value="<?php echo $hasil->status_ibu;?>">
      </div>
    </div>
  </div>


  <div class="row">
    <div class="col-sm-12">
      <h6>KETERANGAN WALI</h6>
    </div>                
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
      <div class="form-group">
        <input type="text" class="form-control" id="nama_wali" name="nama_wali" placeholder="Nama Lengkap Wali"  value="<?php echo $hasil->nama_wali;?>">
      </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
      <div class="form-group">
        <input type="text" class="form-control" id="ttl_wali" name="ttl_wali" placeholder="Tempat, Tanggal Lahir"  value="<?php echo $hasil->ttl_wali;?>">
      </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
      <div class="form-group">
        <input type="text" class="form-control" id="agama_wali" name="agama_wali" placeholder="Agama Wali"  value="<?php echo $hasil->agama_wali;?>">
      </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
      <div class="form-group">
        <input type="text" class="form-control" id="kewarganegaraan_wali" name="kewarganegaraan_wali" placeholder="Kewarganegaraan" value="<?php echo $hasil->kewarganegaraan_wali;?>" >
      </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
      <div class="form-group">
        <input type="text" class="form-control" id="pendidikan_wali" name="pendidikan_wali" placeholder="Pendidikan Terakhir Wali" value="<?php echo $hasil->pendidikan_wali;?>" >
      </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
      <div class="form-group">
        <input type="text" class="form-control" id="pekerjaan_wali" name="pekerjaan_wali" placeholder="Pekerjaan Wali"  value="<?php echo $hasil->pekerjaan_wali;?>">
      </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
      <div class="form-group">
        <input type="text" class="form-control" id="penghasilan_wali" name="penghasilan_wali" placeholder="Penghasilan Wali" value="<?php echo $hasil->penghasilan_wali;?>" >
      </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
      <div class="form-group">
        <input type="text" class="form-control" id="alamat_wali" name="alamat_wali" placeholder="Alamat Rumah & Nomor HP"  value="<?php echo $hasil->alamat_wali;?>">
      </div>
    </div>

  </div>

  <div class="row">
    <div class="col-sm-12">
      <h6>KEGEMARAN SISWA</h6>
    </div>  
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
      <div class="form-group">
        <input type="text" class="form-control" id="kesenian" name="kesenian" placeholder="Kesenian"  value="<?php echo $hasil->kesenian;?>">
      </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
      <div class="form-group">
        <input type="text" class="form-control" id="olahraga" name="olahraga" placeholder="Olahraga"  value="<?php echo $hasil->olahraga;?>">
      </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
      <div class="form-group">
        <input type="text" class="form-control" id="organisasi" name="organisasi" placeholder="Kemasyarakatan/Organisasi"  value="<?php echo $hasil->organisasi;?>">
      </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
      <div class="form-group">
        <input type="text" class="form-control" id="lain_lain" name="lain_lain" placeholder="Lain-Lain"  value="<?php echo $hasil->lain_lain;?>">
      </div>
    </div>
  </div>
<input type="hidden" name="nipd" id="nipd" value="<?php echo $hasil->nipd;?>">
</div>