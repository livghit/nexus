<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create an Article') }}
        </h2>
    </x-slot>
    <div class="p-10">
        <div class="p-5 mx-10 bg-white rounded-xl">
            <form method="post" action="{{route('articles.save')}}">
                @csrf
                <label for="title" class="block text-sm font-medium text-gray-900">Article title</label>
                <x-input id="title" name="title" type="text" placeholder="Article Title"/>

                <label for="description" class="block text-sm font-medium text-gray-900">Article description</label>
                <x-input id="description" name="description" type="text" placeholder="Description"/>

                <label for="public" class="block text-sm font-medium text-gray-900">Article visibility</label>
                <select
                    name="public"
                    id="public"
                    class="mt-1.5 w-xs rounded-lg border-gray-300 text-gray-700 sm:text-sm"
                >
                    <option value="1">Public</option>
                    <option value="0">Private</option>
                </select>

                <x-button type="submit" class="ml-auto">Save</x-button>
            </form>
        </div>
    </div>
</x-app-layout>
