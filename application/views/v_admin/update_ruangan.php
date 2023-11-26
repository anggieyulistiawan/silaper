<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
    </div>

    <div class="card" style="width: 80%">
        <div class="card-body">
            <?php foreach ($ruangan as $r) : ?>
                <form method="POST" action="<?php echo base_url('admin/ruangan/update_data_aksi/') ?>">

                    <div class="form-group">
                        <label>EXT.</label>
                        <!-- <input type="hidden" name="idruang" class="form-control" value="<?php echo $r->id_ruangan ?>"> -->
                        <input type="number" name="id_ruangan" class="form-control" value="<?php echo $r->id_ruangan ?>">
                        <?php echo form_error('id_ruangan', '<div class="text-small text-danger"></div>') ?>
                    </div>

                    <div class="form-group">
                        <label>Nama Ruangan</label>
                        <!-- <input type="hidden" name="idruang" class="form-control" value="<?php echo $r->nama_ruangan ?>"> -->
                        <input type="text" name="nama_ruangan" class="form-control" value="<?php echo $r->nama_ruangan ?>">
                        <?php echo form_error('nama_ruangan', '<div class="text-small text-danger"></div>') ?>
                    </div>

                    <div class="form-group">
                        <label>NIP/NRPB</label>
                        <!-- <input type="hidden" name="idruang" class="form-control" value="<?php echo $r->nip ?>"> -->
                        <input type="number" name="nip_ruangan" class="form-control" value="<?php echo $r->nip_ruangan ?>">
                        <?php echo form_error('nip_ruangan', '<div class="text-small text-danger"></div>') ?>
                    </div>

                    <div class="form-group">
                        <label>Nama penanggung Jawab</label>
                        <!-- <input type="hidden" name="idruang" class="form-control" value="<?php echo $r->nama_pj ?>"> -->
                        <input type="text" name="nama_pj" class="form-control" value="<?php echo $r->nama_pj ?>">
                        <?php echo form_error('nama_pj', '<div class="text-small text-danger"></div>') ?>
                    </div>

                    <div class="form-group">
                        <label>Keterangan</label>
                        <select name="keterangan" class="form-control">
                            <option <?php echo $r->keterangan == 'Lantai 1' ? 'selected' : null ?> value="Lantai 1">Lantai 1</option>
                            <option <?php echo $r->keterangan == 'Lantai 2' ? 'selected' : null ?> value="Lantai 2">Lantai 2</option>
                            <option <?php echo $r->keterangan == 'Lantai 3' ? 'selected' : null ?> value="Lantai 3">Lantai 3</option>
                            <option <?php echo $r->keterangan == 'Lantai 4' ? 'selected' : null ?> value="Lantai 4">Lantai 4</option>
                        </select>
                        <?php echo form_error('keterangan', '<div class="text-small text-danger"></div>') ?>
                    </div>

                    <button type="submit" class="btn btn-success">Submit</button>

                </form>
            <?php endforeach; ?>
        </div>
    </div>

</div>