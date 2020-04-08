<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1><?= $title; ?></h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Surat Masuk</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box">
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fa fa-times"></i></button>
            </div>
            <div class="box-body">
                <form role="form" action="<?php echo base_url('surat_masuk/edit') ?>" method="POST">
                    <input type="hidden" name="id" value="<?= $surat_masuk['id']; ?>">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="no_indeks">Nomor Indeks</label>
                            <input type="text" name="no_indeks" class="form-control" id="no_indeks" placeholder="Masukan nomor indeks" value="<?= $surat_masuk['no_indeks']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="no_urut">Nomor Urut</label>
                            <input type="text" name="no_urut" class="form-control" id="no_urut" placeholder="Masukan nomor urut" value="<?= $surat_masuk['no_urut']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="tgl_terima">Tanggal Terima</label>
                            <input type="text" name="tgl_terima" class="form-control" id="tgl_terima" placeholder="Masukan tanggal terima" value="<?= $surat_masuk['tgl_terima']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="perihal">Perihal</label>
                            <input type="text" name="perihal" class="form-control" id="perihal" placeholder="Masukan perihal" value="<?= $surat_masuk['perihal']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="asal_surat">Asal Surat</label>
                            <input type="text" name="asal_surat" class="form-control" id="asal_surat" placeholder="Masukan asal surat" value="<?= $surat_masuk['asal_surat']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <input type="text" name="keterangan" class="form-control" id="keterangan" placeholder="Masukan keterangan" value="<?= $surat_masuk['keterangan']; ?>">
                        </div>

                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-check"></span> Update</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.box -->

    </section>
    <!-- /.content -->
</div>