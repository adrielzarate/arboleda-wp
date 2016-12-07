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

      <div class="col-md-4">
        <a href="http://www.arboledawines.com/agents.asp">Intranet</a>
      </div>

      <div class="col-md-4 mailing-list text-center">
        <a id="join" href="#" data-toggle="modal" data-target="#mailingList">Join Preferred Mailing List</a>
      </div>

      <div class="col-md-4 social-nets text-right">
        <ul class="list-inline">
          <li>
            <a href="/contact" title="contact">
              <span class="contact-title">
                <?php _e('
                  <!--:es-->Contacto<!--:-->
                  <!--:en-->Contact Us<!--:-->
                  <!--:fr-->Contact<!--:-->'); ?>
                </span>
                <i class="fa fa-envelope-o" aria-hidden="true"></i>
              </a>
            </li>
            <li>
              <a href="https://www.facebook.com/VinsArboleda/?fref=ts" target="_blank" title="Facebook"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
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
                <!--:fr-->Joindre à la liste de diffusion préférée<!--:-->'); ?>
              </h2>

<!--               <form>
                <p>
                  <?php _e("
                    <!--:es-->Para seguir las Últimas Noticias de Arboleda, únete a nuestra lista de correo preferida.<!--:-->
                    <!--:en-->To follow the Latest News from Arboleda, join our preferred mailing list.<!--:-->
                    <!--:fr-->Pour suivre les Dernières Nouvelles d'Arboleda, rejoignez notre liste de diffusion préférée.<!--:-->"); ?>
                </p>
                <div class="form-group">
                  <label for="firstName">
                  <?php _e('
                    <!--:es-->Nombre<!--:-->
                    <!--:en-->First Name<!--:-->
                    <!--:fr-->Prénom<!--:-->'); ?>
                  </label>
                  <input type="text" class="form-control" id="firstName">
                </div>
                <div class="form-group">
                  <label for="lastName">
                  <?php _e('
                    <!--:es-->Apellido<!--:-->
                    <!--:en-->Last Name<!--:-->
                    <!--:fr-->Le nom<!--:-->'); ?>
                  </label>
                  <input type="text" class="form-control" id="lastName">
                </div>
                <div class="form-group">
                  <label for="country">
                  <?php _e('
                    <!--:es-->País<!--:-->
                    <!--:en-->Country<!--:-->
                    <!--:fr-->Pays<!--:-->'); ?>
                  </label>
                  <input type="text" class="form-control" id="country">
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email">
                </div>
                <button type="submit" class="btn btn-default">
                  <?php _e('
                    <!--:es-->Enviar<!--:-->
                    <!--:en-->Submit<!--:-->
                    <!--:fr-->Soumettre<!--:-->'); ?>
                </button>
              </form> -->

              <?php echo do_shortcode('[rainmaker_form id="205"]'); ?>

              <div class="thanks">
                <h2>
                  <?php _e('
                    <!--:es-->Gracias!<!--:-->
                    <!--:en-->Thank You!<!--:-->
                    <!--:fr-->Merci!<!--:-->'); ?>
                </h2>
                <em>
                  <?php _e('
                    <!--:es-->por unirse a nuestra lista de correo<!--:-->
                    <!--:en-->for joining our mailing list<!--:-->
                    <!--:fr-->de vous joindre à notre liste de diffusion<!--:-->'); ?>
                </em>
              </div>
            </div>
          </div>
        </div>
      </div>

      <?php wp_footer(); ?>

    </body>
    </html>