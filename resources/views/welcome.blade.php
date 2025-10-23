<!-- test -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Свой путь...</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&display=swap" rel="stylesheet">

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased bg-gray-900 text-white overflow-hidden">
        <div class="h-screen flex items-center justify-center px-4 py-4">
            <div class="relative w-full max-w-[600px] max-h-full flex flex-col items-center justify-center">
                <video class="w-full max-h-[calc(100vh-8rem)] aspect-square rounded-full object-cover" src="/vid/svoy.mp4" muted loop onmouseover="this.play()" onmouseout="this.pause()"></video>
                <div class="w-full text-center font-['Caveat'] text-xl mt-4">
                    Свой путь... v{{ ver() }}
                </div>
            </div>
        </div>
    </body>
</html>
