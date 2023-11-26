<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
    </div>

    <div class="row">
        <div class="col-6">
        </div>
        <div class="col-6">
            <?php echo form_open('petugas/petugas/search') ?>
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
            <th class="text-center">Nama Petugas</th>
            <th class="text-center">Jabatan</th>
            <th class="text-center">Foto</th>
            <th class="text-center">Action</th>
        </tr>

        <?php $no = 1;
        foreach ($petugas as $p) : ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $p->nama_petugas ?></td>
                <td><?php echo $p->nama_jabatan ?></td>
                <td><img src="<?php echo base_url() . 'assets/foto/' . $p->foto ?>" width="100px"></td>
                <td>
                    <center>
                        <a class="btn btn-sm btn-success" href="<?php echo base_url('petugas/petugas/detail_data/' . $p->id_petugas) ?>"><i class="fas fa-search-plus"></i></a>
                    </center>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>