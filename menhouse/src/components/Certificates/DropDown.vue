<script setup>
import { defineProps, ref, computed, defineEmits, onMounted, onBeforeUnmount } from 'vue';

const dropDown = ref(null)
const isActive = ref(false)

const props = defineProps({
    options: {
        type: Array,
        required: true
    },
    modelValue: {
        default: null
    }
})

const emit = defineEmits(['update:modelValue'])

const selectedOption = ref(null)
const isDropDownVisible = ref(false)

const mappedSelectedOption = computed(() => {
    return (selectedOption.value?.name || selectedOption.value) || 'Выберите номинал'
})

const toggleOptionSelect = (option) => {
    selectedOption.value = option;
    emit('update:modelValue', option)
    isDropDownVisible.value = false
    emit('isActive', false)
    setTimeout(() => {
        isActive.value = false
    }, 300);
}

const closeDropDown = (element) => {
    if(!dropDown.value.contains(element.target)) {
        isDropDownVisible.value = false
        emit('isActive', false)
        setTimeout(() => {
            isActive.value = false
        }, 300);
    }
}

const changeClass = () => {
    isDropDownVisible.value = !isDropDownVisible.value

    if (isActive.value) {
        emit('isActive', !isActive.value)
        setTimeout(() => {
            isActive.value = !isActive.value
        }, 300);
    }
    else { 
        isActive.value = !isActive.value
        emit('isActive', isActive.value)
    }
   
}

onMounted(() => {
    window.addEventListener('click', closeDropDown)
})

onBeforeUnmount(() => {    
    window.removeEventListener('click', closeDropDown)
})
</script>

<template>
    <div class="dropdown-wrapper" ref="dropDown">
        <div class="dropdown-selected-option" 
            :class="{ active: isActive }"
            @click="changeClass"
        >
            {{ mappedSelectedOption }}
        </div>
        <transition name="slide-fade">
            <div 
                class="options-wrapper"
                v-if="isDropDownVisible"
            >
                <div 
                    class="option"
                    v-for="(option, index) in props.options"
                    :key="index"
                    @click="toggleOptionSelect(option)"
                >
                    {{ option.name || option }}
                </div>
            </div>
        </transition>
    </div>
    
</template>

<style scoped>
.dropdown-wrapper {
    padding-bottom: 16px;
    cursor: pointer;
    width: 100%;
    text-align: left;
    margin: 0;
    color: black;
}

.dropdown-selected-option {
    padding: 10px 16px 10px 16px;
    border-radius: 15px;
    box-sizing: border-box;
    background-color: white;
}

.dropdown-selected-option.active {
    border-radius: 15px 15px 0 0;
    border-bottom: 2px solid #c5c5c5;
}

.option:hover {
    background: #c5c5c5;
}

.option {
    padding: 16px;
    box-sizing: border-box;
    background-color: white;
}

.option:last-of-type {
    border-bottom-left-radius: 16px;
    border-bottom-right-radius: 16px;
}

.slide-fade-enter-active {
  transition: all 0.3s ease-out;
}

.slide-fade-leave-active {
  transition: all 0.3s cubic-bezier(1, 0.5, 0.8, 1);
}

.slide-fade-enter-from,
.slide-fade-leave-to {
    transform: translateY(0px);
    opacity: 0;
}
</style>
