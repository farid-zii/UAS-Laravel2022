@extends('dashboard.layout.main')

@section('container')

<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-warning rounded h-100 p-4">
                            <h6 class="mb-4">Entry Data</h6>
                            <form action="/ruangan" method="POST">
                                @csrf
                                
                                <div class="mb-3">
                                    <label class="form-label">Nama</label>
                                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama">
                                </div>
                                @error('nama')
					            {{ $message }}
				                @enderror
                                
                                <label class="form-label">Kelas</label>
                            <select class="form-select mb-3" aria-label="Default select example" name='kelas'>
                                <option value="Ekonomi">Ekonomi</option>
                                <option value="Eksekutif">Eksekutif</option> 
                                <option value="VIP">VIP</option> 
                            </select>
                                
                                <button type="submit" class="btn btn-info">Insert</button>
                            </form>
                        </div>
                    </div>
                </div>
</div>



@endsection