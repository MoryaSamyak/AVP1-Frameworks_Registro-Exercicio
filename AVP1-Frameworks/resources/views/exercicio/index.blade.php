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

            <form method="GET" action="{{ route('exercicio.index') }}" class="p-4 bg-gray-50 dark:bg-gray-700 rounded mb-4 grid grid-cols-1 sm:grid-cols-4 gap-4 items-end">
                <div>
                    <label for="tipo" class="block text-sm font-medium text-gray-700 dark:text-gray-200 mb-1">Exercício</label>
                    <input type="text" name="tipo" id="tipo" value="{{ request('tipo') }}" 
                           class="w-full border rounded px-2 py-1 text-sm">
                </div>
                <div>
                    <label for="data_inicio" class="block text-sm font-medium text-gray-700 dark:text-gray-200 mb-1">Data Início</label>
                    <input type="date" name="data_inicio" id="data_inicio" value="{{ request('data_inicio') }}" 
                           class="w-full border rounded px-2 py-1 text-sm">
                </div>
                <div>
                    <label for="data_fim" class="block text-sm font-medium text-gray-700 dark:text-gray-200 mb-1">Data Fim</label>
                    <input type="date" name="data_fim" id="data_fim" value="{{ request('data_fim') }}" 
                           class="w-full border rounded px-2 py-1 text-sm">
                </div>
                <div class="flex gap-2">
                    <button type="submit" class="bg-indigo-500 hover:bg-indigo-600 text-white px-4 py-2 rounded text-sm">
                        Filtrar
                    </button>
                    <a href="{{ route('exercicio.index') }}" class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded text-sm">
                        Limpar
                    </a>
                </div>
            </form>

            <div class="flex justify-end px-4">
                <a href="{{ route('exercicio.create') }}" class="bg-indigo-500 hover:bg-indigo-600 text-white font-semibold py-2 px-4 m-4 rounded">
                    Adicionar
                </a>
            </div>

            <table class="w-full text-sm text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-center">Exercicio</th>
                        <th scope="col" class="px-6 py-3 text-center">Duracao</th>
                        <th scope="col" class="px-6 py-3 text-center">Calorias</th>
                        <th scope="col" class="px-6 py-3 text-center">Data</th>
                        <th scope="col" class="px-6 py-3 text-center">Ações</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($exercicios as $exercicio)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="px-6 py-4 text-center">{{ $exercicio->exercicio }}</td>
                            <td class="px-6 py-4 text-center">{{ $exercicio->duracao }}</td>
                            <td class="px-6 py-4 text-center">{{ $exercicio->calorias_gastas }}</td>
                            <td class="px-6 py-4 text-center">{{ \Carbon\Carbon::parse($exercicio->data)->format('d/m/Y') }}</td>
                            <td class="px-6 py-4 text-center">
                                <div class="flex justify-center gap-2">
                                    <a href="{{ route('exercicio.show', $exercicio->id) }}" 
                                       class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-1 px-3 rounded text-xs">
                                        Visualizar
                                    </a>
                                    <a href="{{ route('exercicio.edit', $exercicio->id) }}" 
                                       class="bg-yellow-500 hover:bg-yellow-600 text-white font-semibold py-1 px-3 rounded text-xs">
                                        Editar
                                    </a>
                                    <form action="{{ route('exercicio.destroy', $exercicio->id) }}" method="POST" 
                                          onsubmit="return confirm('Tem certeza que deseja excluir este exercício?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" 
                                                class="bg-red-500 hover:bg-red-600 text-white font-semibold py-1 px-3 rounded text-xs">
                                            Deletar
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</x-app-layout>
