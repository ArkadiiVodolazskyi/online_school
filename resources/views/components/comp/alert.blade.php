<x-tag.block x-data="{show: true}" x-show="show">
    <x-tag.tile {{ $attributes->class([
        'bg-red-200 text-red-500' => ($type == 'error'),
        'bg-green-200 text-green-500' => ($type == 'success'),
        'flex flex-row items-center justify-between bg-gray-200 text-gray-500',
        ]) }}>
        <span>{{ $slot }}</span>
        <a href="#" class="ml-6 font-bold text-lg" x-on:click.prevent="show = false">✕</a>
    </x-tag.tile>
</x-tag.block>
