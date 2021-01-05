{{--
  Template Name: Front Page Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.hero')
    @include('partials.skills')
  @endwhile
@endsection
