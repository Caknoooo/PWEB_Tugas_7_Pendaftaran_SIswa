<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Pendaftaran Siswa Baru | SMK Coding</title>

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.15/tailwind.min.css">
  </head>
  <body class="bg-gray-100">
    <div class="container mx-auto my-5">
      <div class="row">
        <div class="col-md-8 mx-auto">
          <h3 class="text-3xl mb-3 text-center">Pendaftaran Siswa Baru</h3>
          <form action="proses-daftar.php" method="POST">
            <div class="form-group mb-3">
              <label for="nama" class="font-medium text-gray-700 block mb-2">Nama Lengkap</label>
              <input
                type="text"
                class="border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="nama"
                name="nama"
                required
              />
            </div>

            <div class="form-group mb-3">
              <label for="alamat" class="font-medium text-gray-700 block mb-2">Alamat</label>
              <textarea
                class="border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="alamat"
                name="alamat"
                required
              ></textarea>
            </div>

            <div class="form-group mb-3">
              <label for="jenis_kelamin" class="font-medium text-gray-700 block mb-2">Jenis Kelamin</label>
              <select
                class="border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="jenis_kelamin"
                name="jenis_kelamin"
                required
              >
                <option value="">-- Pilih Jenis Kelamin --</option>
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
              </select>
            </div>

            <div class="form-group mb-3">
              <label for="agama" class="font-medium text-gray-700 block mb-2">Agama</label>
              <select class="border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="agama" name="agama" required>
                <option value="">-- Pilih Agama --</option>
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Katolik">Katolik</option>
                <option value="Hindu">Hindu</option>
                <option value="Buddha">Buddha</option>
                <option value="Kong Hu Cu">Kong Hu Cu</option>
              </select>
            </div>

            <div class="form-group">
              <label for="sekolah_asal" class="block font-medium text-gray-700">Sekolah Asal</label>
              <input type="text" id="sekolah_asal" name="sekolah_asal" class="border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>

            <p class="my-10">
              <input type="submit" value="Simpan" name="simpan" class="py-2 px-4 bg-blue-500 hover:bg-blue-700 text-white font-bold rounded">
            </p>
          </form>
        </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </body>
</html>
