<!-- <style type="text/css">
    thead, th {text-align: center;vertical-align: middle;}
</style> -->
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