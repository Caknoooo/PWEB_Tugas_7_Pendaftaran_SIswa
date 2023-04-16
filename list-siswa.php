<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Siswa Baru | SMK Coding</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.1.1/tailwind.min.css">
</head>
<body class="bg-gray-100">
    <header class="bg-indigo-500 py-4">
        <div class="container mx-auto flex justify-between items-center px-4">
            <h3 class="text-white text-xl font-bold">Siswa yang sudah mendaftar</h3>
            <nav>
                <a href="form-daftar.php" class="text-white bg-indigo-700 py-2 px-4 rounded-md hover:bg-indigo-800">[+] Tambah Baru</a>
            </nav>
        </div>
    </header>

    <div class="container mx-auto my-4 px-4">
        <table class="table-auto w-full">
            <thead>
                <tr>
                    <th class="px-4 py-2">#</th>
                    <th class="px-4 py-2">Nama</th>
                    <th class="px-4 py-2">Alamat</th>
                    <th class="px-4 py-2">Jenis Kelamin</th>
                    <th class="px-4 py-2">Agama</th>
                    <th class="px-4 py-2">Sekolah Asal</th>
                    <th class="px-4 py-2">Tindakan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM calon_siswa";
                $query = mysqli_query($db, $sql);

                while($siswa = mysqli_fetch_array($query)){
                    echo "<tr>";

                    echo "<td class='border px-4 py-2'>".$siswa['id']."</td>";
                    echo "<td class='border px-4 py-2'>".$siswa['nama']."</td>";
                    echo "<td class='border px-4 py-2'>".$siswa['alamat']."</td>";
                    echo "<td class='border px-4 py-2'>".$siswa['jenis_kelamin']."</td>";
                    echo "<td class='border px-4 py-2'>".$siswa['agama']."</td>";
                    echo "<td class='border px-4 py-2'>".$siswa['sekolah_asal']."</td>";

                    echo "<td class='border px-4 py-2'>";
                    echo "<a href='form-edit.php?id=".$siswa['id']."' class='text-indigo-700'>Edit</a> | ";
                    echo "<a href='hapus.php?id=".$siswa['id']."' class='text-red-700'>Hapus</a>";
                    echo "</td>";

                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>

        <p class="mt-4">Total: <?php echo mysqli_num_rows($query) ?></p>
    </div>
</body>
</html>
