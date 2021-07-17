<?php
$kode2 = $_GET['id'];
$sql2 = $koneksi->query("SELECT * FROM tb_penerimaan WHERE id_penerimaan ='$kode2'");
$tampil = $sql2->fetch_assoc();

$alokasi = $tampil['alokasi'];
?>

<h2>Ubah Data</h2>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Jenis Alokasi</label>
		<select name="alokasi" class="form-control">
                                <option value="Alat Pelindung Diri" <?php if ($alokasi == "Alat Pelindung Diri") {echo "selected";} ?>>Alat Pelindung Diri</option>
                                <option value="Logistik Mahasiswa" <?php if ($alokasi == "Logistik Mahasiswa") {echo "selected";} ?>>Logistik Mahasiswa</option>
                                <option value="Bantuan kuota Mahasiswa" <?php if ($alokasi == "Bantuan kuota Mahasiswa") {echo "selected";} ?>>Bantuan kuota Mahasiswa</option>
                                <option value="Hand Sanitizer" <?php if ($alokasi == "Hand Sanitizer") {echo "selected";} ?>>Hand Sanitizer</option>
                                <option value="Sembako masyarakat" <?php if ($alokasi == "Sembako masyarakat") {echo "selected";} ?>>Sembako masyarakat</option>
                            </select>
	</div>

<div class="form-group">
		<label>Jumlah Transaksi</label>
		<input type="text" class="form-control" name="jumlah_transaksi" value="<?php echo $tampil['jumlah_transaksi']; ?>">
	</div>
	<div class="form-group">
		<label>Jumlah Dana</label>
		<input type="text" class="form-control" name="jumlah_dana" value="<?php echo $tampil['jumlah_dana']; ?>">
	</div>
	<div class="form-group">
		<label>Nama</label>
		<input type="text" class="form-control" name="nama" value="<?php echo $tampil['nama']; ?>">
	</div>
	<div class="form-group">
		<label>No HP</label>
		<input type="text" class="form-control" name="nohp" value="<?php echo $tampil['nohp']; ?>">
	</div>
	<div class="form-group">
		<label>Email</label>
		<input type="text" class="form-control" name="email" value="<?php echo $tampil['email']; ?>">
	</div>

	<button class="btn btn-primary" name="save">Simpan</button>
</form>
<?php
if (isset($_POST['save']))
{
	$alokasi = $_POST["alokasi"];
                    $jumlah_transaksi = $_POST["jumlah_transaksi"];
                    $jumlah_dana = $_POST["jumlah_dana"];
                    $nama = $_POST["nama"];
                    $nohp = $_POST["nohp"];
                    $email = $_POST["email"];
$sql = $koneksi->query("UPDATE tb_penerimaan SET alokasi='$alokasi', jumlah_transaksi='$jumlah_transaksi', jumlah_dana='$jumlah_dana', nama='$nama', nohp='$nohp',email='$email'  WHERE id_penerimaan='$kode2'");

                    if ($sql) {
                ?>
                        <script type="text/javascript">
                            alert("Data Berhasil Diubah !");
                            window.location.href = "?halaman=penerimaan";
                        </script>

                    <?php
                    } else {
                    ?>
                        <script type="text/javascript">
                            alert("Gagal Disimpan !");
                            window.location.href = "?halaman=penerimaan";
                        </script>

                <?php
                    }
                }
                ?>
