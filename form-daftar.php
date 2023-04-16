<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">

  <title>Formulir Pendaftaran Siswa Baru | SMK Coding</title>
</head>
<body>
  <header>
    <h3>Formulir Pendaftaran Siswa Baru</h3>
  </header>

  <form action="proses-registrasi.php" method="POST">
    <fieldset>
      <p>
        <label for="nama">Nama: </label>
        <input type="text" name="nama" id="Masukkan Nama Lengkap">
      </p>

      <p>
        <label for="alamat">Alamat: </label>
        <textarea name="alamat" id="" cols="30" rows="10"></textarea>
      </p>

      <p>
        <label for="jenis_kelamin">Jenis Kelamin:</label>
        <label for="">
          <input type="radio" name="jenis_kelamin" value="laki-laki">
          Laki-laki
        </label>
        <label for="">
          <input type="radio" name="jenis_kelamin" value="perempuan">
          Perempuan
        </label>
      </p>

      <p>
        <label for="agama">Agama: </label>
        <select name="agama">
          <option>Islam</option>
          <option>Kristen</option>
          <option>Hindu</option>
          <option>Budha</option>
          <option>Atheis</option>
        </select>
      </p>

      <p>
        <label for="sekolah_asal">Sekolah Asal: </label>
        <input type="text" name="sekolah_asal" placeholder="nama sekolah" />
      </p>
      
      <p>
        <input type="submit" value="Daftar" name="daftar" />
      </p>

    </fieldset>
  </form>
</body>
</html>