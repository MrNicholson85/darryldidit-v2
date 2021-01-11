<div class="page-section hero" style="background-image: url('{{ $c->hero_data }}');">
  <div class="container">
    <div class="row">
      <div class="hero__content">
        <div class="col-md-12">
          <div class="hero__title h1">
            @if ($c->hero_title)
              {{ $c->hero_title }}      
            @endif
          </div>
          <div class="hero__sub-title h2">
            @if ($c->hero_subtitle)
              {{ $c->hero_subtitle }}        
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
