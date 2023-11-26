<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800 "><?php echo $title ?></h1>
    </div>

    <form method="POST" action="<?php echo base_url('petugas/perbaikan/update_data_aksi/') ?>">
        <div class="card">

            <div class="card-body">
                <div class="row">
                    <div class="col-3">
                        <label>Tanggal Lapor</label>
                        <input type="hidden" name="id_perbaikan" class="form-control" value="<?php echo $perbaikan->id_perbaikan ?>">
                        <input type="date" class="form-control" value="<?php echo $perbaikan->tanggal_lapor ?>" readonly>
                    </div>

                    <div class="col-5">
                        <label>Nama Pelapor</label>
                        <input type="text" class="form-control" value="<?php echo $perbaikan->nama_akun ?>" readonly>
                    </div>

                    <div class="col-4">
                        <label>Ruangan</label>
                        <input type="text" class="form-control" value="<?php echo $perbaikan->nama_ruangan ?>" readonly>

                    </div>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <label>Masalah</label>
                        <input type="text" class="form-control" value="<?php echo $perbaikan->masalah ?>" readonly>

                    </div>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-3">
                        <label>Tanggal Perbaikan</label>
                        <input type="date" name="tanggal_perbaik" value="<?= date('Y-m-d') ?>" class="form-control" readonly>
                    </div>

                    <div class="col-5">
                        <label>Petugas Yang Menangani</label>
                        <select class="form-control" name="id_petugas" required>
                            <option value="">--- Pilih Petugas ---</option>
                            <?php
                            foreach ($petugas as $p) { ?>
                                <option <?php echo $p->id_petugas == $perbaikan->id_petugas ? 'selected' : null ?> value="<?php echo $p->id_petugas ?>"><?php echo $p->nama_petugas ?></option>
                            <?php } ?>
                        </select>
                        <?php echo form_error('id_petugas', '<div class="text-small text-danger"></div>') ?>
                    </div>

                    <div class="col-4">
                        <label>Status</label>
                        <select name="status" class="form-control">
                            <option <?php echo $perbaikan->status == 'Belum Selesai' ? 'selected' : null ?> value="Belum Selesai">Belum Selesai</option>
                            <option <?php echo $perbaikan->status == 'Selesai' ? 'selected' : null ?> value="Selesai">Selesai</option>
                        </select>
                        <?php echo form_error('status', '<div class="text-small text-danger"></div>') ?>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <label>Keterangan</label>
                        <input type="text" name="tindakan" class="form-control" value="<?php echo $perbaikan->tindakan ?>">
                        <?php echo form_error('tindakan', '<div class="text-small text-danger"></div>') ?>
                    </div>

                </div>
            </div>

            <button type="submit" class="btn btn-success" style="width: 100%">Submit</button>
    </form>
</div>
</div>

</div>