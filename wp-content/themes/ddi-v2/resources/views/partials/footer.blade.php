<?php
  $col_1 = $acf_options->col_2;
  $col_3 = $acf_options->col_3;

?>
<footer class="content-info">
  <div class="container">
      <div class="content-info__primary">
    
        <div class="column-1">
          <h4>Contact Us</h4>
          <div class="content-info__contact-us">
            <div class="content-info__contact-us-item">
              <i class="fas fa-map-marker content-info__icon"></i>
              <span>{{ esc_html($col_1->address) }}</span>
            </div>        
            <div class="content-info__contact-us-item">
              <i class="fas fa-phone-alt content-info__icon"></i>
              <span>{{ esc_html($col_1->phone) }}</span>
            </div>
            <div class="content-info__contact-us-item">
              <i class="fas fa-envelope content-info__icon"></i>
              <span>{{$col_1->email}}</span>
            </div>
          </div>  
        </div>
        <div class="column-2">
          <h4>Category</h4>
          <?php
            $categories = get_categories( array(
                'orderby' => 'name',
                'order'   => 'ASC'
            ) );
            foreach( $categories as $category ) {
                $category_link = sprintf( 
                    '<a href="%1$s" alt="%2$s">%3$s</a>',
                    esc_url( get_category_link( $category->term_id ) ),
                    esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ),
                    esc_html( $category->name )
                );
                echo '<p>' . sprintf( esc_html__( '%s', 'textdomain' ), $category_link ) . '</p> ';
            }
          ?>
        </div>
        <div class="column-3">
          <h4>Quick Links</h4>
          <?php wp_nav_menu(); ?>
        </div>
        <div class="column-4">
          <h4>Newsletter</h4>
          {!! $col_3->form !!}
        </div>

    </div>
  </div>
  <hr/>
  <div class="container">
    <div class="row">
      <div class="content-info__secondary">
        <div class="col-sm-12">
          &copy {{ date('Y') }} Darryl Did It. All Rights Reserved.
        </div>
      </div>
    </div>
  </div>
</footer>
