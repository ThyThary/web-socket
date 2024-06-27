@extends('layouts/master')
@section("content")
{{-- Notifications --}}
<div class="absolute top-0 right-0 mt-3 shadow-sm mx-5 z-50" id="notifications">
</div>
<form method="POST" name='frmPro' id="frmPro">
    <div class="bg-white absolute min-w-[400px] min-h-[500px] top-[50%] left-[50%] rounded-2xl translate-y-[-50%] translate-x-[-50%] shadow-2xl">
        <div class="relative m-5 min-h-32 rounded-md max-h-32 bg-cover">
            <img class="h-32 w-full rounded-md" src="https://img.freepik.com/free-vector/hand-painted-watercolor-pastel-sky-background_23-2148902771.jpg?size=626&ext=jpg&ga=GA1.1.2116175301.1718668800&semt=sph">
        </div>
        <div class=" absolute translate-y-[-63px] flex w-full justify-center">
            <img class="min-w-[90px] min-h-[90px] w-[90px] rounded-full" src="https://cdn-icons-png.flaticon.com/512/6997/6997662.png " alt="profile">
        </div>
        <div class="flex flex-col justify-center text-center translate-y-10 m-5">
            <h4 class="text-teal-900 text-xl font-bold inline-block">Srong Sokleap</h4>
            <p for="accountant" class=" text-base font-normal mb-2">Accountant</p>
            <textarea name="message" id="message" cols="7" rows="4" class="inputStyle" placeholder="Message"></textarea>
        </div>
    </div>
    </div>
</form>
<script>
    setTimeout(()=>{
        window.Echo.channel('chat').listen('chatMessage', (e) => {
            if(e.data != ""){
                $('#notifications').prepend(`<div id="toast-success-${e.id}" onmouseleave="hideNoti()" class=" flex items-center w-full max-w-auto p-2 min-w-[20rem] text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800 mt-2" role="alert">
                    <div class="min-w-8 min-h-8 w-8 rounded-full mr-2">
                        <img class="min-w-8 min-h-8 w-8 rounded-full cursor-pointer border-2 hover:border-sky-500" src="https://cdn-icons-png.flaticon.com/512/6997/6997662.png " alt="profile">
                    </div>
                    <div class="pr-1 w-64 truncate"><span class='text-sm font-bold cursor-default'>Srong Sokleap :</span> 
                        <a href="#" class="hover:text-sky-500 text-sm font-normal">${e.data}</a>
                    </div>
                    <button type="button" id="btnHide-${e.id}" class="pl-1 ms-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-success" aria-label="Close">
                        <span class="sr-only">Close</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                    </button>
                </div>`);
            }
            let timeOut = setTimeout(()=>{$(`#toast-success-${e.id}`).addClass('hidden');},5000);
            $(`#toast-success-${e.id}`).hover(function() {
                if (timeOut) {
                    // Call clearTimeout() on hover()
                    clearTimeout(timeOut);
                }
                //Hide the notification after mouse out
                hideNoti = () =>{
                    try{
                        let id = event.target.id;
                        $(`#${id}`).addClass('hidden');
                    }catch(error){
                        console.error('Error:',error);
                    }
                }
            });
            //button to hide notification
            $(`#btnHide-${e.id}`).on('click',() =>{
                $(`#toast-success-${e.id}`).addClass('hidden');
            })
            $('#message').val(e.data);
        })
    },200);
</script>
@endsection

