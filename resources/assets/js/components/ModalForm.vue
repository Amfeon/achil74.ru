<template>
    <div class="modal-mask" >
        <div class="modal-wrapper">
            <div class="modal-container">
                <div class="modal-header">
                    <form @submit="formSubmit" >
                        <label for="name">Ваше имя (Обязательно)</label>
                        <input v-model="name" type="text" id="name" required>
                        <label for="phone">Телефон (Обязательно)</label>
                        <input v-model="phone" type="tel" id="phone" placeholder="+7" required>
                        <div class="botton-group">
                            <input class="botton" id="mailSend" type="submit" value="Отправить заявку" v-on:click="$emit('done')">
                        </div>
                    </form>
                    <div class="botton-group">
                        <div class="botton cancel"  v-on:click="$emit('close')"> Отмена</div>
                    </div>
                    {{ output }}
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        mounted() {
            console.log('Смонтирован')
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
                    .then(function () {
                        swal.fire({
                           type: 'success',
                            text: 'Ваша заявка отправлена'
                        })
                    })
         /*       .then(function (response) {
                   currentObj.output = response.data;
                  })*/
                   .catch(function (error) {
                    currentObj.output = error;
                    });
            }
        }
    }
</script>