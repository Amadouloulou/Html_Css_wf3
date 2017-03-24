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
            flex-direction: row;
            border: 1px solid #761c19;
        }
        .c2{
            display: flex;
            flex-direction: row-reverse;
            border: 1px solid #761c19;
        }
        .c3{
            display: flex;
            flex-direction: column;
            border: 1px solid #761c19;
            width: 5em;
        }
        .c4{
            display: flex;
            flex-direction: column-reverse;
            border: 1px solid #761c19;
            width: 5em;
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
        <h1>Exercices FLEXBOX (display: flex;...</h1>
        <h2>{ flex-direction: </h2>

            <h3>row } => aligne dans le sens de lecture -> class = c1 style{display:flex...</h3>
                <div class="c1">
                    <div class="nb1">1</div>
                    <div class="nb2">2</div>
                    <div class="nb3">3</div>
                    <div class="nb4">4</div>
                </div> <!-- end <div class="c1"> -->

            <h3>row-reverse } => aligne à droite dans le sens inverse de lecture -> class = c2 style{display:flex...</h3>
                <div class="c2">  
                    <div class="nb1">1</div>
                    <div class="nb2">2</div>
                    <div class="nb3">3</div>
                    <div class="nb4">4</div>
                </div> <!-- end <div class="c2"> -->

            <h3>column } => aligne en colonne de haut de bas -> class = c3 style{display:flex...</h3>
                <div class="c3">  
                    <div class="nb1">1</div>
                    <div class="nb2">2</div>
                    <div class="nb3">3</div>
                    <div class="nb4">4</div>
                </div> <!-- end <div class="c3"> -->

            <h3>column-reverse } => aligne en colonne de bas en haut -> class = c4 style{display:flex...</h3>
                <div class="c4">  
                    <div class="nb1">1</div>
                    <div class="nb2">2</div>
                    <div class="nb3">3</div>
                    <div class="nb4">4</div>
                </div> <!-- end <div class="c4"> -->   
            
            <h2>}</h2>

    </div> <!-- end <div class="container"> -->

</body>
</html>