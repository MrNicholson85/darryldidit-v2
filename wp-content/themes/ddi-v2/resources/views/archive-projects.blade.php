{{--
  Template Name: Projects Template
--}}

@extends('layouts.app')
  <div class="projects">
    @php
      $category = get_queried_object();
      $categories = get_terms( 'project_type', array('hide_empty' => true) );
    @endphp
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
        <div class="row grid">
          @foreach($project_loop as $project_item)
            <div class="col-md-6 project__item" data-tag="{{ $project_item->project_type }}">
              <a class="projects__link" href="{{ $project_item->permalink }}">
                <div class="projects__cards" style="background-image: url({{ $project_item->project_image['project_media']['project_images'][0]['project_image']['sizes']['large'] ? $project_item->project_image['project_media']['project_images'][0]['project_image']['sizes']['large'] : 'https://via.placeholder.com/300' }});">
                  <span class="projects__title">{{ $project_item->title }}</span>
                </div>
              </a>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>