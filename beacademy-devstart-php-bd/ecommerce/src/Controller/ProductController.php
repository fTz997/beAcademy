<?php

declare(strict_types=1);
namespace App\Controller;
use App\Connection\Connection;

class ProductController extends AbstractController 
{
  public function listAction():void 
    {
    $con = Connection::getConnection();
    $result = $con->prepare('SELECT * FROM tb_product');
    $result->execute();
    parent::render('product/list', $result);

    }

  public function addAction():void 
  {
    $con = Connection::getConnection();

    if($_POST){
      $name = $_POST['name'];
      $description = $_POST['description'];
      $picture = $_POST['picture'];
      $value = $_POST['value'];
      $quantity = $_POST['quantity'];
      $categoryId = $_POST['category'];
      $createdAt = date('Y-m-d H:i:s');

      $query = "INSERT INTO tb_product (name, description, picture, value, quantity, category_id, created_at) VALUES ('{$name}', '{$description}','{$picture}', '{$value}', '{$quantity}', '{$categoryId}', '{$createdAt}');";

      $result = $con->prepare($query);
      $result->execute();
    } 
    
    $result = $con->prepare("SELECT * FROM tb_category");
    $result->execute(); 
    parent::render('product/add', $result);
  }

  public function removeaction():void 
  {
    $id = $_GET['id'];
    $con = Connection::getConnection();
    $result = $con->prepare("DELETE FROM tb_product WHERE id='{$id}'");
    $result->execute();

    parent::renderMessage("Produto excluido");
  }

  public function updateAction():void 
  {
    $id = $_GET['id'];
    $con = Connection::getConnection();
   
    // $categories = $con->prepare("SELECT * FROM tb_category");
    // $categories->execute();

    $product = $con->prepare("SELECT * FROM tb_product WHERE id='{$id}'");
    $product->execute();

    if($_POST){
      $name = $_POST['name'];
      $description = $_POST['description'];
      $value = $_POST['value'];
      $picture = $_POST['picture'];
      $quantity = $_POST['quantity'];

      $query = "UPDATE tb_product SET name='{$name}', description='{$description}', value='{$value}', picture='{$picture}', quantity='{$quantity}'
      WHERE id='{$id}'" ;

      $resultUpdate = $con->prepare($query);
      $resultUpdate->execute();

      parent::renderMessage("Produto editado");
    }
    
    parent::render('product/edit', [
      'product' => $product->fetch(\PDO::FETCH_ASSOC),
    ] );
  }
} 