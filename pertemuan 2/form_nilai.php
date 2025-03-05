<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Form Nilai Mahasiswa</h5>
            <form method="post" action="./nilai_siswa.php">
              <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
                <div class="col-8">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fa fa-address-card"></i>
                      </div>
                    </div> 
                    <input id="nama" name="nama" type="text" class="form-control">
                  </div>
                </div>
              </div>
              <div class="form-group row">
                <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
                <div class="col-8">
                  <select id="matkul" name="matkul" class="custom-select">
                    <option value="DDP">Dasar-Dasar Pemprograman</option>
                    <option value="PEMWEB 1">Pemprograman Web 1</option>
                    <option value="PEMWEB 2">Pemprograman Web 2</option>
                    <option value="PEMWEB 2">Bahasa Inggris</option>
                    <option value="PEMWEB 2">Basis Data</option>
                    <option value="PEMWEB 2">Komunikasi Efektif</option>
                    <option value="PEMWEB 2">UI/UX</option>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <label for="nilai" class="col-4 col-form-label">Nilai UTS</label> 
                <div class="col-8">
                  <input id="nilai" name="nilai_uts" type="text" class="form-control">
                </div>
              </div>
              <div class="form-group row">
                <label for="nilai" class="col-4 col-form-label">Nilai UAS</label> 
                <div class="col-8">
                  <input id="nilai" name="nilai_uas" type="text" class="form-control">
                </div>
              </div>
              <div class="form-group row">
                <label for="nilai" class="col-4 col-form-label">Nilai Tugas/Praktikum</label> 
                <div class="col-8">
                  <input id="nilai" name="nilai_tugas" type="text" class="form-control">
                </div>
              </div> 
              <div class="form-group row">
                <div class="offset-4 col-8">
                  <button name="submit" type="submit" class="btn btn-primary">Simpan</button>
                </div>
              </div>
            </form>
            
        </div>
    </div>
</body>
</html>