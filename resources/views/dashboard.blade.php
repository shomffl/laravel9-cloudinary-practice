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
                    <form action="/cloudinary" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="image">
                        <button
                            class="text-white bg-red-500 px-3 py-0.5 border-b-4 border-red-700 active:scale-95 active:border-opacity-10">send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
