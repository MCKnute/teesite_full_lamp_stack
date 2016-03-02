
<!-- HTML Partial Start -->

<div class="row">
  <?php
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
        <? $count = 0; 
      }
    } ?>
</div>