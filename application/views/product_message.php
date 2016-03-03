<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

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

                  <li>
                    <!-- <div class="row">
                    <div class="col-lg-12"> -->
                            <form class="list-group-item" id="searchbar2" role="search" action="/" method="post">
                             <div class="input-group">
                                <input type="hidden" name="productspage" value="TRUE" />
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
                    <a href="/products_to_category/featured" id="featured" class="list-group-item static-list">
                    Featured
                    </a>
                  </li>
                  <li>
                    <a href="/prggoducts_to_category/mostpopular" id="mostpopular" class="list-group-item static-list">
                    Most Popular
                    </a>
                  </li>
                  <li>
                    <a href="/products_to_category/newest" id="newest" class="list-group-item static-list">
                    Newest
                    </a>
                  </li>
                  <li>
                    <a href="/products_to_category/cheapest" id="cheapest" class="list-group-item static-list">
                    Price: Low to High
                    </a>
                  </li>
                  <li>
                    <a href="/products_to_category/fanciest" id="fanciest" class="list-group-item static-list">
                    Price: High to Low
                    </a>
                  </li>
                  <li>
                    <a href="/products_to_category/alphabetical" id="alphabetical" class="list-group-item static-list">
                    Product Name
                    </a>
                  </li>
                </ul>
            <!-- </div> -->
            </div>
          </nav>
        </div>

        <div class="col-md-9">
          <div class="row productdisplay">
            <div class="col-md-6">

              <?
              $imagestart = "assets/img/products/";

              if(file_exists($imagestart.$thisid."-large-2.png"))
              { ?>
                <img src="/assets/img/products/<?=$thisid?>-large-2.png" id="product-img-lrg" title="<?=$thisproduct['name']?>" />
              <? } else { ?>

              <img src="/assets/img/products/<?=$thisid?>-large.png" id="product-img-lrg" title="<?=$thisproduct['name']?>" />

              <? }


              $imagestart = "assets/img/products/";

              if(file_exists($imagestart.$thisid."-small.png"))
              { ?>
                <img src="/<?=$imagestart.$thisid."-small.png"?>" class="product-tmb" id="prodthumb1" prodid="<?=$thisid?>" />
              <? }
              else
              {} 

              if(file_exists($imagestart.$thisid."-small-2.png"))
              { ?>
                <img src="/<?=$imagestart.$thisid."-small-2.png"?>" class="product-tmb" id="prodthumb2" prodid="<?=$thisid?>"/>
              <? }
              else
              {} 

              if(file_exists($imagestart.$thisid."-small-3.png"))
              { ?>
                <img src="/<?=$imagestart.$thisid."-small-3.png"?>" class="product-tmb" id="thumb3" prodid="<?=$thisid?>"/>
              <? }
              else
              {} 

              if(file_exists($imagestart.$thisid."-small-4.png"))
              { ?>
                <img src="/<?=$imagestart.$thisid."-small-4.png"?>" class="product-tmb" id="thumb4" prodid="<?=$thisid?>" />
              <? }
              else
              {} 

              ?>
            </div> 
            <div class="col-md-6">
            <h3><?=$thisproduct['name']?></h3>
            <p><?=$thisproduct['description']?></p>


        <!-- Start Add To Cart -->
          <div class="panel panel-default add-to-cart">
            <div class="panel-body">
              <h2>$<?=$thisproduct['price']?></h2>
              <form class="form-horizontal" method="post" action="/Carts/add_items">
  
                  <div class="row control-label">
                    <h4 class="col-sm-6">Women's</h4>
                    <h4 class="col-sm-6">Men's</h4>
                  </div>
                  <div class="form-group">
                    <input type="hidden" name="productid" value="<?=$thisid?>" />
                    <input type="hidden" name="productname" value="<?=$thisproduct['name']?>" />
                    <input type="hidden" name="price" value="<?=$thisproduct['price']?>" />
                    <label for="small_w" class="col-sm-3 control-label text-left">Small</label>
                    <div class="col-sm-3">
                      <select class="form-control" name="small_w">
                        <option selected="selected">0</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                      </select>
                       <!-- <input type="number" name="small_w" min="0" max="5" class="form-control"> -->
                    </div>
                    <label for="small_m" class="col-sm-3 control-label text-left">Small</label>
                    <div class="col-sm-3">
                      <select class="form-control" name="small_m">
                        <option selected="selected">0</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                      </select>
                    </div>
                  </div>
                <div class="form-group">
                    <label for="medium_w" class="col-sm-3 control-label text-left">Medium</label>
                    <div class="col-sm-3">
                      <select class="form-control" name="medium_w">
                        <option selected="selected">0</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                      </select>
                    </div>
                    <label for="medium_m" class="col-sm-3 control-label text-left">Medium</label>
                    <div class="col-sm-3">
                      <select class="form-control" name="medium_m">
                        <option selected="selected">0</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                      </select>
                    </div>
                  </div>
                <div class="form-group">
                    <label for="large_w" class="col-sm-3 control-label text-left">Large</label>
                    <div class="col-sm-3">
                      <select class="form-control" name="large_w">
                        <option selected="selected">0</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                      </select>
                    </div>
                    <label for="large_m" class="col-sm-3 control-label text-left">Large</label>
                    <div class="col-sm-3">
                      <select class="form-control" name="large_m">
                        <option selected="selected">0</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                      </select>
                    </div>
                  </div>
                <div class="form-group">
                    <label for="xlarge_w" class="col-sm-3 control-label text-left">X-Large</label>
                    <div class="col-sm-3">
                      <select class="form-control" name="xlarge_w">
                        <option selected="selected">0</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                      </select>
                    </div>
                    <label for="xlarge_m" class="col-sm-3 control-label text-left">X-Large</label>
                    <div class="col-sm-3">
                      <select class="form-control" name="xlarge_m">
                        <option selected="selected">0</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                      </select>
                    </div>
                  </div>
                  <!-- <h4>Subtotal:</h4>
                  <h2>$###.##</h2> -->
                <button type="submit" class="btn btn-lg btn-success navbar-btn center-block"><span class="glyphicon glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Add To Cart</button>
              </form>
            </div>
          </div>
        <!-- End Add To Cart -->

          </div>
          </div>
          <h4>Other Tees You May Like</h4>
          <div class="row">

            <? foreach($suggestprods as $suggestprod) { ?>
              <div class="col-xs-6 col-md-3">
                  <a href="<?=$suggestprod['id']?>" class="thumbnail">
                    <img src="/assets/img/products/<?=$suggestprod['id']?>-med.png" alt="...">
                  </a>
                </div>
            <? } ?>
         <!--  <div class="col-xs-6 col-md-3">
              <a href="#" class="thumbnail">
                <img src="/assets/img/white.png" alt="...">
              </a>
            </div>
          <div class="col-xs-6 col-md-3">
              <a href="#" class="thumbnail">
                <img src="/assets/img/white.png" alt="...">
              </a>
            </div>
          <div class="col-xs-6 col-md-3">
              <a href="#" class="thumbnail">
                <img src="/assets/img/white.png" alt="...">
              </a>
            </div>
          <div class="col-xs-6 col-md-3">
              <a href="#" class="thumbnail">
                <img src="/assets/img/white.png" alt="...">
              </a>
            </div> -->
          </div>


        </div>
      </div>

