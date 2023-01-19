<?php 
interface Menús{
    public function menú1();
    public function menú2();
    public function menú3();

}

class Cliente1 implements Menús{
    public function menú1();
    public function menú2();
    public function menú3();
}

class Cliente2 implements Menús{
    public function menú1();
    public function menú2();
    public function menú3();
}
?>