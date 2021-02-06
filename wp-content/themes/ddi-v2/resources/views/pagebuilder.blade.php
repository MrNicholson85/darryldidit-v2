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
      @dump($acf_options->contact_message)
        @include('partials.modules.featured-projects')
      @endif
    @endforeach
@endsection
