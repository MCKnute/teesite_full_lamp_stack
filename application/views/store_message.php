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
                <a href="/category/alphabetical" id="alphabetical" class="list-group-item">
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
          <img src="/assets/img/heroes/red-belt-mojo.jpg" id="hero-img" />
          <h4>
            <? if (isset($searchterm)) {
              echo "Search results for: $searchterm";
            } else {
              echo "View our tees!";
            }
            ?>

          </h4>
          <div class="row">
            <?
              $count = 0; 
              foreach($products as $product) { ?>
                    <div class="col-xs-6 col-md-3">
                        <a href="/product/<?=$product['id']?>" class="thumbnail">
                          <? $imgurl = base_url('/assets/img/products/'.$product['id'].'-med.png')?>
                          <img src="<?=$imgurl;?>" alt="<?=$product['name']?>">
                          <h5><?=$product['name']?><br /><strong>$<?=$product['price']?></strong></h5>
                        </a>
                      </div> <?
                $count++;
                if ($count == 4){ ?>
                  </div>
                  <div class="row">
                  <?
                  $count = 0;
                  }
              } ?>
          </div>
<!--           <div class="row text-center">
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
          </div> -->
        </div>
      </div>

