<?php
include_once __DIR__ ."/Sale.php";
include_once __DIR__ ."/Prod.php";
$data = file_get_contents(__DIR__ . '/../data.json');
$products = json_decode($data, true);
var_dump($products);
class Movie extends Prod {
     //posso cambiare questa variabile in qualunque punto del codice, c'è anche private e protected
    public $language;
    public $sale;

    public function __construct($title, $genre, $price, $rating, $sale, $language) {
       
        $this->language = $language;
        $this->sale = $sale;
        parent::__construct($title, $genre, $price, $rating);
      
    }
    public function showPrice(){
        echo  $this->price .' $';
    }
}

/* foreach ($products as $type => $value) {
    echo $type; //movies e books
    if($type == 'books') {
       
        foreach( $value as $item ) {
           $movie = new Movie($item['title']);
            var_dump($item); 
            echo $item['title'];
          }
    }

} */
  