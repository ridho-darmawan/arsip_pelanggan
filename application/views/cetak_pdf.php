<title>Halaman Cetak PDF</title>

<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Cetak Laporan PDF
            <small></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
            <li>Laporan</li>
            <li class="active">PDF</li>
        </ol>
    </section>
    <section class="content">

        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">

                        <!-- Custom Tabs -->
                        <div class="panel panel-default tabs">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#tab_1" data-toggle="tab">Laporan Bulanan</a></li>
                                <li><a href="#tab_2" data-toggle="tab">Laporan Tahunan</a></li>


                            </ul>
                            <div class="panel-body tab-content">
                                <div class="tab-pane active" id="tab_1">
                                    <span style="font-size:14pt;">
                                        <center>Laporan Bulanan Data Pelanggan</center>
                                    </span></br></br>

                                    <form method="post" action="<?= base_url('pelanggan/pdf_bulanan'); ?>" enctype="multipart/form-data" target='_blank1'>
                                        <div style="margin-left: 170px ">
                                            <div class="form-group">
                                                <div class="col-sm-4">
                                                    <label>Pilih bulan</label>
                                                    <select name="bulan" class="form-control" required>

                                                        <?php
                                                        foreach (bulan() as $b => $c) :
                                                        ?>
                                                            <option value="<?= $b ?>"><?= $c ?></option>
                                                        <?php endforeach; ?>


                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-4">
                                                    <label>Pilih tahun</label>
                                                    <select name="tahun" class="form-control" required="required">

                                                        <?php
                                                        for ($x = date('Y'); $x >= date('Y') - 20; $x--) :
                                                        ?>
                                                            <option value="<?= $x ?>"><?= $x ?></option>
                                                        <?php endfor; ?>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-2">

                                                    <input type="submit" class="form-control btn btn-info" style="margin-top: 24px" value="Cetak">
                                                </div>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                                <!-- /.tab-pane -->
                                <div class="tab-pane" id="tab_2">
                                    <span style="font-size:14pt; ">
                                        <center>Laporan Tahunan Data Pelanggan</center>
                                    </span></br></br>

                                    <form method="post" action="<?= base_url('pelanggan/pdf_tahunan'); ?>" enctype="multipart/form-data" target='_blank1'>
                                        <div style="margin-left: 330px ">


                                            <div class="form-group">
                                                <div class="col-sm-4">
                                                    <label>Pilih tahun</label>
                                                    <select name="tahun" class="form-control" required="required">

                                                        <?php
                                                        for ($x = date('Y'); $x >= date('Y') - 20; $x--) :
                                                        ?>
                                                            <option value="<?= $x ?>"><?= $x ?></option>
                                                        <?php endfor; ?>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-2">

                                                    <input type="submit" class="form-control btn btn-info" style="margin-top: 24px" value="Cetak">
                                                </div>
                                            </div>
                                        </div>

                                    </form>
                                </div>

                            </div>
                            <!-- /.tab-content -->
                        </div>
                        <!-- nav-tabs-custom -->

                    </div>
                </div>

            </div>


        </div>

    </section>
</div>


<!-- <style type="text/css">
    .content {
        text-align: center;
        background-color: white;
        padding: 1px;
    }
</style> -->