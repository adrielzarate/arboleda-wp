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
        <a href="#">Intranet</a>
      </div>

      <div class="col-md-4 mailing-list text-center">
        <a id="join" href="#" data-toggle="modal" data-target="#mailingList">Join Preferred Mailing List</a>
      </div>

      <div class="col-md-4 social-nets text-right">
        <span>
          <?php _e('
          <!--:es-->Contacto<!--:-->
          <!--:en-->Contact Us<!--:-->
          <!--:fr-->Contact<!--:-->'); ?>
        </span>
        <ul class="list-inline">
          <li>
            <a href="/contact" title="contact"><i class="fa fa-envelope-o" aria-hidden="true"></i></a>
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
          <h2>Join preferred mailing list</h2>

          <form>
            <p>To follow the latest news from Seña, join our preferred mailing list.</p>
            <div class="form-group">
              <label for="firstName">First Name</label>
              <input type="text" class="form-control" id="firstName">
            </div>
            <div class="form-group">
              <label for="lastName">Last Name</label>
              <input type="text" class="form-control" id="lastName">
            </div>
            <div class="form-group">
              <label for="country">Country</label>
              <input type="text" class="form-control" id="country">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
          </form>

          <div class="thanks">
            <h2>Thank You!</h2>
            <em>for joining our mailing list</em>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php wp_footer(); ?>

</body>
</html>