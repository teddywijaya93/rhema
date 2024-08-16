<button onclick="topFunction()" id="TOP" title="Back To Top" style="display: block;"><i class="fa-solid fa-angle-up text-white" aria-hidden="true"></i></button>

<footer class="footer" role="contentinfo">
    <div class="footer-basic footer-home">
        <div class="container" id="cont1200px">
            <div class="row">
                <div class="col-12 col-lg-6 mb-3 mb-lg-0">
                    <div class="row">
                        <div class="col-3 text-center"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2024/06/Logo-Rhema-Indonesia-Bg-Black-1.webp" class="logo-footer-img"></div>
                        <div class="col-9 my-auto">
                            <h4 class="footer-site-name text-white text-uppercase mb-2"><?php echo get_bloginfo('name'); ?></h4>
                            <p class="footer-site-desc text-white mb-2"><?php echo get_bloginfo('description'); ?></p>
                            <p class="footer-site-loc text-white mb-0">Jakarta &#x2022; BALI &#x2022; Lampung &#x2022; SUMUT &#x2022; Distance Learning</p>
                        </div>
                    </div>
                  
                </div>
                <div class="col-12 col-sm-6 col-lg-4 text-end mb-3 mb-lg-0">
                    <div class="row">
                        <div class="col-6">
                            <ul>
                                <li class="footer-site-menu text-white mb-3"><a href="<?php echo get_site_url(); ?>/">Beranda</a></li>
                                <li class="footer-site-menu text-white mb-3"><a href="<?php echo get_site_url(); ?>/profil">Profil</a></li>
                                <li class="footer-site-menu text-white mb-3"><a href="<?php echo get_site_url(); ?>/pendaftaran">Pendaftaran</a></li>
                                <li class="footer-site-menu text-white mb-3"><a href="<?php echo get_site_url(); ?>/alumni">Alumni</a></li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <ul>
                                <li class="footer-site-menu text-white mb-3"><a href="<?php echo get_site_url(); ?>/berita">Berita</a></li>
                                <li class="footer-site-menu text-white mb-3"><a href="<?php echo get_site_url(); ?>/persembahan">Persembahan</a></li>
                                <li class="footer-site-menu text-white mb-3"><a href="<?php echo get_site_url(); ?>/hubungi-kami">Hubungi Kami</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-2 text-end mb-3 mb-lg-0">
                    <h4 class="footer-site-menu fw-bold text-white mb-2">Social Media</h4>
                    <ul class="list-inline text-end mb-0">
                        <?php 
                            $args = array(
                                'post_type' => 'kontak',
                                'post_status' => 'publish',
                            );
                            $the_query = new WP_Query( $args );
                            while ( $the_query->have_posts() ) : $the_query->the_post();
                            $idKontak = get_the_ID();

                            $socmed = get_post_meta($idKontak,'kontaksosmed',true);
                            $yt = $socmed[0]['youtube'];
                            $ig = $socmed[0]['instagram'];
                            $tiktok = $socmed[0]['tiktok'];
                        ?>
                        <li class="list-inline-item p-0">
                            <a href="<?php echo $yt; ?>" target="_blank">
                                <i class="fa-brands fa-youtube text-center text-white me-1" style="font-size: 20px;"></i>
                            </a>
                        </li>
                        <li class="list-inline-item p-0">
                            <a href="<?php echo $ig; ?>" target="_blank">
                                <i class="fa-brands fa-instagram text-center text-white me-1" style="font-size: 20px;"></i>
                            </a>
                        </li>
                        <li class="list-inline-item p-0">
                            <a href="<?php echo $tiktok; ?>" target="_blank">
                                <i class="fa-brands fa-tiktok text-center text-white" style="font-size: 20px;"></i>
                            </a>
                        </li>
                        <?php endwhile;
                        wp_reset_query(); ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="<?php echo bloginfo('template_directory'); ?>/library/js/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js" integrity="sha512-2rNj2KJ+D8s1ceNasTIex6z4HWyOnEYLVC3FigGOmyQCZc2eBXKgOxQmo3oKLHyfcj53uz4QMsRCWNbLd32Q1g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js" integrity="sha512-Ysw1DcK1P+uYLqprEAzNQJP+J4hTx4t/3X2nbVwszao8wD+9afLjBQYjz7Uk4ADP+Er++mJoScI42ueGtQOzEA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js" integrity="sha512-Ixzuzfxv1EqafeQlTCufWfaC6ful6WFqIz4G+dWvK0beHw0NVJwvCKSgafpy5gwNqKmgUfIBraVwkKI+Cz0SEQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<?php wp_footer(); ?>

</body>
</html>

<?php ?>