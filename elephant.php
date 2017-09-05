<?php 

$qtd = 9;

for ($i = 0;  $i < $qtd; $i++) { 
    
    if ( ( ($i + 1) % 2 != 0 ) )
    {
        if ( $i == 0) {
            $string =  sprintf("%d %s %s",$i + 1,'elefante',' incomoda muita gente, ');   
        }else{
            $string = sprintf("%d %s %s",$i + 1,'elefantes',' incomodam muita gente, ');   
        }

        if ( $i + 1 === $qtd ) {
            $string = rtrim($string,', ');
            
        }

        echo $string;

    }else{
        $string = printf("%d %s %s %s",$i + 1,'elefantes',str_repeat('incomodam, ',$i + 1), 'muito mais' );
        echo '<hr>';
    }
    

}


