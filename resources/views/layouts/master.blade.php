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
            {{-- Side bar --}}
            <section class="basis-[15%] h-full bg-blue-500 shadow-md overflow-y-auto">
               <div class="flex flex-col h-16 min-h-16 text-white uppercase justify-center text-center font-bold text-3xl bg-blue-600 italic shadow-md">
                    Human Resource
               </div>
               <div class="flex flex-col h-36 min-h-36 text-sky-500 text-center justify-center items-center font-bold text-3xl italic shadow-md">
                    <img class="min-w-14 min-h-14 w-14 hover:border-[3px] hover:border-blue-300 rounded-full" src="https://cdn-icons-png.flaticon.com/512/6997/6997662.png " alt="profile">
               </div>
            </section>
            {{-- Content --}}
            <section class="basis-[85%] h-full min-w-[250px] bg-slate-50">
                <div class="absolute top-0 right-0 mt-16 shadow-sm mx-5 z-50" id="notifications">
                </div>
                <div class="flex flex-row h-16 min-h-16 text-sky-500 bg-white shadow-md">
                    <div class="basis-1/2 flex">
                        <div class="flex-initial w-24 ml-5 mt-2">
                            <div class="flex min-w-12 min-h-12 w-12 hover:border-[3px] hover:border-blue-300 rounded-full items-center justify-center text-center">
                                <x-icons.bar class="text-blue-500 h-8 w-8"></x-icons.bar>
                            </div>
                        </div>
                    </div>
                    <div class="basis-1/2">
                        <div class=" flex flex-row">
                            <span class="basis-[90%] flex justify-end text-end items-end pr-5">
                                <div class="flex min-w-12 min-h-12 w-12 hover:border-[3px] hover:border-blue-300 rounded-full items-center justify-center text-center">
                                    <x-icons.bell></x-icons.bell>
                                </div>
                            </span>
                            <span class="basis-[10%] flex justify-center pt-1.5 mr-5">
                                <img class="min-w-12 min-h-12 w-12 hover:border-[3px] hover:border-blue-300 rounded-full" src="https://cdn-icons-png.flaticon.com/512/6997/6997662.png " alt="profile">
                           </span>
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