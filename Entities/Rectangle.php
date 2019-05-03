<?php
class Rectangle extends Figure {
  public function __construct($a_side, $b_side){
    $this->a_side = $a_side;
    $this->b_side = $b_side;
  }
  public function perimeter(){
    return ($this->a_side + $this->b_side)*2;
  }
  public function square(){
    return $this->a_side * $this->b_side;
  }
  public function diagonal(){
    return sqrt(pow(2, $this->a_side) + pow(2, $this->b_side));
  }
}
 ?>
