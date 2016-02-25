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
                <a href="#" class="list-group-item active">
                  Most Popular
                </a>
                <a href="#" class="list-group-item">Newest</a>
                <a href="#" class="list-group-item">Cheapest</a>
                <a href="#" class="list-group-item">SALE!</a>
              </div>
            </div>

            <div class="panel panel-default">
              <div class="panel-heading">Sizes</div>
              <!-- List group -->
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
            </div>
        </div>

        <div class="col-md-9">
          <div class="row productdisplay">
            <div class="col-md-6">
              <img src="/assets/img/products/<?=$productid?>-large.png" id="product-img" title="<?=$productname?>" />
              <img src="/assets/img/products/<?=$productid?>-small.png" class="product-tmb" title="<?=$productname?> Main" /> 
              <img src="" class="product-tmb" title="<?=$productname?> View Front" /> 
              <img src="" class="product-tmb" title="<?=$productname?> View Back" /> 
            </div> 
            <div class="col-md-6">
            <h3><?=$productname?></h3>
            <p><?=$proddescrip?></p>


        <!-- Start Add To Cart -->
          <div class="panel panel-default add-to-cart">
            <div class="panel-body">
              <h2>$19.98</h2>
              <form class="form-horizontal">
                <div class="form-group">
                    <label for="quantity" class="col-sm-4 control-label text-left">Women Small</label>
                    <div class="col-sm-2">
                      <select class="form-control">
                        <option selected="selected">0</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                      </select>
                    </div>
                    <label for="quantity" class="col-sm-4 control-label text-left">Men Small</label>
                    <div class="col-sm-2">
                      <select class="form-control">
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
                    <label for="quantity" class="col-sm-4 control-label text-left">Women Med</label>
                    <div class="col-sm-2">
                      <select class="form-control">
                        <option selected="selected">0</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                      </select>
                    </div>
                    <label for="quantity" class="col-sm-4 control-label text-left">Men Medium</label>
                    <div class="col-sm-2">
                      <select class="form-control">
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
                    <label for="quantity" class="col-sm-4 control-label text-left">Women Large</label>
                    <div class="col-sm-2">
                      <select class="form-control">
                        <option selected="selected">0</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                      </select>
                    </div>
                    <label for="quantity" class="col-sm-4 control-label text-left">Men Large</label>
                    <div class="col-sm-2">
                      <select class="form-control">
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
                    <label for="quantity" class="col-sm-4 control-label text-left">Women X-Lar</label>
                    <div class="col-sm-2">
                      <select class="form-control">
                        <option selected="selected">0</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                      </select>
                    </div>
                    <label for="quantity" class="col-sm-4 control-label text-left">Men X-Large</label>
                    <div class="col-sm-2">
                      <select class="form-control">
                        <option selected="selected">0</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                      </select>
                    </div>
                  </div>
                  <h4>Subtotal:</h4>
                  <h2>$19.98</h2>
                <button class="btn btn-lg btn-success navbar-btn center-block"><span class="glyphicon glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Add To Cart</button>
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

          <div class="row text-center">
            <nav>
              <ul class="pagination">
                <li>
                  <a href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                  </a>
                </li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li>
                  <a href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>

