@extends('kerangka.master')
@section('content')
<section id="basic-horizontal-layouts">
    <div class="row match-height">
        <div class="col-md-12 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit Pesawat</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form action="/pesawats/{{ $pesawat->id }}" method="POST" class="form form-horizontal">
                            @method('put')
                            @csrf
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Kode Pesawat</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="kode_pesawat" class="form-control @error('kode_pesawat') is invalid @enderror" name="kode_pesawat"
                                            placeholder="Masukan Kode Pesawat" value="{{ old('kode_pesawat', $pesawat->kode_pesawat) }}">
                                            @error('kode_pesawat')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label>Nama Pesawat</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="nama_pesawat" class="form-control @error('nama_pesawat') is invalid @enderror" name="nama_pesawat"
                                            placeholder="Masukan Nama Pesawat" value="{{ old('nama_pesawat', $pesawat->nama_pesawat) }}">
                                            @error('nama_pesawat')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label>Type Pesawat</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="type" class="form-control @error('type') is invalid @enderror" name="type"
                                            placeholder="Masukan Type Pesawat" value="{{ old('type', $pesawat->type) }}">
                                            @error('type')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label>Tahun Rakit Pesawat</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="tahun_rakit" class="form-control @error('tahun_rakit') is invalid @enderror" name="tahun_rakit"
                                            placeholder="Masukan Tahun Rakit Pesawat" value="{{ old('tahun_rakit', $pesawat->tahun_rakit) }}">
                                            @error('tahun_rakit')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                    </div>
                                    
                                    <div class="col-sm-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                        <button type="reset"
                                            class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('script')

<script>
    function previewImage() {
            const image = document.querySelector('#image');
            // console.log(image);
            const imgPreview = document.querySelector('.img-preview');
            imgPreview.style.display = 'block';
            const oFReader = new FileReader();

            // console.log(image.files[0]);
            // console.log(oFReader);
            
            oFReader.readAsDataURL(image.files[0]);
            oFReader.onload = function(oFREvent) {
              // console.log(oFREvent);
                imgPreview.src = oFREvent.target.result; 
            }
        }
</script>

@endpush