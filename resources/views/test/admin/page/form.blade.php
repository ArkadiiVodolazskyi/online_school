<h1>Page</h1>
<form class="" action="" method="post">
    @csrf
    <input type="hidden" name="id" value="{{ $item->id }}">
    <input type="text" name="slug" value="{{ $item->slug }}"><br>
    <input type="text" name="title" value="{{ $item->title }}"><br>
    <label>
        <input type="checkbox" name="publish" value="1" {{ $item->publish ? 'checked' : '' }}>
        Publish
    </label><br>
    <textarea name="content" rows="8" cols="80">
        {{ $item->contents->first() }}
    </textarea><br>
    <input type="submit" value="submit">
</form>
