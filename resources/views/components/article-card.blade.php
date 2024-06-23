<div>
    <article
        class="hover:animate-background rounded-xl bg-gradient-to-r from-indigo-500 via-blue-500 to-red-600 p-0.5 shadow-xl transition hover:bg-[length:400%_400%] hover:shadow-sm hover:[animation-duration:_10s]"
    >
        <div class="flex gap-2 justify-end">
            <span>Dislike</span>
            <span>Funny</span>
            <span>Funny</span>
        </div>
        <div class="rounded-[10px] bg-white p-4 !pt-20 sm:p-6">
            <a href="article/{{$article->path}}">
                <h3 class="mt-0.5 text-lg font-medium text-gray-900">
                    {{$article->title}}
                </h3>
            </a>

            <time class="block text-xs text-gray-500">Posted {{$article->created_at->format("d.m.Y")}}
                at {{$article->created_at->format("H:i a")}}</time>
            <div class="mt-4 flex flex-wrap gap-1">
              <span
                  class="whitespace-nowrap rounded-full bg-purple-100 px-2.5 py-0.5 text-xs text-purple-600  border border-red-600"
              >
                                {{$article->description}}
              </span>
            </div>
        </div>
    </article>
</div>
