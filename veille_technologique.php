<?php
$title = "Veille technologique";
require "head.php";
?>
    <style>
        a {

        }
    </style>
    <div class="main">
        <div class="text-center mb-5">
            <h2>Veille technologique </h2>
        </div>
        <div>
            <article class="col-md-8 mx-auto text-justify">
                <div class="text-center"><h3>Le framework symfony</h3></div>

                <div class="mt-2">
                    <div>
                        Symfony est un ensemble de composants PHP, un framework pour application web basé sur
                        l’architecture
                        MVC. J’ai choisi ce thème pour ma veille car le développement web m’intéresse beaucoup et ce
                        framework, qui m’a beaucoup servit pour mon stage de deuxième année, est l’un des plus utilisés
                        par les professionnels. Sa création a été lancé en octobre 2005 SensioLabs pour ses propres
                        besoinset a ensuite souhaité partager le code avec la communauté des développeurs PHP.
                        <br> Fonctionnement de l’architecture MVC :
                        <img src="doc/mvc.png" class="mx-auto">
                    </div>
                    <div class="mt-4">
                        <div class="text-center mb-3"><h5>Pré-requis matérielles et logicielles </h5></div>
                        <ul>
                            <li>Serveur Apache, PHP et MySQL : WAMP/XAMP/LAMP ou machine virtuelle distante (Installer
                                putty
                                et winScp/filezilla pour ce choix et pour Windows)
                            </li>
                            <li>Un éditeur de text (Sublime Text, NotPad++, PHPStorm …)</li>
                        </ul>

                        <h5>Avantages </h5>
                        <ul>
                            <li>Open source : Symfony est distribué sous une licence Open Source, vous n’avez donc pas
                                de
                                contraintes imposées et cela vous permet le développement de solutions propriétaires.
                            </li>
                            <li>Grande communauté d’utilisateurs : Avec une forte utilisation par les professionnels et
                                une
                                grande communauté de développeurs ayant utilisé Symfony, il est plus facile de trouver
                                des
                                réponses à des problèmes qu’avec d’autres frameworks.
                            </li>
                            <li>Gain de temps et qualité optimisée : Par l’utilisation de composants déjà existants, on
                                supprime les tâches à faible valeur ajoutée pour se concentrer exclusivement sur des
                                aspects
                                plus complexes. Le temps gagné sur ces tâches peut être dédié à des composants plus
                                spécifiques ou à des tests en profondeur, vous garantissant ainsi un code plus solide,
                                durable et un projet de bonne qualité.
                            </li>
                        </ul>
                        <h5>Inconvénients </h5>
                        <ul>
                            <li>L’apprentissage complexe et lourde : Apprendre un framework nécessite de temps et de la
                                patience. Symfony ne fait pas exception et demande un temps d’apprentissage important.
                                Symfony est quand même un ensemble de composants important qu’il faut savoir maîtriser
                                (moteur de templates …).
                            </li>
                            <li>Coder en Symfony, un autre langage : Il est vrai que Symfony est un framework PHP mais
                                il
                                faut connaitre un minimum d’autres langages pour m’utiliser (twig pour les vues, yml
                                pour
                                les config, le routing …). Programmer en Symfony signifie rester strictement sur
                                l’architecture du MVC certes mais celui propre à Symfony. Pour déboguer, on sait déjà
                                que
                                cela peut devenir difficile.
                            </li>
                        </ul>
                    </div>
                    <div class="mt-4">
                        <div class="text-center mb-3"><h5>Découpage des répertoires : </h5></div>
                        <br>/app : on y trouve les fichiers de configurations, les paramètres et le cache<br>
                        <br>/src : c’est ici qu’est le code source (sous forme de bundles : des dossiers qui découpent
                        le
                        code
                        afin de faciliter sa lecture)<br>
                        <br>/web : Contrôleurs frontaux app.php et app_dev.php ainsi sue les fichiers de CSS<br>
                        <br>/vendor : les composants : Doctrine, Twig …
                    </div>
                    <div class="mt-4">
                        <div class="text-center mb-3"><h5>Le routing </h5></div>
                        Une chose importante à savoir, Symfony fonctionne grâce à un système de « route ». C’est à
                        dire que chaque fonction créée a une route unique, ce qui permet d’exécuter la fonction
                        correspondante à la route passée dans l’URL. Les routes sont définies dans le fichier «
                        routing.yml
                        »
                        situé dans le dossier « /app/config/ ».<br>
                        <br>Par exemple :<br>
                        <br>hello_the_world:<br>
                        path: /hello-world<br>
                        defaults: { _controller: TestBundle:Test:index }<br>
                        <br>Ici, l’url « www.sitetest.fr/hello-world » redirige vers la fonction « index »
                        du contrôleur « TestController » du bundle « TestBundle ».
                    </div>
                    <div class="mt-4">
                        <div class="text-center mb-3"><h5>Les contrôleurs </h5></div>
                        Comme dit précédemment, Symfony respecte le modèle MVC et le PHP objet, ainsi le contrôleur est
                        le «
                        chef
                        d’orchestre » de l’application. Chaque bundle a donc son propre contrôleur avec souvent
                        plusieurs contrôleurs dans un seul bundle.
                        Par exemple :
                        <div class="mt-3 mb-3 border border-dark py-2 px-2">
                            &lt;?PHP
                            <br>namespace Test\TestBundle\Controller;
                            <br>useSymfont\Bundle\FrameworkBundle\Controller\Contreoller;
                            <br>useSymfony\Component\HttpFounddation\Response;
                            <br>classTestController extends Controller
                            {
                            <br>&emsp;public function indexAction()
                            {
                            <br>&emsp;&emsp;$hello = « Hello world »;
                            <br>&emsp;&emsp;return $this-&gt;render(‘TestBundle:hello:hello.html.twig’,
                            array(‘hello’ =&gt; $hello));
                            <br>&emsp;}
                            <br>}
                        </div>
                        Ici, la fonction indexAction() permet de générer la page « hello.html.twig » en lui
                        donnant la variable « $hello » définie juste avant.
                    </div>
                    <div class="mt-4">
                        <div class="text-center mb-3"><h5>Les templates </h5></div>
                        Symfony inclut un moteur de templates, Twig, les vues sont donc générées grâce à ce moteur. Les
                        vues
                        permettent au webdesigner d’avoir un code plus lisible et de sécuriser les variables
                        automatiquement.
                        Par exemple :
                        <div class="mt-3 border border-dark py-2 px-2">
                            &lt;!DOCTYPE html&gt;
                            <br>&emsp;&lt;html&gt;
                            <br>&emsp;&emsp;&lt;head&gt;
                            <br>&emsp;&emsp;&emsp;&lt;title&gt;Hello world&lt;/title&gt;
                            <br>&emsp;&emsp;&lt;/head&gt;
                            <br>&emsp;&emsp;&lt;body&gt;
                            <br>&emsp;&emsp;&emsp;&lt;h1&gt;{{ hello }}&lt;/h1&gt; //On affiche le contenu de la
                            variable $hello
                            <br>&emsp;&emsp;&lt;/body&gt;
                            <br>&emsp;&lt;/html&gt;
                        </div>
                    </div>
                    <div class="mt-4">
                        <div class="text-center mb-3"><h5>Doctrine </h5></div>
                        Doctrine est un ORM (Object Relation Manager), son but est donc de permette à l’utilisateur de
                        communiquer avec une base de données au travers d’objets (créés grâce au PHP) sans avoirt besoin
                        d’écrire les requêtes SQL. Doctrine permet aussi la création d’entités. Elles pourront être
                        utilisées comme objet en PHP et Doctrine se sert ces entités pour générer la base de donner
                        automatiquement (une entité = une table dans la base de données).
                    </div>
                    <div class="mt-4">
                        <div class="text-center mb-3"><h5>Sources </h5></div>
                        <a class="link-dark" href="http://symfony.com/doc/current/index.html" rel="nofollow">Documentation - Symfony</a>
                        <br><a class="link-dark" href="https://fr.wikipedia.org/wiki/Symfony"
                           rel="nofollow">Wikipedia - Symfony</a>
                        <br><a class="link-dark" href="https://openclassrooms.com/courses/developpez-votre-site-web-avec-le-framework-symfony2/symfony2-un-framework-php"
                           rel="nofollow">Open classrooms - Symfony</a>
                    </div>
                </div>
            </article>
        </div>
    </div>
<?php
require 'footer.html';
?>