@debug
@if($project_loop)

    <div class="page-section single-project">
        <div class="container-fluid" style="background-image: url({{ $single_project->project_image['url'] }})">
            {{ $single_project->project_title }}
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <img src=" {{ $single_project->project_image['url'] }} " class="img-fluid" />
                </div>
                <div class="col-md-4">
                    <div class=""> {{ $single_project->project_content }}</div>
                    <div class="">
                    <ul>
                        @foreach($single_project->project_skills as $skills)
                            <li>{{ $skills['skills_used'] }}</li>
                        @endforeach
                    </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endif