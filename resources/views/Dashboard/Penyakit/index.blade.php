@extends('dashboard.layout.main')

@section('container')


<main class="conaiter mt-4 px-md-4">
    <div class="col-12">
        @if (session()->has('pesan'))
	<div class="alert alert-success" role="alert">
		{{ session ('pesan') }}
	</div>		
	@endif
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">PENYAKIT</h6>
                            <div class="table-responsive">
                                <a href="/penyakit/create" class="btn btn-success ">Insert +</a>
                                <table class="table">
                                    
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Gejala</th>
                                            <th scope="col">Tipe</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    
                                     <tbody>
                                    @foreach ($penyakit as $spe)
                                   
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $spe->nama }}</td>
                                            <td>{{ $spe->gejala }}</td>
                                            <td>{{ $spe->tipe }}</td>
                                            <td colspan="2">
                                                <a href="/penyakit/{{$spe->id}}/edit" class="btn btn-warning">Edit</a>
                                                <form action="/penyakit/{{$spe->id}}" method="post" class="d-inline">
					                            @method('DELETE')
					                            @csrf
					                            <button class="btn btn-danger" type="submit" onclick="return confirm('Yakin akan menghapus data ?')">Delete</button>
			                                	</form>		
                                            </td>
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

{{ $penyakit->links('pagination::bootstrap-5') }}

@endsection