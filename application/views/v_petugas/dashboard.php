                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Sistem Informasi Perbaikan & Instalasi IT</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Pengguna</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $akun ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-users fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Ruangan</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $ruangan ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-home fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Perbaikan
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $perbaikan ?></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-book-medical fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Instalasi</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $instalasi ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-wrench fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="alert alert-success font-weight-bold mb-4" style="width: 74%">
                        Selamat datang, Anda login sebagai Petugas
                    </div>

                    <div class="card" style="margin-bottom: 120px; width: 74%;">
                        <div class="card-header font-weight-bold bg-primary text-white">
                            Data Petugas
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