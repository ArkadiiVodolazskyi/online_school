<div>
    <input type="text" wire:model="slug" name="slug" value="{{ $slug }}">
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="red-600">{{ $error }}</div>
        @endforeach
    @endif
</div>
