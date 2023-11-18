<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/menhouse.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playpen+Sans:wght@200;300;400&display=swap" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.slick/1.5.0/slick.min.js"></script>
    <script src="js/script.js"></script>

    <link rel="stylesheet" href="//cdn.jsdelivr.net/jquery.slick/1.5.0/slick.css">
    <title>MenHouse</title>
</head>

<body>
    <?php
 if (isset($_GET['d'])) {
        ?>
    <div id="modal" class="modal">


        <div class="modal-content">
            <span class="close">&times;</span>
            <p> <?php error_reporting(E_ERROR | E_PARSE);
                        try {
                            
                            if ( $_GET["d"] == 0 ) {

                                echo "Ваша заявка на такси отправлена.";
                            }
                            else if ( $_GET["d"] == 1 ) {
                                echo "Ваша заявка на работу отправлена.";
                            }
                            else if ( $_GET["d"] == 2 ) {
                                echo "Спасибо за отзыв.";
                            }
                        } catch (Exception $e) {
                            
                        }

                        ?></p>
        </div>

    </div>
    <?php 
}


?>
    <div class="popup__bg">
        <form action="newReview.php" method="POST" class="popup">
            <svg class="close-popup" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path fill="#FA4A0C"
                    d="M23.954 21.03l-9.184-9.095 9.092-9.174-2.832-2.807-9.09 9.179-9.176-9.088-2.81 2.81 9.186 9.105-9.095 9.184 2.81 2.81 9.112-9.192 9.18 9.1z" />
            </svg>
            <input type="hidden" name="page" value="index">
            <label>

                <input type="text" placeholder=" Ваше имя" name="name">
                <div class="label__text">
                    Ваше имя
                </div>
            </label>
            <label>
                <textarea name="message"></textarea>
                <div class="label__text">
                    Ваше сообщение
                </div>
            </label>
            <button type="submit">Отправить</button>
        </form>
    </div>
    <div class="popup__bg2">
        <form class="popup2">
            <svg class="close-popup2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path fill="#FA4A0C"
                    d="M23.954 21.03l-9.184-9.095 9.092-9.174-2.832-2.807-9.09 9.179-9.176-9.088-2.81 2.81 9.186 9.105-9.095 9.184 2.81 2.81 9.112-9.192 9.18 9.1z" />
            </svg>
            <label>
                <p>
                    Двери <span
                        style="color: rgb(227, 54, 24); border: none; --darkreader-inline-color: #e94d32; --darkreader-inline-border-top: initial; --darkreader-inline-border-right: initial; --darkreader-inline-border-bottom: initial; --darkreader-inline-border-left: initial;"
                        data-darkreader-inline-color="" data-darkreader-inline-border-top=""
                        data-darkreader-inline-border-right="" data-darkreader-inline-border-bottom=""
                        data-darkreader-inline-border-left="">Menhouse</span> всегда открыты для вас. Наши девочки рады
                    вас видеть, удивлять и впечатлять, ведь желание клиента для нас закон! Мы обязательно осуществим
                    ваши мечты, доставим удовольствие, расслабим и настроим на позитив, если в стенах нашего заведения
                    вы соблюдете следующие правила:
                </p>
                <p>
                    <span>1</span>. Салон<span
                        style="color: rgb(227, 54, 24); border: none; --darkreader-inline-color: #e94d32; --darkreader-inline-border-top: initial; --darkreader-inline-border-right: initial; --darkreader-inline-border-bottom: initial; --darkreader-inline-border-left: initial;"
                        data-darkreader-inline-color="" data-darkreader-inline-border-top=""
                        data-darkreader-inline-border-right="" data-darkreader-inline-border-bottom=""
                        data-darkreader-inline-border-left=""> Menhouse </span> не оказывает услуг интимного
                    характера!<br>

                    <span>2</span>. Мастера салона вправе прекратить процедуру или отменить оказание услуги по следующим
                    причинам:<br>
                    &nbsp;&nbsp;- наличие у клиента явных признаков кожных заболеваний;<br>
                    &nbsp;&nbsp;- проникающие ласки зоны бикини;<br>
                    &nbsp;&nbsp;- предложение интима.<br>

                    <span>3</span>. Обратите внимание на то, что spa-программы и массаж не являются медицинскими
                    процедурами и противопоказаны при:<br>
                    &nbsp;&nbsp;- аллергических реакциях на ароматические масла и косметические средства, применяемые во
                    время spa и расслабляющих процедур;<br>
                    &nbsp;&nbsp;- заболеваниях сердца и сосудов;<br>
                    &nbsp;&nbsp;- острых стадиях воспалительных заболеваний;<br>
                    &nbsp;&nbsp;- непереносимости запахов;<br>
                    &nbsp;&nbsp;- нестабильных психических состояниях;<br>
                    &nbsp;&nbsp;- заболеваниях и повреждениях кожи;<br>

                    Если у вас присутствует какое-либо одно или несколько противопоказаний из списка, обязательно
                    проконсультируйтесь с врачом перед посещением мужского спа-салона.<br>

                    <span>4</span>. Каждый посетитель может рассчитывать на полную анонимность и конфиденциальность!
                    Персональные данные и информация о роде ваших занятий на территории заведения для нас – закрытая
                    тема: не обсуждается и не разглашается ни под каким предлогом.<br>
                    <span>5</span>. Фото и видеосъемка на территории клуба запрещена.<br>
                    <span>6</span>. Салон вправе отказать в предоставлении услуг лицам в состоянии алкогольного или
                    наркотического опьянения.<br>
                    <span>7</span>. Убедительно просим вас вести себя вежливо и обращаться с корректными просьбами к
                    персоналу и администратору.<br>
                    Администраторы клуба всегда готовы выслушать ваши предложения и ответить на возникшие вопросы.<br>
                    Обращаем внимание клиентов на то, что за ценные вещи, оставленные или утерянные в салоне,
                    администрация клуба ответственности не несет.<br>
                    Еще раз напоминаем: Мы ориентированы на исполнение всех ваших желаний, если они не противоречат
                    философии нашего заведения и перечисленным выше правилам посещения салона.<br>
                    Ждем вас с нетерпением и надеждой на понимание, Ваш <span
                        style="color: rgb(227, 54, 24); border: none; --darkreader-inline-color: #e94d32; --darkreader-inline-border-top: initial; --darkreader-inline-border-right: initial; --darkreader-inline-border-bottom: initial; --darkreader-inline-border-left: initial;"
                        data-darkreader-inline-color="" data-darkreader-inline-border-top=""
                        data-darkreader-inline-border-right="" data-darkreader-inline-border-bottom=""
                        data-darkreader-inline-border-left="">Menhouse</span>.
                </p>
            </label>
        </form>
    </div>

    <section class="menu_taxi_wrap">
        <div class="menu_taxi">
            <input type="checkbox" class="openSidebarMenu3" id="openSidebarMenu3">
            <label for="openSidebarMenu3" class="sidebarIconToggle3">
                <img src="img/taxi.png" alt>
            </label>
            <div id="sidebarMenu3">
                <ul class="sidebarMenuInner0">
                    <form action="./newCustomer.php" method="POST">
                        <input type="hidden" name="page" value="index">
                        <ul>
                            <li>Бесплатно привезём Вас в наш салон</li>
                            <li>
                                <input type="tel" id="phone" name="phone" placeholder="+7(000)000-00-00" required>
                            </li>
                            <li>
                                <input type="text" id="address" name="address" placeholder="Адрес, откуда Вас забрать"
                                    required>
                            </li>
                            <li>
                                <button type="submit" class="menu_taxi_button">Вызвать бесплатное такси</button>
                            </li>
                        </ul>
                    </form>
                </ul>
            </div>
        </div>
    </section>
    <section class="menu_sv_wrap menu_border">
        <div class="menu_sv">
            <input type="checkbox" class="openSidebarMenu2" id="openSidebarMenu2">
            <label for="openSidebarMenu2" class="sidebarIconToggle2">
                <img src="/img/msg_chat.png" alt>
            </label>
            <div id="sidebarMenu2">
                <ul class="sidebarMenuInner1">
                    <li>
                        <a title="Позвонить" href="tel:+7 912 512 0016" target="_blank2"><img
                                src="https://volgo-prime.ru/img/icons/phone-icon.svg" alt=""></a>
                    </li>
                    <li>
                        <a title="Whatsapp" href="whatsapp://send?phone=+79125120016" target="_blank2"><img
                                src="https://volgo-prime.ru/img/icons/whatsapp-icon.svg" alt=""></a>
                    </li>
                    <li>
                        <a title="Telegram" href="https://t.me/MENHOUSE0016" target="_blank2"><img
                                src="https://volgo-prime.ru/img/icons/telegram-icon.svg" alt=""></a>
                    </li>
                    <li>
                        <a title="Вконтакте" href="viber://chat?number=+79125120016" target="_blank2"><img
                                src="https://volgo-prime.ru/img/icons/viber-icon.svg" alt=""></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="menu_msg_eyes_wrap">
        <div class="menu_msg_eyes">
            <input type="checkbox" class="openSidebarMenu1" id="openSidebarMenu1">
            <label for="openSidebarMenu1" class="sidebarIconToggle1">
                <img src="/img/msg_eyes.png" alt>
            </label>
            <div id="sidebarMenu1">
                <ul class="sidebarMenuInner1">
                    <li><a title="Telegram" href="https://t.me/Menhouse14" target="_blank1"><img
                                src="https://volgo-prime.ru/img/icons/telegram-icon.svg" alt=""></a></li>
                    <li><a title="Вконтакте" href="https://vk.com/menhouse_club" target="_blank1"><img
                                src="https://volgo-prime.ru/img/icons/vk-icon.svg" alt=""></a></li>
                </ul>
            </div>
        </div>
    </section>
    <section class="menhouse_faq_wrap">
        <div class="menhouse_faq menu_border">
            <a href="https://menhouse-club.ru/faq" class="sidebarIconToggle_faq"><img src="/img/pngegg.png" alt=""></a>
        </div>
    </section>
    <section class="background_btn_wrap">
        <div class="background_btn">
            <p class="backgroung_btn_p"></p>
        </div>
    </section>
    <section class="header_burger">
        <div class="burger">
            <input type="checkbox" class="openSidebarMenu" id="openSidebarMenu">
            <label for="openSidebarMenu" class="sidebarIconToggle">
                <div class="spinner diagonal part-1"></div>
                <div class="spinner horizontal"></div>
                <div class="spinner diagonal part-2"></div>
            </label>
            <div id="sidebarMenu">
                <ul class="sidebarMenuInner">
                    <li><a href="menhouse.html" target="_blank"><img src="img/LOGO.png" alt=""></a></li>
                    <li><a href="" target="_blank">Модели</a></li>
                    <li><a href="" target="_blank">Программы</a></li>
                    <li><a href="" target="_blank">Апартаменты</a></li>
                    <li><a href="" target="_blank">Контакты</a></li>
                    <li><a href="" target="_blank">Сертификаты</a></li>
                    <li><a href="vacancies.html" target="_blank">Вакансии</a></li>
                </ul>
            </div>
        </div>
    </section>
    <section class="header_up">
        <div class="header_up_wrap">
            <h1>для <span>настоящих</span> мужчин</h1>
        </div>
    </section>
    <section class="header_wrap">
        <header class="header">
            <nav>
                <ul class="menu">
                    <li><a href="menhouse.html"><img src="img/LOGO.png" alt=""></a></li>
                    <li><a href="">Модели</a></li>
                    <li><a href="">Программы</a></li>
                    <li><a href="">Апартаменты</a></li>
                    <li><a href="">Контакты</a></li>
                    <li><a href="">Сертификаты</a></li>
                    <li><a href="vacancies.html">Вакансии</a></li>
                </ul>
            </nav>
        </header>
    </section>
    <section class="low_header">
        <div class="low_header_wrap">
            <div class="logo">
                <img class="low_header_wrap_logo" src="/img/LOGO.png" alt="">
            </div>
            <div class="logo_0">
                <div class="second_block_button_1">
                    <a href="tel:+7 912 512 0016" class="button_will_respond">Записаться</a>
                </div>
            </div>
        </div>
    </section>
    <section class="second_block">
        <div class="second_block_wrap wrap">
            <div class="header_up_wrapp">
                <h1>Наши <span>Преимущества</span></h1>
            </div>
            <div class="second_block_vacancies">
                <div class="second_block_card">
                    <div class="second_block_card_1_1">
                        <div class="sec_block">
                            <img src="/img/v/ЧАСЫ.png" alt="">
                            <h2>24/7</h2>
                        </div>
                        <div class="sec_block">
                            <img src="/img/v/ЗАМОК.png" alt="">
                            <h2>Полная<br />секретность</h2>
                        </div>
                        <div class="sec_block">
                            <img src="/img/v/СЕРДЦЕ.png" alt="">
                            <h2>Теплый<br />приём</h2>
                        </div>
                    </div>
                    <div class="second_block_card_1_2">
                        <div class="sec_block">
                            <img src="/img/v/КАРТАб.png" alt="">
                            <h2>Оплата по безналу</h2>
                        </div>
                        <div class="sec_block">
                            <img src="/img/v/КУБИКИ.png" alt="">
                            <h2>Современный дизайн</h2>
                        </div>
                        <div class="sec_block">
                            <img src="/img/v/БУМАГИ.png" alt="">
                            <h2>Большой выбор программ</h2>
                        </div>
                    </div>
                </div>
                <div class="logo_1">
                    <a href="tel:+7 912 512 0016" class="button_will_respond">Записаться</a>
                </div>
            </div>
    </section>
    <section class="stock">
        <div class="stock_wrap">
            <div class="header_up_wrapp">
                <h1>Текущие <span>Акции</span></h1>
            </div>
            <div id="frame_1">
                <input type="radio" name="frame_1" id="frame1_1" checked />
                <input type="radio" name="frame_1" id="frame2_1" />
                <input type="radio" name="frame_1" id="frame3_1" />
                <input type="radio" name="frame_1" id="frame4_1" />
                <div id="slides_1">
                    <div id="overflow_1">
                        <div class="inner_1">
                            <div class="frame_1 frame_1_1">
                                <div class="frame-content_1">
                                    <img src="img/frame_1/Слайд.png" alt="">
                                </div>
                            </div>
                            <div class="frame_1 frame_2_1">
                                <div class="frame-content_1">
                                    <img src="img/frame_1/bannermen.png" alt="">
                                </div>
                            </div>
                            <div class="frame_1 frame_3_1">
                                <div class="frame-content_1">
                                    <img src="img/frame_1/Слайд.png" alt="">
                                </div>
                            </div>
                            <div class="frame_1 frame_4_1">
                                <div class="frame-content_1">
                                    <img src="img/frame_1/bannermen.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="controls_1">
                    <label for="frame1_1"></label>
                    <label for="frame2_1"></label>
                    <label for="frame3_1"></label>
                    <label for="frame4_1"></label>
                </div>
                <div id="bullets_1">
                    <label for="frame1_1"></label>
                    <label for="frame2_1"></label>
                    <label for="frame3_1"></label>
                    <label for="frame4_1"></label>
                </div>
            </div>
            <div class="logo_1">
                <a href="tel:+7 912 512 0016" class="button_will_respond">Записаться</a>
            </div>
        </div>
        </div>
    </section>
    <section class="model_stud">
        <div class="header_up_wrapp">
            <h1>Модели <span>Студии</span></h1>
        </div>
        <div class="arts_block wrap">
            <div class="arts1">
                <div class="arts_border">
                    <img src="/img/vika.png" width="165px">
                    <div class="arts_morder_menu">
                        <nav>
                            <ul class="menu_model_stats">
                                <li><span>Имя: </span>Вика</li>
                                <li><span>Вес: </span>50</li>
                                <li><span>Возраст: </span>20</li>
                                <li><span>Рост: </span>150</li>
                                <li><span>Грудь: </span>4</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="arts2">
                <div class="arts_border arts_border_centre">
                    <img src="/img/ilona.png" width="200px">
                    <div class="arts_morder_menu arts_morder_menu_centre">
                        <nav>
                            <ul class="menu_model_stats">
                                <li><span>Имя: </span>Илона</li>
                                <li><span>Вес: </span>45</li>
                                <li><span>Возраст: </span>22</li>
                                <li><span>Рост: </span>160</li>
                                <li><span>Грудь: </span>1.5</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="arts3">
                <div class="arts_border">
                    <img src="/img/aisha.png" width="165px">
                    <div class="arts_morder_menu">
                        <nav>
                            <ul class="menu_model_stats">
                                <li><span>Имя: </span>Аиша</li>
                                <li><span>Вес: </span>50</li>
                                <li><span>Возраст: </span>23</li>
                                <li><span>Рост: </span>162</li>
                                <li><span>Грудь: </span>1.5</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="logo_1">
            <a href="https://menhouse-club.ru/modeli" class="button_will_respond">Смотреть больше</a>
        </div>
    </section>
    <section class="programm">
        <div class="programm_wrap">
            <div class="header_up_wrapp">
                <h1>Популярные <span>Программы</span></h1>
            </div>
            <div id="frame_2">
                <input type="radio" name="frame_2" id="frame1_2" checked />
                <input type="radio" name="frame_2" id="frame2_2" />
                <input type="radio" name="frame_2" id="frame3_2" />
                <input type="radio" name="frame_2" id="frame4_2" />
                <div id="slides_2">
                    <div id="overflow_2">
                        <div class="inner_2">
                            <div class="frame_2 frame_1_2">
                                <div class="frame-content_2">
                                    <div class="frame_programm_2">
                                        <div class="frame_programm_2_block1">
                                            <img src="img/frame_2/main.png" alt="">
                                            <div class="frame_programm_2_block1_1">
                                                <img data-title="Диалектический материализм" src="/img/frame_2/ICON.png"
                                                    alt="">
                                                <h2 class="frame_programm_2_block1_h2">от 14 990₽</h2>
                                            </div>
                                        </div>
                                        <div class="frame_programm_2_block2">
                                            <h2 class="frame_programm_2_block2_h2">Секретарша</h2>
                                            <h3 class="frame_programm_2_block2_h3">Офисная тема - богатая почва
                                                для сексуальных фантазий, особенно, если в твоем офисе ничего подобного
                                                не просиходит.</h3>
                                            <p class="frame_programm_2_block2_p">Подобный сценарий можно считать
                                                классикой жанра и мы можем
                                                предложить несколько вариантов развития событий</p>
                                            <div class="frame_programm_2_block2_img">
                                                <img src="/img/frame_2/1.png" alt="">
                                                <img src="/img/frame_2/2.png" alt="">
                                                <img src="/img/frame_2/3.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="frame_2 frame_2_2">
                                <div class="frame-content_2">
                                    <img src="" alt="">
                                </div>
                            </div>
                            <div class="frame_2 frame_3_2">
                                <div class="frame-content_2">
                                    <img src="" alt="">
                                </div>
                            </div>
                            <div class="frame_2 frame_4_2">
                                <div class="frame-content_2">
                                    <img src="" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="controls_2">
                    <label for="frame1_2"></label>
                    <label for="frame2_2"></label>
                    <label for="frame3_2"></label>
                    <label for="frame4_2"></label>
                </div>
                <div id="bullets_2">
                    <label for="frame1_2"></label>
                    <label for="frame2_2"></label>
                    <label for="frame3_2"></label>
                    <label for="frame4_2"></label>
                </div>
            </div>
        </div>
        <div class="logo_1">
            <a href="https://menhouse-club.ru/programms" class="button_will_respond">Смотреть больше</a>
        </div>
    </section>
    <section class="apartments">
        <div class="apartments_wrap">
            <div class="header_up_wrapp">
                <h1>Обзор <span>Апартаментов</span></h1>
            </div>
            <div id="frame_3">
                <input type="radio" name="frame_3" id="frame1_3" checked />
                <input type="radio" name="frame_3" id="frame2_3" />
                <input type="radio" name="frame_3" id="frame3_3" />
                <input type="radio" name="frame_3" id="frame4_3" />
                <div id="slides_3">
                    <div id="overflow_3">
                        <div class="inner_3">
                            <div class="frame_3 frame_1_3">
                                <div class="frame-content_3">
                                    <img src="/img/frame_3/1.webp" alt="">
                                </div>
                            </div>
                            <div class="frame_3 frame_2_3">
                                <div class="frame-content_3">
                                    <img src="/img/frame_3/2.webp" alt="">
                                </div>
                            </div>
                            <div class="frame_3 frame_3_3">
                                <div class="frame-content_3">
                                    <img src="/img/frame_3/3.webp" alt="">
                                </div>
                            </div>
                            <div class="frame_3 frame_4_3">
                                <div class="frame-content_3">
                                    <img src="/img/frame_3/4.webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="controls_3">
                    <label for="frame1_3"></label>
                    <label for="frame2_3"></label>
                    <label for="frame3_3"></label>
                    <label for="frame4_3"></label>
                </div>
                <div id="bullets_3">
                    <label for="frame1_3"></label>
                    <label for="frame2_3"></label>
                    <label for="frame3_3"></label>
                    <label for="frame4_3"></label>
                </div>
            </div>
        </div>
    </section>

    <section class="reviews">
        <div class="reviews_wrap">
            <div class="header_up_wrapp">
                <h1>Отзыв <span>Гостей</span></h1>
            </div>
            <div class="slider">
                <div class="slide">
                    <div class="frame_reviews_4">
                        <div class="frame_reviews_4_block1">
                            <img src="img/frame_4/reviews_icon.png" alt="">
                            <h3 class="frame_reviews_block1_text">„Огромная благодарность мастер Алине за релакс.“</h3>
                        </div>
                        <div class="frame_reviews_4_block2">
                            <h2 class="frame_reviews_block2_name">Антон</h2>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="frame_reviews_4">
                        <div class="frame_reviews_4_block1">
                            <img src="img/frame_4/reviews_icon.png" alt="">
                            <h3 class="frame_reviews_block1_text">„Огромная благодарность мастер Алине за релакс.“</h3>
                        </div>
                        <div class="frame_reviews_4_block2">
                            <h2 class="frame_reviews_block2_name">Антон</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="logo_1">
                <a href="" class="open-popup">Оставить отзыв</a>
            </div>
        </div>
    </section>
    <section class="map">
        <div class="map_wrap">
            <div class="header_up_wrapp">
                <h1>Наши <span>Координаты</span></h1>
            </div>
            <div style="position:relative;overflow:hidden;margin-bottom: 50px;">
                <a href="https://yandex.ru/maps/11184/nefteugansk/?utm_medium=mapframe&utm_source=maps"
                    style="color:#eee;font-size:12px;position:absolute;top:0px;">Нефтеюганск</a>
                <a href="https://yandex.ru/maps/11184/nefteugansk/house/14_y_mikrorayon_40/Y0sYcAViTkYBQFhrfXx2c3piYA==/?ll=72.622770%2C61.072573&utm_medium=mapframe&utm_source=maps&z=18"
                    style="color:#eee;font-size:12px;position:absolute;top:14px;">14-й микрорайон, 40 на карте
                    Нефтеюганска — Яндекс Карты</a>
                <iframe
                    src="https://yandex.ru/map-widget/v1/?ll=72.622770%2C61.072573&mode=whatshere&whatshere%5Bpoint%5D=72.622736%2C61.072614&whatshere%5Bzoom%5D=17&z=18"
                    width="100%" height="500" frameborder="1" allowfullscreen="true"
                    style="position:relative;"></iframe>
            </div>
        </div>
    </section>
    <section class="footer_wrap">
        <footer class="footer wrap">
            <div class="footer_left">
                <div class="footer_left_img">
                    <img src="img/LOGO.png" alt="">
                </div>
                <div class="footer_left_text">
                    <h2>Спа салон для независимых и солидных мужчин</h2>
                    <a href="tel:+7 912 512 0016" class="button_will_respond">Записаться</a>
                </div>
            </div>
            <div class="footer_centre">
                <h2>Правила посещения</h2>
                <a href="" class="button_will_respond_ozn">Ознакомится</a>
            </div>
            <div class="footer_right">
                <h2>Мы в социальных сетях</h2>
                <nav>
                    <ul class="menu">
                        <li><a href=""><img src="img/footer/wathapp.png" alt=""></a></li>
                        <li><a href=""><img src="img/footer/inst.png" alt=""></a></li>
                        <li><a href=""><img src="img/footer/vk.png" alt=""></a></li>
                        <li><a href=""><img src="img/footer/tg.png" alt=""></a></li>
                    </ul>
                </nav>
            </div>
        </footer>
    </section>
    <section class="footer_rights">
        <footer class="footer_rights_wrap wrap">
            <p>2023 © Все права защищены</p>
        </footer>
    </section>

    <script src="js/script2.js"></script>
</body>

</html>