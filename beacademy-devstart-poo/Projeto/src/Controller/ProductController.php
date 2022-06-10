<?php

declare(strict_types=1);
namespace App\Controller;

class ProductController extends AbstractController {
  public function listAction():void 
  {
    parent::render('product/list.php');
  }

  public function addAction():void 
  {
    prent::render('product/add.php');
  }

  public function editAction():void 
  {
    parent::render('product/edit.php');
  }
}