<x-test-admin-app-layout>
        <article class="html_component">
            <h1>{{ $page->title }}</h1>
            @foreach ($page->contents as $content)
                <section>
                    {!! $content !!}
                </section>
            @endforeach
        </article>
</x-test-admin-app-layout>
