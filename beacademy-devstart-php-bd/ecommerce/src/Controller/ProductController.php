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

    var_dump($result->fetch());
  }

  public function addAction():void 
  {
    prent::render('product/add');
  }

  public function editAction():void 
  {
    parent::render('product/edit');
  }

  public function removeaction():void 
  {
    
  }
}