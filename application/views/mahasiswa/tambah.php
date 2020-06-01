<div class="uk">
<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
            <div class="card-header">
            Form Tambah data mahasiswa
            </div>
            <div class="card-body">
            
            <form action="" method="post">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" class="form-control" id="nama">
                <small class="form-text text-danger"><?= form_error('nama'); ?></small>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" class="form-control" id="email">
                 <small class="form-text text-danger"><?= form_error('email'); ?></small>

            </div>
            <div class="form-group">
                <label for="sekola">Sekolah</label>
                <input type="text" name="sekolah" class="form-control" id="sekolah">
                <small class="form-text text-danger"><?= form_error('sekolah'); ?></small>
            </div>
            <div class="form-group">
          <label for="jurusan">Jurusan</label>
          <select class="form-control" id="jurusan" name="jurusan">
          <option value="TKR">TKR</option>
          <option value="TSM">TSM</option>
          <option value="TKJ">TKJ</option>
          <option value="RPL">RPL</option>
          <option value="MULTIMEDIA">MULTIMEDIA</option>
          <option value="APH">APH</option>
          <option value="PPT">PPT</option>
          </select>
          </div>
          <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
            </form>
            </div>
            </div>
        </div>
    </div>
</div>
</div>
