<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

    <div class="container container-main">
       <div class="row">
        <div class="col-md-3">
            
            <nav class="navbar navbar-default blend-with-bg" role="navigation">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#vert-navbar-collapse" aria-controls="vert-navbar-collapse">
                  <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="category_header visible-xs " href="/">Find Tees</a>
              </div>

              <div id="vert-navbar-collapse" class="navbar-collapse collapse"> 
                <a class="category_header hidden-xs bottomizer" href="/">Find Tees</a>
              <!-- List group -->
                <ul class="nav nav-stacked">

                  <li class="blend-with-bg">
                    <!-- <div class="row">
                    <div class="col-lg-12"> -->
                      <form class="list-group-item" id="searchbar" role="search" action="/search/searchterm" method="post">
                       <div class="input-group">
                           
                           <input type="text" class="form-control" name="keyword" id="searchingfor" style="display: inline-block" placeholder="Search Now">
                           <span class="input-group-btn">
                             <button type="submit" class="btn btn-default">&#128269;</button>
                           </span>
                       </div>
                     </form>
                    <!-- </div>
                    </div> -->
                  </li>

                  <li>
                    <a href="/category/featuredtees" id="featured" class="list-group-item ajax-list">
                    Featured
                    </a>
                  </li>
                  <li>
                    <a href="/category/popularshirts" id="mostpopular" class="list-group-item ajax-list">
                    Most Popular
                    </a>
                  </li>
                  <li>
                    <a href="/category/newshirts" id="newest" class="list-group-item ajax-list">
                    Newest
                    </a>
                  </li>
                  <li>
                    <a href="" id="cheapest" class="list-group-item  ajax-list">
                      Price: Low to High
                    </a>
                  </li>
                  <li>
                    <a href="/category/fancyshirts" id="fanciest" class="list-group-item ajax-list">
                      Price: High to Low
                    </a>
                  </li>
                  <li>
                    <a href="/category/alphabetical" id="alphabetical" class="list-group-item ajax-list">
                      Product Name
                    </a>
                  </li>
                </ul>
            <!-- </div> -->
            </div>
          </nav>
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

              include 'partials/carousel.php';

          } ?>

          
        
          <h3 id="filterheadliner">View our amazing selection of tees!</h3>
          
          <div id="ajaxproducts">

          <h4>Loading...</h4>
            
          

          </div>
        </div>
      </div>

