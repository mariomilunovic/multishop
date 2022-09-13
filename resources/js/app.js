import './bootstrap';

import Alpine from 'alpinejs'

// import ToastComponent from '../../vendor/usernotnull/tall-toasts/resources/js/tall-toasts'

// Alpine.data('ToastComponent', ToastComponent)

import persist from '@alpinejs/persist'
Alpine.plugin(persist)

import collapse from '@alpinejs/collapse'
Alpine.plugin(collapse)

window.Alpine = Alpine

Alpine.start()
