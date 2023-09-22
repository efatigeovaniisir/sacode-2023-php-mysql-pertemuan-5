<?php 
$motor = $_GET['motor'];

switch($motor){
    case "Honda Metic" :
        echo "Sa Punya Motor honda metic";
        break;
    case "Yamaha Beat" :
        echo "Sa Punya Motor yamaha beat";
        break;
    case "Zusuki" :
        echo "Sa Punya Motor Zusuki";
        break;
    default :
    echo "Sa belum punya Motor";
    break;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="" method="get">
        <select name="motor" id="">
            <option value="Honda Metic">Honda Metic</option>
            <option value="Yamaha Beat">Yamaha Beat</option>
            <option value="Zusuki">Zusuki</option>
            <option value=""></option>
        </select>
     <button type="submit">Cek Motor</button>   
    </form>

</body>
</html>