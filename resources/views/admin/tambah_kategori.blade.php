@include('admin.include.header')
<!-- Content Start -->
<div class="content">
<form action="/admin/simpan_kategori" method="POST">
    @csrf
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-20 col-xl-12">
                <div class="bg-secondary rounded h-100 p-4">
                    <h6 class="mb-4">Tambah kategori</h6>
                    <form>
                        <div class="row mb-3">
                            <label for="kategori_id" class="col-sm-2 col-form-label">Id Kategori</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="kategori_id">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="nama_kategori" class="col-sm-2 col-form-label">Nama Kategori</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama_kategori">
                            </div>
                        </div>
                        <button type="submit" name="submit" value="save" class="btn btn-warning">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</form>
@include('admin.include.footer')
</div>