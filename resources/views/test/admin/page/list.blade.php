<x-test-admin-app-layout>
    @livewire('navigation-menu')

    @foreach ($items as $item)
        <div class="page_item">
            <a href="page?id={{ $item->id }}" class="item_title">
                {{ $item->slug }}
            </a>
            <a href="page?id={{ $item->id }}" class="btn">
                edit
            </a>
            <a href="/{{ $item->slug }}" class="btn">
                view
            </a>
            <a href="delete_page?id={{ $item->id }}" class="item_delete">
                delete
            </a>
        </div>
    @endforeach

    <a href="/admin/page">Добавить новую страницу</a>
</x-test-admin-app-layout>
