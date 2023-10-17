@include('admin.include.header')
<!-- Content Start -->
<div class="content">
    <!-- Table Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-12">
                <div class="bg-secondary rounded h-100 p-4">
                    <h6 class="mb-4">Tabel Kategori</h6>
                    <div class="mb-2 d-flex justify-content-end">
                        <a href="{{ url ('admin/tambah_kategori') }}" class="btn btn-warning"><i class="fas fa-plus"></i>Tambah</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Id Kategori</th>
                                    <th scope="col">Nama Kategori</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kategoris as $index => $kategori)
                                   <tr>
                                    <td>{{ $index+1 }}</td>
                                    <td>{{ $kategori->id_kategori }}</td>
                                    <td>{{ $kategori->nama_kategori }}</td>
                                    <td>
                                        <a href="/admin/{{ $kategori->id_kategori }}/edit_kategori" class="btn btn-success">
                                            <i class="fas fa-edit"></i> Edit
                                        </a>
                                    
                                        <form action="/admin/{{ $kategori->id_kategori }}" method="POST">
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