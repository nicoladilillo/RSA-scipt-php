<?php

  $p = 47;
  $q = 71;
  $e = 0;
  $d = 3;
  $n = 33;
  if( $n==0 )  
  	$n = $p*$q;
  $z = ($p-1)*($q-1);

  if ( $d==0 ) {

    for ($i=1; $i++; $i<$n) {
      if( (($i*$z+1)%$e)==0 ){
        echo $i;
        return 0;
      }
    }
  }

  else if ( $e==0 ) {

  	for ($i=1; $i++; $i<$n) {
      if( (($i*$z+1)%$d)==0 ){
        echo $i;
        return 0;
      }
    }
  }

  else {
    $m = 15;
    
    $c = pow($m,$e)%$n;
    echo $c;
    return 0;
  }

  echo "Errore";
