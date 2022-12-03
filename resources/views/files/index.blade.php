<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 px-10">
        <a class="text-blue-700 font-bold underline" href="/files/create">CREATE</a>
        <div class="grid grid-cols-4 gap-4">

            @foreach ($files as $file)
                @if ($file->mime_type == '1')
                    <div
                        class="flex flex-col justify-start text-center max-w-sm px-10 py-3 bg-white rounded-lg shadow-lg">
                        <p class="text-xl">{{ $file->title }}</p>
                        <video class="border border-gray-300 shadow-lg" controls src="{{ $file->file_path }}"></video>
                    </div>
                @else
                    <div
                        class="flex flex-col justify-start text-center max-w-sm px-10 py-3 bg-white rounded-lg shadow-lg">
                        <p class="text-xl">{{ $file->title }}</p>
                        <img class="border border-gray-300 shadow-lg" src="{{ $file->file_path }}" />
                    </div>
                @endif
            @endforeach
        </div>

    </div>
</x-app-layout>
