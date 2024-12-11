<!-- Page Footer-->
<footer class="section bg-default section-xs-type-1 footer-minimal">
        <div class="container">
          <div class="row row-30 align-items-lg-center justify-content-lg-between">
            <div class="col-lg-2">
              <div class="footer-brand"><a href="index.html"><img src="<?php echo get_template_directory_uri();?>/images/logo-dark-142x58.png" alt="" width="142" height="58"/></a></div>
            </div>
            <div class="col-lg-10">
              <div class="footer-nav">
              <ul class="rd-navbar-nav">
                      <li class="rd-nav-item <?php echo (is_front_page() ? 'active' : ''); ?>">
                        <a class="rd-nav-link" href="<?php echo home_url('/'); ?>">Головна</a>
                      </li>
                      <li class="rd-nav-item <?php echo (is_page('about') ? 'active' : ''); ?>">
                        <a class="rd-nav-link" href="<?php echo home_url('/about/'); ?>">Про нас</a>
                      </li>
                      <li class="rd-nav-item <?php echo (is_page('gallery') ? 'active' : ''); ?>">
                        <a class="rd-nav-link" href="<?php echo home_url('/gallery/'); ?>">Галерея</a>
                      </li>
                      <li class="rd-nav-item <?php echo (is_page('contacts') ? 'active' : ''); ?>">
                        <a class="rd-nav-link" href="<?php echo home_url('/contacts/'); ?>">Контакти</a>
                      </li>
                    </ul>
              </div>
            </div>

          </div>
        </div>
      </footer>
      
      <section class="bg-gray-100 section-xs">
  <div class="container">
    <ul class="social-icons">
      <li>
        <a href="https://facebook.com" target="_blank" rel="noopener noreferrer">
          <img src="<?php echo get_template_directory_uri(); ?>/images/facebook-icon.svg" alt="Facebook">
        </a>
      </li>
      <li>
        <a href="https://telegram.org" target="_blank" rel="noopener noreferrer">
          <img src="<?php echo get_template_directory_uri(); ?>/images/telegram-icon.svg" alt="Telegram">
        </a>
      </li>
      <li>
        <a href="https://instagram.com" target="_blank" rel="noopener noreferrer">
          <img src="<?php echo get_template_directory_uri(); ?>/images/instagamm-icon.svg" alt="Instagram">
        </a>
      </li>
    </ul>
    <p class="rights">
      <span>&copy;&nbsp;</span>
      <span class="copyright-year"><?php echo date("Y"); ?></span>
      <span>&nbsp;</span>
    </p>
  </div>
</section>

    
     <?php wp_footer()?>
  </body>
</html>