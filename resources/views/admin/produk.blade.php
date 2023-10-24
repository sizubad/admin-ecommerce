@include('admin.include.header')
<!-- Content Start -->
<div class="content">
    <!-- Table Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-12">
                <div class="bg-secondary rounded h-100 p-4">
                    <h6 class="mb-4">Tabel Produk</h6>
                    <div class="mb-2 d-flex justify-content-end">
                        <a href="{{ url ('admin/tambah_produk') }}" class="btn btn-warning"> <i class="fas fa-plus"></i>Tambah</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Id Produk</th>
                                    <th scope="col">Nama Produk</th>
                                    <th scope="col">Harga</th>
                                    <th scope="col">Stok</th>
                                    <th scope="col">Deskripsi</th>
                                    <th scope="col">Ukuran</th>
                                    <th scope="col">Gambar</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($produks as $index => $produk)
                                   <tr>
                                    <td>{{ $index+1 }}</td>
                                    <td>{{ $produk->produk_id }}</td>
                                    <td>{{ $produk->nama_produk }}</td>
                                    <td>{{ $produk->harga }}</td>
                                    <td>{{ $produk->stok }}</td>
                                    <td>{{ $produk->deskripsi }}</td>
                                    <td>{{ $produk->ukuran }}</td>
                                    <td><img class="card-img-top equal-image" src="{{ asset('storage./'.$produk->gambar) }}" alt="" style="width: 40px; height: 40px;"></td>
                                    <td>
                                        <a href="/admin/{{ $produk->produk_id }}/edit_produk" class="btn btn-success">
                                            <i class="fas fa-edit"></i> Edit
                                        </a>
                                    
                                        <form action="/admin/{{ $produk->produk_id }}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger">
                                                <i class="fas fa-trash-alt"></i> Delete
                                            </button>
                                        </form>
                                    </td>
                                     
                                    </tr> 
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    <!-- Table End -->
     </div>
@include('admin.include.footer')
    </div>