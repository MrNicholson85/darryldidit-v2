@if($single_project)
<div class="single-project">
  <div class="container-fluid single-project__project-hero" style="background-image: url({{ $single_project->project_image['url'] }})">
    <div class="container">
      <div class="row">
        <div class="single-project__hero-title">
          {{ $single_project->project_title }}
        </div>
      </div>
    </div>
  </div>
  <div class="page-section">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="single-project__feat-image">
            <img src="{{ $single_project->project_image['url'] }}" class="img-fluid" />
          </div>
        </div>
        <div class="col-md-4">
          <div class="single-project__content"> {{ $single_project->project_content }}</div>
            <ul class="single-project__skill-list">
              @foreach($single_project->project_skills as $skills)
                <li class="single-project__skill-item">{{ $skills['skills_used'] }}</li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
@endif