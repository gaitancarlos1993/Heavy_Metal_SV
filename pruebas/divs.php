<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .cuerpo{
            width: 100%;
            height: 100px;
            display: flex;
        }
        
        #div1, #div2, #div3{
            width: 33%;
            height: 100%;
            display: inline-block;
        }
        #div1{
            border: 1px solid orange;
            background-color: blue;
            display: inline-block;
        }
        #div2{

            background-color: yellow;
            border: 1px solid red;
            display: inline-block;
        }
        #div3{

            border: 1px solid green;
            background-color: grey;

            display: inline-block;
        }
        #button{
            background-color: magenta;
            margin: 10px;
        }
    </style>
</head>
<body>
    <button id="button" type="button" onclick="func_width()">Activar</button>
    <div class="cuerpo">
        <div id="div1"></div>
        <div id="div2"></div>
        <div id="div3"></div>
    </div>
    <script>
        function func_width(){
            w_div1 = document.getElementById("div1");
            w_div2 = document.getElementById("div2");
            w_div3 = document.getElementById("div3");
            alert(w_div1.style.display)
            if (w_div1.style.display === "inline-block" || w_div1.style.display === ""){
                w_div1.style.display = "none";
                w_div2.style.width = "50%";
                w_div3.style.width = "50%";
                
            }

        }
    </script>
</body>
</html>