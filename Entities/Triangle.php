<?php
class Triangle extends Figure {
  public function __construct($a_side, $b_side, $c_side) {
    $this->a_side = $a_side;
    $this->b_side = $b_side;
    $this->c_side = $c_side;
  }
  public function perimeter(){
    return ($this->a_side + $this->b_side + $this->c_side)/2;
  }
  public function square(){
    return ($this->a_side * $this->b_side)/2;
  }
  public function radius_circle_triangle(){
    return ($this->a_side + $this->b_side - $this->c_side)/2;
  }
}
 ?>
