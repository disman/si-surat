<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1><?= $title; ?></h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Examples</a></li>
            <li class="active">Blank page</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                        <i class="fa fa-times"></i></button>
                </div>
            </div>
            <form action="<?php echo base_url('surat_masuk/edit'); ?>" role="form" method="POST" class="form-horizontal">
                <input type="hidden" name="id" value="<?= $surat_masuk['id']; ?>">
                <div class="box-body">
                    <div class="form-group">
                        <label for="no_indeks">Nomor indeks</label>
                        <input type="text" name="no_indeks" class="form-control" id="no_indeks" placeholder="Nomor indeks..." value="<?= $surat_masuk['no_indeks']; ?>">
                    </div>

                    <div class="form-group">
                        <label for="no_urut">Nomor urut</label>
                        <input type="text" name="no_urut" class="form-control" id="no_urut" placeholder="Nomor urut..." value="<?= $surat_masuk['no_urut']; ?>">
                    </div>

                    <div class="form-group">
                        <label for="datepicker">Tanggal terima</label>
                        <input type="text" name="tgl_terima" class="form-control" id="datepicker" placeholder="Tanggal terima..." value="<?= $surat_masuk['tgl_terima']; ?>">
                    </div>

                    <div class="form-group">
                        <label for="perihal">Perihal</label>
                        <input type="text" name="perihal" class="form-control" id="perihal" placeholder="Perihal..." value="<?= $surat_masuk['perihal']; ?>">
                    </div>

                    <div class="form-group">
                        <label for="asal_surat">Asal surat</label>
                        <input type="text" name="asal_surat" class="form-control" id="asal_surat" placeholder="Asal surat..." value="<?= $surat_masuk['asal_surat']; ?>">
                    </div>

                    <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <input type="text" name="keterangan" class="form-control" id="keterangan" placeholder="Keterangan..." value="<?= $surat_masuk['keterangan']; ?>">
                    </div>
                </div>
                <!-- /.box-body -->
            </form>
            <div class="box-footer">
                <button type="submit" class="btn btn-success">Update</button>
            </div>
        </div>
        <!-- /.box -->

    </section>
    <!-- /.content -->
</div>