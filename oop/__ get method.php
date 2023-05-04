<?php
 class abc{
    private $data = ['name'=>'nishi',"course"=>"php","age"=>28];

    public function __get($key)
    {
        if(array_key_exists($key,$this->data))
        {
            return $this->data[$key]."<br>";
        }
        else
        {
            echo "you are trying to access pratvate or non-exit property($key)<br>";
        }
    }
 }

 $test = new abc;
 echo $test->name;
 echo $test->free;
?>