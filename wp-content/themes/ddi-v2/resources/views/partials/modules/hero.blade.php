<div class="page-section hero"  style="background-image: url('{{$hero_image}}');">
  <div class="container">
    <div class="row">
      <div class="hero__content">
        <div class="col-md-12">
          <div class="hero__title h1">
            @if ($hero_title)
              {{ $hero_title }}        
            @endif
          </div>
          <div class="hero__sub-title h2">
            @if ($sub_title)
              {{ $sub_title }}        
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
