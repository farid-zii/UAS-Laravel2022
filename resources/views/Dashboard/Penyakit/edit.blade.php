@extends('dashboard.layout.main')

@section('container')

<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-warning rounded h-100 p-4">
                            <h6 class="mb-4">Edit</h6>
                            <form action="/penyakit/{{ $penyakit->id }}" method="POST">
                                @method('put')
                                @csrf

                                <div class="mb-3">
                                    <label class="form-label">Nama</label>
                                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama',$penyakit->nama) }}">
                                </div>
                                @error('nama')
					            {{ $message }}
				                @enderror
                                

                                <div class="mb-3">
                                    <label class="form-label">Gejala</label>
                                    <textarea type="text" class="form-control @error('nama') is-invalid @enderror" id="gejala" name="gejala" value="{{ old('gejala',$penyakit->gejala) }}"></textarea>
                                </div>
                                @error('gejala')
					            {{ $message }}
				                @enderror
                                

                                <div class="mb-3">
                                    <label class="form-label">Tipe</label>
                                    <input type="text" class="form-control @error('tipe') is-invalid @enderror" id="tipe" name="tipe" value="{{ old('tipe',$penyakit->tipe) }}">
                                </div>
                                @error('tipe')
					            {{ $message }}
				                @enderror
                                
                                <button type="submit" class="btn btn-info">Edit</button>
                            </form>
                        </div>
                    </div>
                </div>
</div>



@endsection