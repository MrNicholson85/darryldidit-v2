<section class="page-section skills">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="h2">
          {!! $title !!}
        </div>
        {!! $description !!}
      </div>
      <div class="col-md-6">
        @foreach (get_field('skill_list') as $skills )
          {{ $skills['skill_name'] }}
          {{ $skills['skill_level'] }}
        @endforeach
      </div>
    </div>    
  </div>
</section>