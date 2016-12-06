
<?php

  var_dump($argv);
  $p = $argv[1];
  $q = $argv[2];
  $e = $argv[3];
  $d = $argv[4];
  $n = $argv[5];

  if( $n==0 )  
    $n = $p*$q;
  $z = ($p-1)*($q-1);

  if ( $d==0 ) {

    for ($i=1; $i++; $i<$n) {
      if( (($i*$z+1)%$e)==0 ){
        echo "Q per calcolare d e' pari a: ".$i;
        return 0;
      }
    }
  }

  else if ( $e==0 ) {

    for ($i=1; $i++; $i<$n) {
      if( (($i*$z+1)%$d)==0 ){
        echo "Q per calcolare e e' pari a: ".$i;
        return 0;
      }
    }
  }

  else {
    $m = $argv[6];

    $c = (pow($m,$e))%($n);
    echo "Il messaggio criptato e': ".$c;
    return 0;
  }

  echo "Errore";
