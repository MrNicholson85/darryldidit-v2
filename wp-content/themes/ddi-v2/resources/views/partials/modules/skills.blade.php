<section class="page-section skills @if ($section_effects)section-effects @endif">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-6">
        <div class="h2">
          {!! $title !!}
        </div>
        {!! $description !!}
      </div>
      <div class="col-md-8 col-sm-6">
        <div class="skills__content">
          <div class="h2">
            {!! $skill_title !!}
          </div>
          <div class="skills__list">
            @forelse ($skill_list as $s)
              <div class="skills__items">
                <div class="skills__skill-title">
                  {{ $s->skill_name }}
                </div>
                <div class="skills__skill-level">
                  <div class="skills__progress skills__progress-{{ $s->skill_level }}">
                    <div class="skills__progress-display">{{ $s->skill_level }}0%</div>
                  </div>
                </div>
              </div>
            @empty
            @endforelse
          </div>
        </div>
      </div>
    </div>    
  </div>
</section>