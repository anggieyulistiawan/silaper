 <section class="content">
     <div class="container-fluid">
         <div class="d-sm-flex align-items-center justify-content-between mb-4">
             <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
         </div>

         <div class="row">
             <div class="col-6">
             </div>
             <div class="col-6">
                 <?php echo form_open('petugas/akun/search') ?>
                 <div class="input-group mb-3">
                     <input type="text" name="keyword" class="form-control" placeholder="Search">
                     <div class="input-group-append">
                         <button type="submit" class="btn btn-secondary">Cari</button>
                     </div>
                 </div>
                 <?php echo form_close() ?>
             </div>
         </div>

         <?php echo $this->session->flashdata('pesan') ?>

         <table class="table table-bordered table-striped mt-2 mb-5">
             <tr>
                 <th class="text-center">No</th>
                 <th class="text-center">Nama Pengguna</th>
                 <th class="text-center">Nama Ruangan</th>
                 <th class="text-center">Level</th>
                 <th class="text-center">Foto</th>
                 <th class="text-center">Action</th>
             </tr>

             <?php $no = 1;
                foreach ($akun as $a) : ?>
                 <tr>
                     <td><?php echo $no++ ?></td>
                     <td><?php echo $a->nama_akun ?></td>
                     <td><?php echo $a->nama_ruangan ?></td>
                     <td><?php echo $a->nama_level ?></td>
                     <td><img src="<?php echo base_url() . 'assets/foto/' . $a->foto ?>" width="100px"></td>
                     <td>
                         <center>
                             <a class="btn btn-sm btn-success" href="<?php echo base_url('petugas/akun/detail_data/' . $a->id_akun) ?>"><i class="fas fa-search-plus"></i></a>
                         </center>
                     </td>
                 </tr>
             <?php endforeach; ?>
         </table>
     </div>
 </section>