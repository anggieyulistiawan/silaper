<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800 "><?php echo $title ?></h1>
    </div>

    <form method="POST" action="<?php echo base_url('user/instalasi/tambah_data_aksi/') ?>">
        <div class="card">

            <div class="card-body">
                <div class="row">
                    <div class="col-3">
                        <label>Tanggal Lapor</label>
                        <input type="date" name="tanggal_lapor_instal" value="<?= date('Y-m-d') ?>" class="form-control" readonly>
                    </div>

                    <div class="col-3">
                        <label>NIP/NRPB</label>
                        <input type="text" name="nip" value="<?= $this->session->userdata('nip'); ?>" class="form-control" readonly>
                    </div>

                    <div class="col-3">
                        <label>Nama Pelapor</label>
                        <input type="text" name="nama_akun" value="<?= $this->session->userdata('nama_akun'); ?>" class="form-control" readonly>
                    </div>

                    <div class="col-3">
                        <label>Ruangan</label>
                        <input type="text" name="id_ruangan" value="<?= $this->session->userdata('nama_ruangan'); ?>" class="form-control" readonly>
                    </div>

                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <label>Instalasi yang diminta</label>
                        <select name="nama_instal" class="form-control">
                            <option value="">--- Pilih Instalasi ---</option>
                            <option value="Internet">Internet</option>
                            <option value="Telepon">Telepon</option>
                            <option value="CCTV">CCTV</option>
                        </select>
                    </div>
                    <?php echo form_error('nama_instal', '<div class="text-small text-danger"></div>') ?>
                </div>
            </div>
        </div>


        <button type="submit" class="btn btn-success" style="width: 100%">Submit</button>
    </form>
</div>
</div>

</div>