<div class="page-section page-section--lg skills @if ($c->section_effects)section-effects @endif">
  <div class="container">
    <div class="skills__header">
      <div class="row">
        <div class="col-sm-12">
          <h3 class="section-title">{!! $c->about_title !!}</h3>
          <div class="skills__description"> {!! $c->about_description !!}</div>
        </div>
      </div>
    </div>
    <hr />
    <div class="skills__content">
      <div class="skills__list">
        <div class="row">
          @forelse ($c->skill_list as $s)
            <div class="col-sm-4">
              <div class="skills__items">
                <div class="skills__skill-title">{!! $s['skill_name'] !!}</div>
                <div class="skills__skill-level">
                  <div class="skills__progress skills__progress-{{ $s['skill_level'] }}">
                    <div class="skills__progress-display">{{ $s['skill_level'] }}0%</div>
                  </div>
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