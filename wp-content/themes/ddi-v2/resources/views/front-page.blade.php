{{--
  Template Name: Front Page Template
--}}

@extends('layouts.app')
@section('content')
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
      @if($c->block_type == 'featured_projects')
        @include('partials.modules.featured-projects')
      @endif
      @if ($c->block_type == 'info_module')
          @include('partials.modules.info-module')
      @endif
      @if ($c->block_type == 'services')
        @include('partials.modules.services')
      @endif
      @if ($c->block_type == 'single_image_content')
        @include('partials.modules.single-image-content')
      @endif
      @if ($c->block_type == 'basic_content')
        @include('partials.modules.basic-content')
      @endif
      @if ($c->block_type == 'fifty_fifty_content')
        @include('partials.modules.fifty-fifty-content')
      @endif
    @endforeach
@endsection
