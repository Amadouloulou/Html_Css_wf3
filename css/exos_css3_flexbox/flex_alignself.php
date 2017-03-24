<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <style>
        .container 
        {
            width: 80%;
            margin: 0 auto;
            padding: 0.1em 1.3em;
            background-color: lightgray;
            
        }
        h1{
            background-color: indigo;
            color: whitesmoke;
            padding: 1em;
            /*flex-wrap: wrap;*/
        }
        h2{
            background-color: green;
            color: white;
            padding: 0.5em;
        }
        h3
        {
            background-color: slateblue;
            color: wheat;
            padding: 0.25em;
        }
        
	.c1 
        {
            display: flex;
            align-items: flex-start;
            height: 20em;
            border: 1px solid #761c19;
        }
        .c2{
            display: flex;
            align-items: flex-end;
            height: 20em;
            border: 1px solid #761c19;
        }
        .c3{
            display: flex;
            align-items: center;
            height: 20em;
            border: 1px solid #761c19;
        }
        .c4{
            display: flex;
            align-items: baseline;
            height: 20em;
            border: 1px solid #761c19;
        }
        .c5{
            display: flex;
            align-items: stretch;
            height: 20em;
            border: 1px solid #761c19;
        }
        .nb1{
            min-width: 5em;
            min-height: 5em;
            background-color: lightseagreen;
            text-align: center;
            line-height: 5em;
            border-radius: 50%;
        }
        .nb2{
            min-width: 5em;
            min-height: 5em;
            background-color: coral;
            text-align: center;
            line-height: 5em;
            border-radius: 50%;
        }
        .nb3{
            min-width: 5em;
            min-height: 5em;
            background-color: mediumspringgreen;
            text-align: center;
            line-height: 5em;
            border-radius: 50%;
        }
        .nb4{
            min-width: 5em;
            min-height: 5em;
            background-color: hotpink;
            text-align: center;
            line-height: 5em;
            border-radius: 50%;
        }
        .coral, .violet{
            align-self: flex-end;
        }
        .green, .aqua{
            align-self: flex-start; 
        }
        .rond{
            align-self: center;
        }
    </style>
    <title></title>
</head>
<body>
    <div class="container">
        <h1>Exercices FLEXBOX {display: flex;...</h1>
        <h2>.class{ align-self: </h2>

            <h3>flex-end } => aligne le rond #2 seul au bottom du conteneur -> class = c1 style{display:flex...</h3>
                <div class="c1">
                    <div class="nb1">1</div>
                    <div class="nb2 coral">2</div>
                    <div class="nb3">3</div>
                    <div class="nb4">4</div>
                </div> <!-- end <div class="c1"> -->

            <h3>flex-start } => aligne le rond #1 seul au top du conteneur -> class = c2 style{display:flex...</h3>
                <div class="c2">  
                    <div class="nb1 green">1</div>
                    <div class="nb2">2</div>
                    <div class="nb3">3</div>
                    <div class="nb4">4</div>
                </div> <!-- end <div class="c2"> -->

            <h3>flex-start } => aligne le rond #3 seul au top du conteneur -> class = c3 style{display:flex...</h3>
                <div class="c3">  
                    <div class="nb1">1</div>
                    <div class="nb2">2</div>
                    <div class="nb3 aqua">3</div>
                    <div class="nb4">4</div>
                </div> <!-- end <div class="c3"> -->

            <h3>flex-end } => aligne le rond #4 seul au bottom du conteneur -> class = c4 style{display:flex...</h3>
                <div class="c4">  
                    <div class="nb1">1</div>
                    <div class="nb2">2</div>
                    <div class="nb3">3</div>
                    <div class="nb4 violet">4</div>
                </div> <!-- end <div class="c4"> -->   

            <h3>center } => aligne le rond #2 seul au centre sans s'étirer (pas de strech) -> class = c5 style{display:flex...</h3>
                <div class="c5">  
                    <div class="nb1">1</div>
                    <div class="nb2 rond">2</div>
                    <div class="nb3">3</div>
                    <div class="nb4">4</div>
                </div> <!-- end <div class="c5"> -->
            
            <h2>}</h2>

    </div> <!-- end <div class="container"> -->

</body>
</html>