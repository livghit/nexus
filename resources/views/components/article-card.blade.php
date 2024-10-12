<div>
    <article
        class="hover:animate-background rounded-xl bg-gradient-to-r from-indigo-400 via-blue-400 to-red-400 p-0.5 shadow-xl transition hover:bg-[length:400%_400%] hover:shadow-sm hover:[animation-duration:_10s]">
        <div class="rounded-[10px] bg-white p-4 !pt-20 sm:p-6">
            <a href="article/{{ $article->path }}">
                <h3 class="mt-0.5 text-lg font-medium text-gray-900">
                    {{ $article->title }}
                </h3>
            </a>

            <time class="block text-xs text-gray-500">Posted {{ $article->created_at->format('d.m.Y') }} at
                {{ $article->created_at->format('H:i a') }}</time>
            <div class="mt-4 flex flex-wrap gap-1">
                @foreach ($article->hashtags as $hashtag)
                    <span
                        class="whitespace-nowrap rounded-full bg-purple-100 px-2.5 py-0.5 text-xs text-purple-600 border border-red-600">
                        {{ $hashtag->tag }}
                        {{ $hashtag->reactions}}
                    </span>
                @endforeach
            </div>

            <div class="relative w-full bottom-0 right-0 mt-5 flex gap-3 text-xl">
                @php $reactions = App\Models\ArticleReaction::all(); @endphp
                @foreach ($reactions as $reaction)
                    <button>{{ $reaction['smiley'] }}</button>
                @endforeach
            </div>
        </div>
    </article>
</div>
