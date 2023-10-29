<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Absen</h3>
            </div>
            <div class="card-body">
                <form action="simpan.php" method="post">
                    <div class="input">
                        <label for="" class="label">Nama</label>
                        <input  name="nama" type="text" class="input-control">
                    </div>
                    <div class="input">                    
                        <label for="" class="label">Nis</label>
                        <input type="text" name="nis" class="input-control">
                    </div>
                    <div class="input">
                        <label for="" class="label">Kelas</label>                
                        <select name="kelas" class="input-control">
                            <option selected>Pilih Kelas</option>
                            <option value="XII RPL">XII RPL</option>
                            <option value="XII AK">XII AK</option>
                            <option value="XII MP">XII MP</option>
                            <option value="XII BR">XII BR</option>
                        </select>
                    </div>
                    <div class="input">                    
                        <label for="" class="label">Tanggal</label>
                        <input type="date" name="tgl" id="" class="input-control">
                    </div>
                    <div class="bttn">
                        <button class="btn" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>