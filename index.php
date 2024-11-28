
<?php include 'inc/header-inc.php';?>
    
    <div class="container destaque">
        <section class="busca">
            <h2>Busca</h2>
            <form action="#">
                <input type="search">
                <button>Busca</button>
            </form>
        </section>
        <!-- Fim busca -->
        <section class="menu-departamento">
            <h2>Notícias</h2>
            <nav>
                <ul>
                    <li><a href="#">Esportes</a>
                        <ul>
                            <li><a href="#">Futebol</a></li>
                            <li><a href="#">Volei</a></li>
                            <li><a href="#">Basquete</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Policial</a></li>
                    <li><a href="#">Economia</a></li>
                    <li><a href="#">Alunos</a>
                        <ul>
                            <li><a href="#">Aluno destaque</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Eventos</a>
                        <ul>
                            <li><a href="#">Ficthon</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Instituições</a></li>
                    <li><a href="#">Biblioteca</a>
                        <ul>
                            <li><a href="#">Livros em destaque</a></li>
                            <li><a href="#">Empréstimo</a></li>
                            <li><a href="#">Pagar empréstimo</a></li>
                        </ul>
                    </li>
                    <!-- <li><a href="#">Calendário</a>
                        <ul>
                            <li><a href="#">Semana de provas</a></li>
                            <li><a href="#">Feriados</a></li>
                            <li><a href="#">Horários de aula</a></li>
                        </ul>
                    </li> -->
                </ul>
            </nav>

        </section>
        <!-- <section class="destaque">
                <img src="img/principal3.jpeg" alt=" imagem de destaque">
        </section> -->
        <div class="slideshow-container">
            <div class="mySlides fade">
                <div class="numbertext"></div>
                <img src="img/senac1.jpg" alt=" imagem de destaque" style="width:100%">
                <div class="text"></div>
            </div>
            <div class="mySlides fade">
                <div class="numbertext"></div>
                <img src="img/senac2.jpeg" style="width:100%">
                <div class="text"></div>
            </div>
            <div class="mySlides fade">
                <div class="numbertext"></div>
                <img src="img/senac3.jpg" style="width:100%">
                <div class="text"></div>
            </div>
            <!-- botoes -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <!-- dots circles -->
        <div class="dot-container">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>
    <!-- fim destaque -->
        <div class="todo">
            <section class="principal">
                <h2>Notícias</h2>
                <ul>
                    <li>
                        <p>O Ficthon é uma competição que ocorrerá na capital Curitiba, ela tem por objetivo mobilizar os estudantes
                            a respeito das ODS, para isso, cada equipe precisava desenvolver uma ideia-ação voltada para resolução de um problema que tivesse relação com as ODS
                        </p>
                        <a href="noticia.php">
                            <figure>
                                <img src="img/noticiaficthon.png" alt="Notícia do dia" style="width: 50%">
                                <figcaption>Senac promove viagens do Ficthon a alunos vencedores.</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <p>O Ficthon é uma competição que ocorrerá na capital Curitiba, ela tem por objetivo mobilizar os estudantes
                            a respeito das ODS, para isso, cada equipe precisava desenvolver uma ideia-ação voltada para resolução de um problema que tivesse relação com as ODS
                        </p>
                        <a href="#">
                            <figure>
                                <img src="img/noticiaroubo.jpg" alt="Notícia do dia" style="width: 50%">
                                <figcaption>Roubo de Bike acontece no Senac</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <p>O Ficthon é uma competição que ocorrerá na capital Curitiba, ela tem por objetivo mobilizar os estudantes
                         a respeito das ODS, para isso, cada equipe precisava desenvolver uma ideia-ação voltada para resolução de um problema que tivesse relação com as ODS
                        </p>
                        <a href="#">
                            <figure>
                                <img src="img/noticiaprova.jpg" alt="Notícia do dia" style="width: 50%">
                                <figcaption>Senac promove viagens do Ficthon a alunos vencedores.</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <p>O Ficthon é uma competição que ocorrerá na capital Curitiba, ela tem por objetivo mobilizar os estudantes
                             a respeito das ODS, para isso, cada equipe precisava desenvolver uma ideia-ação voltada para resolução de um problema que tivesse relação com as ODS
                        </p>
                        <a href="#">
                            <figure>
                                <img src="img/goku.jpg" alt="Notícia do dia" style="width: 50%">
                                <figcaption>Senac promove viagens do Ficthon a alunos vencedores.</figcaption>
                            </figure>
                        </a>
                    </li>
                </ul>

            </section>
            <section class="feeds">
                <h1>Teste</h1>
            </section>
        </div>
    </div>


        
<?php include 'inc/footer-inc.php';?>

