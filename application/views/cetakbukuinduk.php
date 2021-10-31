<?php
$pdf = new Pdf(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
//$pdf = new Pdf('L', 'mm', array('210','330'), true, 'UTF-8', false); 

$pdf->SetTitle('BUKU INDUK '.$detail->nipd);
$pdf->SetHeaderMargin(20);
$pdf->SetTopMargin(10);
$pdf->setFooterMargin(10);
$pdf->SetAutoPageBreak(true,20);
//$pdf->SetAuthor('Author');
//$pdf->SetDisplayMode('real', 'default');
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
$pdf->SetMargins(20, 15, 10, true);
$pdf->SetFont('helvetica', 'B', 10.5);
//$pdf->AddPage('L',array('210','330'));
$pdf->AddPage('L','A3');



$html = '
<style>
th{
	font-weight: bold;
}
td{
	font-weight: normal;
}
</style>
<table border="0" width="100%">
	<tr>
		<td>
			<table border="0">
				<tr>
					<th width="4%">I.</th>
					<th colspan="4" width="96%">LEMBAR BUKU INDUK SISWA SMK NEGERI 2 MANOKWARI</th>
				</tr>
				<tr>
					<th></th>
					<th colspan="4">Nomor Induk Siswa : '.$detail->nipd.'</th>
				</tr>
				<tr>
					<th></th>
					<th colspan="4">Nomor Induk Siswa Nasional : '.$detail->nisn.'</th>
				</tr>
				<tr>
					<th></th>
					<th colspan="4">Nomor Induk Kependudukan : '.$detail->nik.'</th>
				</tr>
				<tr>
					<th>A.</th>
					<th colspan="4">KETERANGAN DIRI SISWA</th>
				</tr>
				<tr>
					<td></td>
					<td width="4%">1.</td>
					<td width="92%" colspan="3">Nama Siswa</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td width="4%">a.</td>
					<td width="30%">Nama Lengkap</td>
					<td width="58%">: '.$detail->namalengkap.'</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td>b.</td>
					<td>Nama Panggilan</td>
					<td>: '.$detail->namapanggilan.'</td>
				</tr>
				<tr>
					<td></td>
					<td>2.</td>
					<td colspan="2">Jenis Kelamin</td>
					<td>: '.$detail->jeniskelamin.'</td>
				</tr>
				<tr>
					<td></td>
					<td>3.</td>
					<td colspan="2">Tempat dan Tanggal Lahir</td>
					<td>: '.$detail->ttl.'</td>
				</tr>
				<tr>
					<td></td>
					<td>4.</td>
					<td colspan="2">Agama</td>
					<td>: '.$detail->agama.'</td>
				</tr>
				<tr>
					<td></td>
					<td>5.</td>
					<td colspan="2">Kewarganegaraan</td>
					<td>: '.$detail->kewarganegaraan.'</td>
				</tr>
				<tr>
					<td></td>
					<td>6.</td>
					<td colspan="2">Anak Ke Berapa</td>
					<td>: '.$detail->anakke.'</td>
				</tr>
				<tr>
					<td></td>
					<td>7.</td>
					<td colspan="2">Jumlah Saudara Kandung</td>
					<td>: '.$detail->sdrkandung.'</td>
				</tr>
				<tr>
					<td></td>
					<td>8.</td>
					<td colspan="2">Jumlah Saudara Tiri</td>
					<td>: '.$detail->sdrtiri.'</td>
				</tr>
				<tr>
					<td></td>
					<td>9.</td>
					<td colspan="2">Jumlah Saudara Angkat</td>
					<td>: '.$detail->sdrangkat.'</td>
				</tr>
				<tr>
					<td></td>
					<td>10.</td>
					<td colspan="2">Anak Yatim / Piatu / Yatim Piatu</td>
					<td>: '.$detail->anakyatim.'</td>
				</tr>
				<tr>
					<td></td>
					<td>11.</td>
					<td colspan="2">Bahasa Sehari-hari di Rumah</td>
					<td>: '.$detail->bahasa.'</td>
				</tr>
				<tr>
					<th>B.</th>
					<th colspan="4">KETERANGAN TEMPAT TINGGAL</th>
				</tr>
				<tr>
					<td></td>
					<td>12.</td>
					<td colspan="2">Alamat</td>
					<td rowspan="2">: '.$detail->alamat.'</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td></td>
					<td>13.</td>
					<td colspan="2">Nomor Telepon</td>
					<td>: '.$detail->no_hp.'</td>
				</tr>
				<tr>
					<td></td>
					<td>14.</td>
					<td colspan="2">Tinggal dengan Orang Tua / Saudara / Di Asrama / Kost</td>
					<td>: '.$detail->jenis_tinggal.'</td>
				</tr>
				<tr>
					<td></td>
					<td>15.</td>
					<td colspan="2">Jarak Tempat Tinggal ke Sekolah</td>
					<td>: '.$detail->jarak.'</td>
				</tr>
				<tr>
					<th>C.</th>
					<th colspan="4">KETERANGAN KESEHATAN</th>
				</tr>
				<tr>
					<td></td>
					<td>16.</td>
					<td colspan="2">Golongan Darah</td>
					<td>: '.$detail->gol_darah.'</td>
				</tr>
				<tr>
					<td></td>
					<td>17.</td>
					<td colspan="2">Penyakit yang Pernah di Derita, TBC / Cacar / Malaria dan lain-lain</td>
					<td>: '.$detail->riwayat_sakit.'</td>
				</tr>
				<tr>
					<td></td>
					<td>18.</td>
					<td colspan="2">Kelainan Jasmani</td>
					<td>: '.$detail->kelainan.'</td>
				</tr>
				<tr>
					<td></td>
					<td>19.</td>
					<td colspan="2">Tinggi dan Berat Badan</td>
					<td>: '.$detail->tinggi_berat.'</td>
				</tr>
				<tr>
					<th>D.</th>
					<th colspan="4">KETERANGAN PENDIDIKAN</th>
				</tr>
				<tr>
					<td></td>
					<td>20.</td>
					<td colspan="2">Pendidikan Sebelumnya</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td>a.</td>
					<td>Lulusan Dari</td>
					<td>: '.$detail->lulus_dari.'</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td>b.</td>
					<td>Tanggal dan Nomor STTB</td>
					<td>: '.$detail->tglno_sttb.'</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td>c.</td>
					<td>Lama Belajar</td>
					<td>: '.$detail->lama_belajar.'</td>
				</tr>
				<tr>
					<td></td>
					<td>21.</td>
					<td colspan="2">Pindahan</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td>a.</td>
					<td>Dari Sekolah</td>
					<td>: '.$detail->pindah_dari.'</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td>b.</td>
					<td>Alasan</td>
					<td>: '.$detail->alasan.'</td>
				</tr>
				<tr>
					<td></td>
					<td>22.</td>
					<td colspan="2">Diterima Di Sekolah Ini</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td>a.</td>
					<td>Di Tingkat</td>
					<td>: '.$detail->kelas.'</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td>c.</td>
					<td>Program Keahlian</td>
					<td>: '.$detail->progkeahlian.'</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td>d.</td>
					<td>Kompetensi Keahlian</td>
					<td>: '.$detail->kompkeahlian.'</td>
				</tr>
				<tr>
					<th>E.</th>
					<th colspan="4">KETERANGAN AYAH KANDUNG</th>
				</tr>
				<tr>
					<td></td>
					<td>23.</td>
					<td colspan="2">Nama</td>
					<td>: '.$detail->nama_ayah.'</td>
				</tr>
				<tr>
					<td></td>
					<td>24.</td>
					<td colspan="2">Tempat dan Tanggal Lahir</td>
					<td>: '.$detail->ttl_ayah.'</td>
				</tr>
			</table>
		</td>
		<td>
			<table border="0"  class="table table-striped table-bordered" style="width:100%">
				<tr>
					<td width="4%"></td>
					<td width="4%">25.</td>
					<td colspan="2" width="34%">Agama</td>
					<td width="58%">: '.$detail->agama_ayah.'</td>
				</tr>
				<tr>
					<td></td>
					<td>26.</td>
					<td colspan="2">Kewarganegaraan</td>
					<td>: '.$detail->kewarganegaraan_ayah.'</td>
				</tr>
				<tr>
					<td></td>
					<td>27.</td>
					<td colspan="2">Pendidikan Terakhir</td>
					<td>: '.$detail->pendidikan_ayah.'</td>
				</tr>
				<tr>
					<td></td>
					<td>28.</td>
					<td colspan="2">Pekerjaan</td>
					<td>: '.$detail->pekerjaan_ayah.'</td>
				</tr>
				<tr>
					<td></td>
					<td>29.</td>
					<td colspan="2">Penghasilan Per Bulan</td>
					<td>: '.$detail->penghasilan_ayah.'</td>
				</tr>
				<tr>
					<td></td>
					<td>30.</td>
					<td colspan="2">Alamat Rumah / No. Telepon</td>
					<td>: '.$detail->alamat_ayah.'</td>
				</tr>
				<tr>
					<td></td>
					<td>31.</td>
					<td colspan="2">Masih Hidup / Meninggal Dunia Tahun</td>
					<td>: '.$detail->status_ayah.'</td>
				</tr>
				<tr>
					<th>F.</th>
					<th colspan="4">KETERANGAN IBU KANDUNG</th>
				</tr>
				<tr>
					<td></td>
					<td>32.</td>
					<td colspan="2">Nama</td>
					<td>: '.$detail->nama_ibu.'</td>
				</tr>
				<tr>
					<td></td>
					<td>33.</td>
					<td colspan="2">Tempat dan Tanggal Lahir</td>
					<td>: '.$detail->ttl_ibu.'</td>
				</tr>
				<tr>
					<td></td>
					<td>34.</td>
					<td colspan="2">Agama</td>
					<td>: '.$detail->agama_ibu.'</td>
				</tr>
				<tr>
					<td></td>
					<td>35.</td>
					<td colspan="2">Kewarganegaraan</td>
					<td>: '.$detail->kewarganegaraan_ibu.'</td>
				</tr>
				<tr>
					<td></td>
					<td>36.</td>
					<td colspan="2">Pendidikan Terakhir</td>
					<td>: '.$detail->pendidikan_ibu.'</td>
				</tr>
				<tr>
					<td></td>
					<td>37.</td>
					<td colspan="2">Pekerjaan</td>
					<td>: '.$detail->pekerjaan_ibu.'</td>
				</tr>
				<tr>
					<td></td>
					<td>38.</td>
					<td colspan="2">Penghasilan Per Bulan</td>
					<td>: '.$detail->penghasilan_ibu.'</td>
				</tr>
				<tr>
					<td></td>
					<td>39.</td>
					<td colspan="2">Alamat Rumah / No. Telepon</td>
					<td>: '.$detail->alamat_ibu.'</td>
				</tr>
				<tr>
					<td></td>
					<td>40.</td>
					<td colspan="2">Masih Hidup / Meninggal Dunia Tahun</td>
					<td>: '.$detail->status_ibu.'</td>
				</tr>
				<tr>
					<th>G.</th>
					<th colspan="4">KETERANGAN WALI</th>
				</tr>
				<tr>
					<td></td>
					<td>41.</td>
					<td colspan="2">Nama</td>
					<td>: '.$detail->nama_wali.'</td>
				</tr>
				<tr>
					<td></td>
					<td>42.</td>
					<td colspan="2">Tempat dan Tanggal Lahir</td>
					<td>: '.$detail->ttl_wali.'</td>
				</tr>
				<tr>
					<td></td>
					<td>43.</td>
					<td colspan="2">Agama</td>
					<td>: '.$detail->agama_wali.'</td>
				</tr>
				<tr>
					<td></td>
					<td>44.</td>
					<td colspan="2">Kewarganegaraan</td>
					<td>: '.$detail->kewarganegaraan_wali.'</td>
				</tr>
				<tr>
					<td></td>
					<td>45.</td>
					<td colspan="2">Pendidikan Terakhir</td>
					<td>: '.$detail->pendidikan_wali.'</td>
				</tr>
				<tr>
					<td></td>
					<td>46.</td>
					<td colspan="2">Pekerjaan</td>
					<td>: '.$detail->pekerjaan_wali.'</td>
				</tr>
				<tr>
					<td></td>
					<td>47.</td>
					<td colspan="2">Penghasilan Per Bulan</td>
					<td>: '.$detail->penghasilan_wali.'</td>
				</tr>
				<tr>
					<td></td>
					<td>48.</td>
					<td colspan="2">Alamat Rumah / No. Telepon</td>
					<td>: '.$detail->alamat_wali.'</td>
				</tr>
				<tr>
					<th>H.</th>
					<th colspan="4">KEGEMARAN SISWA</th>
				</tr>
				<tr>
					<td></td>
					<td>49.</td>
					<td colspan="2">Kesenian</td>
					<td>: '.$detail->kesenian.'</td>
				</tr>
				<tr>
					<td></td>
					<td>50.</td>
					<td colspan="2">Olahraga</td>
					<td>: '.$detail->olahraga.'</td>
				</tr>
				<tr>
					<td></td>
					<td>51.</td>
					<td colspan="2">Kemasyarakatan/Organisasi</td>
					<td>: '.$detail->organisasi.'</td>
				</tr>
				<tr>
					<td></td>
					<td>52.</td>
					<td colspan="2">Lain-lain</td>
					<td>: '.$detail->lain_lain.'</td>
				</tr>
				<tr>
					<th>I.</th>
					<th colspan="4">KETERANGAN PERKEMBANGAN SISWA</th>
				</tr>
				<tr>
					<td></td>
					<td>53.</td>
					<td colspan="2">Menerima Beasiswa</td>
					<td>: Tahun ........... / TK ........... Dari ............. </td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td colspan="2"></td>
					<td>  Tahun ........... / TK ........... Dari ............. </td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td colspan="2"></td>
					<td>  Tahun ........... / TK ........... Dari ............. </td>
				</tr>
				<tr>
					<td></td>
					<td>54.</td>
					<td colspan="2">Meninggalkan Sekolah</td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td width="4%">a.</td>
					<td width="30%">Tanggal Meninggalkan Sekolah</td>
					<td>: SALJKJFKAJ</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td>b.</td>
					<td>Alasan</td>
					<td>: SALJKJFKAJ</td>
				</tr>
				<tr>
					<td></td>
					<td>55.</td>
					<td colspan="2">Akhir Pendidikan</td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td width="4%">a.</td>
					<td width="30%">Tamat Belajar Tahun</td>
					<td>: SALJKJFKAJ</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td>b.</td>
					<td>Nomor STTB / Ijazah</td>
					<td>: SALJKJFKAJ</td>
				</tr>
				<tr>
					<td></td>
					<td>56.</td>
					<td colspan="2">Melanjutkan Di</td>
					<td>: ...........</td>
				</tr>
				<tr>
					<td></td>
					<td>54.</td>
					<td colspan="2">Bekerja</td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td width="4%">a.</td>
					<td width="30%">Tanggal Mulai Bekerja</td>
					<td>: SALJKJFKAJ</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td>b.</td>
					<td>Nama Perusahaan / Lembaga / dan Lain – lain</td>
					<td>: SALJKJFKAJ</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td>c.</td>
					<td>Penghasilan</td>
					<td>: SALJKJFKAJ</td>
				</tr>

			</table>

		</td>
	</tr>
</table>
';
$pdf->writeHTML($html, true, false, true, false, '');
$pdf->Output('DATA LAPORAN PENGADUAN SISIKAT .pdf', 'I');

?>