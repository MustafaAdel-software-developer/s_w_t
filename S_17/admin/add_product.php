<?php
// define('BASE_PATH',"./");
require_once("../layouts/header.php");
?>

<form action="" enctype="multipart/form-data">
  <input type="text" name="name" aria-valuetext="name">
  <textarea name="description" cols="30" rows="10"></textarea>
  <input type="file" name="image" aria-valuetext="image">
  <input type="number" name="price" aria-valuetext="price">
  <input type="text" name="bar_code" aria-valuetext="bar_code">
  <select name="size_id" id="">size_id</select>
  <select name="color_id" id="">color_id</select>
  <select name="category_id" id="">category_id</select>
  <input type="number" name="discount" id="" aria-valuetext="discount">
  <input type="checkbox" name="is_recent" id="" aria-valuetext="is_recent">
  <input type="checkbox" name="is_recent" id="" aria-valuetext="is_featured">
  <input type="submit" value="save" aria-valuetext="save">
</form>