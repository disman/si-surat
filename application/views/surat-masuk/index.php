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
         <div class="box-header with-border">
            <h3 class="box-title"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modalSurat"><span class="glyphicon glyphicon-plus"></span> Tambah</button></h3>

            <div class="box-tools pull-right">
               <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fa fa-minus"></i></button>
               <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fa fa-times"></i></button>
            </div>
         </div>
         <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
               <thead>
                  <tr>
                     <th>No</th>
                     <th>No Indeks</th>
                     <th>No Urut</th>
                     <th>Tgl Terima</th>
                     <th>Perihal</th>
                     <th>Asal Surat</th>
                     <th>Keterangan</th>
                     <th>Aksi</th>
                  </tr>
               </thead>
               <tbody>
                  <?php $no = 1; ?>
                  <?php foreach ($surat_masuk as $row) : ?>
                     <tr>
                        <td><?= $no; ?></td>
                        <td><?= $row['no_indeks']; ?></td>
                        <td><?= $row['no_urut']; ?></td>
                        <td><?= $row['tgl_terima']; ?></td>
                        <td><?= $row['perihal']; ?></td>
                        <td><?= $row['asal_surat']; ?></td>
                        <td><?= $row['keterangan']; ?></td>
                        <td>
                           <a href="#" class="btn btn-info btn-xs"><span class="glyphicon glyphicon-eye-open"></span> View</a>
                           <a href="<?php echo base_url('surat_masuk/edit/' . $row['id']); ?>" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit"></span> Edit</a>
                           <a href="<?php echo base_url('surat_masuk/hapus/' . $row['id']); ?>" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                        </td>
                     </tr>
                     <?php $no++; ?>
                  <?php endforeach; ?>
               </tbody>
            </table>
         </div>
      </div>
      <!-- /.box -->

   </section>
   <!-- /.content -->
</div>

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="modalSurat">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title">Tambah Surat Masuk</h4>
         </div>
         <div class="modal-body">
            <form role="form" action="<?php echo base_url('surat_masuk/tambah'); ?>" method="POST">
               <div class="box-body">
                  <div class="form-group">
                     <label for="no_indeks">Nomor Indeks</label>
                     <input type="text" name="no_indeks" class="form-control" id="no_indeks" placeholder="Masukan nomor indeks">
                     <?= form_error('no_indeks', '<small class="text-danger">', '</small>'); ?>
                  </div>
                  <div class="form-group">
                     <label for="no_urut">Nomor Urut</label>
                     <input type="text" name="no_urut" class="form-control" id="no_urut" placeholder="Masukan nomor urut">
                  </div>
                  <div class="form-group">
                     <label for="tgl_terima">Tanggal Terima</label>
                     <input type="text" name="tgl_terima" class="form-control" id="datepicker" placeholder="Masukan nomor indeks">
                  </div>
                  <div class="form-group">
                     <label for="perihal">Perihal</label>
                     <input type="text" name="perihal" class="form-control" id="perihal" placeholder="Masukan perihal">
                  </div>
                  <div class="form-group">
                     <label for="asal_surat">Asal Surat</label>
                     <input type="text" name="asal_surat" class="form-control" id="asal_surat" placeholder="Masukan asal surat">
                  </div>
                  <div class="form-group">
                     <label for="keterangan">Keterangan</label>
                     <input type="text" name="keterangan" class="form-control" id="keterangan" placeholder="Masukan keterangan">
                  </div>
               </div>
            </form>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Tambah</button>
         </div>
      </div>
   </div>
</div>