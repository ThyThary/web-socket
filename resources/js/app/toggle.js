
/**
 * Toggles the visibility of an element and adjusts the layout of another element accordingly.
 *
 * @param {string} id - The ID of the element to toggle the visibility of.
 * @param {string} contentId - The ID of the element to adjust the layout of.
 * @returns {void}
 */
window.sideBar = (id,contentId) =>{
    try{
        document.getElementById(id).classList.toggle('hidden');
        document.getElementById(contentId).classList.toggle('basis-full');
    }catch(error){
        console.error('Error:',error);
    }
}

window.notification = (id) =>{
    try{
        $(`#${id}`).empty();
        for(let i = 0; i < 10; i++){
            if(i < 1){
                $(`#${id}`).prepend(`<div class=" h-96 bg-white shadow-md rounded-md overflow-y-auto p-5" id="subNotifications"></div>`);
            }
            $('#subNotifications').prepend(`<div id="toast-success-${i}" class=" flex items-center w-full max-w-auto p-2 min-w-[20rem] text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800 mb-2" role="alert">
                <div class="min-w-12 min-h-12 w-12 rounded-full mr-2">
                    <img class="min-w-12 min-h-12 w-12 rounded-full cursor-pointer hover:border-[3px] hover:border-sky-500" src="https://cdn-icons-png.flaticon.com/512/6997/6997662.png " alt="profile">
                </div>  
                <div class="pr-1 w-64 truncate"><span class='text-sm font-bold cursor-default'>Srong Sokleap :</span> 
                    <a href="#" class="hover:text-sky-500 text-sm font-normal">Hello! I am a web developer.</a>
                </div>
            </div>`);
            $(`#btnHide-${i}`).on('click',() =>{
                $(`#toast-success-${i}`).addClass('hidden');
            })
        }
        document.getElementById(id).classList.toggle('hidden');
    }catch(error){
        console.error('Error:',error);
    }
    
}