{{--
  Template Name: Front Page Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.modules.hero')
    @include('partials.modules.skills')
    @include('partials/modules/quotes')
  @endwhile
@endsection
