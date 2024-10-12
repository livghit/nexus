<div class="md:flex gap-5 grid">
    <x-sticky-nav/>
    <x-mobile-nav/>
    <div
        class="mt-20 md:mt-0 col-span-2 md:col-span-1 p-6 lg:p-8 bg-white dark:bg-gray-800 dark:bg-gradient-to-bl dark:from-gray-700/50 dark:via-transparent border-b border-gray-200 dark:border-gray-700 rounded-xl shadow-inner">
        <div class="w-full flex justify-center align-middle py-5">
            <img src="{{asset("images/profile.png")}}" alt="aywa" class="rounded-full size-20">
        </div>

        <h1 class="mt-8 text-2xl font-medium text-gray-900 dark:text-white">
            Welcome to Nexus application build by <a target="_blank" href="https://github.com/livghit"
                                                     class="underline text-indigo-400">@livghit!</a>
        </h1>

        <p class="mt-6 text-gray-500 dark:text-gray-400 leading-relaxed">
            Nexus is my personal blog website, where I share my thoughts and opinions on various topics from around the
            internet. Here, you'll find posts about the latest trends, social media happenings, and interesting online
            communities.
            <br>
            <br>
            This is my space to explore and discuss what's going on in the digital world. I hope you enjoy reading my
            posts
            and feel free to join the conversation.
            <br>
            <br>
            Thanks for visiting!
        </p>
    </div>

    <div
        class="col-span-2 bg-gray-200 dark:bg-gray-800 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8  rounded-xl shadow-inner">
        <div>
            <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                     class="w-6 h-6 stroke-gray-400">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25"/>
                </svg>
                <h2 class="ms-3 text-xl font-semibold text-gray-900 dark:text-white">
                    <a href="https://laravel.com/docs">Articles</a>
                </h2>
            </div>

            <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                Articles on Nexus are split into two different types: Open and Private Articles. Open Articles are
                accessible to everyone, allowing all readers to enjoy and share their thoughts. Private Articles, on the
                other hand, are for more in-depth discussions and are available only to selected members. This setup
                ensures
                a balanced space for both casual browsing and focused conversations.
            </p>
            <p class="mt-4 text-sm">
                <a href="https://laravel.com/docs"
                   class="inline-flex items-center font-semibold text-indigo-700 dark:text-indigo-300">
                    Explore public articles

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                         class="ms-1 w-5 h-5 fill-indigo-500 dark:fill-indigo-200">
                        <path fill-rule="evenodd"
                              d="M5 10a.75.75 0 01.75-.75h6.638L10.23 7.29a.75.75 0 111.04-1.08l3.5 3.25a.75.75 0 010 1.08l-3.5 3.25a.75.75 0 11-1.04-1.08l2.158-1.96H5.75A.75.75 0 015 10z"
                              clip-rule="evenodd"/>
                    </svg>
                </a>
            </p>
            <p class="mt-4 text-sm">
                <a href="https://laravel.com/docs"
                   class="inline-flex items-center font-semibold text-indigo-700 dark:text-indigo-300">
                    Register to explore private articles

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                         class="ms-1 w-6 h-6 fill-indigo-500 dark:fill-indigo-200">
                        <path fill-rule="evenodd"
                              d="M5 10a.75.75 0 01.75-.75h6.638L10.23 7.29a.75.75 0 111.04-1.08l3.5 3.25a.75.75 0 010 1.08l-3.5 3.25a.75.75 0 11-1.04-1.08l2.158-1.96H5.75A.75.75 0 015 10z"
                              clip-rule="evenodd"/>
                    </svg>
                </a>
            </p>
        </div>

        <div>
            <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                     class="w-6 h-6 stroke-gray-400">
                    <path stroke-linecap="round"
                          d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z"/>
                </svg>
                <h2 class="ms-3 text-xl font-semibold text-gray-900 dark:text-white">
                    <a href="https://laracasts.com">Video content (coming soon ...)</a>
                </h2>
            </div>

            <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them
                out,
                see for yourself, and massively level up your development skills in the process.
            </p>

            <p class="mt-4 text-sm">
                <a href="https://laracasts.com"
                   class="inline-flex items-center font-semibold text-indigo-700 dark:text-indigo-300">
                    Start watching Laracasts

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                         class="ms-1 w-5 h-5 fill-indigo-500 dark:fill-indigo-200">
                        <path fill-rule="evenodd"
                              d="M5 10a.75.75 0 01.75-.75h6.638L10.23 7.29a.75.75 0 111.04-1.08l3.5 3.25a.75.75 0 010 1.08l-3.5 3.25a.75.75 0 11-1.04-1.08l2.158-1.96H5.75A.75.75 0 015 10z"
                              clip-rule="evenodd"/>
                    </svg>
                </a>
            </p>
        </div>

        <div>
            <div class="flex items-center">
                <div class="relative flex h-3 w-3">
                <span
                    class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-3 w-3 bg-green-400"></span>
                </div>
                <h2 class="ms-3 text-xl font-semibold text-gray-900 dark:text-white">
                    <a href="https://tailwindcss.com/">Realtime Reactions</a>
                </h2>
            </div>

            <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                Laravel Jetstream is built with Tailwind, an amazing utility first CSS framework that doesn't get in
                your
                way. You'll be amazed how easily you can build and maintain fresh, modern designs with this wonderful
                framework at your fingertips.
            </p>
        </div>

        <div>
            <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                     stroke="currentColor" class="w-6 h-6 stroke-gray-400">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5"/>
                </svg>

                <h2 class="ms-3 text-xl font-semibold text-gray-900 dark:text-white">
                    Have fun while learning
                </h2>
            </div>

            <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                Authentication and registration views are included with Laravel Jetstream, as well as support for user
                email
                verification and resetting forgotten passwords. So, you're free to get started with what matters most:
                building your application.
            </p>
        </div>
    </div>
</div>
