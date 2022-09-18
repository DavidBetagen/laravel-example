require('./bootstrap');

import App from './App.svelte'
import router from './router';

const app = new App({
    target: document.querySelector('#app')
})

window.app = app

export default app