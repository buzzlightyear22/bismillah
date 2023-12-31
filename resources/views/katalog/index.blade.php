@extends('welcome')

@section('judul halaman', 'KATALOG')

@section('konten')
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="card border-0 shadow rounded">
                        <div class="card-body">
                            <a href="{{ route('katalog.create') }}" class="btn btn-md btn-success mb-3"><i class="fa fa-plus-square"></i></a>
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th scope="col">GAMBAR</th>
                                    <th scope="col">NAMA</th>
                                    <th scope="col">DESKRIPSI</th>
                                    <th scope="col">AKSI</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse ($katalogs as $katalog)
                                    <tr>
                                        <td class="text-center">
                                            <img src="{{ asset('katalogs/'.$katalog->image) }}" class="rounded" style="width: 150px">
                                        </td>
                                        <td>{{ $katalog->title }}</td>
                                        <td>{!! $katalog->content !!}</td>
                                        <td class="text-center">
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('katalog.destroy', $katalog->id) }}" method="POST">
                                                <a href="{{ route('katalog.edit', $katalog->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-gear"></i></a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger"><a class="fa fa-trash-o"></a></button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <div class="alert alert-danger">
                                        Data Blog belum Tersedia.
                                    </div>
                                @endforelse
                                </tbody>
                            </table>  
                            {{ $katalogs->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            //message with toastr
            @if(session()->has('success'))
            
                toastr.success('{{ session('success') }}', 'BERHASIL!'); 

            @elseif(session()->has('error'))

                toastr.error('{{ session('error') }}', 'GAGAL!'); 
                
            @endif
        </script>
@endsection