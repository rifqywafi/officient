<div class="container" style="margin-top: 80px">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                <h4> <div class="card-header text-center">
          TAMBAH DATA 
          </div></h4>
                    <div class="card-body">
                        <form action="index.php?page=barang&act=simpan" method="POST">

                            <div class="form-group">
                                <label>Id user</label>
                                <?php
                                $query = mysqli_query($connection, "SELECT * FROM user"); ?>
                                <select name="id_user" class="form-control">
                                    <?php while ($row = mysqli_fetch_array($query)) { ?>
                                        <option value="<?php echo $row['id_user'] ?>"><?php echo $row['nama']; ?></option>
                                    <?php }   ?>
                                </select>
                            </div>
                            
                            
                            <div class="form-group">
                                <label>Isi pengumuman</label>
                             <textarea type="text" name="isi_pengumuman" rows="5" cols="40" required class="form-control"></textarea>     
                            </div>

                            <div class="form-group">
                                <label>Lampiran</label>
                                <input type="text" name="stock" required class="form-control">
                            </div>

                           
                            <div class="form-group">
                                <label>Tanggal</label>
                                <input type="date" name="tanggal_pengumuman" id="pengumuman" required class="form-control">
                            </div>

                            <button type="submit" class="btn btn-success">SIMPAN</button>
                            <button type="reset" class="btn btn-warning">RESET</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    