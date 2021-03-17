<h1>Pages</h1>
@foreach ($items as $item)
    <div>
        <a href="page?id={{ $item->id }}">{{ $item->slug }}</a>
    </div>
@endforeach
