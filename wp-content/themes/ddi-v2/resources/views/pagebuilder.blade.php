{{--
  Template Name: Pagebuilder Template
--}}

@extends('layouts.app')
@section('content')
  @while(have_posts()) @php the_post() @endphp
    @foreach($page_builder as $c)
      @if ($c->block_type == 'hero')
        @include('partials.modules.hero')
      @endif
      @if($c->block_type == 'content_skills')
        @include('partials.modules.skills')
      @endif
      @if($c->block_type == 'quotes')
        @include('partials.modules.quotes')
      @endif
      @if($c->block_type == 'feature_projects')
        @include('partials.modules.featured-projects')
      @endif
    @endforeach
  @endwhile
@endsection
