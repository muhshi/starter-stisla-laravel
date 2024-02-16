@extends('layout.main')

@section('title')
    <title>Index &mdash; Stisla</title>
@endsection

@section('content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>List User</h1>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Daftar User</h4>
                                <div class="card-header-action">
                                    <a href="{{ route('blog.new') }}" class="btn btn-primary btn-icon icon-right">Add<i class="fas fa-plus"></i></a>
                                </div>
                            </div>
                            @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>

                            @endif
                            <div class="card-body">
                                <table id="tabel1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th class="text-center">
                                                #
                                            </th>
                                            <th>Judul</th>
                                            <th>Isi</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $item)
                                            <tr>
                                                <td class="align-middle">
                                                    {{ $loop->iteration }}
                                                </td>
                                                <td>{{ $item->judul }}</td>
                                                <td>
                                                    {{ $item->isi }}
                                                </td>
                                                <td>
                                                    <div class="badge badge-success">Completed</div>
                                                </td>
                                                <td><a href="#" class="btn btn-secondary">Detail</a></td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
