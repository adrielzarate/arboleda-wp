<?php
/*
 * PLEASE USE THE TEMPLATE EDITOR INSIDE THE PLUGIN ADMINISTRATIVE PANEL, THIS FILE WILL BE SHORTLY DEPRECATED.
 *
 * NEVER EDIT THIS FILE OR COPY IT SOMEWHERE ELSE!
 *
 * See the email-alternative.php to customized the confirmation and welcome
 * emails layout.
 *
 */

// Check for an alternative email builder.
if (is_file(WP_CONTENT_DIR . '/extensions/newsletter/subscription/email.php')) {
  include WP_CONTENT_DIR . '/extensions/newsletter/subscription/email.php';
  return;
}

?><!DOCTYPE html>
<html>
    <head>
        <style type="text/css" media="all">
            a {
                text-decoration: none;
                color: #A7944E;
            }
        </style>
    </head>
    <body style="background-color: #ddd; font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 14px; color: #666; margin: 0 auto; padding: 0;">
        <br>
        <table align="center">
            <tr>
                <td style="font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 14px; color: #666;">
                    <div style="text-align: left; max-width: 500px; border-top: 10px solid #fff; border-bottom: 3px solid #fff;">
                        <div style="padding: 10px 20px; color: #000; font-size: 20px; background-color: #fff; border-bottom: 1px solid #fff">
                            <img src="http://www.arboledawines.com/wp-content/themes/arboleda-wp-theme/img/arboleda-logo-email.jpg" width="250" height="60">
                        </div>
                        <div style="padding: 20px; background-color: #fff; line-height: 18px">

                            <?php echo $message; ?>

                        </div>

                    </div>
                </td>
            </tr>
        </table>
    </body>
</html>