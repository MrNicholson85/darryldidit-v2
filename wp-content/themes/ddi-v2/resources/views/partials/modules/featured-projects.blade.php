@debug
<div class="page-section featured-project @if ($c->section_effects)section-effects @endif">
  <div class="container">
  <div class="row">
      <div class="col-md-12">
        <h3 class="section-title center-text">Things I did</h3>
      </div>
    </div>
    <div class="row">
      @forelse ($project_loop as $p )
        @php
          $feat_image = $p->project_image['project_media']['project_images'][0]['project_image']['url'];
        @endphp
        <div class="col-md-3">
          <a class="featured-project__link" href="{{$p->permalink}}">
            <div class="featured-project__cards" style="background-image: url('{{ $feat_image ? $feat_image : 'https://via.placeholder.com/300' }}')">
              <span class="featured-project__title">{{ $p->title }}</span>
            </div>
          </a>       
        </div>
      @empty
      @endforelse
    </div>
    <a class="btn btn__primary" href="{{ $c->link['url'] }}">
      {{ $c->link['title']}}
    </a>  
  </div>
</div>