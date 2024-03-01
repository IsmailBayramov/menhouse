<script>
export function openFullscreen(image) {
    document.body.style.overflow = 'hidden';

    const modalContainer = document.createElement('div');
    modalContainer.style.position = 'fixed';
    modalContainer.style.left = '0';
    modalContainer.style.top = '0';
    modalContainer.style.width = '100%';
    modalContainer.style.height = '100%';
    modalContainer.style.backgroundColor = 'rgba(0, 0, 0, 0.8)';
    modalContainer.style.display = 'flex';
    modalContainer.style.justifyContent = 'center';
    modalContainer.style.alignItems = 'center';
    modalContainer.style.zIndex = '1005';

    // Создаем элемент <img> для отображения изображения
    const imgElement = document.createElement('img');
    imgElement.src = image;
    imgElement.style.maxWidth = '80%';
    imgElement.style.maxHeight = '80%';
    imgElement.style.margin = 'auto';
    imgElement.style.display = 'block';

    // Добавляем элемент изображения в контейнер модального окна
    modalContainer.appendChild(imgElement);

    // Добавляем модальное окно в DOM (например, в body)
    document.body.appendChild(modalContainer);

    // Добавляем обработчик клика по модальному окну для его закрытия
    modalContainer.addEventListener('click', () => {
        modalContainer.remove();
        document.body.style.overflow = '';
    });
}

</script>

<style>
/* Стили для изображений, если нужно */
.fullscreenable {
    cursor: pointer;
}

/* Стили для изображения в полном экране */
.fullscreen-open {
    width: 70%;
    height: 70%;
    object-fit: cover;
}
</style>