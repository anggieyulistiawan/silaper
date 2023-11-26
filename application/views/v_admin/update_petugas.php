<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800 "><?php echo $title ?></h1>
    </div>

    <?php foreach ($petugas as $p) : ?>
        <form method="POST" action="<?php echo base_url('admin/petugas/update_data_aksi/') ?>">
            <div class="card">
                <div class="card-body">

                    <div class="row">
                        <div class="col-6">
                            <label>Tanggal Masuk</label>
                            <input type=" date" name="tanggal_masuk" class="form-control" value="<?php echo $p->tanggal_masuk ?>">
                            <?php echo form_error('tanggal_masuk', '<div class="text-small text-danger"></div>') ?>
                        </div>

                        <div class="col-6">
                            <label>Jabatan</label>
                            <select class="form-control" name="id_jabatan" required>
                                <option value="">--- Pilih Jabatan ---</option>
                                <?php
                                foreach ($jabatan as $j) { ?>
                                    <option <?php echo $p->id_jabatan == $j->id_jabatan ? 'selected' : null ?> value="<?php echo $j->id_jabatan ?>"><?php echo $j->nama_jabatan ?></option>
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
                            <input type="hidden" name="id_petugas" class="form-control" value="<?php echo $p->id_petugas ?>">
                            <input type="number" name="nip_petugas" class="form-control" value="<?php echo $p->nip_petugas ?>">
                            <?php echo form_error('nip_petugas', '<div class="text-small text-danger"></div>') ?>
                        </div>

                        <div class="col-6">
                            <label>Nama Petugas</label>
                            <input type="text" name="nama_petugas" class="form-control" value="<?php echo $p->nama_petugas ?>">
                            <?php echo form_error('nama_petugas', '<div class="text-small text-danger"></div>') ?>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <label>Tempat Lahir</label>
                            <input type="text" name="tempat_lahir" class="form-control" value="<?php echo $p->tempat_lahir ?>">
                            <?php echo form_error('tempat_lahir', '<div class="text-small text-danger"></div>') ?>
                        </div>

                        <div class="col-6">
                            <label>Tanggal Lahir</label>
                            <input type="date" name="tanggal_lahir" class="form-control" value="<?php echo $p->tanggal_lahir ?>">
                            <?php echo form_error('tanggal_lahir', '<div class="text-small text-danger"></div>') ?>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <label>Jenis Kelamin</label>
                            <select name="jenis_kelamin" class="form-control">
                                <option <?php echo $p->jenis_kelamin == 'Laki - laki' ? 'selected' : null ?> value="Laki - laki">Laki - laki</option>
                                <option <?php echo $p->jenis_kelamin == 'Perempuan' ? 'selected' : null ?> value="Perempuan">Perempuan</option>
                            </select>
                        </div>

                        <div class="col-6">
                            <label>Foto</label>
                            <input type="file" name="foto" class="form-control" value="<?php echo $p->foto ?>">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success" style="width: 100%">Submit</button>
        </form>
    <?php endforeach; ?>
</div>
</div>

</div>