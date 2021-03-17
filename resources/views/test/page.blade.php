<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Online school</title>
    </head>
    <body>
        <article>
            <h1>{{ $page->title }}</h1>
            @foreach ($page->contents as $content)
                <section>
                    {!! $content !!}
                </section>
            @endforeach
        </article>
    </body>
</html>
