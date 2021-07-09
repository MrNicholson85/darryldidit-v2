@if($single_project[0])
<div class="single-project">
  <div class="container-fluid single-project__project-hero" style="background-image: url({{ get_the_post_thumbnail_url() }})">
    <div class="row">
      <div class="single-project__hero-title">
        {{ $single_project[0]->project_title }}
      </div>
    </div>
  </div>
  <div class="page-section">
    <div class="container">
      <div class="row">
          @if ($single_project[0]->project_select == 'images')
            <div class="col-md-8">
              <div class="single-project__feat-image">
                @php $i = 0; @endphp
                @foreach($single_project[0]->project_images as $p)
                  <img src="{{ $p['project_image']['url'] }}" class="img-fluid" />
                  @php $i++; @endphp
                @endforeach
              </div>
            </div>
            <div class="col-md-4">
            <div class="single-project__feat-image-nav" data-slide_count="{{ $i }}">
              @php $i = 0; @endphp
              @foreach($single_project[0]->project_images as $p)
                <img src="{{ $p['project_image']['sizes']['medium'] }}" class="img-fluid" width=""/>
                @php $i++; @endphp
              @endforeach
            </div>
            </div>
          @else
            <div class="single-project__feat-video">
              {!! $single_project[0]->project_video !!}
            </div>
          @endif
      </div>
      <div class="single-project__project-content">
        <div class="row">
        <div class="col-md-8">
          <div class="single-project__content">
            {!! $single_project[0]->project_description !!}
          </div>
        </div>
         <div class="col-md-3">
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