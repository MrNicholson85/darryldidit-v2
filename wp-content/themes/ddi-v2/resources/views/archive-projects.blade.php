{{--
  Template Name: Projects Template
--}}

@extends('layouts.app')

@section('content')
  <div class="container page-section projects">
    <div class="row">
        @foreach($project_loop as $project_item)
        <div class="col-md-4">
          <a href="{{ $project_item->permalink }}">
            <img src="{{ $project_item->project_image['url'] }}" class="img-fluid" />
            {{ $project_item->title }}
          </a>
        </div>
        @endforeach
    </div>
  </div>
@endsection
