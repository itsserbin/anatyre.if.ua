<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{env('APP_NAME')}}</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=oswald:400,500,600&display=swap" rel="stylesheet"/>
    @vite('resources/scss/app.scss')
</head>
<body class="antialiased">
<section class="first relative">
    <img src="/img/first-image.svg" alt="{{env('APP_NAME')}}" class="absolute">
    <div class="mx-auto px-4 max-w-7xl relative grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="grid gap-4">
            <img src="/img/logo.svg" alt="{{env('APP_NAME')}}">
            <div class="text-5xl sm:text-6xl text-white font-medium">Шиномонтаж</div>
            <a class="text-[#CF9236] text-3xl font-medium" href="tel:+380503736660">
                +38 (050) 373-66-60
            </a>
        </div>
        <form class="first-form-bg max-w-xl flex flex-col p-6 gap-4 rounded">
            <input type="text" name="name" placeholder="Ваше імʼя"
            class="rounded bg-white p-2 border-0">
            <input type="text" name="phone" placeholder="+38">
            <button type="submit" class="bg-green-600 rounded p-4">Замовити</button>
        </form>
    </div>
</section>
</body>
</html>
