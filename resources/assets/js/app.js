
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
window.swal=require('sweetalert2');
    const token= document.querySelector('meta[name="csrf-token"]').content;
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
function getAjax(e) {
    e.preventDefault();
    let name = document.getElementById('name').value;
    let phone = document.getElementById('phone').value;
    const  phone_regexp=/^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$/;
    const  name_regexp=/^[а-яА-Я]{3,15}/;
    let result_name=name.search(name_regexp);
    let result=phone.search(phone_regexp);
    if(!result_name && name!=''){
        document.getElementById('name').style.border='1px solid green'
        console.log('valid_phone');
        if(!result && phone!=''){
            document.getElementById('phone').style.border='1px solid green'
            getFetch(name,phone);
        }else{
            console.log('NO valid_phone');
            document.getElementById('phone').style.border='1px solid red'
        }
    }
    else{
        console.log('NO valid_name');
        document.getElementById('name').style.border='1px solid red'
    }
}
function getFetch(name,phone) {
    console.log(name + phone);
    fetch('\contact',{
     method: "POST",
        headers: {
            'X-CSRF-Token': token,
            "Content-type": "application/x-www-form-urlencoded; charset=UTF-8"
        },
        body:  JSON.stringify({
           name: name,
           phone:phone
        })
    })
        .then(function (response) {
           // alert(response.status); // 200
            return response.json();
        })
        .then(function (data) {
            console.log(name);
            document.getElementById('modalForm').style.display='none'
            swal.fire({
                type: 'success',
                text: 'Ваша заявка отправлена'
            })
        })
        .catch(alert);
}


