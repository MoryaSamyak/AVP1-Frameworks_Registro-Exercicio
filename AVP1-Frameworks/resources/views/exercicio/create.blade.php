<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Exercícios') }}
        </h2>
    </x-slot>
<div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-10">
                 @foreach($errors->all() as $error)
                    <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                        <span class="font-medium">Danger alert!</span> {{$error}}
                    </div>
                @endforeach
                <form method="POST" action="{{route('exercicio.store')}}">
                    @csrf
                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                        <div>
                            <label for="exercicio" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Exercício</label>
                            <input type="text" id="exercicio" name="exercicio" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  required />
                        </div>
                        <div>
                            <label for="duracao" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Duração</label>
                            <input type="time" id="duracao" name="duracao" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  required />
                        </div>
                        <div>
                            <label for="calorias_gastas" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Calorias Gastas</label>
                            <input type="number" step="any" id="calorias_gastas" name="calorias_gastas" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  required />
                        </div>
                        <div>
                            <label for="data" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Data</label>
                            <input type="date" id="data" name="data" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"   required />
                        </div>
                        <div class="col-span-2 flex justify-end">
                            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Salvar</button>
                        </div>
                </form>
            </div>
        </div>
</div>
</x-app-layout>
