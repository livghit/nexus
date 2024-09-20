<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create an Article') }}
        </h2>
    </x-slot>
    <div class="p-10 grid md:grid-cols-4">
        <div class="p-5 mx-10 bg-white rounded-xl col-span-4 md:col-span-2">
            <p class="text-xl mb-2">Create Article</p>
            <form method="post" action="{{ route('articles.save') }}">
                @csrf
                <div>
                    <label for="title" class="block text-sm font-medium text-gray-900">Article title</label>
                    <x-input id="title" name="title" type="text" placeholder="Article Title" />
                </div>

                <div>
                    <label for="description" class="block text-sm font-medium text-gray-900">Article description</label>
                    <x-input id="description" name="description" type="text" placeholder="Description" />
                </div>

                <div x-data=" hashtags()" class="flex flex-col gap-2 my-5">
                    <div class="flex gap-2">
                        <div>
                            <label for="hashtags" class="block text-sm font-medium text-gray-900">Article
                                hashtags</label>
                            <x-input x-model="newTag" id="hashtags" name="hashtags" type="text"
                                placeholder="ex. Funny , Go , Java , Learning" />
                        </div>
                        <div class="mt-auto">
                            <x-button type="button" @click="addTag(newTag)">Append</x-button>
                        </div>
                    </div>

                    <div class="flex gap-2">
                        <template x-for="tag in hashtags">
                            <span
                                class="inline-flex items-center justify-center rounded-full border border-indigo-500 px-2.5 py-0.5 text-indigo-700">
                                <p class="whitespace-nowrap text-sm" x-text="tag"></p>

                                <button type="button"
                                    class="-me-1 ms-1.5 inline-block rounded-full bg-indigo-200 p-0.5 text-indigo-700 transition hover:bg-indigo-300">
                                    <span class="sr-only">Remove badge</span>

                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="h-3 w-3">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </span>
                        </template>
                    </div>

                </div>

                <div class="flex justify-between">
                    <div>
                        <label for="public" class="block text-sm font-medium text-gray-900">Article visibility</label>
                        <select name="public" id="public"
                            class="mt-1.5 w-xs rounded-lg border-gray-300 text-gray-700 sm:text-sm">
                            <option value="1">Public</option>
                            <option value="0">Private</option>
                        </select>
                    </div>
                    <div class="mt-auto ">
                        <x-button type="submit" class="">Save</x-button>
                    </div>
                </div>
            </form>
        </div>
        <div class="p-5 bg-white rounded-xl col-span-2 mx-10 md:mx-0 mt-5 md:mt-0">
            <p class="text-xl mb-2">Article List</p>

        </div>
    </div>

</x-app-layout>

<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('hashtags', () => ({
            hashtags: [],
            newTag: "",
            addTag(value) {
                if (value.trim() !== '') {
                    this.hashtags.push(value.trim());
                    this.newTag = '';
                }
            }
        }))
    })
</script>
