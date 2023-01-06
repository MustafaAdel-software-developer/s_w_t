<?php
require_once("../logic/products.php");
require_once("./layouts/header.php");
$products = getProducts();
?>
<div class="container-fluid  row">
  <table class="table">
    <thead>
      <tr>
        <th>id</th>
        <th>product name</th>
        <th>description</th>
        <th>image</th>
        <th>size</th>
        <th>color</th>
        <th>price</th>
        <th>amount</th>
      </tr>
    </thead>
    <tbody class="align-middle">
      <?php
      foreach($products as $p){
      ?>
      <tr>
        <td class="align-middle"><?=$p['id']?></td>
        <td class="align-middle"><?=$p['name']?></td>
        <td class="align-middle"><?=$p['description']?></td>
        <td class="align-middle"><img src="<?=$p['image_url']?>" alt="" style="width: 75px;" ></td>
        <td><?=$p['size_name']?></td>
        <td><?=$p['color_name']?></td>
        <td>$<?=$p['price']?></td>
        <td>amount</td>
        <td class="align-middle"><button type="button" class="btn btn-sm btn-success">add</button></td>
        <td class="align-middle"><button type="button" class="btn btn-sm btn-primary">edit</button></td>
        <td class="align-middle"><button type="button" class="btn btn-sm btn-danger">delete</button></td>
      </tr>
      <?php
      }
      ?>
    </tbody>
  </table>
</div>