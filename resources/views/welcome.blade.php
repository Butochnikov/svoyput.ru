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
        @production
        <!-- Yandex.Metrika counter -->
        <script type="text/javascript">
            (function(m,e,t,r,i,k,a){
                m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
                m[i].l=1*new Date();
                for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
                k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)
            })(window, document,'script','https://mc.yandex.ru/metrika/tag.js?id=104822001', 'ym');

            ym(104822001, 'init', {ssr:true, clickmap:true, ecommerce:"dataLayer", accurateTrackBounce:true, trackLinks:true});
        </script>
        <noscript><div><img src="https://mc.yandex.ru/watch/104822001" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
        <!-- /Yandex.Metrika counter -->
        @endproduction
    </head>
    <body class="antialiased bg-gray-900 text-white overflow-hidden">
        <div class="h-screen flex items-center justify-center px-4 py-4">
            <div class="relative w-full max-w-[600px] max-h-full flex flex-col items-center justify-center">
                <!-- Спиннер загрузки -->
                <div id="video-spinner" class="absolute w-12 h-12 border-4 border-gray-600 border-t-white rounded-full animate-spin"></div>
                
                <video 
                    id="main-video"
                    class="w-full max-h-[calc(100vh-8rem)] aspect-square rounded-full object-cover opacity-0 transition-opacity duration-300" 
                    src="/vid/svoy.mp4" 
                    preload="auto"
                    muted 
                    loop 
                    onmouseover="this.play()" 
                    onmouseout="this.pause()"
                ></video>
                
                <div class="w-full text-center font-['Caveat'] text-xl mt-4">
                    Свой путь... v{{ ver() }}
                </div>
            </div>
        </div>
        
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const video = document.getElementById('main-video');
                const spinner = document.getElementById('video-spinner');
                
                video.addEventListener('canplaythrough', function() {
                    spinner.style.display = 'none';
                    video.style.opacity = '1';
                });
                
                // Резервный вариант на случай быстрой загрузки
                if (video.readyState >= 3) {
                    spinner.style.display = 'none';
                    video.style.opacity = '1';
                }
            });
        </script>
    </body>
</html>
