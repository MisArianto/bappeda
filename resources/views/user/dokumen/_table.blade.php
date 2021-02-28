<div class="table-responsive">
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>No.</th>
                <th>Action</th>
                <th>Name</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dokumens as $d)
            <tr>
                <td>{{ $no++ }}</td>
                <td>
                    <div class="btn-group">
                        <a href="{{ url('user/dokumens/edit', $d->id) }}" class="btn btn-info btn-sm">
                            <i class="fa fa-edit"></i>
                        </a>
                        <a href="{{ url('user/dokumens/destroy', $d->id) }}" onclick="return ConfirmDelete();" class="btn btn-danger btn-sm">
                            <i class="fa fa-trash"></i>
                        </a>
                        <a href="{{ url('user/dokumens/download', $d->id) }}" class="btn btn-primary btn-sm">
                            <i class="fa fa-download"></i>
                        </a>
                    </div>
                </td>
                <td>{{ $d->name }}</td>
                <td>
                    <span class="badge badge-info">{{ $d->tahun }}</span>
                    <span class="badge badge-danger">{{ $d->sumber }}</span>
                    <span class="badge badge-warning">{{ $d->versi }}</span>
                    <span class="badge badge-dark">{{ $d->kategori }}</span>
                    <span class="badge badge-success">{{ $d->pic }}</span>
                    <span class="badge badge-primary">{{ $d->keterangan }}</span>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
