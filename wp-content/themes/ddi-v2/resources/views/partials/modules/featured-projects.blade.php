<div class="page-section featured-project @if ($c->section_effects)section-effects @endif">
  <div class="container">
  <div class="row">
      <div class="col-md-12">
        <h3 class="section-title center-text">Things I did</h3>
      </div>
    </div>
    <div class="row">
      @foreach ($c as $p)
        @if ($p->post_title)
          <div class="col-md-3">
          <a class="featured-project__link" href="{{the_permalink($p)}}">
            <div class="featured-project__cards" style="background-image: url('{{get_the_post_thumbnail_url($p)}}')">
              <span class="featured-project__title">{{$p->post_title}}</span>
            </div>
          </a>       
        </div>
        @endif
      @endforeach
    </div>
    <a class="btn btn__primary" href="/projects">
      View More
    </a>  
  </div>
</div>