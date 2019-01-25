<template>
    <div class="modal-container">
        <div class="modal-wrapper">
            <div class="modal-item">
                     <form method="POST" action="/task/create" accept-charset="UTF-8" class="bottoms_block">
                        <label for="name">Ваше имя (Обязательно)</label>
                        <input name="name" type="text" id="name">
                        <label for="phone">Телефон (Обязательно)</label>
                        <input name="phone" type="text" id="phone">
                        <input class="botton" id="mailSend" type="submit" value="Отправить заявку">
                    </form>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>