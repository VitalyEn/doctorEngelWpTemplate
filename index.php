<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Doctor Engel</title>

    <!-- Подключаем стили проекта -->
    <link rel="stylesheet" href="css/app.min.css">
    <link href="https://allfont.ru/allfont.css?fonts=lora" rel="stylesheet" type="text/css" />
    <?php
        wp_head();
    ?>
</head>

<body class="page-body wrapper">
    <header class="page-header  ">
        <div class="page-header__wrapper wrapper-in ">
            <!-- main-nav--closed main-nav--nojs -->
            <nav class="main-nav ">
                <button class="main-nav__toggle " type="button " aria-label="Открыть меню ">
                </button>
                <a class="page-header__logo ">Доктор Энгель</a>
                <ul class="main-nav__list list-style ">
                    <li class="main-nav__item main-nav__item--active ">
                        <a>Главная</a>
                    </li>
                    <li class="main-nav__item ">
                        <a href="about.html ">Обо мне</a>
                    </li>
                    <li class="main-nav__item ">
                        <a href="posts.html ">
                        Статьи
                        </a>
                    </li>
                    <li class="main-nav__item ">
                        <a href="form.html ">
                        Записаться на консультацию
                        </a>
                    </li>
                    <li class="main-nav__item ">
                        <a href="contacts.html ">
                        Контакты
                        </a>
                    </li>
                </ul>
            </nav>

            <p class="page-header__title">Доктор Энгель</p>

            <p class="page-header__slogan">Ваш путь к здоровой жизни!</p>
        </div>
    </header>

    <main class="page-main wrapper-in">
        <div>
            <h2 class="featured-posts__header">Featured posts</h2>
            <div class="featured-posts__line"></div>
            <ul class="featured-post__list">
                <li class="featured-post__container">
                    <img class="featured-post__image" src="images/dest/fposts 1.png" alt="post 1">
                    <h3 class="featured-post__header">The Road Ahead</h3>
                    <p class="featured-post__slogan">The road ahead might be paved - it might not be.</p>
                    <p class="featured-post__author">Mat Vogels</p>
                    <p class="featured-post__date">September 25, 2015</p>
                </li>
                <li class="featured-post__container">
                    <img class="featured-post__image" src="images/dest/fposts 2.png" alt="post 2">
                    <h3 class="featured-post__header">From Top Down</h3>
                    <p class="featured-post__slogan">Once a year, go someplace you’ve never been before.</p>
                    <p class="featured-post__author">William Wong</p>
                    <p class="featured-post__date">September 25, 2015</p>
                </li>
            </ul>
        </div>
        <div>
            <h2 class="most-recent__header">Most Recent</h2>
            <div class="featured-posts__line"></div>
            <ul class="most-recent__list">
                <li class="most-recent__container">
                    <img class="most-recent__image" src="images/dest/mr 1.png" alt="post 1">
                    <div class="most-recent__slogancontainer">
                        <h3 class="most-recent__post-header">Still Standing Tall</h3>
                        <p class="most-recent__slogan">Life begins at the end of your comfort zone.</p>
                    </div>
                    <div class="most-recent__datecontainer">
                        <p class="most-recent__author">William Wong</p>
                        <p class="most-recent__date">9/25/2015</p>
                    </div>
                </li>
                <li class="most-recent__container">
                    <img class="most-recent__image" src="images/dest/mr 2.png" alt="post 2">
                    <div class="most-recent__slogancontainer">
                        <h3 class="most-recent__post-header">Sunny Side Up</h3>
                        <p class="most-recent__slogan">No place is ever as bad as they tell you it’s going to be.</p>
                    </div>
                    <div class="most-recent__datecontainer">
                        <p class="most-recent__author ">William Wong</p>
                        <p class="most-recent__date ">9/25/2015</p>
                    </div>

                </li>
                <li class="most-recent__container ">
                    <img class="most-recent__image " src="images/dest/mr 3.png " alt="post 3">
                    <div class="most-recent__slogancontainer ">
                        <h3 class="most-recent__post-header ">Water Falls</h3>
                        <p class="most-recent__slogan ">We travel not to escape life, but for life not to escape us.</p>
                    </div>
                    <div class="most-recent__datecontainer">
                        <p class="most-recent__author ">William Wong</p>
                        <p class="most-recent__date ">9/25/2015</p>
                    </div>

                </li>
                <li class="most-recent__container ">
                    <img class="most-recent__image " src="images/dest/mr 4.png " alt="post 4">
                    <div class="most-recent__slogancontainer ">
                        <h3 class="most-recent__post-header ">Through the Mist</h3>
                        <p class="most-recent__slogan ">Travel makes you see what a tiny place you occupy in the world.</p>
                    </div>
                    <div class="most-recent__datecontainer">
                        <p class="most-recent__author ">William Wong</p>
                        <p class="most-recent__date ">9/25/2015</p>
                    </div>

                </li>
                <li class="most-recent__container ">
                    <img class="most-recent__image " src="images/dest/mr 5.png " alt="post 5">
                    <div class="most-recent__slogancontainer ">
                        <h3 class="most-recent__post-header ">Awaken Early</h3>
                        <p class="most-recent__slogan ">Not all those who wander are lost.</p>
                    </div>
                    <div class="most-recent__datecontainer">
                        <p class="most-recent__author ">William Wong</p>
                        <p class="most-recent__date ">9/25/2015</p>
                    </div>

                </li>
                <li class="most-recent__container ">
                    <img class="most-recent__image " src="images/dest/mr 6.png " alt="post 6 ">
                    <div class="most-recent__slogancontainer ">
                        <h3 class="most-recent__post-header ">Try it Always</h3>
                        <p class="most-recent__slogan ">The world is a book, and those who do not travel read only one page.</p>
                    </div>
                    <div class="most-recent__datecontainer ">
                        <p class="most-recent__author ">William Wong</p>
                        <p class="most-recent__date ">9/25/2015</p>
                    </div>

                </li>
            </ul>
        </div>
    </main>
    <footer class="page-footer wrapper-in ">
        <p class="page-footer__slogan ">Stay in Touch</p>
        <div class="featured-posts__line "></div>
        <form class="page-footer__form ">
            <input class="form__input " placeholder="Enter your email address ">
            <button class="button form__button ">Submit</button>
        </form>
        <nav class="footer-nav ">
            <a class="footer__logo ">Доктор Энгель</a>
            <ul class="footer-nav__list list-style ">
                <li class="footer-nav__item footer-nav__item--active ">
                    <a>Главная</a>
                </li>
                <li class="footer-nav__item ">
                    <a href="about.html ">Обо мне</a>
                </li>
                <li class="footer-nav__item ">
                    <a href="posts.html ">
                    Статьи
                    </a>
                </li>
                <li class="footer-nav__item ">
                    <a href="form.html ">
                    Записаться на консультацию
                    </a>
                </li>
                <li class="footer-nav__item ">
                    <a href="contacts.html ">
                    Контакты
                    </a>
                </li>
            </ul>
        </nav>
    </footer>
</body>

</html>