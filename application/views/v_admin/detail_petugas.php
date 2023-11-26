<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800 "><?php echo $title ?></h1>
    </div>

    <div class="card" style="width: 80%">
        <div class="card-body">

            <table class="table">
                <tr>
                    <th>Tanggal Masuk Kerja</th>
                    <td><?php echo date('d-m-Y', strtotime($detail->tanggal_masuk)); ?></td>
                </tr>

                <tr>
                    <th>Jabatan</th>
                    <td><?php echo $detail->nama_jabatan ?></td>
                </tr>

                <tr>
                    <th>NIP/NRPB</th>
                    <td><?php echo $detail->nip_petugas ?></td>
                </tr>

                <tr>
                    <th>Nama Petugas</th>
                    <td><?php echo $detail->nama_petugas ?></td>
                </tr>

                <tr>
                    <th>Tempat Lahir</th>
                    <td><?php echo $detail->tempat_lahir ?></td>
                </tr>

                <tr>
                    <th>Tanggal Lahir</th>
                    <td><?php echo date('d-m-Y', strtotime($detail->tanggal_lahir)); ?></td>
                </tr>

                <tr>
                    <th>Jenis Kelamin</th>
                    <td><?php echo $detail->jenis_kelamin ?></td>
                </tr>
            </table>
            <a href="<?php echo base_url('admin/petugas'); ?>" class="btn btn-primary">Kembali</a>
        </div>
    </div>

</div>