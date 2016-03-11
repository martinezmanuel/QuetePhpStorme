<?php
/**
 * Created by PhpStorm.
 * User: apprenti
 * Date: 11/03/16
 * Time: 09:56
 */
$students = [
    [   'prenom' => "Emmanuel",
        'age' => 42
    ],

    [   'prenom' => "Thierry",
        'age'   => 51
    ],

    [   'prenom'    => "Pascal" ,
        'age' => 45
    ],

    [   'prenom'=> "Eric",
        'age' => 48
     ],

    [   'prenom' =>"Nicolas",
        'age'=> 19
    ]
            ];

if(is_array($students)) {

    echo "<table>";
        echo "<tr>";
            echo "<th>prenom</th>";
            echo "<th>age</th>";
        echo "</tr>";


    foreach ($students as $key => $value) {
        echo "<tr>";
        echo "<td>" . $value ['prenom'] . "</td>" ;
        echo "<td>" . $value ['age'] . "</td>";
        echo "</tr>";

    }

    echo "moyenne(age) = " . array_sum(array_column($students, 'age'))/5 . "\n";
    echo "</table>";
}
?>