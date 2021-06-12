<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<link rel="stylesheet" href="{{asset('css/app.css')}}" >

<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="{{mix('js/app.js')}}" defer></script>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="referrer" content="always">
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
        <meta name="description" content="">

    <body>
 


    <div >
        <div x-data="{ sidebarOpen: false }" class="flex h-screen bg-gray-200 font-roboto">
            @include('layouts.partials.sidebar')
            
            <div class="flex-1 flex flex-col overflow-hidden">
            @include('layouts.partials.menu')
    
                <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
                    <div>
                        @yield('body')
                    </div>
                </main>
            </div>
        </div>
    </div>
    </body>
</html>