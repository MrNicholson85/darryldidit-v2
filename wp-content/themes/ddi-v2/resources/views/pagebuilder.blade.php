{{--
  Template Name: Pagebuilder Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @debug
    @foreach($page_builder as $c)
@dump($page_builder);
    
      @if ($c->block_type == 'hero')
    
        @include('partials.modules.hero')
      @endif
    @endforeach
  @endwhile
@endsection
