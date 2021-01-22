
@debug
<div class="page-section featured-project">
  <div class="container">
    <div class="row">
      @dump($c)
      @foreach ($c->projects as $p )
        <div class="col-md-3">
          <div class="featured-project__card" style="background-image: url('{{ $c->project_image['url'] }}')">
            {{ $c->title }}     
          </div>         
        </div>
      @endforeach
    </div>
  </div>
</div>