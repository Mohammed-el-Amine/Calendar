<?php
function display_event(array $event)
{

    if (is_array($event)) {
        foreach ($event as $key => $value) {
            if ($key == "name") {
                $fk = $key;
                $fv = $value;
            }
            if ($key == "date") {
                $sk = $key;
                $Y = substr($value, -8, 4); //pour l'annee
                $d = substr($value, -2); //pour les jours
                $m = substr($value, -4, 2); //pour les mois
                $value = "$d-$m-$Y";
                $sv = $value;

            }
            if ($key == "location") {
                $tk = $key;
                $tv = $value;
            }

        }
        echo "The \"$fv\" event will take place on $sv in $tv\n";

    }
    else
        return;

}

function display_events_by_month(array $events)
{

    if (is_array($events)) {
        foreach ($events as $key => $value) {
            if (is_array($value)) {
                foreach ($value as $k => $v) {
                    if ($k == 'date') {
                        $Y = substr($v, -8, 4); //pour l'annee
                        $d = substr($v, -2); //pour les jours
                        $m = substr($v, -4, 2); //pour les mois
                        $date = "$Y-$m";
                        $allDate = "$d-$m-$Y";
                    }
                }
            } 
            echo "$date\n  "; display_event($value);  
                // if($allDate ==="05-07-2019"){
                //     echo "$date\n  ";
                //     display_event($value); 
                //je n'arrive pas afaire le trie...
                // }  
        }



    }
    else
        return;

}

display_events_by_month([
    [
        'name' => 'Reunion Client',
        'date' => '20200505',
        'location' => 'Nantes'
    ],
    [
        'name' => 'Affinage sprint 2',
        'date' => '20200705',
        'location' => 'Nantes'
    ],
    [
        'name' => 'RDV Pro',
        'date' => '20200705',
        'location' => 'Paris'
    ],
    [
        'name' => ' Brainstorming',
        'date' => '20190705',
        'location' => 'Lyon'
    ],
    [
        'name' => 'Demonstration client',
        'date' => '20200205',
        'location' => 'Lille'
    ]
]);

?>