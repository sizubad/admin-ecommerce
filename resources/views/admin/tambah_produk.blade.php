@include('admin.include.header')
<!-- Content Start -->
<div class="content">
<form action="/admin/simpan_produk" method="POST">
    @csrf
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-20 col-xl-12">
                <div class="bg-secondary rounded h-100 p-4">
                    <h6 class="mb-4">Tambah Produk</h6>
                    <form>
                        <div class="row mb-3">
                            <label for="id_produk" class="col-sm-2 col-form-label">Id Produk</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="produk_id">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="nama_produk" class="col-sm-2 col-form-label">Nama Produk</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama_produk">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="harga">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="stok" class="col-sm-2 col-form-label">Stok</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="stok">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                            <div class="col-sm-10">
                                <input type="text-area" class="form-control" name="deskripsi">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="gambar" class="form-label">Gambar</label>
                            <input class="form-control bg-dark" type="file" name="gambar">
                        </div>
                        <select class="form-select form-select-sm mb-3" aria-label=".form-select-sm example" name="ukuran">
                            <option selected>Ukuran</option>
                            <option value="S">S</option>
                            <option value="M">M</option>
                            <option value="L">L</option>
                            <option value="XL">XL</option>
                        </select>
                        <div class="row mb-3">
                            <label for="kategori_id" class="col-sm-2 col-form-label">Id Kategori</label>
                            <div class="col-sm-10">
                                <input type="text-area" class="form-control" name="kategori_id">
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