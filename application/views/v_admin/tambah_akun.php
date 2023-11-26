<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800 "><?php echo $title ?></h1>
    </div>

    <form method="POST" action="<?php echo base_url('admin/akun/tambah_data_aksi/') ?>" enctype="multipart/form-data">
        <div class="card">
            <div class="card-body">

                <div class="row">
                    <div class="col-6">
                        <label>NIP/NRPB</label>
                        <input type="hidden" name="id_akun" class="form-control" placeholder="">
                        <input type="number" name="nip" class="form-control" placeholder="">
                        <?php echo form_error('nip', '<div class="text-small text-danger"></div>') ?>
                    </div>

                    <div class="col-6">
                        <label>Nama Pengguna</label>
                        <input type="text" name="nama_akun" class="form-control" placeholder="">
                        <?php echo form_error('nama_akun', '<div class="text-small text-danger"></div>') ?>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-4">
                        <label>Ruangan</label>
                        <select class="form-control" name="id_ruangan" required>
                            <option value="">--- Pilih Ruangan ---</option>
                            <?php
                            foreach ($ruangan as $r) { ?>
                                <option value="<?php echo $r->id_ruangan ?>"><?php echo $r->nama_ruangan ?></option>
                            <?php } ?>
                        </select>
                        <?php echo form_error('id_ruangan', '<div class="text-small text-danger"></div>') ?>
                    </div>

                    <div class="col-4">
                        <label>Level</label>
                        <select class="form-control" name="id_level" required>
                            <option value="">--- Pilih Level ---</option>
                            <?php
                            foreach ($level as $l) { ?>
                                <option value="<?php echo $l->id_level ?>"><?php echo $l->nama_level ?></option>
                            <?php } ?>
                        </select>
                        <?php echo form_error('id_level', '<div class="text-small text-danger"></div>') ?>
                    </div>

                    <div class="col-4">
                        <label>Foto</label>
                        <input type="file" name="foto" class="form-control">
                    </div>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control" placeholder="">
                        <?php echo form_error('username', '<div class="text-small text-danger"></div>') ?>
                    </div>
                    <div class="col-6">
                        <label>Password</label>
                        <input type="text" name="password" class="form-control" placeholder="">
                        <?php echo form_error('password', '<div class="text-small text-danger"></div>') ?>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                </div>
            </div>
            <button type="submit" class="btn btn-success" style="width: 100%">Submit</button>
    </form>

</div>
</div>

</div>