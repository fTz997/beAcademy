<?php

declare(strict_types=1);
namespace App\Controller;

class CategoryController extends AbstractController{
  public function categoryAction():void 
  {
    parent::render('category/category');
  }
}