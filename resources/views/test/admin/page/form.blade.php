<x-test-admin-app-layout>
    @livewire('navigation-menu')

    <form class="create_page_form" action="" method="post">
        @csrf
        <input type="hidden" name="id" value="{{ $item->id }}">
        <livewire:slug-input slug="{{ $item->slug }}" table="pages" itemId="{{ $item->id }}" />
        <x-sluggable name="title" value="{{ $item->title }}" />
        <label class="checkbox">
            <input type="checkbox" name="publish" value="1" {{ $item->publish ? 'checked' : '' }}>
            Publish
        </label>
        <div class="summernote_editor">
            <textarea class="summernote" name="page_content" rows="8" cols="80">{{ $item->contents->first() }}</textarea>
        </div>
        <input type="submit" value="submit" class="btn mt-6">
    </form>
</x-test-admin-app-layout>
