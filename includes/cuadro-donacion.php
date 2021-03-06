<?php $plugin = apg_sms_plugin( $apg_sms['plugin_uri'] ); ?>

<div class="donacion">
  <p>
    <?php _e( 'If you enjoyed and find helpful this plugin, please make a donation:', 'apg_sms' ); ?>
  </p>
  <p><a href="<?php echo $apg_sms['donacion']; ?>" target="_blank" title="<?php _e( 'Make a donation by ', 'apg_sms' ); ?>APG"><span class="genericon genericon-cart"></span></a></p>
  <div>
    <p>Art Project Group:</p>
    <p><a href="http://www.artprojectgroup.es" title="Art Project Group" target="_blank"><strong class="artprojectgroup">APG</strong></a></p>
  </div>
  <div>
    <p>
      <?php _e( 'Follow us:', 'apg_sms' ); ?>
    </p>
    <p><a href="https://www.facebook.com/artprojectgroup" title="<?php _e( 'Follow us on ', 'apg_sms' ); ?>Facebook" target="_blank"><span class="genericon genericon-facebook-alt"></span></a> <a href="https://twitter.com/artprojectgroup" title="<?php _e( 'Follow us on ', 'apg_sms' ); ?>Twitter" target="_blank"><span class="genericon genericon-twitter"></span></a> <a href="https://plus.google.com/+ArtProjectGroupES" title="<?php _e( 'Follow us on ', 'apg_sms' ); ?>Google+" target="_blank"><span class="genericon genericon-googleplus-alt"></span></a> <a href="http://es.linkedin.com/in/artprojectgroup" title="<?php _e( 'Follow us on ', 'apg_sms' ); ?>LinkedIn" target="_blank"><span class="genericon genericon-linkedin"></span></a></p>
  </div>
  <div>
    <p>
      <?php _e( 'More plugins:', 'apg_sms' ); ?>
    </p>
    <p><a href="http://profiles.wordpress.org/artprojectgroup/" title="<?php _e( 'More plugins on ', 'apg_sms' ); ?>WordPress" target="_blank"><span class="genericon genericon-wordpress"></span></a></p>
  </div>
  <div>
    <p>
      <?php _e( 'Contact with us:', 'apg_sms' ); ?>
    </p>
    <p><a href="mailto:info@artprojectgroup.es" title="<?php _e( 'Contact with us by ', 'apg_sms' ); ?>e-mail"><span class="genericon genericon-mail"></span></a> <a href="skype:artprojectgroup" title="<?php _e( 'Contact with us by ', 'apg_sms' ); ?>Skype"><span class="genericon genericon-skype"></span></a></p>
  </div>
  <div>
    <p>
      <?php _e( 'Documentation and Support:', 'apg_sms' ); ?>
    </p>
    <p><a href="<?php echo $apg_sms['plugin_url']; ?>" title="<?php echo $apg_sms['plugin']; ?>"><span class="genericon genericon-book"></span></a> <a href="<?php echo $apg_sms['soporte']; ?>" title="<?php _e( 'Support', 'apg_sms' ); ?>"><span class="genericon genericon-cog"></span></a></p>
  </div>
  <div>
    <p> <?php echo sprintf( __( 'Please, rate %s:', 'apg_sms' ), $apg_sms['plugin'] ); ?> </p>
    <div class="star-holder rate">
      <div style="width: <?php echo esc_attr( str_replace( ',', '.', $plugin['rating'] ) ); ?>px;" class="star-rating"></div>
      <div class="star-rate"> <a title="<?php _e( '***** Fantastic!', 'apg_sms' ); ?>" href="<?php echo $apg_sms['puntuacion']; ?>?rate=5#postform"><span></span></a> <a title="<?php _e( '**** Great', 'apg_sms' ); ?>" href="<?php echo $apg_sms['puntuacion']; ?>?rate=4#postform"><span></span></a> <a title="<?php _e( '*** Good', 'apg_sms' ); ?>" href="<?php echo $apg_sms['puntuacion']; ?>?rate=3#postform"><span></span></a> <a title="<?php _e( '** Works', 'apg_sms' ); ?>" href="<?php echo $apg_sms['puntuacion']; ?>?rate=2#postform"><span></span></a> <a title="<?php _e( '* Poor', 'apg_sms' ); ?>" href="<?php echo $apg_sms['puntuacion']; ?>?rate=1#postform"><span></span></a> </div>
    </div>
  </div>
</div>
