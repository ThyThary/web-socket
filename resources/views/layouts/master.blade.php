<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <script src="js/app.js"></script>
        @yield("style")
    </head>
    <body>
        <main class="flex flex-row w-full h-screen">
            <section class="basis-[15%] h-full bg-blue-500 shadow-md overflow-y-auto">
               <div class="flex flex-col h-16 min-h-16 text-sky-500 justify-center text-center font-bold text-3xl bg-blue-600 italic shadow-md">
                    DEFULALT SYSTEM
               </div>
               <div class="flex flex-col h-36 min-h-36 text-sky-500 text-center justify-center items-center font-bold text-3xl italic shadow-md">
                    <img class="min-w-14 min-h-14 w-14 border-2 border-white rounded-full" src="https://cdn-icons-png.flaticon.com/512/6997/6997662.png " alt="profile">
               </div>
               {{-- <div class="flex flex-col h-46">
                hh
                </div> --}}
            </section>
            <section class="basis-[85%] h-full bg-slate-50">
                <div class="absolute top-0 right-0 mt-10 shadow-sm mx-5 z-50" id="notifications">
                </div>
                <div class="flex flex-row h-16 min-h-16 text-sky-500 bg-white shadow-md">
                    <div class="basis-1/2">tt</div>
                    <div class="basis-1/2">
                        <div>
                            <x-bell></x-bell>
                        </div>
                    </div>
               </div>
               <div class="h-auto bg-white shadow-md m-5 mt-16 rounded-md">
                    <div class="h-[700px] w-full relative p-5">
                        @yield('content')
                    </div>
               </div>
            </section>
        </main>
        {{-- @stack("script") --}}
        {{-- @push("script")@endpush --}}
    </body>
</html>