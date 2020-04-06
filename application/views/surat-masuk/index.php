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
            <h3 class="box-title"><a href="<?php echo base_url('surat_masuk/tambah') ?>" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-plus"></span> Tambah</a></h3>

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