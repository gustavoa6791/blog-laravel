<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg h-52">
                <div class=" text-[20px] p-4 text-gray-900">Informacion General</div>
            </div>

            <div class="lg:flex lg:justify-between">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg h-52 my-10 lg:w-1/2"  >
                    <div class=" text-[20px] p-4 text-gray-900">Publicaciones</div>
                </div>
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg h-52 my-10 lg:ml-10 lg:w-1/2" >
                <div class=" text-[20px] p-4 text-gray-900">Estadisticas</div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>