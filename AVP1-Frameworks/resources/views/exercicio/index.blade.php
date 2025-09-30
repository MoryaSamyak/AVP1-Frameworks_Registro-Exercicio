<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Exercícios') }}
        </h2>
    </x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
         @if (session('success'))
            <div class="border border-green-500 text-green-500 px-6 py-2 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="bg-red-100 text-red-900 px-4 py-2 rounded mb-4">
                {{ session('error') }}
            </div>
        @endif

        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="flex justify-end">
                <a href="{{ route('exercicio.create') }}" class="bg-indigo-500 hover:bg-indigo-600 text-white font-semibold py-2 px-4 m-4 rounded">
                    Adicionar
                </a>
            </div>

            <table class="w-full text-sm text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-center">Exercicio</th>
                        <th scope="col" class="px-6 py-3 text-center">Duracao</th>
                        <th scope="col" class="px-6 py-3 text-center">Categoria</th>
                        <th scope="col" class="px-6 py-3 text-center">Calorias</th>
                        <th scope="col" class="px-6 py-3 text-center">Data</th>
                        <th scope="col" class="px-6 py-3 text-center">Ações</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($exercicios as $exercicio)
                        <tr>
                            <td class="px-6 py-4 text-center">{{ $exercicio->exercicio }}</td>
                            <td class="px-6 py-4 text-center">{{ $exercicio->duracao }}</td>
                            <td class="px-6 py-4 text-center">--</td>
                            <td class="px-6 py-4 text-center">{{ $exercicio->calorias_gastas }}</td>
                            <td class="px-6 py-4 text-center">{{ $exercicio->data }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</x-app-layout>
