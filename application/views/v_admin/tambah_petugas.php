<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800 "><?php echo $title ?></h1>
    </div>

    <form method="POST" action="<?php echo base_url('admin/petugas/tambah_data_aksi/') ?>" enctype="multipart/form-data">
        <div class="card">
            <div class="card-body">

                <div class="row">
                    <div class="col-6">
                        <label>Tanggal Masuk</label>
                        <input type="date" name="tanggal_masuk" class="form-control" placeholder="">
                        <?php echo form_error('tanggal_masuk', '<div class="text-small text-danger"></div>') ?>
                    </div>

                    <div class="col-6">
                        <label>Jabatan</label>
                        <select class="form-control" name="id_jabatan" required>
                            <option value="">--- Pilih Jabatan ---</option>
                            <?php
                            foreach ($jabatan as $j) { ?>
                                <option value="<?php echo $j->id_jabatan ?>"><?php echo $j->nama_jabatan ?></option>
                            <?php } ?>
                        </select>
                        <?php echo form_error('id_jabatan', '<div class="text-small text-danger"></div>') ?>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <label>NIP/NRPB</label>
                        <input type="number" name="nip_petugas" class="form-control" placeholder="">
                        <?php echo form_error('nip_petugas', '<div class="text-small text-danger"></div>') ?>
                    </div>
                    <div class="col-6">
                        <label>Nama Petugas</label>
                        <input type="text" name="nama_petugas" class="form-control" placeholder="">
                        <?php echo form_error('nama_petugas', '<div class="text-small text-danger"></div>') ?>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <label>Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" class="form-control" placeholder="">
                        <?php echo form_error('tempat_lahir', '<div class="text-small text-danger"></div>') ?>
                    </div>
                    <div class="col-6">
                        <label>Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" class="form-control" placeholder="">
                        <?php echo form_error('tanggal_lahir', '<div class="text-small text-danger"></div>') ?>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <label>Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-control">
                            <option value="">--- Pilih Jenis Kelamin ---</option>
                            <option value="Laki - laki">Laki - laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>

                    <div class="col-6">
                        <label>Foto</label>
                        <input type="file" name="foto" class="form-control">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-success" style="width: 100%">Submit</button>
        </div>
    </form>

</div>
</div>

</div>