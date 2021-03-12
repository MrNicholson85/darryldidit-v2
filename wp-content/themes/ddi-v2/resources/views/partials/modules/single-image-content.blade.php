
<div class="page-section single-image-content @if ($c->section_effects)section-effects @endif">
  <div class="container">
    <div class="row no-gutter">
      <div class="col-sm-6">
        <div class="single-image-content__image" style="background-image: url('{{ $c->image }}');"></div>
      </div>
      <div class="col-sm-6">
        <div class="single-image-content__copy">
          <div class="single-image-content__pre-title">{{ $c->pre_title }}</div>
          <div class="single-image-content__title">{{ $c->title }}</div>
          <div class="single-image-content__content">{{ $c->content }}</div>
          <a href={{ $c->link['url'] }} class="single-image-content__link">{{ $c->link['title'] }}</a>
        </div>
      </div>
    </div>
  </div>
</div>
