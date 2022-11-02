@extends('dashboard.layout.main')

@section('container')

<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Basic Form</h6>
                            <form action="/nomor/{{ $nomor->id }}" method="POST">
                                @method('PUT')
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">Nomor</label>
                                    <input type="text" class="form-control @error('kode') is-invalid @enderror" id="kode" name="kode" value="{{ old ('nomor', $nomor->nomor ) }}">
                                </div>
                                @error('kode')
					            {{ $message }}
				                @enderror

                                <button type="submit" class="btn btn-info">Edit</button>
                            </form>
                        </div>
                    </div>
                </div>
</div>



@endsection