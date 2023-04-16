<?php

  include("config.php");

  if( !isset($_GET['id']) ){
    header('Location: list-siswa.php');
  }

  $id = $_GET['id'];

  $sql = "SELECT * FROM calon_siswa WHERE id=$id";
  $query = mysqli_query($db, $sql);
  $siswa = mysqli_fetch_assoc($query);

  if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulir Edit Siswa | SMK Coding</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.15/tailwind.min.css">
</head>
<body>
  <header class="bg-blue-300 py-4">
    <h3 class="text-xl font-bold text-gray-800 text-center">Formulir Edit Siswa</h3>
  </header>

  <form action="proses-edit.php" class="mx-4 my-8">
    <fieldset>
      <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />

      <div class="my-4">
        <label for="nama" class="block text-gray-800 font-bold">Nama:</label>
        <input type="text" name="nama" placeholder="nama lengkap" value="<?php echo $siswa['nama'] ?>" class="block w-full border border-gray-300 rounded py-2 px-4 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
      </div>

      <div class="my-4">
        <label for="alamat" class="block text-gray-800 font-bold">Alamat:</label>
        <textarea name="alamat" class="block w-full border border-gray-300 rounded py-2 px-4 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"><?php echo $siswa['alamat'] ?></textarea>
      </div>

      <div class="my-4">
        <label for="jenis_kelamin" class="block text-gray-800 font-bold">Jenis Kelamin:</label>
        <?php $jk = $siswa['jenis_kelamin']; ?>
        <label class="inline-flex items-center">
          <input type="radio" name="jenis_kelamin" value="laki-laki" <?php echo ($jk == 'laki-laki') ? "checked": "" ?> class="form-radio h-4 w-4 text-blue-600">
          <span class="ml-2 text-gray-700">Laki-laki</span>
        </label>
        <label class="inline-flex items-center">
          <input type="radio" name="jenis_kelamin" value="perempuan" <?php echo ($jk == 'perempuan') ? "checked": "" ?> class="form-radio h-4 w-4 text-blue-600">
          <span class="ml-2 text-gray-700">Perempuan</span>
        </label>
      </div>

      <div class="my-4">
        <label for="agama" class="block text-gray-800 font-bold">Agama:</label>
        <?php $agama = $siswa['agama']; ?>
        <select name="agama" class="block w-full border border-gray-300 rounded py-2 px-4 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
          <option <?php echo ($agama == 'Islam') ? "selected": "" ?>>Islam</option>
            <option <?php echo ($agama == 'Kristen') ? "selected": "" ?>>Kristen</option>
            <option <?php echo ($agama == 'Hindu') ? "selected": "" ?>>Hindu</option>
            <option <?php echo ($agama == 'Budha') ? "selected": "" ?>>Budha</option>
            <option <?php echo ($agama == 'Atheis') ? "selected": "" ?>>Atheis</option>
          </select>
        </div>
      
        <p class="my-4">
            <label for="sekolah_asal" class="mr-2">Sekolah Asal:</label>
            <input type="text" name="sekolah_asal" placeholder="nama sekolah" value="<?php echo $siswa['sekolah_asal'] ?>" class="p-2 border rounded-md" />
        </p>
        
        <p class="my-10">
          <input type="submit" value="Simpan" name="simpan" class="py-2 px-4 bg-blue-500 hover:bg-blue-700 text-white font-bold rounded">
        </p>
		</fieldset>
  </form>
</body>
</html>