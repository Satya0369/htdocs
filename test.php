<!DOCTYPE html>
<html lang="en">
<head>
    <title>Fade Example</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>

<p id="fadeText">This text will fade in and out.</p>
<button id="fadeOutBtn">Fade Out</button>
<button id="fadeInBtn">Fade In</button>

<p id="slideText">This text will slide up and down.</p>
<button id="slideUpBtn">Slide Up</button>
<button id="slideDownBtn">Slide Down</button>

<br>
<div id="data">Click the button to load data from a server.</div>
<button id="loadDataBtn">Load Data</button>


<script>
    $(document).ready(function(){
        $("#fadeOutBtn").click(function(){
            $("#fadeText").fadeOut();
        });
        $("#fadeInBtn").click(function(){
            $("#fadeText").fadeIn();
        });
        $("#loadDataBtn").click(function(){
            $.ajax({
                url: "https://jsonplaceholder.typicode.com/posts/1",
                type: "GET",
                success: function(result){
                    $("#data").html("Title: " + result.title + "<br> Body: " + result.body);
                },
                error: function(){
                    alert("Error loading data");
                }
            });
        });
        $("#slideUpBtn").click(function(){
            $("#slideText").slideUp();
        });
        $("#slideDownBtn").click(function(){
            $("#slideText").slideDown();
        });

    });

  
</script>

</body>
</html>
