<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Studio</title>
    <link rel="stylesheet" href="./assets/css/index.css">
    <script defer src="./assets/js/accordeon.js"></script>
    <script defer src="./assets/js/popup.js"></script>
    <!-- <script defer src="./assets/js/reviews.js"></script> -->
    <script defer src="./assets/js/burger.js"></script>
</head>
<body>
    <div class="wrapper">
        <div class="popup__reviews">
            <div class="popup__authorization-inside">
                <a class="popup__area"></a>
                <form action="./reviews.php" method="post" class="popup__reviews-form">
                        <a class="popup__authorization-close popup-hover"></a>
                        <!-- <input id="name" class="popup__authorization-email" minlength="3" max-length="20" type="text" required name="username" placeholder="Имя" autocomplete="username" autocapitalize="none" autocorrect="off" dir="auto" value=""> -->
                        <textarea id="text" class="popup__reviews-textarea popup__authorization-email" minlength="50" max-length="400" required name="reviews_text" placeholder="Как вам услуги и товары этой компании?
                        Расскажите в деталях о качестве, обслуживании и других аспектах клиентского опыта.
                        Рекомендуете ли вы эту компанию?
                        Что заслуживает отдельного внимания?" value=""></textarea>
                        <input id="image" type="text" name="user_photo" required class="popup__reviwes-file popup__authorization-email popup-hover" placeholder="Добавить фотографию">
                        <button id="button" class="popup__authorization-login popup-hover" type="sumbit">Опубликовать</button>
                </form>
            </div>
        </div>
        <div class="popup__order">
            <div class="popup__authorization-inside">
                <a class="popup__area"></a>
                <form action="" method="post" class="popup__reviews-form">
                        <a class="popup__authorization-close popup-hover"></a>
                        <input class="popup__authorization-email" minlength="3" max-length="20" type="text" required name="user_name" placeholder="Имя">
                        <input class="popup__authorization-email" minlength="9" max-length="60" type="email" required name="user_email" placeholder="Email">
                        <select class="popup__menu popup__authorization-email popup-hover" name="user_service" value="">
                            <option value="Контекстная реклама" class="popup__option">Контекстная реклама</option>
                            <option value="Создание сайтов" class="popup__option" selected>Создание сайтов</option>
                            <option value="Комплексный аудит" class="popup__option">Комплексный аудит</option>
                            <option value="Продвижение сайта" class="popup__option">Продвижение сайта</option>
                        </select>
                        <input id="image" type="tel" name="user_phone" required class="popup__reviwes-file popup__authorization-email popup-hover" pattern="[0-9]{11}" placeholder="89136798698">
                        <button id="button" class="popup__authorization-login popup-hover" type="sumbit">Отправить</button>
                </form>
            </div>
        </div>
        <div class="popup__consultation">
            <div class="popup__authorization-inside">
                <a class="popup__area"></a>
                <form action="consult.php" method="post" class="popup__reviews-form">
                        <a class="popup__authorization-close popup-hover"></a>
                        <input class="popup__authorization-email" minlength="3" max-length="20" type="text" required name="user_name" placeholder="Имя">
                        <input class="popup__authorization-email" minlength="9" max-length="60" type="email" required name="user_email" placeholder="Email">
                        <input id="image" type="tel" name="user_phone" required class="popup__reviwes-file popup__authorization-email popup-hover" pattern="[0-9]{11}" placeholder="89136798698">
                        <button id="button" class="popup__authorization-login popup-hover" type="sumbit">Отправить</button>
                </form>
            </div>
        </div>
        <?php
        require "./vendor/components/header.php";
        ?>
        <main class="main">
            <div class="main__inside">
                <div class="main__intro">
                    <div class="main__intro-inside container">
                        <div class="main__heading">
                            <h2 class="main__title first-title">мы создали 921 сайт для наших клиентов с 2006 года</h2>
                            <div class="main__heading-image main__heading-image_first">
                                <img src="./assets/img/react.jpg" alt="" class="main__heading-image-item">
                            </div>
                            <div class="main__heading-image main__heading-image_second">
                                <img src="/assets/img/css.jpg" alt="" class="main__heading-image-item">
                            </div>
                        </div>
                        <div class="main__intro-costs">
                            <div class="main__intro-table">
                                <div class="main__intro-row">
                                    <p class="main__intro-reference">Контекстная реклама</p>
                                    <p class="main__intro-cost">от 15 000 Р</p>
                                </div>
                                <div class="main__intro-row">
                                    <p class="main__intro-reference">Создание сайтов</p>
                                    <p class="main__intro-cost">от 60 000 Р</p>
                                </div>
                                <div class="main__intro-row">
                                    <p class="main__intro-reference">Комплексный аудит</p>
                                    <p class="main__intro-cost">от 30 000 Р</p>
                                </div>
                                <div class="main__intro-row">
                                    <p class="main__intro-reference">Продвижение сайта</p>
                                    <p class="main__intro-cost">от 35 000 Р</p>
                                </div>
                            </div>
                            <div class="main__intro-buttons">
                                <button class="main__intro-button button-order-black button-order"><span>заказать</span></button>
                                <button class="main__intro-button button-order-white button-consult"><span>консультация</span></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main__advantages">
                    <div class="main__advantages-heading heading">
                        <div class="main__advantage-heading-inside container">
                            <h3 class="main__advantages-subtitle subtitle">(преимущества)</h3>
                            <h2 class="main__advantages-title first-title">почему выбирают нас</h2>
                        </div>
                    </div>
                    <div class="main__advantages-inside">
                        <div class="main__advantages-row">
                            <div class="main__advantages-column-wrapper">
                                <div class="main__advantages-column main__advantages-column_border-none">
                                <div class="main__advantages-subcolumn">
                                    <div class="main__advantages-icon">
                                        <img src="./assets/img/icons/experience.svg" alt="" class="main__advantages-icon-item">
                                    </div>
                                    <h4 class="main__advantages-name">Большой опыт</h4>
                                    <p class="main__advantages-text small_text">Мы работаем по всей России, начиная с 2006 года, и разработали более 921 проекта.</p>
                                </div>
                            </div>
                        </div>
                            
                            <div class="main__advantages-column-wrapper">
                                <div class="main__advantages-column">
                                <div class="main__advantages-subcolumn">
                                    <div class="main__advantages-icon">
                                        <img src="./assets/img/icons/approach.svg" alt="" class="main__advantages-icon-item">
                                    </div>
                                    <h4 class="main__advantages-name">Комплексный подход</h4>
                                    <p class="main__advantages-text small_text">Мы не просто реализуем красивый дизайн, но и подготавливаем сайт к дальнейшему продвижению.</p>
                                </div>
                            </div>
                        </div>
                            
                            <div class="main__advantages-column-wrapper">
                                <div class="main__advantages-column">
                                <div class="main__advantages-subcolumn">
                                    <div class="main__advantages-icon">
                                        <img src="./assets/img/icons/team.svg" alt="" class="main__advantages-icon-item">
                                    </div>
                                    <h4 class="main__advantages-name">Профессиональная команда</h4>
                                    <p class="main__advantages-text small_text">Наши специалисты знают, чем руководствуются пользователи интернета, принимая решение с какой компанией работать, и сделают так, чтобы Ваш сайт на 100% оправдывал их ожидания.</p>
                                </div>
                            </div>
                        </div>
                            
                        </div>
                    </div>
                </div>
                <div class="main__services">
                    <div class="main__services-heading heading">
                        <h3 class="main__services-subtitle subtitle">(услуги)</h3>
                    </div>
                    <button class="main__services-button first-title accordion">контекстная реклама
                        <svg width="52" height="52" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M26 33.3124L13 20.3124L15.3292 17.9833L26 28.7083L36.6708 18.0374L39 20.3666L26 33.3124Z" fill="black"/>
                        </svg>
                    </button>
                    <div class="main__services-panel">
                        <div class="main__services-backdrop"></div>
                        <p class="main__services-text small-text">Контекстная реклама Яндекс.Директ и Google Adwords – это самый быстрый способ привести потенциальных клиентов на Ваш сайт.
                            Контекстная реклама в Google и Яндекс позволит Вам оплачивать только реальные переходы целевых пользователей
                            и отслеживать эффективность расхода бюджета до копейки.</p>
                            <button class="main__services-order-button button-order-white button-order">заказать</button>
                    </div>
                    <button class="main__services-button first-title accordion active">создание сайтов
                        <svg width="52" height="52" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M26 33.3124L13 20.3124L15.3292 17.9833L26 28.7083L36.6708 18.0374L39 20.3666L26 33.3124Z" fill="black"/>
                        </svg>
                    </button>
                    <div class="main__services-panel">
                        <div class="main__services-backdrop"></div>
                        <p class="main__services-text small-text">Мы предлагаем не просто разработку сайта, а создание полноценного канала продаж через Интернет, который будет настроен
                             под специфику Вашего бизнеса, независимо от цены разрабатываемого проекта. 
                             Создание сайтов для нас - это не просто работа. 
                             Мы всегда стремимся вложить максимум своего опыта и умений в проекты наших клиентов, чтобы добиваться внушительных результатов.
                        </p>
                        <button class="main__services-order-button button-order-white button-order">заказать</button>
                    </div>
                    <button class="main__services-button first-title accordion">комплексный аудит
                        <svg width="52" height="52" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M26 33.3124L13 20.3124L15.3292 17.9833L26 28.7083L36.6708 18.0374L39 20.3666L26 33.3124Z" fill="black"/>
                        </svg>
                    </button>
                    <div class="main__services-panel">
                        <div class="main__services-backdrop"></div>
                        <p class="main__services-text small-text">Если Ваш сайт не приносит прибыль, нет посетителей и заказов, а на первой странице поисковиков находятся Ваши конкуренты, у Вас проблемы.
                            Выявить и решить их поможет аудит сайта. Заказав аудит сайта, Вы узнаете, что нужно доработать на сайте,
                            чтобы он начал помогать Вашему бизнесу.</p>
                            <button class="main__services-order-button button-order-white button-order">заказать</button>
                    </div>
                    <button class="main__services-button first-title accordion">продвижение сайта
                        <svg width="52" height="52" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M26 33.3124L13 20.3124L15.3292 17.9833L26 28.7083L36.6708 18.0374L39 20.3666L26 33.3124Z" fill="black"/>
                        </svg>
                    </button>
                    <div class="main__services-panel">
                        <div class="main__services-backdrop"></div>
                        <p class="main__services-text small-text">Продвинем ваш сайт в топ-10 Яндекса и Google. Увеличим посещаемость. Увеличим количество звонков и заявок.</p>
                        <button class="main__services-order-button button-order-white button-order">заказать</button>
                    </div>
                </div>
                <div class="main__about">
                    <div class="main__about-inside container">
                        <p class="main__about-text">Business Studio - диджитал-компания с возможностями собственных it-разработок и комплексного интернет-маркетинга. 
                            Мы помогаем бизнесу развиваться, обеспечивая его цифровыми решениями и новыми клиентами. Мы развиваем Web-разработку и инструменты 
                            SEO-оптимизации, контекста, таргетинга и комплексной аналитики. За 16 лет мы пережили 3 экономических кризиса в нашей стране и одну 
                            пандемию, и точно знаем, что наш продукт будет востребован всегда! В нашем бэкграунде более 5000 созданных и продвинутых сайтов для бизнеса различного масштаба и профиля, более 600 постоянных 
                            клиентов и 180 сотрудников в команде Business Studio!
                        </p>
                        <button class="main__about-button button-order-black button-order">заказать</button>
                    </div>
                </div>
                <div class="main__terms">
                    <div class="main__terms-inside container">
                        <div class="main__terms-heading heading">
                            <h3 class="main__terms-subtitle subtitle">(сроки)</h3>
                            <h2 class="main__terms-title first-title">сколько дней нужно</h2>
                        </div>
                        <div class="main__terms-table">
                            <div class="main__terms-row">
                                <div class="main__terms-column">
                                    <div class="main__terms-cirlce"></div>
                                    <h4 class="main__terms-name">Контекстная реклама</h4>
                                    <p class="main__terms-term">со дня обращения</p>
                                </div>
                                <div class="main__terms-column">
                                    <div class="main__terms-cirlce"></div>
                                    <h4 class="main__terms-name">Создание сайтов</h4>
                                    <p class="main__terms-term">от 19 дней</p>
                                </div>
                                <div class="main__terms-column">
                                    <div class="main__terms-cirlce"></div>
                                    <h4 class="main__terms-name">Комплексный аудит</h4>
                                    <p class="main__terms-term">от 5-6 дней</p>
                                </div>
                                <div class="main__terms-column">
                                    <div class="main__terms-cirlce"></div>
                                    <h4 class="main__terms-name">Продвижение сайта</h4>
                                    <p class="main__terms-term">со дня обращения</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main__reviews">
                    <div class="main__reviews-heading heading">
                        <h4 class="main__reviews-subtitle subtitle">(отзывы)</h4>
                        <h3 class="main__reviews-title first-title">мы работаем для вас</h3>
                    </div>
                    <div class="main__reviews-inside">
                                <div class="main__reviews-row">
                    <?php 
                    require "./vendor/components/connect.php";

                    
                    $sql = "SELECT * FROM reviews";
                    $result = mysqli_query($conn, $sql);
                    
                    // Цикл для отображения всех отзывов
                    foreach ($result as $row) {
                        echo "<div class='main__reviews-column'>";
                        echo "<div class='main__reviews-image'>";
                        echo "<img src='" . $row['image'] . "' alt='' class='main__reviews-image-item'>";
                        echo "</div>";
                        echo "<h4 class='main__reviews__name'>" . $row['login'] . "</h4>";
                        echo "<p class='main__reviews__text'>" ."<span>" . $row['review'] ."</span>" . "</p>";
                        echo "</div>";
                    }?>  
                                </div>
                    </div>
                    <?php if(isset($_SESSION['login'])) {?><button class="main__reviews-button button-order-black">написать отзыв</button><?php }?>
                </div>
                <div class="main__clients">
                    <div class="main__clients-inside">
                        <div class="main__clients-heading heading">
                            <h3 class="main__clients-subtitle subtitle">(клиенты)</h3>
                            <h4 class="main__clients-title first-title">нам доверяют</h4>
                        </div>
                        <div class="main__clients-row">
                            <div class="main__clients-column"><img src="./assets/img/sponsors/bmw.svg" alt="" class="main__clients-image"></div>
                            <div class="main__clients-column"><img src="./assets/img/sponsors/marafet.svg" alt="" class="main__clients-image"></div>
                            <div class="main__clients-column"><img src="./assets/img/sponsors/mitsubishi.svg" alt="" class="main__clients-image"></div>
                            <div class="main__clients-column"><img src="./assets/img/sponsors/omichka.svg" alt="" class="main__clients-image"></div>
                            <div class="main__clients-column"><img src="./assets/img/sponsors/stargorod.svg" alt="" class="main__clients-image"></div>
                            <div class="main__clients-column"><img src="./assets/img/sponsors/subaru.svg" alt="" class="main__clients-image"></div>
                            <div class="main__clients-column"><img src="./assets/img/sponsors/ul.svg" alt="" class="main__clients-image"></div>
                            <div class="main__clients-column"><img src="./assets/img/sponsors/vundervelle.svg" alt="" class="main__clients-image"></div>
                            <div class="main__clients-column"><img src="./assets/img/sponsors/hlebodar.jpg" alt="" class="main__clients-image"></div>
                            <div class="main__clients-column"><img src="./assets/img/sponsors/Titan.png" alt="" class="main__clients-image"></div>
                        </div>
                    </div>
                </div>
                <div class="main__map">
                    <div class="main__map-inside container">
                        <div class="main__map-heading heading">
                            <h3 class="main__map-title first-title">где нас найти?</h3>
                        </div>
                        <div class="main__map-table">
                            <div class="main__map-column main__map-column_first">
                                <div class="main__map-contacts">
                                    <h4 class="main__map-name">Офис компании</h4>
                                    <p class="main__map-address">Адрес: 644043, Омск, ул. Фрунзе, 1к4, ТОК "Миллениум", 3 этаж, офис 307</p>
                                    <p class="main__map-phone-numbers">Тел: +7 (3812) 29-42-88, +7 (3812) 29-42-89</p>
                                </div>
                            </div>
                            <div class="main__map-column main__map-column_second">
                                <div class="main__map-map">
                                    <iframe class="main__map-map-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1782.9541685429654!2d73.3552060322815!3d54.99373249896027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x43ab01dfe6cb8a69%3A0x4537df3f63c31c6d!2z0JzQmNCb0JvQldCd0JjQo9CcLCDQsNCz0LXQvdGC0YHRgtCy0L4g0L3QtdC00LLQuNC20LjQvNC-0YHRgtC4!5e0!3m2!1sru!2sru!4v1670415369266!5m2!1sru!2sru" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer class="footer">
            <div class="footer__inside container">
                <div class="footer__about">
                    <a href="./index.html" class="footer__logo">
                        <img src="./assets/img/logo/logo.svg" alt="" class="footer__logo">
                    </a>
                    <div class="footer__about-info">
                        <h2 class="footer__company">Business Studio</h2>
                        <p class="footer__text">Диджитал-компания с возможностями собственных it-разработок и комплексного интернет-маркетинга. Мы помогаем бизнесу развиваться, обеспечивая его цифровыми решениями и новыми клиентами.</p>
                        <div class="footer__docs">
                            <a href="" class="footer__docs-item link">Условия продажи</a>
                            <a href="" class="footer__docs-item link">Защита данных</a>
                        </div>
                    </div>
                </div>
                <div class="footer__links">
                    <nav class="footer__nav">
                        <ul class="footer__list footer__list_first">
                            <li class="footer__list-item"><a href="" class="footer__list-link link">Партфолио</a></li>
                            <li class="footer__list-item"><a href="" class="footer__list-link link">Услуги</a></li>
                            <li class="footer__list-item"><a href="" class="footer__list-link link">Контакты</a></li>
                        </ul>
                        <ul class="footer__list footer__list_second">
                            <li class="footer__list-item"><a href="" class="footer__list-link link">Instagram</a></li>
                            <li class="footer__list-item"><a href="" class="footer__list-link link">Facebook</a></li>
                            <li class="footer__list-item"><a href="" class="footer__list-link link">Vkontakte</a></li>
                        </ul>
                    </nav>
                    <p class="footer__ISO">ISO 9001-2015</p>
                </div>
                <div class="footer__contact">
                    <h4 class="footer__number">+7 3812 29 42 88</h4>
                    <h4 class="footer__email">info@business-studio.com</h4>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>