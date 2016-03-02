<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

    <div class="container container-main">
       <div class="row">
        <div class="col-md-3">
            <h3 class="category_header">Products</h3>
            <div class="panel panel-default">
              <div class="panel-heading">Filter By</div>
              <!-- List group -->
              <div class="list-group">
                <a href="/category/featuredtees" id="featured" class="list-group-item ajax-list">
                  Featured
                </a>
                <a href="/category/popularshirts" id="mostpopular" class="list-group-item ajax-list">
                  Most Popular
                </a>
                <a href="/category/newshirts" id="newest" class="list-group-item ajax-list">
                  Newest
                </a>
                <a href="" id="cheapest" class="list-group-item  ajax-list">
                  Price: Low to High
                </a>
                <a href="/category/fancyshirts" id="fanciest" class="list-group-item ajax-list">
                  Price: High to Low
                </a>
                <a href="/category/alphabetical" id="alphabetical" class="list-group-item ajax-list">
                  Product Name
                </a>
              </div>
            </div>

            <!-- <div class="panel panel-default">
              <div class="panel-heading">Sizes</div>
              
              <div class="list-group">
                <a href="#" class="list-group-item">Women Small</a>
                <a href="#" class="list-group-item">Women Medium</a>
                <a href="#" class="list-group-item">Women Large</a>
                <a href="#" class="list-group-item">Women X-Large</a>
                <a href="#" class="list-group-item">Men Small</a>
                <a href="#" class="list-group-item">Men Medium</a>
                <a href="#" class="list-group-item">Men Large</a>
                <a href="#" class="list-group-item">Men X-Large</a>
              </div>
            </div> -->
        </div>
        <div class="col-md-9">

          <? if (isset($category) || isset($searchterm)) { 
            if (isset($category)) {
              $banner = $category;
            } else {
              $banner = "search";
            }

            ?>
            <img src="/assets/img/heroes/<?=$banner?>.png" id="small-hero-img" />
            <?
          } else { 
            ?>
            <img src="/assets/img/heroes/red-belt-mojo.jpg" id="hero-img" />
            <?
          } ?>

          
        
          <h3 id="filterheadliner">View our amazing selection of tees!</h3>
          
          <div id="ajaxproducts">

          <h4>Loading...</h4>
            
          

          </div>
        </div>
      </div>

