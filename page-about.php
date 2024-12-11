<?php
/* Template Name: About Page */
get_header();
?>
<?php get_template_part('parts/breadcrumbs'); ?>

      <section class="section section-lg bg-default">
        <div class="container">
          <div class="row row-50 align-items-lg-center justify-content-xl-between">
            <div class="col-lg-6">
              <div class="block-xs">
                <h2>Хто ми ?</h2>
                <div class="divider-lg"></div>
                <p class="big text-gray-800">У нашій команді Perk Up Cafe працюють справжні захоплені професіонали. Баристи готують каву з душею, обжарщики ретельно відбирають найкращі зерна, а купажисти створюють унікальні суміші.</p>
                <p>Ми не просто працюємо – ми живемо кавою, щоб кожен напій приносив вам максимальне задоволення.</p>
              </div>
              <div class="row row-30">
                <div class="col-md-6">
                  <div class="box-contact-info-with-icon"><span class="icon mdi mdi-clock icon-primary"></span>
                    <h5>Часи роботи</h5>
                    <ul class="list-xs">
                      <li> <span class="text-gray-800">Понеділок-Пʼятниця:<br> </span> 8:00–22:00
                      </li>
                      <li><span class="text-gray-800">Субота:</span> 9:00–22:00
                      </li>
                      <li><span class="text-gray-800">Неділя: </span> Закрито
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="box-contact-info-with-icon"><span class="icon mdi mdi-clock icon-primary"></span>
                    <h5>Наші локації</h5>
                    <ul class="list-xs">
                      <li><span class="text-gray-800">Адреса: </span> м. Київ. вул. Тараса Шевченка 154, буд 5
                      </li>
                      
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="box-images box-images-variant-3">
                <div class="box-images-item" data-parallax-scroll="{&quot;y&quot;: -20,   &quot;smoothness&quot;: 30 }"><img src="<?php echo get_template_directory_uri();?>/images/overview-1-470x282.jpg" alt="" width="470" height="282"/>
                </div>
                <div class="box-images-item box-images-without-border" data-parallax-scroll="{&quot;y&quot;: 40,  &quot;smoothness&quot;: 30 }"><img src="<?php echo get_template_directory_uri();?>/images/overview-2-470x282.jpg" alt="" width="470" height="282"/>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section parallax-container" data-parallax-img="<?php echo get_template_directory_uri();?>/images/parallax-04-1920x1320.jpg">
        <div class="parallax-content section-lg context-dark text-center section-filter-dark">
          <div class="container">
            <h2>Наша відео презентація </h2>
            <div class="divider-lg"></div>
            <p class="block-lg">У відео про відкриття кав’ярні показуємо атмосферу закладу, майстрів за роботою та процес створення кави. Розповідаємо про ідеологію – любов до кави та турботу про гостей. Завершуємо планами розвитку та запрошенням відвідати нас.</p>
          </div>
          <div class="container">
            <div class="box-video-button" data-lightgallery="group"><a class="button-play" data-lightgallery="item" href="https://www.youtube.com/watch?v=eQKauVTLu0c"><span class="icon fa-play"></span></a></div>
          </div>
        </div>
      </section>
      <section class="section section-md bg-default text-center">
        <div class="container">
          <h2>Справжні майстри своєї справи</h2>
          <div class="divider-lg"></div>
          <p class="block-lg"> У Perk Up Cafe кава – це мистецтво, а наші майстри – справжні чарівники. Від ідеального обсмаження зерен до створення унікальних сумішей і ароматних напоїв – кожна чашка наповнена турботою, майстерністю та любов’ю. Завітайте до нас, щоб відчути, як оживає кава, створена для вас. ☕✨</p>
          <div class="row row-40">
            <div class="col-12">
              <!-- Owl Carousel-->
              <div class="owl-carousel carousel-creative" data-items="1" data-lg-items="3" data-dots="true" data-nav="false" data-stage-padding="15" data-loop="false" data-margin="30" data-mouse-drag="false">
                <div class="team-minimal team-minimal-with-shadow">
                  <figure><img src="<?php echo get_template_directory_uri();?>/images/team-4-370x370.jpg" alt="" width="370" height="370"></figure>
                  <div class="team-minimal-caption">
                    <h4 class="team-title"><a href="#">Богдан Литвиненко</a></h4>
                    <p>Бариста</p>
                  </div>
                </div>
                <div class="team-minimal team-minimal-with-shadow">
                  <figure><img src="<?php echo get_template_directory_uri();?>/images/team-5-370x370.jpg" alt="" width="370" height="370"></figure>
                  <div class="team-minimal-caption">
                    <h4 class="team-title"><a href="#">Василь Савчук</a></h4>
                    <p>Купажист</p>
                  </div>
                </div>
                <div class="team-minimal team-minimal-with-shadow">
                  <figure><img src="<?php echo get_template_directory_uri();?>/images/team-3-370x370.jpg" alt="" width="370" height="370"></figure>
                  <div class="team-minimal-caption">
                    <h4 class="team-title"><a href="#">Іван Дорошенко</a></h4>
                    <p>Обжарщик кави</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
     


<?php get_footer();?>
