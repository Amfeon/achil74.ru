<template>
    <div class="modal-mask">
        <div class="modal-wrapper">
            <div class="modal-container">
                <div class="modal-header">
                    <form @submit="formSubmit" >
                        <label for="name">Ваше имя (Обязательно)</label>
                        <input v-model="name" type="text" id="name">
                        <label for="phone">Телефон (Обязательно)</label>
                        <input v-model="phone" type="text" id="phone">
                        <input class="botton" id="mailSend" type="submit" value="Отправить заявку">
                    </form>
                </div>
                <div class="modal-footer">
                    <slot name="footer">
                        {{output}}
                        <button class="modal-default-button" v-on:click="$emit('close')">
                            OK
                        </button>
                    </slot>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        mounted() {
            console.log(output)
        },
        data() {
            return {
                name: '',
                phone: '',
                output: ''
            };
        },
        methods:{
            formSubmit(e){
                e.preventDefault();// останавливает событие
                let currentObj = this;
                axios.post('/contact', {
                    name: this.name,
                    phone: this.phone
                })
                .then(function (response) {
                   currentObj.output = response.data;
                  })
                   .catch(function (error) {
                    currentObj.output = error;
                    });
            }
        }

    }
</script>