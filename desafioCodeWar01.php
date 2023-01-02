
<?php
function duplicate_encode($word){
	// ...
  $res = '';
  $str = strtolower($word);
  
  $letter = str_split($str);
  
  

  
  foreach ($letter as $key => $frequen){
  	$teste = ord($frequen);
    $arrayFrequen = count_chars($word,1);
    
      if ($arrayFrequen[$teste] == 1) { 
          $res .= '(';
         
        
  }
    else {
        $res .= ')';
        
    }
      
  }
 return $res;
}

echo duplicate_encode('iii');

?>

<!--Maneira correta
function duplicate_encode($word){
  $word = str_split(strtolower($word));
  $str = "";
  foreach($word as $key){
    (count(array_keys($word,$key))>1) ? $str .= ")" : $str .= "(";
  } 
  return $str;      
}-->

