<!-- fungsi masukan -->
<?php include '../partial/top.php';
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header waves-effect w-md waves-light center">
                    <h5 class=" text-black">Update Data Mahasiswa</h5>
                </div>
                <div class="card-body">
                    <form class="form-horizontal" method="POST" action="prosesupdate.php">
                        <div class="form-group row">
                            <label class="col-2 col-form-label" for="example-email">Nama</label>
                            <div class="col-10">
                                <input type="hidden" class="form-control">
                                <input type="teks" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-2 col-form-label" for="example-email">Jenis Kelamin</label>
                            <div class="col-10">
                                <select class="form-control ">
                                    <option>wanita</option>
                                    <option>pria</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-2 col-form-label" for="example-email">Alamat</label>
                            <div class="col-10">
                                <input type="teks" class="form-control" name="alamat" value="sumatra">
                            </div>
                        </div>
                        <hr>
                        <div class="form-group text-right m-b-0">
                            <button type="reset" class="btn btn-secondary ">
                                <i class="fi-rewind"><a href="index.php"></i>Kembali</a>
                            </button>
                            <input class="btn btn-primary " type="submit" value="Update">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>


<?php include '../partial/bottom.php' ?>