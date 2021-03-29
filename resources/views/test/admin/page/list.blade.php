<x-test-admin-app-layout>
    <h1 class="page_title">
        <a href="{{ route('dashboard') }}" class="back_to_dashboard">Дашборд</a>
        Pages
    </h1>
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
</x-test-admin-app-layout>
