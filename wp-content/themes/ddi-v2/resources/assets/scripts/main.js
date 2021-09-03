// import external dependencies
import 'jquery';
import 'slick-carousel/slick/slick';
import 'isotope-layout/js/isotope';

// Import everything from autoload
import "./autoload/**/*"

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import aboutUs from './routes/about';
import pagebuilder from './routes/pagebuilder';
import projects from './routes/projects';

/** Populate Router instance with DOM routes */
const routes = new Router({
  // All pages
  common,
  // Home page
  home,
  // About Us page, note the change from about-us to aboutUs.
  aboutUs,
  // Pagebuilder page.
  pagebuilder,
  // Projects Page
  projects,
});

// Load Events
jQuery(document).ready(() => routes.loadEvents());
