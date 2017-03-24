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
            flex-wrap: wrap;
        }
        h2{
            background-color: green;
            color: white;
            padding: 0.5em;
            flex-wrap: wrap;
        }
        h3
        {
            background-color: slateblue;
            color: wheat;
            padding: 0.25em;
            flex-wrap: wrap;
        }
        
	.c1 
        {
            display: flex;
            justify-content: flex-start;
            border: 1px solid #761c19;
        }
        .c2{
            display: flex;
            justify-content: flex-end;
            border: 1px solid #761c19;
        }
        .c3{
            display: flex;
            justify-content: center;
            border: 1px solid #761c19;
        }
        .c4{
            display: flex;
            justify-content: space-between;
            border: 1px solid #761c19;
        }
        .c5{
            display: flex;
            justify-content: space-around;
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
    </style>
    <title></title>
</head>
<body>
    <div class="container">
        <h1>Exercices FLEXBOX (display: flex;... sur le sélecteur css)</h1>
        <h2>{ justify-content: </h2>

            <h3>flex-start } => aligne à gauche du conteneur -> class = c1 style{display:flex...</h3>
                <div class="c1">
                    <div class="nb1">1</div>
                    <div class="nb2">2</div>
                    <div class="nb3">3</div>
                    <div class="nb4">4</div>
                </div> <!-- end <div class="c1"> -->

            <h3>flex-end } => aligne à droite du conteneur -> class = c2 style{display:flex...</h3>
                <div class="c2">  
                    <div class="nb1">1</div>
                    <div class="nb2">2</div>
                    <div class="nb3">3</div>
                    <div class="nb4">4</div>
                </div> <!-- end <div class="c2"> -->

            <h3>center } => aligne au centre du conteneur -> class = c3 style{display:flex...</h3>
                <div class="c3">  
                    <div class="nb1">1</div>
                    <div class="nb2">2</div>
                    <div class="nb3">3</div>
                    <div class="nb4">4</div>
                </div> <!-- end <div class="c3"> -->

            <h3>space-between } => aligne les objets dans le conteneur avec des espaces égaux entre eux -> class = c4 style{display:flex...</h3>
                <div class="c4">  
                    <div class="nb1">1</div>
                    <div class="nb2">2</div>
                    <div class="nb3">3</div>
                    <div class="nb4">4</div>
                </div> <!-- end <div class="c4"> -->   

            <h3>space-around } => aligne les objets dans le conteneur avec des espaces égaux autour d'entre eux -> class = c5 style{display:flex...</h3>
                <div class="c5">  
                    <div class="nb1">1</div>
                    <div class="nb2">2</div>
                    <div class="nb3">3</div>
                    <div class="nb4">4</div>
                </div> <!-- end <div class="c5"> -->
            
            <h2>}</h2>

    </div> <!-- end <div class="container"> -->

</body>
</html>