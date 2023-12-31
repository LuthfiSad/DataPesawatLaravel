@extends('kerangka.master')

@section('content')
    
 <!-- Basic Tables start -->
 <section class="section">
    <div class="row" id="basic-table">
        <div class="col-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    @if (session()->has('success')) 
                
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
    
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <h4 class="card-title text-center">Table Pesawat</h4>
                    <a href="{{ route('pesawats.create') }}"><button type="button" class="btn btn-primary">Tambah Data Pesawat</button></a>
                </div>
                <div class="card-content">
                    <div class="card-body">
                       
                        <!-- Table with outer spacing -->
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>Kode Pesawat</th>
                                        <th>Nama Pesawat</th>
                                        <th>Type</th>
                                        <th>Tahun Rakit</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pesawats as $pesawat )
                                    
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $pesawat->kode_pesawat }}</td>
                                        <td>{{ $pesawat->nama_pesawat }}</td>
                                        <td>{{ $pesawat->type }}</td>
                                        <td>{{ $pesawat->tahun_rakit }}</td>
                                        <td>
                                            <a href="/pesawats/{{ $pesawat->id }}/edit"
                                                class="btn btn-sm btn-warning">
                                                Edit
                                            </a>
                                            <form action="/pesawats/{{ $pesawat->id }}" method="POST"
                                                class="d-inline">
                                                @method('delete')
                                                @csrf
                                                <button
                                                    onclick="return confirm('Apakah Benar ingin Menghapus Data {{ $pesawat->kode_pesawat }}')"
                                                    class="btn btn-sm border-0 btn-danger">
                                                    Delete
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
        </div>
       
    </div>
</section>
<!-- Basic Tables end -->

@endsection