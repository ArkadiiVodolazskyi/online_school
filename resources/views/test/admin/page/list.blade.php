<x-test-admin-app-layout>
    <h1>Pages</h1>
    @foreach ($items as $item)
        <div>
            <a href="page?id={{ $item->id }}">{{ $item->slug }}</a> | <a href="delete_page?id={{ $item->id }}">delete</a>
        </div>
    @endforeach
</x-test-admin-app-layout>
