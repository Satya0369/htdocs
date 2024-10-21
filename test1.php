<!DOCTYPE html>
<html lang="en">
<head>
    <title>Chaining Example</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>

<p id="chainingText">This text will be animated.</p>
<button id="animateBtn">Animate Text</button>

<script>
    $(document).ready(function(){
        $("#animateBtn").click(function(){
            $("#chainingText").css("color", "blue")
                              .slideUp(2000)
                              .slideDown(2000);
        });
    });
</script>

</body>
</html>
