<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Blog Articles') }}
        </h2>
    </x-slot>

    <div class="p-5">
        <div class="grid grid-cols-4 gap-5">
            @foreach($articles as $article)
                <x-article-card :article="$article"/>
            @endforeach
        </div>
    </div>
</x-app-layout>

