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
                <a href="/" id="featured" class="list-group-item">
                  Featured
                </a>
                <a href="/category/popularshirts" id="mostpopular" class="list-group-item">
                  Most Popular
                </a>
                <a href="/category/newshirts" id="newest" class="list-group-item">
                  Newest
                </a>
                <a href="/category/cheapshirts" id="cheapest" class="list-group-item">
                  Price: Low to High
                </a>
                <a href="/category/fancyshirts" id="fanciest" class="list-group-item">
                  Price: High to Low
                </a>
              </div>
            </div>

       <!--     <div class="panel panel-default">
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
          <div class="row productdisplay">
            <div class="col-md-6">
              <img src="/assets/img/products/<?=$thisid?>-large.png" id="product-img" title="<?=$thisproduct['name']?>" />
              <img src="/assets/img/products/<?=$thisid?>-small.png" class="product-tmb" title="<?=$thisproduct['name']?> Main" /> 
              <img src="" class="product-tmb" title="<?=$thisproduct['name']?> View Front" /> 
              <img src="" class="product-tmb" title="<?=$thisproduct['name']?> View Back" /> 
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

