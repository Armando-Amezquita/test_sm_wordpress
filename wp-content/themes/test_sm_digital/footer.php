<footer>
    <div class="container py-4">
        <nav>
            <ul>
                <section class="section-up">
                    <li>Nos encantaría ser tu <br />  <span>aliado</span> <span class="second">estratégico </span> </li>
                    <li>
                        <button class="button-wp" type="button"> <a href="#">
                            <img class="logo" src="<?php echo get_template_directory_uri()?>/assets/icons/whatsapp2.png" alt="logo"></i>
                            </a>  Chatea en whatsApp</button></li>
                    <div >
                        <ul class="social-media">
                            <a href="#">
                                <img class="logo" src="<?php echo get_template_directory_uri()?>/assets/icons/facebook1.png" alt="logo"></i>
                            </a>
                            <a href="#">
                                <img class="logo" src="<?php echo get_template_directory_uri()?>/assets/icons/instagram.png" alt="logo"></i>
                            </a>
                            <a href="#">
                                <img class="logo" src="<?php echo get_template_directory_uri()?>/assets/icons/linkedin.png" alt="logo"></i>
                            </a>
                            <a href="#">
                                <img class="logo" src="<?php echo get_template_directory_uri()?>/assets/icons/twitter.png" alt="logo"></i>
                            </a>
                            <a href="#">
                                <img class="logo" src="<?php echo get_template_directory_uri()?>/assets/icons/youtube.png" alt="logo"></i>
                            </a>
                        </ul>
                    </div>
                </section>
                <section class="section-medium">
                    <nav>
                        <ul>
                            <li><a href="#">SOLUCIONES </a> </li>
                            <li><a href="#">PRODUCTOS </a> </li>
                            <li><a href="#">NUESTRO TRABAJO </a> </li>
                            <li><a href="#">ACTUALIDAD DIGITAL </a> </li>   
                        </ul>
                    </nav>
                </section>
                <section class="section-down">
                    <?php dynamic_sidebar('pie-pagina'); ?>
                </section>
            </ul>
        </nav>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>