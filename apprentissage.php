<?php
$title = "Apprentissage personnel";
require "head.php";
?>

    <style>

        .app-l {
            height: 300px;
            display: flex;
            align-items: center;
        }

        .app-r {
            height: 300px;
            display: flex;
            align-items: center;
        }

        h4 {
            width: 450px;
            margin-left: auto;
            margin-right: auto;
        }

    </style>

    <div class="main">

        <div class="text-center mb-5">
            <h2>Mon apprentissage personnel</h2>
        </div>
        <div class="mt-5">
            <div class="mb-3">
                <div class="row text-center">
                    <div class="col-md-6">
                        <h4 class="text-white bg-dark">Apprendre JQuery</h4>
                        <iframe width="450" height="250"
                                src="https://www.youtube.com/embed/Cm3mDPKfQwg?list=PL5BcU-_5Oa_pAv9YpL_bPyr4BpwN8Y4ab"
                                title="Cours jQuery" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                    </div>
                    <div class="col-md-6">
                        <h4 class="text-white bg-dark">Apprendre Symfony</h4>
                        <iframe width="450" height="250"
                                src="https://www.youtube.com/embed/RAFLl0NqjDU?list=PLUiuGjup8Vg5t20nu7aaJDnbHlhzXbbuN"
                                title="👨‍💻 Apprendre #Symfony 6 - Présentation de la formation #1" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <div class="mt-5 mb-3">
                <div class="row text-center">
                    <div class="col-md-6">
                        <h4 class="text-white bg-dark">Bootstrap</h4>
                        <iframe width="450" height="250" src="https://www.youtube.com/embed/3F2bNVFF3ao"
                                title="Comment utiliser Bootstrap" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                    </div>
                    <div class="col-md-6">
                        <h4 class="text-white bg-dark">React</h4>
                        <iframe width="450" height="250" src="https://www.youtube.com/embed/0OLIink2zvs"
                                title="Comment créer une application Web ReactJS ? (create-react-app)" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                    </div>
                </div>
            </div>

            <div class="mt-5 mb-3">
                <div class="row text-center">
                    <div class="col-md-6">
                        <h4 class="text-white bg-dark">Comprendre la POO</h4>
                        <iframe width="450" height="250" src="https://www.youtube.com/embed/VqKZ0tRwUIc"
                                title="Apprendre Java #1 Objet, Classe et Héritage" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                    </div>
                    <div class="col-md-6">
                        <h4 class="text-white bg-dark">Conception UML</h4>
                        <iframe width="450" height="250"
                                src="https://www.youtube.com/embed/dJd6azZr9Kg?list=PLRR7wjtXb1cBQCE8ddM0B1D9DFj-WL3BX"
                                title="Cours UML (1 à 7 / 33) : introduction et cas d'utilisation" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                    </div>
                </div>
            </div>

        </div>


<?php
require 'footer.html';
?>