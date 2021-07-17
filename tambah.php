<h2>Tambah Penerimaan Bantuan Sosial Covid19</h2>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Jenis Alokasi</label>
		<select name="alokasi" class="form-control">
                                <option value="">-- Pilih Jenis Alokasi --</option>
                                <option value="Alat Pelindung Diri">Alat Pelindung Diri</option>
                                <option value="Logistik Mahasiswa">Logistik Mahasiswa</option>
                                <option value="Bantuan kuota Mahasiswa">Bantuan kuota Mahasiswa</option>
                                <option value="Hand Sanitizer">Hand Sanitizer</option>
                                <option value="Sembako masyarakat">Sembako masyarakat</option>
                            </select>
	</div>

<div class="form-group">
		<label>Jumlah Transaksi</label>
		<input type="text" class="form-control" name="jumlah_transaksi">
	</div>
	<div class="form-group">
		<label>Jumlah Dana</label>
		<input type="text" class="form-control" name="jumlah_dana">
	</div>
	<div class="form-group">
		<label>Nama</label>
		<input type="text" class="form-control" name="nama">
	</div>
	<div class="form-group">
		<label>No HP</label>
		<input type="text" class="form-control" name="nohp">
	</div>
	<div class="form-group">
		<label>Email</label>
		<input type="text" class="form-control" name="email">
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
$sql = $koneksi->query("INSERT INTO tb_penerimaan values(NULL,'$alokasi','$jumlah_transaksi','$jumlah_dana','$nama','$nohp','$email')");

                    if ($sql) {
                ?>
                        <script type="text/javascript">
                            alert("Data Berhasil Disimpan !");
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
