<x-test-admin-app-layout>
        <article>
            <h1 class="page_title">
                {{ $page->title }}
            </h1>
            @foreach ($page->contents as $content)
                <section>
                    {!! $content !!}
                </section>
            @endforeach
        </article>
</x-test-admin-app-layout>
