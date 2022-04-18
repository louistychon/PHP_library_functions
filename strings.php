<?php 
//main functions about strings

//concatenate words

function concatenate(...$words){
    $arraylength = count($words);
   for($i = 0; $i < $arraylength; $i++){
    $sentence = $words[$i]." ";
    echo $sentence;
   }
}

//remove specific string = str_replace($string, $replacedby, $sentence)

//find the first occurence of one word inside a sentence and return the rest of the string: strstr("Hello world!","world");
