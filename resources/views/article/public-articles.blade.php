<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name')}} | Public Blogs</title>

    @vite(['resources/css/app.css'])
</head>
<body class="font-sans antialiased bg-gray-100">
<nav class="bg-white p-5">
    <div class="flex justify-between w-full ">
        <a href="/" class="flex gap-2 ms-10">
            <x-application-mark/>
            <p class="mt-2 font-bold text-2xl text-indigo-400">{{config('app.name')}}</p>
        </a>
    </div>
</nav>
<header class="bg-white dark:bg-gray-800 shadow">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Public Blogs') }}
        </h2>
    </div>
</header>
<div class="p-5 grid grid-cols-4 gap-5">
    @foreach($articles as $article)
        <x-article-card :article="$article"/>
    @endforeach
</div>
</body>
</html>
