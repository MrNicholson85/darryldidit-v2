@php
$category = get_category( get_query_var( 'cat' ) );
$cat_id = $category->cat_ID;
$cat_slug = $category->slug;
@endphp
@extends('layouts.app')
  <div class="projects">
    <div class="projects__single-page-hero">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h2>{{ single_cat_title() }}</h2>
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
@php
  $category = get_queried_object();
  $current_category_arg =  $category->name;

  $contractor = new WP_Query( array(
      'post_type' => 'contractor',
      'tax_query' => array(
          array (
              'taxonomy' => 'contractor_category',
              'field' => 'slug',
              'terms' => $current_category_arg,
          )
      ),
  ) );

    $categories = get_terms( 'contractor_category', array('hide_empty' => true) );
  foreach($categories as $category) {
     echo '<a class="btn  btn-default " href="' . get_category_link($category->term_id) . '">' . $category->name . '</a>';
  }
@endphp