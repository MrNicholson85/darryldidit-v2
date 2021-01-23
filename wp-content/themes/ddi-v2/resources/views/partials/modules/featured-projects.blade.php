<div class="page-section featured-project">
  <div class="container">
  <div class="row">
      <div class="col-md-12">
        <h3 class="section-title">Things I did</h3>
      </div>
    </div>
    <div class="row">
      @forelse ($project_loop as $p )
        <div class="col-md-3">
          <a class="featured-project__link" href="{{$p->permalink}}">
            <div class="featured-project__cards" style="background-image: url('{{ $p->project_image['url'] }}')">
            <span class="featured-project__title">{{ $p->title }}</span>     
          </div>  
          </a>       
        </div>
      @empty
      @endforelse
    </div>
  </div>
</div>