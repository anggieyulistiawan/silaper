<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
    </div>

    <div class="card mb-3">
        <div class="card-header">Filter Data Instalasi</div>
        <div class="card-body">
            <div class="row">
                <div class="col-9">
                    <form method="POST" action="<?= base_url('admin/instalasi/filter_instalasi'); ?>" class="form-inline">
                        <div class="form-group mb-2">
                            <label for="staticEmail2">Bulan :</label>
                            <select class="form-control ml-3" name="bulan">
                                <option value="">--- Pilih Bulan --- </option>
                                <option value="01">Januari</option>
                                <option value="02">Februari</option>
                                <option value="03">Maret</option>
                                <option value="04">April</option>
                                <option value="05">Mei</option>
                                <option value="06">Juni</option>
                                <option value="07">Juli</option>
                                <option value="08">Agustus</option>
                                <option value="09">September</option>
                                <option value="10">Oktober</option>
                                <option value="11">November</option>
                                <option value="12">Desember</option>
                            </select>
                        </div>

                        <div class="form-group mb-2 ml-3">
                            <label for="staticEmail2">Tahun :</label>
                            <select class="form-control ml-3" name="tahun">
                                <option value="">--- Pilih Tahun --- </option>
                                <?php $tahun = date('Y');
                                for ($t = 2020; $t < $tahun + 2; $t++) { ?>
                                    <option value="<?php echo $t ?>"><?php echo $t ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary mb-2 ml-4"><i class="fas fa-eye"></i> Tampilkan Data</button>
                    </form>
                </div>
                <div class="col-3">
                    <?php echo form_open('admin/instalasi/search') ?>
                    <div class="input-group mb-3">
                        <input type="text" name="keyword" class="form-control" placeholder="Search">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-secondary">Cari</button>
                        </div>
                    </div>
                    <?php echo form_close() ?>
                </div>
            </div>
        </div>
    </div>
    <?php echo $this->session->flashdata('pesan') ?>

    <?php if ($bulan == "") { ?>
    <?php } else { ?>
        <div class="alert alert-info">
            Menampilkan Data Instalasi Bulan
            <span class="font-weight-bold"><?php echo $bulan ?></span>
            Tahun
            <span class="font-weight-bold"><?php echo $tahun2 ?></span>
        </div>

    <?php } ?>

    <table class="table table-bordered table-striped mt-2 mb-5">
        <tr>
            <th class="text-center">No</th>
            <th class="text-center">Tanggal</th>
            <th class="text-center">Nama Peminta</th>
            <th class="text-center">Ruangan</th>
            <th class="text-center">Nama Instalasi</th>
            <th class="text-center">Status</th>
            <th class="text-center">Action</th>
        </tr>

        <?php $no = 1;
        foreach ($instalasi as $i) : ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo date('d-m-Y', strtotime($i->tanggal_lapor_instal)); ?></td>
                <td><?php echo $i->nama_akun ?></td>
                <td><?php echo $i->nama_ruangan ?></td>
                <td><?php echo $i->nama_instal ?></td>
                <td><?php echo $i->status_instal ?></td>
                <td>
                    <center>
                        <?php if ($i->id_petugas == NULL) { ?>
                        <?php } else { ?>
                            <a class="btn btn-sm btn-success" href="<?php echo base_url('admin/instalasi/detail_data/' . $i->id_instalasi) ?>"><i class="fas fa-search-plus"></i></a>
                        <?php } ?>
                    </center>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>