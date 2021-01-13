{{--
  Template Name: Project Template
--}}


@extends('layouts.app')

@section('content')
  @while (have_posts()) @php the_post() @endphp
    @debug
  @endwhile
@endsection
