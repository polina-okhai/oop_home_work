<?php
class Circle extends Figure {
  public function __construct($radius, $diametr) {
    $this->radius = $radius;
    $this->diametr = $diametr;
  }
  public function perimeter(){
    return 2 * M_PI * $this->radius;
  }
  public function square(){
    return pow(2, $this->radius) * M_PI;
  }
  public function ring(){
    return $this->diametr * M_PI;
  }
}
 ?>
