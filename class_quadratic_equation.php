<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    class Quadratic_Equation{
        private $a;
        private $b;
        private $c;
        public function __construct($a, $b, $c){
            $this->a = $a;
            $this->b = $b;
            $this->c = $c;
        }
        public function getpheptin(){
            $delta = ($this->b * $this->b) - 4*$this->a*$this->c;
            return "Delta = " . $delta;
        }
        public function getroot(){
            $r1 = (-$this->b + sqrt((($this->b*$this->b) - 4*$this->a*$this->c)))/2*$this->a;
            return $r1;
        }
        public function getroot2(){
            $r2 = (-$this->b - sqrt((($this->b*$this->b) - 4*$this->a*$this->c)))/2*$this->a;
            return $r2;
        }
        public function display(){
            if($this->getpheptin() >= 0){
                $r3 = "Phuong tring co 2 nghiem: ";
                return $r3 . "<br>" . "x1 = " . $this->getroot() . " : " . " x2 = ". $this->getroot2();
            }else{
                if($this->getpheptin() == 0){
                    $r3 = " Phuong trinh co nghiep kep ";
                    return $r3 . "<br>" . $this->getroot();
                }else{
                    $r3 = "Phuong trinh vo nghiep";
                    return $r3 . "<br>" . "The equation has no roots";
                }
            }
        }
    }
    $quadratic = new Quadratic_Equation(-2,5,3);
    echo $quadratic->getpheptin();
    echo "<br>";
    echo $quadratic->display();
?>
</body>
</html>