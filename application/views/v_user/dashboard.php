                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Sistem Informasi Perbaikan & Instalasi IT</h1>
                    </div>

                    <div class="alert alert-success font-weight-bold mb-4" style="width: 74%">
                        Selamat datang, Anda login sebagai User
                    </div>

                    <div class="card" style="margin-bottom: 120px; width: 74%;">
                        <div class="card-header font-weight-bold bg-primary text-white">
                            Data User
                        </div>

                        <?php foreach ($aakun as $a) : ?>
                            <div class="card-body" style="background-color: whitesmoke;">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img style="width: 200px" src="<?php echo base_url('assets/foto/' . $a->foto) ?>">
                                    </div>
                                    <div class="col-md-8">
                                        <table class="table">
                                            <tr>
                                                <td>NIP/NRPB</td>
                                                <td>:</td>
                                                <td><?php echo $a->nip ?></td>
                                            </tr>
                                            <tr>
                                                <td>Nama Pengguna</td>
                                                <td>:</td>
                                                <td><?php echo $a->nama_akun ?></td>
                                            </tr>
                                            <tr>
                                                <td>Username</td>
                                                <td>:</td>
                                                <td><?php echo $a->username ?></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                </div>
                <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->