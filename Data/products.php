<?php 

require_once __DIR__ . "/../Models/Category.php";

require_once __DIR__ . "/../Models/ProductBed.php";
require_once __DIR__ . "/../Models/ProductFood.php";
require_once __DIR__ . "/../Models/ProductToy.php";

$category_dog = new Category("Cane", "fa-solid fa-dog");
$category_cat = new Category("Gatto", "fa-solid fa-cat");

$products = [
  new ProductBed("Cuccia deluxe", 80.00, $category_dog, "KG", 12, "Cotton"),
  new ProductBed("Cuccia deluxe", 60.00, $category_cat, "KG", 8, "Cotton"),

  new ProductFood("Croccette Cane", 15.00, $category_dog, "g", 800, "Secco"),
  new ProductFood("Scatolette Gatto", 3.15, $category_cat, "g", 300, "Umido"),

  new ProductToy("Pollo di plastica", 5.50, $category_dog, "Plastica"),
  new ProductToy("Topolino", 1.20, $category_cat, "Plastica")
];

$products_cat = array_filter($products, fn($product) => $product->getCategory()->getName() == "Gatto");
$products_dog = array_filter($products, fn($product) => $product->getCategory()->getName() == "Cane");

?>