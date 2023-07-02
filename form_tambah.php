<!-- fungsi masukan -->
<?php include '../partial/top.php'; ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header waves-effect w-md waves-light center">
                    <h5 class=" text-black">Tambah Data Santri</h5>
                </div>
                <div class="card-body">
                    <form class="form-horizontal" method="POST" action="prosestambah.php">
                        <div class="form-group row">
                            <label class="col-2 col-form-label" for="example-email">Nama</label>
                            <div class="col-10">
                                <input type="teks" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-2 col-form-label" for="example-email">Nama</label>
                            <div class="col-10">
                                <select class="form-control ">
                                    <option>Pilih</option>
                                    <option>pria</option>
                                    <option>wanita</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-2 col-form-label" for="example-email">Alamat</label>
                            <div class="col-10">
                                <input type="teks" class="form-control">
                            </div>
                        </div>
                        <hr>
                        <div class="form-group text-right m-b-0">
                            <a class="btn btn-secondary " href="index.php"><i class=" fi-rewind"></i>kembali</a>
                            <button type="reset" class="btn btn-danger ">
                                <i class="fa fa-refresh"></i> Reset
                            </button>
                            <button class="btn btn-primary " type="submit">
                                <i class="fa fa-plus"></i> Tambah
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include '../partial/bottom.php' ?>