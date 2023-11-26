<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800 "><?php echo $title ?></h1>
    </div>

    <div class="card" style="width: 80%">
        <div class="card-body">

            <table class="table">
                <tr>
                    <th>NIP/NRPB</th>
                    <td><?php echo $detail->nip ?></td>
                </tr>

                <tr>
                    <th>Nama Pengguna</th>
                    <td><?php echo $detail->nama_akun ?></td>
                </tr>

                <tr>
                    <th>Ruangan</th>
                    <td><?php echo $detail->nama_ruangan ?></td>
                </tr>

                <tr>
                    <th>Level</th>
                    <td><?php echo $detail->nama_level ?></td>
                </tr>

                <tr>
                    <th>Username</th>
                    <td><?php echo $detail->username ?></td>
                </tr>

            </table>
            <a href="<?php echo base_url('petugas/akun'); ?>" class="btn btn-primary">Kembali</a>
        </div>
    </div>

</div>