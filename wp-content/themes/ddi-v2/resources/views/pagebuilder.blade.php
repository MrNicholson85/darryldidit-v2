{{--
  Template Name: Pagebuilder Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
  @debug
  {{ $intro }}
  {{ $components }}
  @endwhile
@endsection
