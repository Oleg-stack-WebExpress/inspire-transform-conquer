</main>

<footer class="footer">
    <div class="container">
        <!--Подвал контент на две части-->
        <div class="footer__head">
            <!--Логотип с ссылочными иконками-->
            <div class="footer__head__left">
                <a class="logo" href="/">
                    <img src="<?= assets('images/logo.png'); ?>" alt="Spotlight icon">
                    <h2>Spotlight</h2>
                </a>
                <p>
                    A minimal, functional theme for running a paid-membership publication on Ghost.
                </p>
                <div class="social-links">
                    <a href="#">
                        <span class="icon">
                            <i class="icon-facebook-circled"></i>
                        </span>
                    </a>
                    <a href="#">
                        <span class="icon">
                            <i class="icon-xing"></i>
                        </span>
                    </a>
                    <a href="#">
                        <span class="icon">
                            <i class="icon-instagram-filled"></i>
                        </span>
                    </a>
                </div>
            </div>
            <!--Ссылочный список-->
            <div class="footer__head__right">
                <ul class="column">
                    <li>
                        <a href="#">Post With Lightbox</a>
                    </li>
                    <li>
                        <a href="#">Paid-Only Post</a>
                    </li>
                    <li>
                        <a href="#">Membership</a>
                    </li>
                    <li>
                        <a href="#">Error 404</a>
                    </li>
                    <li>
                        <a href="#">Authors</a>
                    </li>
                </ul>
            </div>
        </div>
        <!--Приписка со встроенными ссылками-->
        <div class="footer__copyright padding-top-50">
            <p>

                Copyright © 2025 Spotlight. Published with <a href="https://ghost.org">Ghost</a> and <a
                    href="https://spotlight-primary.highfivethemes.com">Spotlight</a>
            </p>

        </div>
    </div>
</footer>

<?php wp_footer(); ?>



</body>

</html>