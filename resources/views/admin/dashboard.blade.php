<x-admin-layout>
    <table class="table table-striped table-hover mt-3 ms-3" style="width:70vw">
        <thead>
            <tr class="table-primary">
                <th scope="col">#No</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Controls</th>
            </tr>
        </thead>
        <tbody>
            @forelse($admins as $admin)
                <tr>
                    <th scope="row">{{ $admin->id }}</th>
                    <td>{{ $admin->name }}</td>
                    <td>{{ $admin->email }}</td>
                    <td>
                        <form action="#" method="Post">
                            <a class="btn btn-primary" href="#">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <p>No User Exist</p>
            @endforelse
        </tbody>
    </table>
</x-admin-layout>
