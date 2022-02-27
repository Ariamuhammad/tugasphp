<?php
    require "./function.php";

    $dataMahasiswa = get("SELECT * FROM mahasiswa ");

    if (isset($_GET['keyword'])){
        $keyword = $_GET['keyword'];
        $dataMahasiswa = get("SELECT * FROM mahasiswa WHERE Nama LIKE '%$keyword%' ");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
    crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Data Mahasiswa</h1>
        <a href="tambah.php" class="btn btn-primary">Tambah data mahasiswa</a>
        <form method="GET">
            <div class="form-group">
                <label for="keyword">Cari mahasiswa</label>
                <input type="text" name="keyword" id="keyword" placeholder="Cari nama mahasiswa" 
                class="form-control">
                <button class="btn btn-primary" type="submit">Cari</button>
            </div>
        </form>
        <table class="table table-bordered">
            <thead>
                <th>Nama</th>
                <th>NIM</th>
                <th>Aksi</th>
                </thead>
            <tbody>
                <?php foreach($dataMahasiswa as $mahasiswa): ?>
                <tr>
                    <td><?php echo $mahasiswa['Nama']?></td>
                    <td><?php echo $mahasiswa['NIM']?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $mahasiswa['id'] ?>" class="btn 
                        btn-info">Edit</a>
                        <a href="action/delete.php?id=<?php echo $mahasiswa['id'] ?>" class="btn 
                        btn-danger" onclick="return confirm('Data ini akan dihapus, Apakah anda yakin?')">Hapus</a>
                    </td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</body>
</html>