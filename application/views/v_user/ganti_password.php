<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
    </div>
    <div class="card" style="width: 50%">
        <div class="card-body">
            <form method="POST" action="<?php echo base_url('user/password/gantipassword_aksi') ?>">
                <div class="form-group">
                    <label>Password Baru</label>
                    <input type="password" name="passbaru" class="form-control">
                    <?php echo form_error('passbaru', '<div class="text-small text-danger"></div>') ?>
                </div>

                <div class="form-group">
                    <label>Ulangi Password Baru</label>
                    <input type="password" name="passulang" class="form-control">
                    <?php echo form_error('passulang', '<div class="text-small text-danger"></div>') ?>
                </div>
                <button type="submit" class="btn btn-success">Simpan</button>
            </form>
        </div>
    </div>
</div>