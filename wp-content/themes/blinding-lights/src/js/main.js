
import $ from 'jquery';
window.$ = window.jQuery = $;
import 'slick-carousel'

import bannerArrow from  "./modules/banner-arrow";
import  sectionSlider from "./modules/slider";
import  searchHeader from   "./modules/search-header";



jQuery(document).ready(function ($) {
    bannerArrow();
    sectionSlider();
    searchHeader();
});