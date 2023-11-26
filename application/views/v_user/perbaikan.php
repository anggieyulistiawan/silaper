<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
    </div>
    <div class="row">
        <div class="col-6">
            <a class="btn btn-sm btn-success mb-3" href="<?php echo base_url('user/perbaikan/tambah_data') ?>">
                <i class="fas fa-plus"></i> Tambah Data</a>
        </div>
    </div>

    <?php echo $this->session->flashdata('pesan') ?>
    <table class="table table-bordered table-striped mt-2 mb-5">
        <tr>
            <th class="text-center">No</th>
            <th class="text-center">Tanggal</th>
            <th class="text-center">Nama Pelapor</th>
            <th class="text-center">Ruangan</th>
            <th class="text-center">Masalah</th>
            <th class="text-center">Status</th>
            <th class="text-center">Action</th>
        </tr>

        <?php $no = 1;
        foreach ($perbaikan as $p) : ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo date('d-m-Y', strtotime($p->tanggal_lapor)); ?></td>
                <td><?php echo $p->nama_akun ?></td>
                <td><?php echo $p->nama_ruangan ?></td>
                <td><?php echo $p->masalah ?></td>
                <td><?php echo $p->status ?></td>
                <td>
                    <center>
                        <a class="btn btn-sm btn-primary" href="<?php echo base_url('user/perbaikan/update_data/' . $p->id_perbaikan) ?>"><i class="fas fa-edit"></i></a>
                        <a onclick="return confirm ('Yakin Hapus')" class="btn btn-sm btn-danger" href="<?php echo base_url('user/perbaikan/delete_data/' . $p->id_perbaikan) ?>"><i class="fas fa-trash"></i></a>
                    </center>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>