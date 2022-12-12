<?php

class Generate
{
    private $letters = [
        'a', 'b', 'c', 'd', 'e','f', 'g', 'h', 'l'
    ];
    private $numbers = [
        'a', 'b', 'c', 'd', 'e'
    ];
    public $listColumns = [
        'name',
        'surname',
        'age',
        'gender'
    ];
    private function generateName(int $length = 3) :string
    {
        $name = '';
        for($i = 0; $i < $length; $i++){

            $name .= $this->letters[rand(0, count($this->letters)-1)];
        }
        return ucfirst($name);
    }
    private function generateAge( $end =100) :int
    {

        return rand(0, intval($end));
    }

    public function __call(string $name, array $arguments)
    {
        $method = 'generate'.ucfirst($name);
        return $this->$method(implode(',', $arguments));
    }
}
