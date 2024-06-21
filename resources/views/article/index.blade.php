<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Blog Articles') }}
        </h2>
    </x-slot>

    <div class="p-5">
        <p class="mb-10">Articles :</p>
        <div class="flex gap-5 ">
            @foreach($articles as $article)
                <div>
                    <p>{{$article->title}}</p>
                    <p>{{$article->description}}</p>
                    <p>{{$article->path}}</p>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>

