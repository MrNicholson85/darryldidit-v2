@if($single_project[0])
<div class="single-project">
  <div class="container-fluid single-project__project-hero" style="background-image: url({{ $single_project[0]->project_images[0]['project_image']['url'] }})">
    <div class="row">
      <div class="single-project__hero-title">
        {{ $single_project[0]->project_title }}
      </div>
    </div>
  </div>
  <div class="page-section">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          @if ($single_project[0]->project_select == 'images')
            <div class="single-project__feat-image">
              @foreach($single_project[0]->project_images as $p)
                <img src="{{ $p['project_image']['url'] }}" class="img-fluid" />
              @endforeach
            </div>
            <div class="slider-nav slider-prev"><i class="fas fa-chevron-left"></i></div>
            <div class="slider-nav slider-next"><i class="fas fa-chevron-right"></i></div>
          @else
            <div class="single-project__feat-video">
              {!! $single_project[0]->project_video !!}
            </div>
          @endif
        </div>
        <div class="col-md-4">
          <div class="single-project__content"> {{ $single_project[0]->project_description }}</div>
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