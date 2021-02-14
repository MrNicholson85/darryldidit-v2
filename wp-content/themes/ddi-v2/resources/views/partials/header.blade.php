
<header class="banner navbar navbar-expand-md fixed-top">
  <div class="container">
    <nav class="nav-primary">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon">
          <i class="fas fa-bars"></i>
        </span>
      </button>
       <div class="collapse navbar-collapse" id="navbarSupportedContent">
          @if (has_nav_menu('primary_navigation'))
            {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'navbar-nav']) !!}
          @endif
      </div>
    </nav>
  </div>
</header>
