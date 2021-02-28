<div class="table-responsive">
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>No.</th>
                <th>Action</th>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach($videos as $d)
            <tr>
                <td>{{ $no++ }}</td>
                <td>
                    <div class="btn-group">
                        <a href="{{ url('admin/videos/edit', $d->id) }}" class="btn btn-info btn-sm">
                            <i class="fa fa-edit"></i>
                        </a>
                        <a href="{{ url('admin/videos/destroy', $d->id) }}" onclick="return ConfirmDelete();" class="btn btn-danger btn-sm">
                            <i class="fa fa-trash"></i>
                        </a>
                        <a href="{{ url('admin/videos/indexing', $d->id) }}" title="@if($d->index == 1) indexing : @endif Jadikan yang halaman utama" class="btn @if($d->index == 0) btn-dark @else btn-warning @endif btn-sm">
                            <i class="fa fa-star"></i>
                        </a>
                    </div>
                </td>
                <td>{{ $d->name }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
