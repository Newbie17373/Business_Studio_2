<header class="header">
            <div class="header__inside container">
                <a href="./index.html" class="header__logo">
                    <img class='header__logo-item header__logo-item_img'src="./assets/img/logo/logo.svg" alt="">
                    <p class="header__logo-item header__logo-item-text">Business Studio</p>
                </a>
                <div class="header__part header__part_right">
                    <div class="header__row header__row_first">
                        <div class="header__column header__column_first">
                            <h4 class="header__contact">+7 3812 29 42 88</h4>
                        </div>
                        <div class="header__column header__column_second">
                            <div class="header__personal-area">
                                <a href="./registration.php" class="header__personal-area-item link">Омск<svg  viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.24375 17.8281C7.425 17.0031 8.59688 16.3703 9.75938 15.9297C10.9219 15.4891 12.1687 15.2688 13.5 15.2688C14.8313 15.2688 16.0828 15.4891 17.2547 15.9297C18.4266 16.3703 19.6031 17.0031 20.7844 17.8281C21.6094 16.8156 22.1953 15.7937 22.5422 14.7625C22.8891 13.7312 23.0625 12.6438 23.0625 11.5C23.0625 8.78125 22.1484 6.50781 20.3203 4.67969C18.4922 2.85156 16.2188 1.9375 13.5 1.9375C10.7812 1.9375 8.50781 2.85156 6.67969 4.67969C4.85156 6.50781 3.9375 8.78125 3.9375 11.5C3.9375 12.6438 4.11562 13.7312 4.47187 14.7625C4.82812 15.7937 5.41875 16.8156 6.24375 17.8281ZM13.5 12.3438C12.4125 12.3438 11.4984 11.9734 10.7578 11.2328C10.0172 10.4922 9.64687 9.57812 9.64687 8.49062C9.64687 7.40312 10.0172 6.48906 10.7578 5.74844C11.4984 5.00781 12.4125 4.6375 13.5 4.6375C14.5875 4.6375 15.5016 5.00781 16.2422 5.74844C16.9828 6.48906 17.3531 7.40312 17.3531 8.49062C17.3531 9.57812 16.9828 10.4922 16.2422 11.2328C15.5016 11.9734 14.5875 12.3438 13.5 12.3438ZM13.5 22.75C11.9625 22.75 10.5094 22.4547 9.14062 21.8641C7.77187 21.2734 6.57656 20.4672 5.55469 19.4453C4.53281 18.4234 3.72656 17.2281 3.13594 15.8594C2.54531 14.4906 2.25 13.0375 2.25 11.5C2.25 9.94375 2.54531 8.48594 3.13594 7.12656C3.72656 5.76719 4.53281 4.57656 5.55469 3.55469C6.57656 2.53281 7.77187 1.72656 9.14062 1.13594C10.5094 0.545312 11.9625 0.25 13.5 0.25C15.0562 0.25 16.5141 0.545312 17.8734 1.13594C19.2328 1.72656 20.4234 2.53281 21.4453 3.55469C22.4672 4.57656 23.2734 5.76719 23.8641 7.12656C24.4547 8.48594 24.75 9.94375 24.75 11.5C24.75 13.0375 24.4547 14.4906 23.8641 15.8594C23.2734 17.2281 22.4672 18.4234 21.4453 19.4453C20.4234 20.4672 19.2328 21.2734 17.8734 21.8641C16.5141 22.4547 15.0562 22.75 13.5 22.75ZM13.5 21.0625C14.5312 21.0625 15.5391 20.9125 16.5234 20.6125C17.5078 20.3125 18.4781 19.7875 19.4344 19.0375C18.4781 18.3625 17.5031 17.8469 16.5094 17.4906C15.5156 17.1344 14.5125 16.9563 13.5 16.9563C12.4875 16.9563 11.4844 17.1344 10.4906 17.4906C9.49687 17.8469 8.52187 18.3625 7.56562 19.0375C8.52187 19.7875 9.49219 20.3125 10.4766 20.6125C11.4609 20.9125 12.4688 21.0625 13.5 21.0625ZM13.5 10.6562C14.1375 10.6562 14.6578 10.4547 15.0609 10.0516C15.4641 9.64844 15.6656 9.12813 15.6656 8.49062C15.6656 7.85312 15.4641 7.33281 15.0609 6.92969C14.6578 6.52656 14.1375 6.325 13.5 6.325C12.8625 6.325 12.3422 6.52656 11.9391 6.92969C11.5359 7.33281 11.3344 7.85312 11.3344 8.49062C11.3344 9.12813 11.5359 9.64844 11.9391 10.0516C12.3422 10.4547 12.8625 10.6562 13.5 10.6562Z" fill="black"/>
                                    </svg></a>
                            </div>
                            <?php if(isset($_SESSION['login'])) {?>
                            <div class="header__session">
                                <a href="logout.php" class="header__link user__session"><span><?php echo $_SESSION['login']?></span><button class="header__button button-order-black"><span>Выйти</span></button></a>
                            </div>
                            <?php }?>
                        </div>
                    </div>
                    <div class="header__row">
                        <div class="header__column">
                            <nav class="header_nav">
                                <ul class="header__list">
                                    <li class="header__list-item"><a href="" class="header__link link">Партфолио</a></li>
                                    <li class="header__list-item"><a href="" class="header__link link">Услуги</a></li>
                                    <li class="header__list-item"><a href="" class="header__link link">Контакты</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="header__column">
                                <ul class="header__networks">
                                    <li class="header__list-item"><a href="" class="header__link link">Instagram</a></li>
                                    <li class="header__list-item"><a href="" class="header__link link">Facebook</a></li>
                                    <li class="header__list-item"><a href="" class="header__link link">Vkontakte</a></li>
                                </ul>
                        </div>
                    </div>
                </div>
                <div class="header__burger">
                    <span></span>
                </div>
            </div>
        </header>