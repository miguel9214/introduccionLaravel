<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight flex items-center justify-between">
            {{ __('Posts') }}
            <a href="{{ route('posts.create') }}"
                class="text-xs bg-800 text-white rounded px-4 py-2" style="background-color: green"> Crear</a>
        </h2>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-white-900 dark:text-gray-100">
                    <table class="mb-4">
                        @foreach ($posts as $post)
                            <tr class="boder-b boder-gray-200 text-sm">
                                <td class="px-6 py-4">{{ $post->title }}</td>
                                <td class="px-6 py-4"><a href="{{ route('posts.edit', $post) }}"
                                        class="bg-800 text-white rounded px-4 py-2" style="background-color:#576CBC">Editar</a></td>
                                <td class="px-6 py-4">
                                    <form action="{{ route('posts.destroy', $post) }}" method="POST">
                                        {{-- Esto genera un token de seguridad. --}}
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" value="Eliminar"
                                            class="bg-800 text-white rounded px-4 py-2" style="background-color: #E94560"
                                            onclick="return confirm('Desea Eliminar?')">
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    {{ $posts->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
