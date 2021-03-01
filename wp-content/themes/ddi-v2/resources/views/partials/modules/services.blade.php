@if($c->title)
<div class="page-section--lg services @if ($c->section_effects)section-effects @endif" style="background-image: url('{{ $c->background_image }}');">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="services__section-title h2">   
          {{ $c->title }}
        </div>
        <div class="services__section-content">
          {{ $c->content }}
        </div>
      </div>
    </div>
    <div class="services__cards">
      <div class="row">
        <div class="col-sm-4">
          <div class="services__card-items">
            <div class="services__cards-icon"><i class="fas {{ $c->dev_icon }}"></i></div>
            <div class="services__cards-title">{{ $c->dev_title }}</div>
            <div class="services__cards-content">{{ $c->dev_copy }}</div>
            <div class="services__cards-link"><a href="{{ $c->dev_link['url'] }}">{{ $c->dev_link['title'] }}</a></div>
          </div>
        </div>

        <div class="col-sm-4">
          <div class="services__card-items">
            <div class="services__cards-icon"><i class="fas {{ $c->art_icon }}"></i></div>
            <div class="services__cards-title">{{ $c->art_title }}</div>
            <div class="services__cards-content">{{ $c->art_copy }}</div>
            <div class="services__cards-link"><a href="{{ $c->art_link['url'] }}">{{ $c->art_link['title'] }}</a></div>
          </div>
        </div>

        <div class="col-sm-4">
          <div class="services__card-items">
            <div class="services__cards-icon"><i class="fas {{ $c->arvr_icon }}"></i></div>
            <div class="services__cards-title">{{ $c->arvr_title }}</div>
            <div class="services__cards-content">{{ $c->arvr_copy }}</div>
            <div class="services__cards-link"><a href="{{ $c->arvr_link['url'] }}">{{ $c->arvr_link['title'] }}</a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endif
