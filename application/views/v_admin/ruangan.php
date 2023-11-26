<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
    </div>

    <div class="row">
        <div class="col-6">
            <a class="btn btn-sm btn-success mb-3" href="<?php echo base_url('admin/ruangan/tambah_data') ?>">
                <i class="fas fa-plus"></i> Tambah Data</a>
        </div>
        <div class="col-6">
            <?php echo form_open('admin/ruangan/search') ?>
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
            <th class="text-center">EXT.</th>
            <th class="text-center">Nama Ruangan</th>
            <th class="text-center">NIP/NRPB</th>
            <th class="text-center">Nama penanggung Jawab</th>
            <th class="text-center">Keterangan</th>
            <th class="text-center">Action</th>
        </tr>

        <?php $no = 1;
        foreach ($ruangan as $r) : ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $r->id_ruangan ?></td>
                <td><?php echo $r->nama_ruangan ?></td>
                <td><?php echo $r->nip_ruangan ?></td>
                <td><?php echo $r->nama_pj ?></td>
                <td><?php echo $r->keterangan ?></td>
                <td>
                    <center>
                        <a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/ruangan/update_data/' .
                                                                    $r->id_ruangan) ?>"><i class="fas fa-edit"></i></a>
                        <a onclick="return confirm ('Yakin Hapus')" class="btn btn-sm btn-danger" href="<?php echo
                                                                                                        base_url('admin/ruangan/delete_data/' . $r->id_ruangan) ?>"><i class="fas fa-trash"></i></a>
                    </center>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>