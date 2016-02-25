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
                <a href="#" class="list-group-item">
                  Men's Small
                </a>
                <a href="#" class="list-group-item">Women's Small</a>
              </div>
            </div>
        </div>

        <div class="col-md-9">
          <div class="row">
            <div class="col-md-6">
          <img src="" id="product-img" />
            </div> <div class="col-md-6">
            <h3 class="product_header"><?=$productname?></h3>
            <p><?=$proddescrip?></p>
          </div>
          </div>
          <h4>Other Tees You May Like</h4>
          <div class="row">
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
            </div>
          <div class="col-xs-6 col-md-3">
              <a href="#" class="thumbnail">
                <img src="/assets/img/white.png" alt="...">
              </a>
            </div>
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

