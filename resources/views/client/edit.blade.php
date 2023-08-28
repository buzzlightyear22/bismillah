@extends('welcome')

@section('judul halaman', 'EDIT CLIENT')

@section('konten')
            <div class="container mt-5 mb-5">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card border-0 shadow rounded">
                            <div class="card-body">
                                <form action="{{ route('client.update', $client->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                    <div class="form-group">
                                        <label class="font-weight-bold">GAMBAR</label>
                                        <input type="file" class="form-control" name="image">
                                    </div>

                                    <div class="form-group">
                                        <label class="font-weight-bold">NAMA CLIENT</label>
                                        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title', $client->title) }}" placeholder="Masukkan Nama Client">
                                    
                                        <!-- error message untuk title -->
                                        @error('title')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <button type="submit" class="btn btn-md btn-primary">UPDATE</button>
                                    <button type="reset" class="btn btn-md btn-warning">RESET</button>

                                </form> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                CKEDITOR.replace( 'content' );
            </script>
@endsection