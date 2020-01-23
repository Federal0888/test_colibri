
    <form method="POST">
    <label for="">Введите расстояние:</label>
        <input type="text" name="distance" >
        <input type="submit">
    </form>
    
    <?php
    $distance = (isset($_POST['distance'])?$_POST['distance']:" ");
    $ticket_price;
    

    if($distance < 999){
        $ticket_price = (int)$distance * 0.5;
        echo "Цена билета: $ticket_price";
        
    }
    
    if(($distance > 999) && ($distance < 1999)){
        $ticket_price = $distance * 0.45;
        echo "Цена билета: $ticket_price";
    }

    if($distance >= 2000){
        $ticket_price = $distance * 0.40;
        echo "Цена билета: $ticket_price";
       
    }

?>