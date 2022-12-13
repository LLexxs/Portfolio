<?php
$title = "Synthèse";
require "head.php";
?>
    <style>
        pre {
            display: block;
            padding: 9.5px;
            margin: 0 0 10px;
            word-break: break-all;
            word-wrap: break-word;
            background-color: #f5f5f5;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        li {
            list-style: none;
        }

        button {
            margin-top: 1vh;
        }
    </style>
    <div class="main">
        <div class="text-center mb-5">
            <h2>Tableau de synthèse</h2>
            <iframe style="width: 150vh; height:  80vh" src="doc/synthese/Tableau_de_synthese-epreuve-E4.pdf" frameborder="0"></iframe>
        </div>

        <div class="mt-5">
            <div class="text-center">
                <h2>Documentation</h2>
            </div>
            <ul style="padding-top:20px; padding-bottom:5px">
                <pre style="width:97%"> Organiser son développement professionnel : </pre>
                <div style="padding-left:2rem">
                    <li>
                        <button id="portfolio"> Portfolio</button>
                    </li>
                    <li>
                        <button id="outil-alerte"> Outils d'alerte</button>
                    </li>
                    <li>
                        <button id="developper-projet-pro">
                            Développer son projet professionnel
                        </button>
                    </li>
                </div>
            </ul>

            <ul style="padding-top:20px; padding-bottom:5px">
                <pre style="width:97%"> Travailler en mode projet : </pre>
                <div style="padding-left:2rem">
                    <li>
                        <button id="ap2"> AP2</button>
                    </li>
                </div>
            </ul>

            <ul style="padding-top:20px; padding-bottom:5px">
                <pre style="width:97%"> Développer la présence en ligne de l’organisation : </pre>
                <div style="padding-left:2rem">
                    <li>
                        <button id="ap1"> AP1</button>
                    </li>
                    <li>
                        <button id="service-en-ligne"> Référencer les services en ligne de l'organisation et mesurer
                            leur visibilité
                        </button>
                    </li>
                </div>
            </ul>

            <ul style="padding-top:20px; padding-bottom:5px">
                <pre style="width:97%"> Gérer le patrimoine informatique : </pre>
                <div style="padding-left:2rem">
                    <li>
                        <button id="inventaire"> Inventaire matériel</button>
                    </li>
                    <li>
                        <button id="habilitation"> Mettre en place et vérifier les niveaux d'habilitation associés à un
                            service
                        </button>
                    </li>
                </div>
            </ul>
        </div>
    </div>
    <script>
        $("#portfolio").on("click", function () {
            let div = `<div class="text-center mt-5" id="doc">
                    <iframe style="width: 150vh; height:  80vh"
                            src="doc/synthese/Organiser%20son%20développement%20professionnel.pdf"
                            frameborder="0"></iframe>
                </div>`
            $("#doc").remove();
            $("#portfolio").parent().parent().append(div);
        })

        $("#outil-alerte").on("click", function () {
            let div = `<div class="text-center mt-5" id="doc">
                    <iframe style="width: 150vh; height:  80vh"
                            src="doc/synthese/Mettre%20en%20oeuvre%20des%20outils%20de%20veille%20informationnelle.pdf"
                            frameborder="0"></iframe>
                </div>`
            $("#doc").remove();
            $("#outil-alerte").parent().parent().append(div);
        })

        $("#developper-projet-pro").on("click", function () {
            let div = `<div class="text-center mt-5" id="doc">
                    <iframe style="width: 150vh; height:  80vh"
                            src="doc/synthese/DÉVELOPPER%20SON%20PROJET%20PROFESSIONNEL.pdf"
                            frameborder="0"></iframe>
                </div>`
            $("#doc").remove();
            $("#developper-projet-pro").parent().parent().append(div);
        })

        $("#ap2").on("click", function () {
            let div = `<div class="text-center mt-5" id="doc">
                    <iframe style="width: 150vh; height:  80vh"
                            src="doc/synthese/ANALYSER%20LES%20OBJECTIFS%20ET%20LES%20MODALITÉS%20D’ORGANISATION%20D’UN%20PROJET.pdf"
                            frameborder="0"></iframe>
                </div>`
            $("#doc").remove();
            $("#ap2").parent().parent().append(div);
        })

        $("#ap1").on("click", function () {
            let div = `<div class="text-center mt-5" id="doc">
                    <iframe style="width: 150vh; height:  80vh"
                            src="doc/synthese/PARTICIPER%20A%20LA%20VALORISATION%20DE%20L'IMAGE%20DE%20L'ORGANISATION.pdf"
                            frameborder="0"></iframe>
                </div>`
            $("#doc").remove();
            $("#ap1").parent().parent().append(div);
        })

        $("#service-en-ligne").on("click", function () {
            let div = `<div class="text-center mt-5" id="doc">
                    <iframe style="width: 150vh; height:  80vh"
                            src="doc/synthese/RÉFÉRENCER%20LES%20SERVICES%20EN%20LIGNE%20DE%20L’ORGANISATION%20ET%20MESURER%20LEUR%20VISIBILITÉ.pdf"
                            frameborder="0"></iframe>
                </div>`
            $("#doc").remove();
            $("#service-en-ligne").parent().parent().append(div);
        })

        $("#inventaire").on("click", function () {
            let div = `<div class="text-center mt-5" id="doc">
                    <iframe style="width: 150vh; height:  80vh"
                            src="doc/synthese/inventaire_materiel.pdf"
                            frameborder="0"></iframe>
                </div>`
            $("#doc").remove();
            $("#inventaire").parent().parent().append(div);
        })

        $("#habilitation").on("click", function () {
            let div = `<div class="text-center mt-5" id="doc">
                    <iframe style="width: 150vh; height:  80vh"
                            src="doc/synthese/METTRE%20EN%20PLACE%20ET%20VÉRIFIER%20LES%20NIVEAUX%20D’HABILITATION%20ASSOCIÉS%20À%20UN%20SERVICE.pdf"
                            frameborder="0"></iframe>
                </div>`
            $("#doc").remove();
            $("#habilitation").parent().parent().append(div);
        })

    </script>

<?php
require 'footer.html';
?>