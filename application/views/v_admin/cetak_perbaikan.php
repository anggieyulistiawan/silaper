<style>
    table {
        font-size: 14px;

    }

    table,
    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
    }

    thead {
        font-size: 16px;
    }

    .judul h3,
    h2,
    p {
        text-align: center;
        margin: 5px 0 5px 0;
    }

    .form-inline img {

        display: inline-block;
    }

    h2 {
        font-size: 30px;
    }

    .kop tr td {
        text-align: center;
        border: 2px solid white;
        border-collapse: collapse;
    }

    .gambar {
        margin-right: 10px;
    }

    .isi tr td {
        padding-left: 5px;
        padding-right: 5px;
    }

    .ttd {
        text-align: center;
        display: inline-block;
        float: right;
    }
</style>

<script>
    window.load = print_d();

    function print_d() {
        window.print();
    }
    window.onfocus = function() {
        window.close();
    }
</script>

<title>Laporan Data Perbaikan</title>

<div class="container-fluid">
    <center>
        <table class="kop">
            <tr>
                <!-- <img src="<?= base_url() ?>assets/img/logo1.png" class="img-fluid" alt=""> -->
                <td rowspan="5"><img src="<?= base_url() ?>assets/img/logo1.png" height="130" alt="" class="gambar"></td>
            </tr>
            <tr>
                <td style="font-size: 28px; font-weight: bold;">PEMERINTAH KOTA BANJARBARU</td>
            </tr>
            <tr>
                <td style="font-size: 28px; font-weight: bold;">RUMAH SAKIT DAERAH IDAMAN KOTA BANJARBARU</td>
            </tr>
            <tr>
                <td style="font-weight: bold;">Jalan Trikora Nomor 115 Guntung Manggis Kota Banjarbaru Kalimantan Selatan</td>
            </tr>
            <tr>
                <td style="font-weight: bold;">Telepon (0511) 6749696 Faksmili (0511) 6749697</td>
            </tr>
        </table>
    </center>


    <hr size="2px" color="black" style="margin-bottom: 1px;">
    <hr size="2px" color="black" style="margin-top: 1px;">
    <center>
        <table class="kop">
            <td style="font-size: 30px; font-weight: bold;">Laporan Data Perbaikan</td>
        </table>
    </center>
    <div>
        <table class="isi" style="width:100%;">
            <thead style="line-height: 40px;">
                <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">Tanggal Lapor</th>
                    <th class="text-center">Nama Pelapor</th>
                    <th class="text-center">Ruangan</th>
                    <th class="text-center">Masalah</th>
                    <th class="text-center">Tanggal Perbaikan</th>
                    <th class="text-center">Keterangan</th>
                    <th class="text-center">Status</th>

                </tr>
            </thead>
            <tbody style="line-height: 30px;">
                <?php $no = 1;
                foreach ($print_perbaikan as $p) : ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo date('d-m-Y', strtotime($p->tanggal_lapor)); ?></td>
                        <td><?php echo $p->nama_akun ?></td>
                        <td><?php echo $p->nama_ruangan ?></td>
                        <td><?php echo $p->masalah ?></td>
                        <td><?php echo date('d-m-Y', strtotime($p->tanggal_perbaik)); ?></td>
                        <td><?php echo $p->tindakan ?></td>
                        <td><?php echo $p->status ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <br>
    <div class="ttd" style="display: inline-block;">
        <h5>Kepala Instalasi SIMRS, <?= date('d-m-Y') ?></h5>
        <br>
        <br>
        <br>
        <h5 style="margin-bottom: 1px;">Muhammad Fariz Adani, S.Kom</h5>
        <hr size="2px" color="black" style="margin-top: 1px;">
        <h5 style="margin-top: 1px;">NRPB. 92.155.1.17</h5>
    </div>
</div>