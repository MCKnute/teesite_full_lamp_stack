<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$orders=get_orders_from_user($_SESSION['id']);
?>

    <div class="container">
      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="jumbotron">
      <table class="table table-striped">
        <thead>
          <th>Picture</th>
          <th>ID</th>
          <th>Product</th>
          <th>Quantity</th>
          <th>Action</th>
          <th>Price</th>
        </thead>
        <tbody>
<?php 
        foreach ($cart as $product) {
?>
          <tr>
            <td><img href="<?= 'nothing.jpg' ?>"></td>
            <td><?= $product['id']; ?></td>
            <td><?= $product['name']; ?></td>
            <td><?= $product['qty']; ?></td>
            <td>
              <ul class="nav nav-pills">
                  <li><a id="<?= $product['id']; ?>" class="remove" href="/Carts/remove_item/<?= $product['rowid']; ?>">Remove From Cart</a></li>
              </ul>
            </td>
            <td><?= $product['price']; ?></td>
          </tr>
<?php 
        } 
?>