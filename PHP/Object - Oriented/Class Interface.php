<?php

interface IMusician {

public function play();

}
class Guitarist implements IMusician
 {

public function play() 
{ 

echo "playin a guitar";

}

}

?>