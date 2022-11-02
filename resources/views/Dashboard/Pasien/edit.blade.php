@extends('dashboard.layout.main')

@section('container')

<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-warning rounded h-100 p-4">
                            <h6 class="mb-4">Edit</h6>
                            <form action="/pasien/{{ $pasien->id }}" method="POST">
                                @method('put')
                                @csrf

                                <div class="mb-3">
                                    <label class="form-label">Nama</label>
                                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama',$pasien->nama) }}">
                                </div>
                                @error('nama')
					            {{ $message }}
				                @enderror

                                <div class="mb-3">
                                    <label class="form-label">Tanggal Lahir</label>
                                    <input type="date" class="form-control @error('tgl_lahir') is-invalid @enderror" id="tgl_lahir" name="tgl_lahir" value="{{ old('tgl_lahir',$pasien->tgl_lahir) }}">
                                </div>
                                @error('tgl_lahir')
					            {{ $message }}
				                @enderror

                                <label>Jenis Kelamin</label>
                                <div class="form-check">
                                            <input class="form-check-input" type="radio" name="jk"
                                                id="gridRadios1" value="P" >
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

                                <label class="form-label">Ruangan</label>
                            <select class="form-select mb-3" aria-label="Default select example" name='ruangan_id'>
                                @foreach($ruangan as $spe)
                                <option value="{{ $spe->id }}">{{ $spe->nama }}</option>    
                                @endforeach
                            </select>

                            <label class="form-label">Nomor</label>
                            <select class="form-select mb-3" aria-label="Default select example" name='nomor_id'>
                                @foreach($nomor as $spe)
                                <option value="{{ $spe->id }}">{{ $spe->nomor }}</option>    
                                @endforeach
                            </select>

                            <label class="form-label">Penyakit</label>
                            <select class="form-select mb-3" aria-label="Default select example" name='penyakit_id'>
                                @foreach($penyakit as $spe)
                                <option value="{{ $spe->id }}">{{ $spe->nama }}</option>    
                                @endforeach
                            </select>

                            <label class="form-label">Dokter</label>
                            <select class="form-select mb-3" aria-label="Default select example" name='dokter_id'>
                                @foreach($dokter as $spe)
                                <option value="{{ $spe->id }}">{{ $spe->nama }}</option>    
                                @endforeach
                            </select>
                                
                                <button type="submit" class="btn btn-info">Edit</button>
                            </form>
                        </div>
                    </div>
                </div>
</div>



@endsection