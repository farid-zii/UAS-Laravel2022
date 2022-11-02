@extends('layout.main')

@section('container')


<main class="conaiter mt-4 px-md-4">
    <div class="col-12">
        @if (session()->has('pesan'))
	<div class="alert alert-success" role="alert">
		{{ session ('pesan') }}
	</div>		
	@endif
                        <div class="bg-secondary rounded h-100 p-4">
                            <h3 class="mb-4">SPESIALIS</h6>
                            <div class="table-responsive">
                                <table class="table">
                                    
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Kode</th>
                                        </tr>
                                    </thead>
                                    
                                     <tbody>
                                    @foreach ($spesialis as $spe)
                                   
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $spe->nama }}</td>
                                            <td>{{ $spe->kode }}</td>
                                        </tr>
                                    </tbody>
                                    @endforeach
                                    
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </main>

{{ $spesialis->links('pagination::bootstrap-5') }}

@endsection