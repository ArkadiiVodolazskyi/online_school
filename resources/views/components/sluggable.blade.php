<div x-data="sluggable('{{ $value }}')">
    <input type="text" name="{{ $name }}" value="{{ $value }}" x-model="title" x-on:keyup.debounce.500ms="emit()">
</div>
@once
    @push('footer_scripts')
        <script>
            function sluggable(value) {
                return {
                    title: value,
                    emit: function() {
                        Livewire.emit('titleModified', this.title);
                    }
                };
            }
        </script>
    @endpush
@endonce
