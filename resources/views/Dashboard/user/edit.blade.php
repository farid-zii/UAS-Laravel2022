@extends('dashboard.layout.main')

@section('container')

<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-warning rounded h-100 p-4">
                            <h6 class="mb-4">Edit</h6>
                            <form action="/dokter/{{ $dokter->id }}" method="POST">
                                @method('put')
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">NIP</label>
                                    <input type="text" class="form-control @error('nip') is-invalid @enderror" id="nip" name="nip" value="{{ old('nip',$dokter->nip) }}">
                                </div>
                                @error('nip')
					            {{ $message }}
				                @enderror

                                <div class="mb-3">
                                    <label class="form-label">Nama</label>
                                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama',$dokter->nama) }}">
                                </div>
                                @error('nama')
					            {{ $message }}
				                @enderror

                                <label>Jenis Kelamin</label>
                                <div class="form-check">
                                            <input class="form-check-input" type="radio" name="jk"
                                                id="gridRadios1" value="P" checked>
                                            <label class="form-check-label" for="gridRadios1">
                                                Laki-Laki
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="jk"
                                                id="gridRadios2" value="P">
                                            <label class="form-check-label" for="gridRadios2">
                                                Perempuan
                                            </label>
                                    </div>

                                
                                
                                <label class="form-label">Spesialis</label>
                            <select class="form-select mb-3" aria-label="Default select example" name='spesialis_id'>
                                @foreach($spesialis as $spe)
                                <option value="{{ $spe->id }}">{{ $spe->nama }}</option>    
                                @endforeach
                            </select>

                            <div class="mb-3">
                                    <label class="form-label">Alamat</label>
                                    <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" value="{{ old('alamat',$dokter->alamat) }}">
                                </div>
                                @error('alamat')
					            {{ $message }}
				                @enderror


                                
                                <button type="submit" class="btn btn-info">Edit</button>
                            </form>
                        </div>
                    </div>
                </div>
</div>



@endsection