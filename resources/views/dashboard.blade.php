<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}</b>
                    {{-- {{ route('chirp.index') }} --}}
                    
                        {{-- <a href="{{ route('chirp.index') }}" class="ml-4 font-semibold text-white-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                            <x-primary-button class="mt-4" name="Chirp">
                                CHIRP
                            </x-primary-button>
                        </a>
                     --}}
                    {{-- <input type="button" class="btn-primary" name="Chirp" value="Chirp">  --}}
                </div>
               
            </div>
        </div>
    </div>
</x-app-layout>
