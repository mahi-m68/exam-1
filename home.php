<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
</head>
<body>
    <?php 
    $num1=10;
    $num2=20;
    echo $num1 + $num2;
    echo'salam khoshgele'; 
    $status1=null;
    var_dump($status1);

    $name="mahi";
    $family="@molaei";
    echo "$name $family"."<br>";

    $list=[1,2,3,4,5];
    $i=0;
    while($i<5){
        echo ($list[$i]."<br>");
        $i++;
         
    }

    for($i=0 ; $i<5 ;$i++){

          echo ($list[$i]."<br>");
    }
       
   foreach ($list as $key => $value) {
              echo ("key: ".$key . $list[$key]."<br>");
   }
    ?>
</body>
</html>