    let num;
    let distance = prompt("Введите расстояние:", num);
    console.log(distance);
    let ticket_price;

    if(distance < 999){
        ticket_price = distance * 0.5;
        console.log(ticket_price);
    }

    if((distance > 999) && (distance < 1999)){
        ticket_price = distance * 0.45;
        console.log(ticket_price);
    }

    if(distance > 2000){
        ticket_price = distance * 0.40;
        console.log(ticket_price);
    }
