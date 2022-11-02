@extends('dashboard.layout.main')

@section('container')

<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Basic Form</h6>
                            <form action="/spesialis/{{ $spesialis->id }}" method="POST">
                                @method('PUT')
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">KODE</label>
                                    <input type="text" class="form-control @error('kode') is-invalid @enderror" id="kode" name="kode" value="{{ old ('kode', $spesialis->kode ) }}">
                                </div>
                                @error('kode')
					            {{ $message }}
				                @enderror

                                <div class="mb-3">
                                    <label class="form-label">NAMA SPESIALIS </label>
                                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old ('nama', $spesialis->nama) }}">
                                </div>
                                @error('nama')
					            {{ $message }}
				                @enderror
                                <button type="submit" class="btn btn-info">Edit</button>
                            </form>
                        </div>
                    </div>
                </div>
</div>



@endsection