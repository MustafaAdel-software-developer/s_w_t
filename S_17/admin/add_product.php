<?php
define('BASE_PATH', '../');
require_once("../layouts/header.php");
?>
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <form class="row" enctype="multipart/form-data" method="GET">
          <div>
            <input type="text" class="form-control" name="name" aria-valuetext="name" >
          </div>
          <div>
            <textarea name="description" cols="30" rows="10"></textarea>
          </div>
          <div>
            <input type="file" name="image" aria-valuetext="image">
          </div>
          <div>
            <input type="number" name="price" aria-valuetext="price">
          </div>
          <div>
            <input type="text" name="bar_code" aria-valuetext="bar_code">
          </div>
          <div>
            <select name="size_id" id="">size_id</select>
          </div>
          <div>
            <select name="color_id" id="">color_id</select>
          </div>
          <div>
            <select name="category_id" id="">category_id</select>
          </div>
          <div>
            <input type="number" name="discount" id="" aria-valuetext="discount">
          </div>
          <div>
            <input type="checkbox" name="is_recent" id="" aria-valuetext="is_recent">
          </div>
          <div>
            <input type="checkbox" name="is_recent" id="" aria-valuetext="is_featured">
          </div>
          <div>
            <input type="submit" value="save" aria-valuetext="save">
            </div>        
        </form>
      </div>
    </div>
</section>       