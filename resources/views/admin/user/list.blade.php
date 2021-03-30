<x-admin-app-layout>
    <x-slot name="header">
        <x-tag.h1>Users</x-tag.h1>
        <a href="user">new user</a>
    </x-slot>
    <x-tag.block>
        <x-tag.tile>
            @if ($items->isNotEmpty())
                <x-tag.table>
                    <x-tag.tr>
                        <x-tag.th>name</x-tag.th>
                        <x-tag.th>email</x-tag.th>
                        <x-tag.th>roles</x-tag.th>
                        <x-tag.th>actions</x-tag.th>
                    </x-tag.tr>
                    @foreach ($items as $item)
                        <x-tag.tr>
                            <x-tag.td>{{ $item->name }}</x-tag.td>
                            <x-tag.td>{{ $item->email }}</x-tag.td>
                            <x-tag.td>{{ $item->roles->map(function($item) {
                                return $item->name;
                            })->join(', ') }}</x-tag.td>
                            <x-tag.td><a href="user?id={{ $item->id }}">edit</a> |
                                <a x-data="deleteButton()" x-on:click="confirmDelete" href="delete_user?id={{ $item->id }}">delete</a>
                                @once
                                    @push('footer_scripts')
                                        <script>
                                            function deleteButton() {
                                                return {
                                                    confirmDelete: function(ev) {
                                                        if (!confirm('Are you sure?')) {
                                                            ev.preventDefault();
                                                        }
                                                    }
                                                }
                                            }
                                        </script>
                                    @endpush
                                @endonce
                            </x-tag.td>
                        </x-tag.tr>
                    @endforeach
                </x-tag.table>
            @endif
        </x-tag.tile>
    </x-tag.block>
</x-admin-app-layout>
