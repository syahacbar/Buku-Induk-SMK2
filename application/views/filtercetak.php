<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Cetak Buku Induk</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Cetak Lembaran Buku Induk Berdasarkan Kelas
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form target="_blank" role="form" action="<?php echo site_url('welcome/detail_group');?>" method="POST">
                                        <div class="form-group">
                                            <label>Pilih Kelas</label>
                                            <select name="filterkelas" class="form-control">
                                            <?php foreach ($kelas AS $k) : ?>
                                                <option value="<?php echo $k->kompkeahlian; ?>"><?php echo $k->kompkeahlian; ?></option>
                                            <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-print"></i> Cetak</button>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>