@extends('dashboard.layout.main')

@section('container')

<div class="container-fluid pt-4 px-4 ">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-warning rounded h-100 p-4">
                            <h6 class="mb-4">Tambah Data</h6>
                            <form action="/nomor" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">Nomor</label>
                                    <input type="number" class="form-control @error('nomor') is-invalid @enderror" id="nomor" name="nomor">
                                </div>
                                @error('nomor')
					            {{ $message }}
				                @enderror

                                <button type="submit" class="btn btn-info">Insert</button>
                            </form>
                        </div>
                    </div>
                </div>
</div>



@endsection