{{--
  Template Name: Projects Template
--}}

@extends('layouts.app')
  <div class="projects">
    <div class="projects__single-page-hero">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h2>My Work</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="page-section"> 
      <div class="container">
      <div class="row">
        @foreach($project_loop as $project_item)
          <div class="col-md-6">
            <a class="projects__link" href="{{ $project_item->permalink }}">
              <div class="projects__cards" style="background-image: url({{ $project_item->project_image['url'] }});">
                <span class="projects__title">{{ $project_item->title }}</span>
              </div>
            </a>
          </div>
        @endforeach
      </div>
      </div>
    </div>
  </div>

