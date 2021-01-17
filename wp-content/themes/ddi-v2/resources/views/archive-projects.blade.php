{{--
  Template Name: Projects Template
--}}

@extends('layouts.app')

@section('content')
  <div class="container page-section projects">
    <div class="row">
        @foreach($project_loop as $project_item)
          <div class="col-md-4">
            <a class="projects__link" href="{{ $project_item->permalink }}">
              <div class="projects__cards" style="background-image: url({{ $project_item->project_image['url'] }});">
                <span class="projects__title">{{ $project_item->title }}</span>
              </div>
            </a>
          </div>
        @endforeach
    </div>
  </div>
@endsection
