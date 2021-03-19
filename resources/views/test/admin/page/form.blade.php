<x-test-admin-app-layout>
    <h1>Page</h1>
    <form class="" action="" method="post">
        @csrf
        <input type="hidden" name="id" value="{{ $item->id }}">
        <livewire:slug-input slug="{{ $item->slug }}" table="pages" itemId="{{ $item->id }}" />
        <x-sluggable name="title" value="{{ $item->title }}" />
        <label>
            <input type="checkbox" name="publish" value="1" {{ $item->publish ? 'checked' : '' }}>
            Publish
        </label><br>
        <div class="html_component">
            <textarea class="summernote" name="page_content" rows="8" cols="80">{{ $item->contents->first() }}</textarea><br>
        </div>
        <input type="submit" value="submit">
    </form>
</x-test-admin-app-layout>
