<?php
$kode = $_GET['id'];
$sql = $koneksi->query("DELETE FROM tb_penerimaan WHERE id_penerimaan ='$kode'");

if ($sql) {
?>
    <script type="text/javascript">
        alert("Data Berhasil Dihapus !");
        window.location.href = "?halaman=penerimaan";
    </script>
<?php
} else {
?>
    <script type="text/javascript">
        alert("Gagal Dihapus !");
        window.location.href = "?halaman=penerimaan";
    </script>
<?php
}
?>