<?php 
function display_event(array $event){

    if(is_array($event)){
        foreach($event as $key => $value){
            if($key=="name"){
                $fk=$key;
                $fv=$value;
            }
            if($key=="date"){
                $sk = $key;
                $Y=substr($value,-8,4);//pour l'annee
                $d=substr($value,-2);//pour les jours
                $m=substr($value,-4,2);//pour les mois
                $value = "$d-$m-$Y";
                $sv = $value;
                
            }
            if($key=="location"){
                $tk = $key;
                $tv = $value;
            }
            
        }
        echo "The \"$fv\" event will take place on $sv in $tv\n";

    }else return;

}

display_event([
    'name' => 'RDV Client Smith',
    'date' => '20191231',
    'location' => 'Nantes'
]);
?>