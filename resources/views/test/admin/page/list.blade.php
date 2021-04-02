<x-test-admin-app-layout>
    @livewire('navigation-menu')

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="my-12 shadow-xl">
            <div class="bg-white p-6 sm:px-12">
                <table class="w-full pages mx-auto border-collapse">
                    <thead>
                        <tr>
                            <th>Название страницы</th>
                            <th>URL</th>
                            <th colspan="3">Управление</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $item)
                            <tr class="px-3 py-4 font-semibold">
                                <td>
                                    {{ $item->title }}
                                </td>
                                <td>
                                    {{ $item->slug }}
                                </td>
                                <td>
                                    <a href="/{{ $item->slug }}" class="btn text-center px-3 py-1.5 text-white bg-gray-400 hover:bg-gray-600 hover:shadow-md">
                                        Просмотреть
                                    </a>
                                </td>
                                <td>
                                    <a href="page?id={{ $item->id }}" class="btn text-center px-3 py-1.5 text-white bg-blue-400 hover:bg-blue-600 hover:shadow-md">
                                        Редактировать
                                    </a>
                                </td>
                                <td>
                                    <a href="delete_page?id={{ $item->id }}" class="btn text-center px-3 py-1.5 text-white bg-red-400 hover:bg-red-800 hover:shadow-md">
                                        Удалить
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        <tr>
                            <td colspan="5" class="p-0 hover:bg-blue-200">
                                <a href="/admin/page" class="block w-full h-full">Создать новую страницу</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>




</x-test-admin-app-layout>
