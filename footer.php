  <?php
  /**
   *
   * Wordpress Theme Footer.
   *
   */
  ?>

  <footer class="fixed">

    <button class="arrow arrow-up-gray hidden" id="top"></button>

    <div class="container align-middle">

      <div class="col-md-3">
        <a href="http://download.arboledawines.com" target="_blank">
          <?php _e('
            <!--:es-->Agentes<!--:-->
            <!--:en-->Agents<!--:-->
            <!--:fr-->Agents<!--:-->
            <!--:zh-->代理商<!--:-->');
          ?>
        </a>
      </div>

      <div class="col-md-6 mailing-list text-center">
        <a id="join" href="#" data-toggle="modal" data-target="#mailingList">
          <?php _e('
            <!--:es-->Suscríbete a nuestro Newsletter<!--:-->
            <!--:en-->Join Preferred Mailing List<!--:-->
            <!--:fr-->S’ inscrire à notre liste de diffusion préférentielle<!--:-->
            <!--:zh-->加入优选客户通讯簿<!--:-->');
          ?>
        </a>
      </div>

      <div class="col-md-3 social-nets text-right">
        <ul class="list-inline">
          <li>
            <a href="/contact" title="contact">
              <span class="contact-title">
                <?php _e('
                  <!--:es-->Contacto<!--:-->
                  <!--:en-->Contact Us<!--:-->
                  <!--:fr-->Contact<!--:-->
                  <!--:zh-->联系<!--:-->'); ?>
                </span>
                <i class="fa fa-envelope-o" aria-hidden="true"></i>
              </a>
            </li>
            <li>
              <a href="https://www.instagram.com/arboledawines/" target="_blank" title="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            </li>
            <li>
              <a href="https://twitter.com/arboledawines" target="_blank" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            </li>
          </ul>
        </div>
      </div>

    </footer>

    <!-- Modal -->
    <div class="modal fade" id="mailingList" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body text-center">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h2>
              <?php _e('
                <!--:es-->Únete a la lista de correo<!--:-->
                <!--:en-->Join preferred mailing list<!--:-->
                <!--:fr-->Joindre à la liste de diffusion préférée<!--:-->
                <!--:zh-->加入优选客户通讯簿<!--:-->'); ?>
              </h2>

              <?php //echo do_shortcode('[contact-form-7 id="770" title="subscription-form"]'); ?>

             <form method="post" action="http://arboledawines.com/?na=s">
                <p>
                  <?php _e("
                    <!--:es-->Para seguir las Últimas Noticias de Arboleda<!--:-->
                    <!--:en-->to follow the Latest News from Arboleda<!--:-->
                    <!--:fr-->Pour suivre les Dernières Nouvelles d'Arboleda<!--:-->
                    <!--:zh-->关注Arboleda的最新消息<!--:-->"); ?>
                </p>
                <div class="form-group">
                  <label for="firstName">
                    <?php _e('
                      <!--:es-->Nombre<!--:-->
                      <!--:en-->First Name<!--:-->
                      <!--:fr-->Prénom<!--:-->
                      <!--:zh-->名<!--:-->'); ?>
                  </label>
                  <input type="text" class="form-control" id="firstName" name="nn" required="">
                </div>
                <div class="form-group">
                  <label for="lastName">
                    <?php _e('
                      <!--:es-->Apellido<!--:-->
                      <!--:en-->Last Name<!--:-->
                      <!--:fr-->Le nom<!--:-->
                      <!--:zh-->姓<!--:-->'); ?>
                  </label>
                  <input type="text" class="form-control" id="lastName" name="ns" required="">
                </div>
                <div class="form-group">
                  <label for="country">
                    <?php _e('
                      <!--:es-->País<!--:-->
                      <!--:en-->Country<!--:-->
                      <!--:fr-->Pays<!--:-->
                      <!--:zh-->国家<!--:-->'); ?>
                  </label>
                  <input type="text" class="form-control" id="country" name="np1" required="">
                </div>
                <div class="form-group">
                  <label for="email">
                    <?php _e('
                      <!--:es-->Email<!--:-->
                      <!--:en-->Email<!--:-->
                      <!--:fr-->Email<!--:-->
                      <!--:zh-->邮箱<!--:-->'); ?>
                  </label>
                  <input type="email" class="form-control" id="email" name="ne" required="">
                </div>
                <button type="submit" class="btn btn-default">
                  <?php _e('
                    <!--:es-->Enviar<!--:-->
                    <!--:en-->Submit<!--:-->
                    <!--:fr-->Soumettre<!--:-->
                    <!--:zh-->订阅<!--:-->'); ?>
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>

      <?php wp_footer(); ?>

    </body>
    </html>