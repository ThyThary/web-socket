window._ = require('lodash');
window.$ = require('jquery');

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

import Echo from 'laravel-echo';
window.Pusher = require('pusher-js');
Pusher.logToConsole = true;

window.Echo = new Echo({
    broadcaster: 'pusher',
    key: '5c4f4de187ffff41a277',
    cluster: 'mt1',
    wsHost: window.location.hostname,
    wsPort: 6001,
    forceTLS: false,
    disableStats: true,
    enabledTransports: ['ws', 'wss'],
    logToConsole: true,
    encrypted: true
});
// window.onload=()=>{
//     alert(1);
//     Echo.channel(`chat.${id}`).listen('chatMessage', (e) => {
//         console.log(e);
//     });
// }
    