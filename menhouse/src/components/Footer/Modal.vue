<script setup>
import { ref, defineExpose } from 'vue';

const isModalOpen = ref(false);

const openModal = () => {
  isModalOpen.value = true;
};

const closeModal = () => {
  isModalOpen.value = false;
};

defineExpose({
    openModal,
})
</script>

<template>

    <div v-if="isModalOpen" class="modalBackground">
        <div class="modal">
            <p class="info">+7 912 512 00 16</p>
            <a href="tel:+7 912 512 0016" class="sign-up">ПОЗВОНИТЬ</a>
            <div @click="closeModal" class="close"></div>
        </div>
    </div>
    
</template>

<style scoped>

</style>