@if($single_project[0])
<div class="single-project">
  <div class="container-fluid single-project__project-hero" style="background-image: url({{ $single_project[0]->project_images[0]['project_image'] }})">
    <div class="row">
      <div class="single-project__hero-title">
        {{ $single_project[0]->project_title }}
      </div>
    </div>
  </div>
  <div class="page-section">
    <div class="container">
      <div class="row">
      @debug
        <div class="col-md-8">
          @if ($single_project[0]->project_select == 'images')
            @dump($single_project[0]->project_images[0]['project_image']['url'])
            <div class="single-project__feat-image">
              @php $i = 0; @endphp
              @foreach($single_project[0]->project_images as $p)
                
                <img src="{{ $p[0]->project_image[0]["project_image"]['url'] }}" class="img-fluid" />
                @php $i++; @endphp
              @endforeach
            </div>
            <div class="single-project__test">
              @php $i = 0; @endphp
              @foreach($single_project[0]->project_images as $p)
                <img src="{{ $p['project_image'] }}" class="img-fluid" width=""/>
                @php $i++; @endphp
              @endforeach
            </div>
            @if($i > 1)
              <div class="slider-nav slider-prev"><i class="fas fa-chevron-left"></i></div>
              <div class="slider-nav slider-next"><i class="fas fa-chevron-right"></i></div>
            @endif
          @else
            <div class="single-project__feat-video">
              {!! $single_project[0]->project_video !!}
            </div>
          @endif
        </div>
        <div class="col-md-4">
          <div class="single-project__content"> {!! $single_project[0]->project_description !!}</div>
            <ul class="single-project__skill-list">
              @foreach($single_project[0]->project_skills as $skills)
                <li class="single-project__skill-item">{{ $skills['skills_used'] }}</li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
@endif