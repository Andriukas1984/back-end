<?php


class sk
{
    private $mas = [];

    function add($x)
    {
        $this->mas[] = $x;

    }
        function vid (){
            $skaiciai = 0;
            foreach ($this->mas as  $value) {

                $skaiciai += $value;
            }
            return $skaiciai / count($this->mas);
    }
}
$v = new sk();
$v->add(5);
$v->add(8);
$v->add(5);

echo json_encode($v->vid());