
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
/*
require('./bootstrap');

window.Vue = require('vue');


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
/*
Vue.component('example', require('./components/Example.vue'));
Vue.component('modal', require('./components/ModalForm.vue'));

const app = new Vue({
    el: '#app',
    data:{
        showModal:false
    },
    methods:{
        closeBotton(){
            this.showModal=!this.showModal;
        },
        doneBotton(){
           // this.showModal=!this.showModal;
        }
    }
});
*//*
window.onload = function() {
    let bottom=document.getElementsByClassName('card_botton');
    bottom.addEventListener('click', function () {
        document.getElementById('modalForm').style.display='table'
    })

};*/
    let showForm = document.getElementsByClassName('card_botton');
    let done;
    let cancel=document.getElementById('cancel');
    cancel.addEventListener('click', function () {
        document.getElementById('modalForm').style.display='none'
    });
    for(let i=0; i<showForm.length; i++){
        showForm[i].addEventListener('click', function () {
            document.getElementById('modalForm').style.display='table'
        })
    }
    document.getElementById('done').addEventListener('click',getAjax);
function getAjax() {
    let name = document.getElementById('name').value;
    
    console.log(name);

}
   // document.getElementById('modalForm').style.display='table'


