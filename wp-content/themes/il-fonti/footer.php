<!-- reservation section -->

        <section class="section-intro-footer jumbotrom">
            <div class="section-pixel"></div>
            <div class="container-fluid reservation_il-fonti">
                <h1 class="parallax-move" data-parallax-content='{"shift":30, "duration":3}'>¡Te invitamos a reservar!</h1>
                <a class="btn button_il-fonti" href="https://www.ticketself.com/event/b4709273/reserva-general">CLICK AQUÍ</a>
            </div>
        </section>
    </main>

<!-- footer -->

    <footer class="jumbotrom footer_il-fonti">
        <div class="row">
            <div class="col-sm footer__il-fonti_image">
                <a href="#">
                <img src="<?php echo get_theme_file_uri('/assets/img/marca/logo.png'); ?>" alt="logo il-fonti">
                </a>
            </div>
            <div class="col-sm">
                <div class="footer__il-fonti_icon">
                    <i class="fab fa-facebook fa-3x"></i>
                    <i class="fab fa-instagram fa-3x"></i>
                    <i class="fab fa-twitter fa-3x"></i>
                </div>
            </div>
            <div class="col-sm justify-content-end">
                <ul class="nav flex-column">
                    <li><?php if ( is_active_sidebar( 'widget_footer' ) ) {
                        dynamic_sidebar( 'widget_footer' );
                    }; ?>
                    </li>
                    <li>
                        <p> Av. Colón 161, Providencia</p>
                    </li>
                    <li>
                        <p>Teléfono: +56 2 2345 4653</p>
                    </li>
                </ul>
            </div>
        </div>
         <small> © Il Fonti | Di Modena 2018. Todos los derechos reservados.</small>
    </footer>
<a id="toTop" class="show" href="#">▲</a>
<?php wp_footer(); ?>