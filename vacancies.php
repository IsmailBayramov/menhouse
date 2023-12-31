<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/vacansiec.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;500;800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playpen+Sans:wght@200;300;400&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Marck+Script&display=swap" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.slick/1.5.0/slick.min.js"></script>
    <title>Вакансии</title>
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
        <form class="popup" action="./newEmployee.php" method="POST">
            <input type="hidden" name="page" value="vacancies">
            <svg class="close-popup" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path fill="#FA4A0C"
                    d="M23.954 21.03l-9.184-9.095 9.092-9.174-2.832-2.807-9.09 9.179-9.176-9.088-2.81 2.81 9.186 9.105-9.095 9.184 2.81 2.81 9.112-9.192 9.18 9.1z" />
            </svg>
            <label>
                <input type="text" placeholder=" Ваше имя" name="name">
                <div class="label__text">
                    Ваше имя
                </div>
            </label>
            <label>
                <input type="tel" placeholder=" +7(000)000-00-00" name="tel">
                <div class="label__text">
                    Ваш телефон
                </div>
            </label>
            <label>
                <select name="vacancy">
                    <option default value="Выбирите вакансию">Выбирите вакансию</option>
                    <option value="Администратор">Администратор</option>
                    <option value="SPA_Модель">SPA-Модель</option>
                    <option value="SMM_Менеджер">SMM-Менеджер</option>
                </select>
                <div class="label__text">
                    Вакансия
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
                        <input type="hidden" name="page" value="vacancies">
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
    <section class="menu_sv_wrap">
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
                    <li><a href="./" target="_blank"><img src="img/LOGO.png" alt=""></a></li>
                    <li><a href="./modeli" target="_blank">Модели</a></li>
                    <li><a href="./programms" target="_blank">Программы</a></li>
                    <li><a href="./appartamenti" target="_blank">Апартаменты</a></li>
                    <li><a href="./kontakti" target="_blank">Контакты</a></li>
                    <li><a href="./sertificaty" target="_blank">Сертификаты</a></li>
                    <li><a href="./vacancies.php" target="_blank">Вакансии</a></li>
                </ul>
            </div>
        </div>
    </section>
    <section class="menhouse_faq_wrap">
        <div class="menhouse_faq">
            <a href="https://menhouse-club.ru/faq" class="sidebarIconToggle_faq"><img src="/img/pngegg.png" alt></a>
        </div>
    </section>
    <section class="background_btn_wrap">
        <div class="background_btn">
            <p class="backgroung_btn_p"></p>
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
                    <li><a href="./"><img src="img/LOGO.png" alt=""></a></li>
                    <li><a href="./modeli">Модели</a></li>
                    <li><a href="./programms">Программы</a></li>
                    <li><a href="./appartamenti">Апартаменты</a></li>
                    <li><a href="./kontakti">Контакты</a></li>
                    <li><a href="./sertificaty">Сертификаты</a></li>
                    <li><a href="./vacancies.php">Вакансии</a></li>
                </ul>
            </nav>
        </header>
    </section>
    <section class="low_header">
        <div class="low_header_wrap wrap">
            <img class="low_header_wrap_logo" src="img/LOGO.png" alt>
            <img class="low_header_wrap_text" src="img/TxtMen.png" alt>
        </div>
    </section>
    <section class="first_block_wrap">
        <div class="first_block wrap">
            <h2>начни зарабатывать <br /> от <span>100 000</span> рублей в месяц</h2>
            <img src="img/IN_BLOCK1.png" alt>
        </div>
    </section>
    <section class="second_block">
        <div class="second_block_wrap wrap">
            <div class="second_block_text">
                <h2 class="wrap_block_h2">Открытые</h2>
                <h3 class="wrap_block_h3">вакансии</h3>
                <h4>
                    Мы предлагаем работу в профессиональном салоне (не
                    апартаменты),<br />
                    бесплатное обучение, дружный коллектив и рабочую
                    атмосферу,<br />
                    возможность начать зарабатывать уже с первого дня.<br />
                    Приезжай к нам с любой точки страны - проезд и
                    проживание за счет компании.
                </h4>
            </div>
            <div class="second_block_vacancies">
                <div class="second_block_card">
                    <div class="block_1">
                        <img src="/img/vacancies/img1.png" alt>
                        <h5>Администратор</h5>
                        <p>
                            Осуществляет работу
                            по эффективному,
                            культурному обслуживанию
                            посетителей, созданию для
                            них комфортных условий.
                        </p>
                    </div>
                    <div class="block_2">
                        <img src="/img/vacancies/img2.png" alt>
                        <h5>SPA-Модель</h5>
                        <p>
                            Специалист по мышцам
                            и мягким тканям, который
                            помогает клиентам снять
                            стресс и боль.
                        </p>
                    </div>
                    <div class="block_5">
                        <img src="/img/vacancies/img5.png" alt>
                        <h5>SMM-Менеджер</h5>
                        <p>
                            Создает и оформляет
                            корпоративные страницы
                            в различных социальных
                            сетях, разрабатывает
                            стратегию их развития
                        </p>
                    </div>
                </div>
                <div class="prise">
                    <h6>от 100 000 за 14 дней</h6>
                    <h6>от 150 000 за 14 дней</h6>
                    <h6>от 15 000 в месяц</h6>
                </div>
            </div>
            <div class="second_block_button">
                <a href="#" class="open-popup">Откликнуться</a>
            </div>
        </div>
    </section>
    <section class="third_block">
        <div class="third_block_wrap wrap">
            <h2 class="wrap_block_h2">Кого ищем</h2>
            <h3 class="wrap_block_h3">требования</h3>
            <div class="third_block_separation">
                <div class="third_block_img">
                    <img src="img/PIC_HEART.png" alt>
                </div>
                <div class="third_block_text">
                    <div class="div third_block_text_h4">
                        <h4>Ты нам точно подходишь, если:</h4>
                    </div>
                    <nav>
                        <ul class="third_menu_content">
                            <li>Общительная.</li>
                            <li>Возрастом от 18.</li>
                            <li>Любишь всегда хорошо выглядеть.</li>
                            <li>Хочешь быть финансово независимой.</li>
                            <li>Ценишь своё время.</li>
                            <li>Привлекательная.</li>
                        </ul>
                    </nav>
                </div>
            </div>
            <a href="#" class="open-popup">Откликнуться</a>
        </div>
    </section>
    <section class="fourth_block">
        <div class="fourth_block_wrap wrap">
            <h2 class="wrap_block_h2">Почему мы</h2>
            <h3 class="wrap_block_h3">преимущества</h3>
            <div class="fourth_block_separation">
                <div class="fourth_block_img">
                    <img src="img/PIC_RING.png" alt>
                </div>
                <div class="fourth_block_text">
                    <div class="div fourth_block_text_h4">
                        <h4>Строго без интима</h4>
                    </div>
                    <nav>
                        <ul class="fourth_menu_content">
                            <li>Высокая оплата (ежедневный расчет).</li>
                            <li>Бесплатное обучение (различным техникам
                                экзотического, расслабляющего, классического
                                массажа).</li>
                            <li>Гибкий график.</li>
                            <li>Дружелюбный коллектив, понимающее
                                руководство.</li>
                            <li>Безопасность и комфорт.</li>
                            <li>Удобное расположение студии (легко
                                добраться).</li>
                            <li>Помощь с проживанием иногородним.</li>
                        </ul>
                    </nav>
                </div>
            </div>
            <a href="#" class="open-popup">Откликнуться</a>
        </div>
    </section>
    <section class="footer_wrap">
        <footer class="footer wrap">
            <div class="footer_left">
                <div class="footer_left_img">
                    <img src="img/LOGO.png" alt>
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
                        <li><a href><img src="img/footer/wathapp.png" alt></a></li>
                        <li><a href><img src="img/footer/inst.png" alt></a></li>
                        <li><a href><img src="img/footer/vk.png" alt></a></li>
                        <li><a href><img src="img/footer/tg.png" alt></a></li>
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