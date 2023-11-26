<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800 "><?php echo $title ?></h1>
    </div>

    <div class="card" style="width: 80%">
        <div class="card-body">

            <table class="table">
                <tr>
                    <th>Tanggal Lapor</th>
                    <td><?php echo date('d-m-Y', strtotime($detail->tanggal_lapor_instal)); ?></td>
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
                    <th>Nama Instalasi</th>
                    <td><?php echo $detail->nama_instal ?></td>
                </tr>

                <tr>
                    <th>Tanggal Instalasi</th>
                    <td><?php echo date('d-m-Y', strtotime($detail->tanggal_instal)); ?></td>
                </tr>

                <tr>
                    <th>Petugas Yang Menangani</th>
                    <td><?php echo $detail->nama_petugas ?></td>
                </tr>

                <tr>
                    <th>Keterangan</th>
                    <td><?php echo $detail->keterangan_instal ?></td>
                </tr>

                <tr>
                    <th>Status</th>
                    <td><?php echo $detail->status_instal ?></td>
                </tr>

            </table>
            <a href="<?php echo base_url('petugas/instalasi'); ?>" class="btn btn-primary">Kembali</a>
        </div>
    </div>

</div>