<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800 "><?php echo $title ?></h1>
    </div>

    <?php foreach ($akun as $a) : ?>
        <form method="POST" action="<?php echo base_url('admin/akun/update_data_aksi/') ?>" enctype="multipart/form-data">
            <div class="card">
                <div class="card-body">

                    <div class="row">
                        <div class="col-6">
                            <label>NIP/NRPB</label>
                            <input type="hidden" name="id_akun" class="form-control" value="<?php echo $a->id_akun ?>">
                            <input type="number" name="nip" class="form-control" value="<?php echo $a->nip ?>">
                            <?php echo form_error('nip', '<div class="text-small text-danger"></div>') ?>
                        </div>

                        <div class="col-6">
                            <label>Nama Pengguna</label>
                            <input type="text" name="nama_akun" class="form-control" value="<?php echo $a->nama_akun ?>">
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
                                    <option <?php echo $a->id_ruangan == $r->id_ruangan ? 'selected' : null ?> value="<?php echo $r->id_ruangan ?>"><?php echo $r->nama_ruangan ?></option>
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
                                    <option <?php echo $a->id_level == $l->id_level ? 'selected' : null ?> value="<?php echo $l->id_level ?>"><?php echo $l->nama_level ?></option>
                                <?php } ?>
                            </select>
                            <?php echo form_error('id_level', '<div class="text-small text-danger"></div>') ?>
                        </div>

                        <div class="col-4">
                            <label>Foto</label>
                            <input type="file" name="foto" class="form-control" value="<?php echo $a->foto ?>">
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" value="<?php echo $a->username ?>">
                            <?php echo form_error('username', '<div class="text-small text-danger"></div>') ?>
                        </div>
                        <div class="col-6">
                            <label>Password</label>
                            <input type="text" name="password" class="form-control">
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
    <?php endforeach; ?>

</div>
</div>

</div>