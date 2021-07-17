<?php
include "config.php";
?>

<style>
    .noPrint {
        padding: 5px 10px;
        background-color: #483D8B;
        color: white;
    }

    .tanggung {
        width: 250px;
        height: 150px;
        float: right;
        text-align: center;
        padding: 10px;
        margin: 10px;
    }

    @media print {
        button.noPrint {
            display: none;
        }
    }
</style>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script>
    window.print();
</script>
<?php
date_default_timezone_set('Asia/Jakarta');
$tanggal = date('d F Y');
 $waktu = date('H:i:s');
?>
<table border="1" width="100%" style="border-collapse:collapse" cellpadding="5">
    <caption>
        <div style="overflow: auto;">
            <img src="assets/img/logo.png" alt="" height="100" width="150" style="float:left;  margin-left: 10px;">
            <h2 style="margin-bottom: 0;">Rekapitulasi Penerimaan Bantuan Sosial COVID-19</h2>
            <h3 style="margin-bottom: 5;">Sampai dengan <?php echo $tanggal.', Pukul '.$waktu; ?> </h3>
        </div>
        <hr>
    </caption>
    <thead>
        <tr>
            <th>No</th>
            <th>Alokasi</th>
                                            <th>Jumlah Transaksi</th>
                                            <th>Jumlah Dana</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        $sql = $koneksi->query("SELECT * FROM tb_penerimaan");

        while ($data = mysqli_fetch_assoc($sql)) {

        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                                            <td><?php echo $data["alokasi"]; ?></td>
                                            <td><?php echo $data["jumlah_transaksi"]; ?></td>
                                            <td><?php echo 'Rp.' . '&nbsp;' . number_format($data["jumlah_dana"], 0, ",", ".") . ' ,-'; ?></td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>
<br>
<center>
    <button type="button" class="noPrint btn bg-indigo waves-effect" value="Print" onclick="window.print()">
        <i class="material-icons">print</i>
        <span>PRINT</span>
    </button>
</center>