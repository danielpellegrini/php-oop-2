<?php

class Eshop
{
  protected $name;

  private $products = [];

  public function __construct($name)
  {
    $this->name = $name;
  }

  public function addProduct(Products $products) {
    $this->products[] = $products;
  }

  public function getProducts() {
    return $this->products;
  }

}

class Products
{
  protected $type;

  protected $category;

  protected $brand;

  public function __construct(string $type, string $category, string $brand)
  {
    $this->type = $type;
    $this->category = $category;
    $this->brand = $brand;
  }

}

class Tech extends Products 
{
  private $id;

  protected $model;

  protected $image;

  protected $price;

  public function __construct(int $id, string $model, string $image, float $price)
  {
    $this->id = $id;
    $this->model = $model;
    $this->image = $image;
    $this->price = $price;
  }

}

class Food extends Tech
{
    
}

class User
{
  private $id;
  private $password;
  protected $name;
  protected $lastname;
  protected $birthdate;
  protected $email;
  protected $delivery = 4;

  public function __construct(int $id, string $password, string $name, string $lastname, string $birthdate, string $email, string $delivery)
  {
    $this->id = $id;
    $this->password = $password;
    $this->name = $name;
    $this->lastname = $lastname;
    $this->birthdate = $birthdate;
    $this->email = $email;
    $this->delivery = $delivery;
  }

}

class PrimeUser extends User
{
 protected $delivery = 2;
}

class CreditCard 
{
  protected $number;

  protected $holder;

  protected $expiration;

  protected $type;

  private $balance;  

  public function __construct(int $number, string $holder, string $expiration, string $type, float $balance)
  {
    $this->number = $number;
    $this->holder = $holder;
    $this->expiration = $expiration;
    $this->type = $type;
    $this->balance = $balance;


  }

  public function getMoney(){
    return $this->balance;
  }
}

$techProduct = new Products('Laptop', 'Tech', 'MSI');
$foodProduct = new Products('Pasta', 'Food', 'Molisana');

$eShop = new Eshop('eThief');

$eShop->addProduct($techProduct);
$eShop->addProduct($foodProduct);


var_dump($eShop->getProducts());



