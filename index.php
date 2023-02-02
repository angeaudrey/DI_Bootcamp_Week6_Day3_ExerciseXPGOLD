<?php
   function sum_of_digits($digit){
      $somme = 0;
      for ($i = 0; $i < strlen($digit); $i++){
         $somme += $digit[$i];
      }
      return $somme;
   }

   
   echo sum_of_digits("123456789"). "\n";
	echo sum_of_digits("999999");
?>

<?php
#Exercise2
    function multiply_two_lists($var1, $var2) {

        $premier = explode(' ', trim($var1));
        $deuxieme= explode(' ', trim($var2));

        foreach($premier as $key => $value){
            $result[$key] = $premier[$key] * $deuxieme[$key];
        }
        return implode(' ', $result);
    }

    echo multiply_two_lists(("20 12 5"), ("1 3 3"));

?>


<?php
#Exercise3
    function tempConversionC($celsius)  {
        return ($celsius * 9/5) + 32;
    }

    function tempConversionK($celsius)  {
        return ($celsius + 273.15);
    }

    echo tempConversionC(0). "<br>";
    echo tempConversionK(0);

?>
