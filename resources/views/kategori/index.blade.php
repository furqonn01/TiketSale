@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Kategori</div>

                <div class="card-body">
                    <td><a class="btn btn-primary" href="{{ route('kategori.create') }}">Tambah Data</a></td>
                </div>
                @include('notifikasi')
                <table class="table table-bordered" id="users-table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; ?>
                        @foreach ($kategori as $item )
                        <tr>
                            <td>{{$no}}</td>
                            <td>{{$item->nama_kategori}}</td>
                            <td><a class="btn btn-success btn-sm"
                                    href="{{ route('kategori.edit', $item->id) }}">Edit</a>
                            </td>
                            <td><a class="btn btn-danger btn-sm"
                                    href="{{ route('kategori.destroy', $item->id) }}">Delete</a>
                            </td>
                        </tr>
                        <?php $no++; ?>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@push('scripts')
<script>
    $(function() {
    $('#users-table').DataTable();
});
</script>
@endpush

@endsection
