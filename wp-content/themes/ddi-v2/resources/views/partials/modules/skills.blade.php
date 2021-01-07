<section class="page-section skills">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="h2">
          {!! $title !!}
        </div>
        {!! $description !!}
      </div>
      <div class="col-md-8">
        <div class="h2">
          {!! $skill_title !!}
        </div>
        
        <div class="skills__list">
          @foreach (get_field('skill_list') as $skills)
            <div class="skills__items">
              <div class="skills__skill-title">
                {{ $skills['skill_name']}}
              </div>
              <div class="skills__skill-level">
                <div class="skills__progress skills__progress-{{ $skills['skill_level']}}">
                  <div class="skills__progress-display">{{ $skills['skill_level'] }}0%</div>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>    
  </div>
</section>