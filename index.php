<?php

class Eshop
{
  protected $name;

  public function __construct($name)
  {
    $this->name = $name;
  }

  public function getName() {
    return $this->name;
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
  
  public function getTech() {
    return $this->tech;
  }

  public function getFood() {
    return $this->food;
  }

}

class Tech extends Products 
{
  private $id;

  protected $model;

  protected $image;

  protected $price;

  protected $type;

  public function __construct(int $id, string $model, string $image, string $price)
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

  public function __construct(int $id, string $password, string $name, string $lastname, string $birthdate, string $email)
  {
    $this->id = $id;
    $this->password = $password;
    $this->name = $name;
    $this->lastname = $lastname;
    $this->birthdate = $birthdate;
    $this->email = $email;
  }

  public function getName(){
    return $this->name;
  }
  public function getLast(){
    return $this->lastname;
  }
  public function getBirth(){
    return $this->birthdate;
  }
  public function getEmail(){
    return $this->email;
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

  public function getNr()
  {
    return $this->number;
  }

  public function getHolder()
  {
    return $this->holder;
  }

  public function getExpir()
  {
    return $this->expiration;
  }

  public function getType()
  {
    return $this->type;
  }

  public function getBalance()
  {
    return $this->balance;
  }
}

$eShop = new Eshop('eThief');

$techProduct1 = new Products('Laptop', 'Tech', 'MSI');
$laptop1 = new Tech(2435, 'GP 76', 'https://www.alternate.de/p/600x600/2/8/MSI_GP76_Leopard_10UG_291__Gaming_Notebook@@1712582.jpg', '10000,00' . '€');

$foodProduct1 = new Products('Pasta', 'Food', 'Molisana');

$user = new User(6545, '1q2w3e4r5t', 'Daniel', 'Pellegrini', '1987/11/18', 'danielpellegrini87@gmail.com');

$creditCard = new CreditCard('1234 5678 9087 6543', 'Pellegrini Daniel', '02/2025', 'Credit Card', 15500.50);


$primeUser = new PrimeUser(1539, '0p9o8i7u6y', 'Sabrina', 'Krüger', '1991/04/19', 'sabrinakruger@icloud.com');

echo $eShop->getName();

var_dump($laptop1);

var_dump($primeUser);
var_dump($user);













