<x-test-admin-app-layout>
    <h1 class="page_title">
        {{ $page->title }}
    </h1>

    <article class="simple_page">
        <div class="wrapper">
            @foreach ($page->contents as $content)
                {!! $content !!}
            @endforeach
        </div>
    </article>
</x-test-admin-app-layout>
