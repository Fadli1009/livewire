<div>
    <table class="table">
        <thead>
            <tr>
                <th>NO</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $index =>$items)    
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $items->name }}</td>
                <td>{{ $items->email }}</td>
                <td>
                    <a href="" class="badge bg-warning">Edit</a>
                    <a href="{{ route('users.show',$items->id) }}" class="badge bg-primary">Detail</a>
                    <a href="" class="badge bg-danger">Hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
