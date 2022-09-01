<footer class="page-footer wrapper-in ">
        <p class="page-footer__slogan ">Stay in Touch</p>
        <div class="featured-posts__line "></div>
        <form class="page-footer__form ">
            <input class="form__input " placeholder="Enter your email address ">
            <button class="button form__button ">Submit</button>
        </form>
        <nav class="footer-nav ">
            <div class="footer__logo">
                <?php the_custom_logo();?>
            </div>
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
    <?php
        wp_footer();
    ?>
</body>

</html>