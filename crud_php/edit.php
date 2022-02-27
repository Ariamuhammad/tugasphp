<?php
    require "function.php";

    $idMahasiswa = $_GET['id'];
    $mahasiswa = get("SELECT * FROM mahasiswa WHERE id = $idMahasiswa");
    $mahasiswa = $mahasiswa[0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
    crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Edit data mahasiswa</h1>
        <form action="./action/update.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $idMahasiswa?>">
            <div class="form-group">
                <label for="Nama">Nama mahasiswa</label>
                <input type="text" name="Nama" id="Nama" class="form-control" value="<?php echo $mahasiswa['Nama'] ?>">
            </div>
            <div class="form-group">
                <label for="NIM">NIM mahasiswa</label>
                <input type="text" name="NIM" id="NIM" class="form-control" value="<?php echo $mahasiswa['NIM'] ?>">
            </div>
            <button type="submit" class="btn btn-primary mt-2" >Simpan</button>
            </form>
    </div>
</body>
</html>