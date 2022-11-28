<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Listado de publicaciones') }}
        </h2>
        <div class="mt-4 flex  md:justify-end">
            <a href="{{route('posts.create')}}">
                <x-primary-button ><span class="text-xl mr-2" >+ </span> Crear Publicacion</x-primary-button>
            </a>
        </div>
    </x-slot>

    @foreach ($posts as $post)
    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg flex flex-row justify-between ">
                <div class="p-6 text-gray-900">
                    {{ $post->title }}
                </div>
                <div class="p-6 text-gray-900 flex">
                    <a href="{{route('posts.edit', $post)}}">
                        <button class="px-6">Editar</button>
                    </a>
                    
                    <form action="{{route('posts.destroy', $post)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Seguro que quieres eliminar')"  class="px-6">
                            Eliminar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
  {{ $posts->links() }}
    </div>

  



</x-app-layout>