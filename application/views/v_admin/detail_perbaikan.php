<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800 "><?php echo $title ?></h1>
    </div>

    <div class="card" style="width: 80%">
        <div class="card-body">

            <table class="table">
                <tr>
                    <th>Tanggal Lapor</th>
                    <td><?php echo date('d-m-Y', strtotime($detail->tanggal_lapor)); ?></td>
                </tr>

                <tr>
                    <th>Nama Pelapor</th>
                    <td><?php echo $detail->nama_akun ?></td>
                </tr>

                <tr>
                    <th>Ruangan</th>
                    <td><?php echo $detail->nama_ruangan ?></td>
                </tr>

                <tr>
                    <th>Masalah</th>
                    <td><?php echo $detail->masalah ?></td>
                </tr>

                <tr>
                    <th>Tanggal Diperbaiki</th>
                    <td><?php echo date('d-m-Y', strtotime($detail->tanggal_perbaik)); ?></td>
                </tr>

                <tr>
                    <th>Petugas Yang Menangani</th>
                    <td><?php echo $detail->nama_petugas ?></td>
                </tr>

                <tr>
                    <th>Keterangan</th>
                    <td><?php echo $detail->tindakan ?></td>
                </tr>

                <tr>
                    <th>Status</th>
                    <td><?php echo $detail->status ?></td>
                </tr>

            </table>
            <a href="<?php echo base_url('admin/perbaikan'); ?>" class="btn btn-primary">Kembali</a>
        </div>
    </div>

</div>