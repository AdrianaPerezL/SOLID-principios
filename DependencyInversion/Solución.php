<?php
 
interface TrianguloAreaInterface{
    //Código
}

interface RectanguloAreaInterface{
    //Código
}

class FormaGeometrica{
    protected $area;

    public function __construct(AreaInterface $area)
    {
        $this->area = $area;
    }

}

class Rectangulo implements RectanguloAreaInterface{
//Código
}

class Triangulo implements TrianguloAreaInterface{
//Código
}

?>