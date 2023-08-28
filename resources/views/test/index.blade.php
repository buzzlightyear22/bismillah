@extends('welcome')

@section('judul halaman', 'LOGO')

@section('konten')
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="card border-0 shadow rounded">
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th scope="col">GAMBAR</th>
                                    <th scope="col">AKSI</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse ($tests as $test)
                                    <tr>
                                        <td class="text-center">
                                            <img src="{{ asset('tests/'.$test->image) }}" class="rounded" style="width: 150px">
                                        </td>
                                        <td class="text-center">
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('test.destroy', $test->id) }}" method="POST">
                                                <a href="{{ route('test.edit', $test->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-gear"></i></a>
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
                            {{ $tests->links() }}
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