<?php
$title = "Mon Profil";
require "head.php";
?>
    <style>
        .box {
            width: 250px;
            background-color: #ddd;
            margin-left: 10vw;
            border-radius: 2000px;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        }

        .skills {
            text-align: right;
            padding-top: 2vh;
            padding-bottom: 1vh;
            color: white;
            border-radius: 2000px;
            animation-duration: 0.7s;
            animation-timing-function: ease;
            animation-fill-mode: forwards;
        }

        @keyframes html {
            from {
                width: 0;
            }
            to {
                width: 85%;
                background-color: #4caf50;
            }
        }

        @keyframes css {
            from {
                width: 0;
            }
            to {
                width: 85%;
                background-color: #2196f3;
            }
        }

        @keyframes js {
            from {
                width: 0;
            }
            to {
                width: 65%;
                background-color: #f44336;
                border-radius: 2000px;
            }
        }

        @keyframes java {
            from {
                width: 0;
            }
            to {
                width: 70%;
                background-color: #5382a1;
                border-radius: 2000px;
            }
        }

        @keyframes python {
            from {
                width: 0;
            }
            to {
                width: 55%;
                background-color: #ffd43b;
                border-radius: 2000px;
            }
        }

        @keyframes bootstrap {
            from {
                width: 0;
            }
            to {
                width: 70%;
                background-color: #563d7c;
                border-radius: 2000px;
            }
        }

        @keyframes jquery {
            from {
                width: 0;
            }
            to {
                width: 60%;
                background-color: #0769ad;
                border-radius: 2000px;
            }
        }

        @keyframes react {
            from {
                width: 0;
            }
            to {
                width: 60%;
                background-color: #61dbfb;
                border-radius: 2000px;
            }
        }

        @keyframes symfony {
            from {
                width: 0;
            }
            to {
                width: 70%;
                background-color: lightgreen;
                border-radius: 2000px;
            }
        }

        .html {
            animation-name: html;
        }

        .css {
            animation-name: css;
        }

        .js {
            animation-name: js;
        }

        .java {
            animation-name: java;
        }

        .python {
            animation-name: python;
        }

        .bootstrap {
            animation-name: bootstrap;
        }

        .jquery {
            animation-name: jquery;
        }

        .react {
            animation-name: react;
        }

        .symfony {
            animation-name: symfony;
        }

        .container {
            margin-top: 6%;
        }

        .oneskill p {
            font-size: 130%;
            position: relative;
        }

        .oneskill {
            margin-top: 5vh;
        }

        @media only screen and (max-width: 600px) {
            .box {
                margin-left: 20vw;
                width: 55vw;
            }
        }

        @media only screen and (min-width: 600px) and (max-width: 768px) {
            .box {
                margin-left: 20vw;
                width: 40vw;
            }
        }
    </style>
    <div class="main"> <!--style="width: 95%; position: center"-->
    <div class="text-center">
        <h2>Mon profil</h2>
    </div>
    <div>
        <div class="mt-5">
            <div class="text-center">
                <img src="doc/photo.jpg" class="rounded-circle" width="350px">
            </div>

        </div>
        <div class="text-center mt-5">
            <div class="col-md-8 mx-auto">
                Je m'appelle Alexandre DOMINGUES, j'ai 22 ans et suis actuellement étudiant en 2ème année du BTS SIO
                option SLAM à l’école Ipssi Marne la valée.
                Intéressée par l’informatique et en particulier, par la programmation, j’ai choisi de me spécialiser
                dans le développement d’application à travers l’option SLAM du BTS.

            </div>
        </div>
        <div class="text-center mt-5">
            <div class="col-md-8 mx-auto">
                <em>Mon parcours après le BTS</em>: J'aimerai poursuivre mes études en
                école d’ingénieur, à l’Esiee Paris, afin d'acquérir des connaissances beaucoup plus poussées en
                ingénierie informatique et valider obtenir ainsi un diplôme d’ingénieur en ingénierie 3D et
                technologie des médias.

            </div>
        </div>
    </div>
    <div class="mt-5">

        <div class="text-center">
            <h2>Compétences</h2>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center">

                    <h3> Langages </h3>

                    <div class="oneskill">
                        <p>HTML5</p>
                        <div class="box">
                            <div class="skills html"></div>
                        </div>
                    </div>

                    <div class="oneskill">
                        <p>CSS3</p>
                        <div class="box">
                            <div class="skills css"></div>
                        </div>
                    </div>

                    <div class="oneskill">
                        <p>JavaScript</p>
                        <div class="box">
                            <div class="skills js"></div>
                        </div>
                    </div>

                    <div class="oneskill">
                        <p>Java</p>
                        <div class="box">
                            <div class="skills java"></div>
                        </div>
                    </div>

                    <div class="oneskill">
                        <p>Python</p>
                        <div class="box">
                            <div class="skills python"></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 text-center">
                    <h3> Frameworks </h3>

                    <div class="oneskill">

                        <p>Bootstrap</p>
                        <div class="box">
                            <div class="skills bootstrap"></div>
                        </div>
                    </div>

                    <div class="oneskill">

                        <p>jQuery</p>
                        <div class="box">
                            <div class="skills jquery"></div>
                        </div>
                    </div>

                    <div class="oneskill">

                        <p>React.js</p>
                        <div class="box">
                            <div class="skills react"></div>
                        </div>
                    </div>

                    <div class="oneskill">

                        <p>Symfony</p>
                        <div class="box">
                            <div class="skills symfony"></div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <div class="mt-5">
            <div class="text-center">
                <h2>Mes projets</h2>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.js"
                integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>


<?php
require 'footer.html';
?>