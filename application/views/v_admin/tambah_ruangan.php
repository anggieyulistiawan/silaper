<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800 "><?php echo $title ?></h1>
    </div>

    <div class="card" style="width: 80%">
        <div class="card-body">
            <form method="POST" action="<?php echo base_url('admin/ruangan/tambah_data_aksi/') ?>">

                <div class="form-group">
                    <label>EXT.</label>
                    <input type="number" name="id_ruangan" class="form-control">
                    <?php echo form_error('id_ruangan', '<div class="text-small text-danger"></div>') ?>
                </div>

                <div class="form-group">
                    <label>Nama Ruangan</label>
                    <input type="text" name="nama_ruangan" class="form-control">
                    <?php echo form_error('nama_ruangan', '<div class="text-small text-danger"></div>') ?>
                </div>

                <div class="form-group">
                    <label>NIP/NRPB</label>
                    <input type="number" name="nip_ruangan" class="form-control">
                    <?php echo form_error('nip_ruangan', '<div class="text-small text-danger"></div>') ?>
                </div>

                <div class="form-group">
                    <label>Nama penanggung Jawab</label>
                    <input type="text" name="nama_pj" class="form-control">
                    <?php echo form_error('nama_pj', '<div class="text-small text-danger"></div>') ?>
                </div>

                <div class="form-group">
                    <label>Keterangan</label>
                    <select name="keterangan" class="form-control">
                        <option value="">--- Pilih Keterangan ---</option>
                        <option value="Lantai 1">Lantai 1</option>
                        <option value="Lantai 2">Lantai 2</option>
                        <option value="Lantai 3">Lantai 3</option>
                        <option value="Lantai 4">Lantai 4</option>
                    </select>
                    <?php echo form_error('keterangan', '<div class="text-small text-danger"></div>') ?>
                </div>

                <button type="submit" class="btn btn-success">Submit</button>

            </form>
        </div>
    </div>

</div>