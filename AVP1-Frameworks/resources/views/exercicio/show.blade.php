<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Detalhes do Exercício') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-10">
                
                <div class="mb-8">
                    <a href="{{ route('exercicio.index') }}" 
                       class="text-blue-600 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-300">
                        ← Voltar para lista
                    </a>
                </div>

                <div class="grid gap-6 mb-6">
                    <div class="bg-gray-50 dark:bg-gray-700 p-4 rounded-lg">
                        <label class="block mb-2 text-sm font-medium text-gray-500 dark:text-gray-400">
                            Exercício
                        </label>
                        <p class="text-lg text-gray-900 dark:text-white font-semibold">
                            {{ $exercicio->exercicio }}
                        </p>
                    </div>

                    <div class="grid md:grid-cols-3 gap-6">
                        <div class="bg-gray-50 dark:bg-gray-700 p-4 rounded-lg">
                            <label class="block mb-2 text-sm font-medium text-gray-500 dark:text-gray-400">
                                Duração
                            </label>
                            <p class="text-lg text-gray-900 dark:text-white font-semibold">
                                {{ $exercicio->duracao }}
                            </p>
                        </div>

                        <div class="bg-gray-50 dark:bg-gray-700 p-4 rounded-lg">
                            <label class="block mb-2 text-sm font-medium text-gray-500 dark:text-gray-400">
                                Calorias Gastas
                            </label>
                            <p class="text-lg text-gray-900 dark:text-white font-semibold">
                                {{ $exercicio->calorias_gastas }} kcal
                            </p>
                        </div>

                        <div class="bg-gray-50 dark:bg-gray-700 p-4 rounded-lg">
                            <label class="block mb-2 text-sm font-medium text-gray-500 dark:text-gray-400">
                                Data
                            </label>
                            <p class="text-lg text-gray-900 dark:text-white font-semibold">
                                {{ \Carbon\Carbon::parse($exercicio->data)->format('d/m/Y') }}
                            </p>
                        </div>
                    </div>
                </div>

                <div class="flex justify-end gap-3 mt-8">
                    <a href="{{ route('exercicio.edit', $exercicio->id) }}" 
                       class="bg-yellow-500 hover:bg-yellow-600 text-white font-semibold py-2 px-4 rounded">
                        Editar
                    </a>
                    <form action="{{ route('exercicio.destroy', $exercicio->id) }}" method="POST" 
                          onsubmit="return confirm('Tem certeza que deseja excluir este exercício?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" 
                                class="bg-red-500 hover:bg-red-600 text-white font-semibold py-2 px-4 rounded">
                            Deletar
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>

