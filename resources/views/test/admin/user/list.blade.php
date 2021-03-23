<x-test-admin-app-layout>
    <h1>Users</h1>
    @if ($items->isNotEmpty())
        <table>
            <tr>
                <td>name</td>
                <td>email</td>
                <td>roles</td>
                <td>actions</td>
            </tr>
            @foreach ($items as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->roles->join(', ') }}</td>
                    <td><a href="user?id={{ $item->id }}">edit</a> | <a href="delete_user?id={{ $item->id }}">delete</a></td>
                </tr>
            @endforeach
        </table>        
    @endif
</x-test-admin-app-layout>
