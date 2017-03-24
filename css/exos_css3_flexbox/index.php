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
            background-color: wheat;
            padding: 0.25em;
        }
        
	.c1 
        {
            display: flex;
            align-items: flex-start;
            /*min-height: 10em;*/
            border: 1px solid #761c19;
        }
        .titre{
            font-weight: bold;
            color: magenta;
        }
                
    </style>
    <title></title>
</head>
<body>
    <div class="container">
        <h1>CSS3 ~ FLEXBOX {display: flex; ...} sur le sélecteur css, pas le conteneur !</h1>
        <h2>{ display: flex;...</h2>

            <h3>=> <a href="flex_justifycontent.php">justify-content</a></h3>
                <div class="c1">
                    <ul><p class="titre">/!\ Par défaut aligne sur l'axe VERTICAL</p>
                        <li>flex-start : aligne les éléments sur le côté GAUCHE du conteneur</li>
                        <li>flex-end : aligne les éléments sur le côté DROIT du conteneur</li>
                        <li>center : aligne les éléments au CENTRE du conteneur</li>
                        <li>space-between : aligne sur toute la largeur avec des ESPACES ENTRE les éléments</li>
                        <li>space-around : aligne sur toute la largeur avec des ESPACES AUTOUR des éléments</li>
                    </ul>
                </div> <!-- end <div class="c1"> -->

                <h3>=> <a href="flex_alignitems.php">align-items</a> & <a href="flex_alignself.php">align-self</a></h3>
                <div class="c1">
                    <ul><p class="titre">/!\ 'align-items' aligne PAR DEFAUT sur l'axe HORIZONTAL</p>
                        <li>flex-start : aligne les éléments en HAUT du conteneur</li>
                        <li>flex-end : aligne les éléments en BAS du conteneur</li>
                        <li>center : aligne les éléments au CENTRE du conteneur</li>
                        <li>baseline : aligne sur la LIGNE DE BASE du conteneur</li>
                        <li>stretch : étire les objets sur TOUTE LA HAUTEUR du conteneur</li>
                    </ul>
                    <ul><p class="titre">=> 'align-self'</p>
                        <li>prend les mêmes propriétés que 'align-content'</li>
                        <li>mais pour un objet spécifique (une classe ou id)</li>
                    </ul>
                </div> <!-- end <div class="c1"> -->
            
                <h3>=> <a href="flex_flexdirection.php">flex-direction</a></h3>
                <div class="c1">
                    <ul><p class="titre">/!\ si la propriété est 'column' ou 'column-reverse' l'axe de JUSTIFY-CONTENT devient VERTICAL et celui de ALIGN-ITEMS devient HORIZONTAL</p>
                        <li>row : aligne les éléments en LIGNE du PREMIER AU DERNIER</li>
                        <li>row-reverse : aligne les éléments en LIGNE du DERNIER AU PREMIER</li>
                        <li>column : aligne les éléments en COLONNE du PREMIER AU DERNIER</li>
                        <li>column-reverse : aligne les éléments en COLONNE du DERNIER AU PREMIER</li>
                    </ul>
                </div> <!-- end <div class="c1"> -->
                
                <h3>=> <a href="flex_order.php">order</a></h3>
                <div class="c1">
                    <ul><p class="titre">=> change l'ORDRE des objets</p>
                        <li>chaque objet a PAR DEFAUT la valeur '0'</li>
                        <li>'order' prend comme propriété CSS des nombres (integer) sans '' ni ()</li>
                        <li>.hotpink{
                            order: 2;
                        }
                        place l'objet ayant la classe .hotpink 2 positions plus loin que celle d'origine</li>
                    </ul>
                </div> <!-- end <div class="c1"> -->
                
                <h3>=> <a href="flex_flexwrap.php">flex-wrap</a></h3>
                <div class="c1">
                    <ul><p class="titre">=> s'occupe de gérer le RENVOI A LA LIGNE des éléments d'une 'row' ou 'column'</p>
                        <li>nowrap : tous les éléments restent sur la même ligne... quitte à les tasser !!!</li>
                        <li>wrap : génère un renvoi sur une ligne additionnelle des derniers éléments afin de conserver à chacun leurs tailles d'origine (width en row /ou/ height en column) du PREMIER AU DERNIER</li>
                        <li>wrap : génère un renvoi sur une ligne additionnelle des derniers éléments afin de conserver à chacun leurs tailles d'origine (width en row /ou/ height en column) du DERNIER AU PREMIER</li>
                    </ul>
                </div> <!-- end <div class="c1"> -->
                
                <h3>=> <a href="#">flex-direction & flex-wrap</a></h3>
                <div class="c1">
                    <ul><p class="titre">=> ces 2 propriétés peuvent se COMBINER en un RACCOURCI, 'flex-flow'</p>
                        <li>les propriétés de flex-direction s'appliquent avec un espace simplement avec celles de flex-wrap</li>
                        <li>{flex-flow : row wrap}</li>
                        <li>{flex-flow : column_reverse nowrap}</li>
                        <li>{flex-flow : ...}</li>
                    </ul>
                </div> <!-- end <div class="c1"> -->
                
                <h3>=> <a href="flex_aligncontent.php">align-content</a></h3>
                <div class="c1">
                    <ul><p class="titre">=> 'align-content' gère les ESPACES entre les LIGNES ADDITIONNELLES</p>
                        <li>flex-start : place les LIGNES en HAUT du conteneur</li>
                        <li>flex-end : place les LIGNES en BAS du conteneur</li>
                        <li>center : place les LIGNES au CENTRE du conteneur (axe vertical)</li>
                        <li>space-between : les LIGNES sont EGALEMENT ESPACEES ENTRE ELLES</li>
                        <li>space-around : les LIGNES sont EGALEMENT ESPACEES AUTOUR d'ELLES</li>
                        <li>stretch : ETIRE toutes les LIGNES pour occuper TOUT le CONTENEUR</li>
                    </ul>
                </div> <!-- end <div class="c1"> -->
                
            <h2>}</h2>

    </div> <!-- end <div class="container"> -->

</body>
</html>