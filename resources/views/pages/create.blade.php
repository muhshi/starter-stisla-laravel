@extends('layout.main')

@section('title')
    <title>Index &mdash; Stisla</title>
@endsection

@section('content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Create User</h1>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4></h4>
                            </div>
                            <div class="card-body">
                                <div class="card">
                                    <form action="{{ route('blog.store') }}" class="needs-validation" method="POST">
                                        @csrf
                                        <div class="card-header">
                                            <h4>Tambah Blog</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label>judul Blog</label>
                                                <input type="text" name="judul"
                                                    class="form-control @error('judul') is-invalid @enderror"
                                                    value="{{ old('judul') }}">
                                                @error('judul')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                            </div>
                                            <div class="form-group">
                                                <label>Isi Blog</label>
                                                <textarea name="isi" id="isi" name="isi" class="form-control @error('isi') is-invalid @enderror"
                                                    cols="30" rows="10">{{ old('isi') }}</textarea>
                                                @error('isi')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="card-footer text-right">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
