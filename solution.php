function solution($A) {
    if(count($A)==0){
        return null;
    }
    $new = array_count_values($A);
    
  
    foreach($new as $key=> $val){
        if($val%2!=0){
return $key;
        }
    }
    

}
