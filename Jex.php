<?php

/**
* Create your own numeral system.
* Convert from and to the decimal system.
** @author: Joshua H
*/

class Jeximal
{

  private $jexCharacters;

  function __construct(array $myChars)
  {
    $this->jexCharacters = $myChars;
  }

  public function toJex($decimal){
    $jexTal = $decimal;
    $jexSize = count($this->jexCharacters);
    $jeximal = $this->jexCharacters[$jexTal % $jexSize];

    while ($jexTal >= $jexSize) {
      $jexTal = floor($jexTal / $jexSize);
      $jeximal = $this->jexCharacters[ ($jexTal % $jexSize) ] . $jeximal;
    }

    return  $jeximal;
  }

  public function fromJex($jeximal){
    $characters = array_reverse(str_split($jeximal));

    $charactersAsKeys = array_flip($this->jexCharacters);
    $jexSize = count($this->jexCharacters);
    $decimal = 0;

    foreach ($characters as $key => $character)
        $decimal += pow($jexSize, $key) * $charactersAsKeys[$character];

    return $decimal;
  }
}