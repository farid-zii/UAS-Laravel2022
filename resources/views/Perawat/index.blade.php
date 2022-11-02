@extends('layout.main')

@section('container')


<main class="conaiter mt-4 px-md-4">
    <div class="col-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">SPESIALIS</h6>
                            <div class="table-responsive">
                                <table class="table">
                                    
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Kode</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    
                                    @foreach ($data as $spesialis)
                                    <tbody>
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $spesialis->nama }}</td>
                                            <td>{{ $spesialis->kode }}</td>
                                            <td colspan="2">
                                                <a href="#">Edit</a>
                                                <a href="#">Delete</a>
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

{{ $spesialiss->links('pagination::bootstrap-5') }}

@endsection