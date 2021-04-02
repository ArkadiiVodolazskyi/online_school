<x-test-admin-app-layout>
    @if ($items->isNotEmpty())
        <table class="w-full pages mx-auto border-collapse">
            <thead>
                <tr>
                    <th>name</th>
                    <th>email</th>
                    <th>roles</th>
                    <th>actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($items as $item)
                    <tr class="px-3 py-4 font-semibold">
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->roles->map(function($item) {
                            return $item->name;
                        })->join(', ') }}</td>
                        <td>
                            <a href="user?id={{ $item->id }}" class="btn text-center px-3 py-1.5 text-white bg-blue-400 hover:bg-blue-600 hover:shadow-md">
                                Редактировать
                            </a>
                            <a href="delete_user?id={{ $item->id }}" class="btn text-center px-3 py-1.5 text-white bg-red-400 hover:bg-red-800 hover:shadow-md">
                                Удалить
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</x-test-admin-app-layout>
