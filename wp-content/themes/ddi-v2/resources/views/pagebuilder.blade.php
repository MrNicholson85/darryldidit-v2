{{--
  Template Name: Pagebuilder Template
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
    @endforeach
@endsection
