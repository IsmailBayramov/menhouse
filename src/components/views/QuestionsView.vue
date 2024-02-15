<script setup>
import BorderButtons from '../General/BorderButtons.vue'
import { ref } from 'vue';

</script>

<template>

    <div class="navigaonusing">
        <div class="gaonutosal">
            <div class="pesontedan">
                <input id="pesontedan-one" type="checkbox" name="pesontedans">
                <label for="pesontedan-one">С какого момента начинает отсчитываться время программы?</label>
                <div class="pesontedan-content">
                    <p>Как только определитесь с выбором, мы пригласим вас в апартаменты и запустим отсчет времени.</p>
                </div>
            </div>
            <div class="pesontedan">
                <input id="pesontedan-two" type="checkbox" name="pesontedans">
                <label for="pesontedan-two">Ваши девушки выезжают на дом?</label>
                <div class="pesontedan-content">
                    <p>Получить максимум удовольствия от наших прекрасных и очень раскрепощенных моделей можно только на территории нашего заведения. Не сомневайтесь – мы подготовили все необходимое, чтобы вам было комфортно.</p>
                </div>
            </div>
            <div class="pesontedan">
                <input id="pesontedan-three" type="checkbox" name="pesontedans">
                <label for="pesontedan-three">Есть ли гарантии конфиденциальности?</label>
                <div class="pesontedan-content">
                    <p>Вы особенно тщательно следим за соблюдением конфиденциальности в нашем заведении. Поэтому, даже проходя по коридору, вы гарантированно не встретите постороннего человека или другого посетителя. Мы не передаем информацию о наших гостях третьим лицам.</p>
                </div>
            </div>
            <div class="pesontedan">
                <input id="pesontedan-four" type="checkbox" name="pesontedans">
                <label for="pesontedan-four">Что нельзя делать наедине с девушкой?</label>
                <div class="pesontedan-content">
                    <p>Абсолютный запрет – это грубость и неуважение. Принуждение к интиму. В некоторых программах ограничены прикосновения: В таких программах трогать модель запрещено!</p>
                </div>
            </div>
            <div class="pesontedan">
                <input id="pesontedan-five" type="checkbox" name="pesontedans">
                <label for="pesontedan-five">Правила посещение</label>
                <div class="pesontedan-content">
                    <p>
                        Двери <span>Menhouse</span> всегда открыты для вас. Наши девочки рады вас видеть, удивлять и впечатлять, ведь желание клиента для нас закон! Мы обязательно осуществим ваши мечты, доставим удовольствие, расслабим и настроим на позитив, если в стенах нашего заведения вы соблюдете следующие правила:
                        <br><br>
                        1. Салон <span>Menhouse</span> не оказывает услуг интимного характера! <br>
                        2. Мастера салона вправе прекратить процедуру или отменить оказание услуги по следующим причинам: <br>
                        - наличие у клиента явных признаков кожных заболеваний; <br>
                        - проникающие ласки зоны бикини; <br>
                        - предложение интима. <br>
                        3. Обратите внимание на то, что spa-программы и массаж не являются медицинскими процедурами и противопоказаны при: <br>
                        - аллергических реакциях на ароматические масла и косметические средства, применяемые во время spa и расслабляющих процедур; <br>
                        - заболеваниях сердца и сосудов; <br>
                        - острых стадиях воспалительных заболеваний; <br>
                        - непереносимости запахов; <br>
                        - нестабильных психических состояниях; <br>
                        - заболеваниях и повреждениях кожи; <br>
                        Если у вас присутствует какое-либо одно или несколько противопоказаний из списка, обязательно проконсультируйтесь с врачом перед посещением мужского спа-салона. <br>
                        4. Каждый посетитель может рассчитывать на полную анонимность и конфиденциальность! Персональные данные и информация о роде ваших занятий на территории заведения для нас – закрытая тема: не обсуждается и не разглашается ни под каким предлогом. <br>
                        5. Фото и видеосъемка на территории клуба запрещена. <br>
                        6. Салон вправе отказать в предоставлении услуг лицам в состоянии алкогольного или наркотического опьянения. <br>
                        7. Убедительно просим вас вести себя вежливо и обращаться с корректными просьбами к персоналу и администратору. <br>
                        Администраторы клуба всегда готовы выслушать ваши предложения и ответить на возникшие вопросы. <br>
                        Обращаем внимание клиентов на то, что за ценные вещи, оставленные или утерянные в салоне, администрация клуба ответственности не несет. <br>
                        Еще раз напоминаем: Мы ориентированы на исполнение всех ваших желаний, если они не противоречат философии нашего заведения и перечисленным выше правилам посещения салона. <br>
                        Ждем вас с нетерпением и надеждой на понимание, Ваш <span>Menhouse</span>.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <BorderButtons></BorderButtons>

</template>

<style scoped>
.navigaonusing {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.gaonutosal {
    max-width: 80%;
    padding: 0 3em;
    margin: 10em 0 5em 0;
}

.pesontedan {
  position: relative;
  margin-bottom: 1px;
  width: 100%;
  color: #f3f1f1;
  overflow: hidden;
  border-bottom: 2px solid rgba(252, 74, 43, 0.616);
  border-bottom-style: dashed;
  border-bottom-width: 1px;
}

.pesontedan input {
  position: absolute;
  opacity: 0;
  z-index: -1;
}

.pesontedan label {
    position: relative;
    display: flex;
    justify-content: space-between;
    padding: 0 0 0 1em;
    /* line-height: 3; */
    cursor: pointer;
    font-size: max(calc(.5em + 1vw), 15px);
    font-weight: 600;
    margin: 1em 0;
    align-items: center;
}

.pesontedan-content {
  max-height: 0;
  overflow: hidden;
  transition: max-height .40s;
  font-size: 14px;
  color: #fffdfd;
}

.pesontedan-content {
  /* background: #0f6f80; */
}
.pesontedan-content p {
  margin: 1em;
  font-size: max(calc(.5em + .8vw), 13px);
}

.pesontedan-content p span {
    color: #ff320d;
}


/* :checked */
.pesontedan input:checked ~ .pesontedan-content {
  max-height: 100vh;
}

/* Icon */
.pesontedan label::after {
    display: block;
    min-width: 2em;
    height: 2em;
    line-height: 2;
    margin: auto 0;

    text-align: center;
    -webkit-transition: all .40s;
    -o-transition: all .40s;
    transition: all .40s;
}
.pesontedan input[type=checkbox] + label::after {
  content: "+";
  background-color: #ff320d;
  border-radius: 50%;
}
.pesontedan input[type=radio] + label::after {
  content: "\25BC";
}
.pesontedan input[type=checkbox]:checked + label::after {
  transform: rotate(45deg);
}
.pesontedan input[type=radio]:checked + label::after {
  transform: rotateX(180deg);
}

@media (max-width: 550px) {
    .gaonutosal {
        padding: 0 1em;
        max-width: 95%;
    }
}
</style>