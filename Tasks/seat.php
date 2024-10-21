<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       
        .seatBtn{
            padding:8px 15px;
            margin:10px;
            border:1px solid black;
            font-size:20px;
            border-radius:10px;
        }
        .btnn{
            background-color:green;
        }
    </style>
</head>
<body >
    <h3>Available and Un-available Seats</h3>
    <div style="text-align:center;">

    <?php
    $available_Seats=Array(2,4,6,8,10,11);
   

    foreach(range(1,50) as $seat){
      
        if(in_array($seat,$available_Seats)){
            echo "<button class='seatBtn btnn' data-status='available' > $seat</button>";
        }
        else{
            echo "<button class='seatBtn' data-status='unavailable' > $seat</button>";
        }
        if($seat%5==0){
            echo "<br>";
        }
    }

    ?>
    </div>
    <script>
        // const seats=document.getElementsByClassName('seatBtn');
       
        // const seats = document.getElementsByClassName('seatBtn');

       
        
         const seats=document.querySelectorAll(".seatBtn"); 
        //  kk=seats.getAttribute("data-value");
        //  console.log(seats)
            
         seats.forEach(seat =>{
           
            seat.addEventListener("mouseover", function(){
            value=this.getAttribute("data-status");
            // console.log(value)
            if(value==='available'){
                this.style.backgroundColor="green";
                this.title=" seat is Available"
            }
            else{
                this.title=" seat is Un-Available"
            }
        });
        seat.addEventListener('mouseout', function() {
                if (this.getAttribute('data-status')=== 'available') {
                    this.style.backgroundColor = ''; 
                }
            });
        });
       
       

    </script>
</body>
</html>