<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Esse é o seu site de estudos">
    <meta name="keywords" content="Estudos, Vestibular, Faculdade">
    <meta name="author" content="Bruno Henrique">
    
    <link rel="icon" type="assetss/logo.png" href="http://example.com/image.png" />
    <link rel="stylesheet" href="../styles.css">
    <link rel="stylesheet" href="../base.css">
    <link rel="stylesheet" href="../header.css">
    <link rel="stylesheet" href="../footer.css">
    <link rel="stylesheet" href="../form.css">
    <link rel="stylesheet" href="../carousel.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    

    <!-- <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script> -->
    <script src="../script/headeInteration.js" defer></script>
    <script src="../script/forms.js" defer></script>
    <script src="../script/carousel.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    


    

    <title>ENEM Flash - Home</title>

</head>
<body>
<?php require('protect.php');?>
<?php require('topo aluno.php');?>
 
            <nav class="mobile-nav">
                <ul class="nav-links">
                    <li class="nav-item"><a href="#hero" class="nav-link active">Início</a></li>
                    <li class="nav-item"><a href="#beneficios" class="nav-link">Benefícios</a></li>
                    <li class="nav-item"><a href="#materias" class="nav-link">Matérias</a></li>
                    <li class="nav-item"><a href="#conheca" class="nav-link">Sobre o Projeto</a></li>
                    <li class="nav-item"><a href="#fotos" class="nav-link">Galeria</a></li>
                    <li class="nav-item"><a href="#contato" class="nav-link">Contato</a></li>
                    <li class="buttonSidebar-logout"><a href="../aluno ou prof.html"><i class="fa fa-sign-out"></i>Sair</a></li>
                </ul>
            </nav>
        </aside>

        <section class="hero" id="hero">
            <div class="hero-overlay"></div>
            <div class="hero-content">
                <h1 class="hero-title">Bem-vindo ao Seu Futuro</h1>
                <h3 class="hero-subtitle">A plataforma perfeita para sua preparação no ENEM</h3>
                <div class="hero-cta">
                    <a href="#conheca" class="btn btn-primary">
                        Comece a Estudar Agora
                        <i class="fa fa-arrow-right"></i>
                    </a>
                    <a href="#materias" class="btn btn-outline">
                        Explorar Matérias
                    </a>
                </div>
            </div>
        </section>

     <section class="beneficios" id="beneficios">
        <div class="container">
            <h2>Beneficios</h2>
            <div class="item">
                <div class="itemPhoto">
                    <img class="ImgItem" src="../assetss/beneficio1.webp" alt="beneficio 1">
                </div>
                <div class="Item-text">
                    <h3>Dificuldades na hora do estudo</h3>
                    <p>Sabemos as dificuldades de estudar para um vestibular, a ideia é que absorvam o máximo de conteúdo possível, aprendam os formatos e as principais características de cada vestibular, desenvolvam o senso de organização e gerenciamento de tempo, assim como entendam quais são as melhores estratégias de execução de prova.</p>
                </div>
            </div> 
            <div class="item reverse">
                <div class="itemPhotoRight">
                    <img class="ImgItem" src="../assetss/beneficio2.webp" alt="beneficio 2">
                </div>
                <div class="Item-text">
                    <h3>Estudar em casa</h3>
                    <p>Estudar em casa possibilita ao estudante o exercício da organização, disciplina, raciocínio e pesquisa, visando ajudar mais jovens a conseguir o ingresso ao ensino superior desenvolvemos esse site.</p>
                </div>
            </div>  
            <div class="item">
                <div class="itemPhoto">
                    <img class="ImgItem" src="../assetss/beneficio3.png" alt="beneficio 3">
                </div>
                <div class="Item-text">
                    <h3>Vantagens do site</h3>
                    <p>Nosso site contará com simulados tanto de questões antigas de vestibulares quanto com simulados personalizados criados por professores visando atender às necessidades de estudantes que estão se preparando para vestibulares em diversas áreas do conhecimento, abrangendo disciplinas como Matemática, Português, Biologia, História, entre outras. Tudo isso de graça e sem sair de casa.</p>
                </div>
            </div> 
        </div> 
     </section>

     <section id="materias" class="materias-escolares">
        <div class="container">
            <div class="materias-superiores">
                <div class="card">
                    <h3>Matemática</h3>
                    <div class="conteudo-card">
                        <q>Matemática é a ciência do raciocínio lógico e abstrato</q>
                        <div class="pessoa-materia">
                            <img class="imagem-materia" alt="Matéria" src="../assetss/matematica.png">
                            <div class="texto-conteudo-materia">
                                <h4>Matemática</h4>    
                            </div>
                        </div>
                    </div>
                    <a href="listar_prova_mat.php" class="btn-simulados">Ver Simulados</a>
                </div>
    
                <div class="card">
                    <h3>Ciências</h3>
                    <div class="conteudo-card">
                        <q>ciências é o estudo exclusivo dos fatores de ordem naturalmente físicas, desconsiderando aspectos e mudanças proporcionadas pelo comportamento dos seres vivos.</q>
                        <div class="pessoa-materia">
                            <img class="imagem-materia" alt="Matéria" src="../assetss/ciencias.png">
                            <div class="texto-conteudo-materia">
                                <h4>Ciências</h4>                              
                            </div>
                        </div>
                    </div>
                    <a href="listar_prova_ciencias.php" class="btn-simulados">Ver Simulados</a>
                </div>
    
                <div class="card">
                    <h3>Português</h3>
                    <div class="conteudo-card">
                        <q>Apresenta uma gramática elementar com as primeiras noções de sintaxe, fonética e fonologia, e as regras essenciais de ortografia e morfologia.</q>
                        <div class="pessoa-materia">
                            <img class="imagem-materia" alt="Matéria" src="../assetss/portugues.png">
                            <div class="texto-conteudo-materia">
                                <h4>Português</h4>                               
                            </div>
                        </div>
                    </div>
                    <a href="listar_prova_portugues.php" class="btn-simulados">Ver Simulados</a>
                </div>    
                <div class="card">
                    <h3>História</h3>
                    <div class="conteudo-card">
                        <q>História é a área do conhecimento que se dedica a compreeender o ser humano e os rumos das sociedades.</q>
                        <div class="pessoa-materia">
                            <img class="imagem-materia" alt="Matéria" src="../assetss/historia.png">
                            <div class="texto-conteudo-materia">
                                <h4>História</h4>                               
                            </div>
                        </div>
                    </div>
                    <a href="listar_prova_historia.php" class="btn-simulados">Ver Simulados</a>
                </div>
            </div>   
            
            <div class="materias-inferiores">
                <div class="card">
                    <h3>Física</h3>
                    <div class="conteudo-card">
                        <q>Física é uma ciência voltada ao estudo dos fenômenos naturais, baseando-se em teorias e por meio da observação e experimentação.</q>
                        <div class="pessoa-materia">
                            <img class="imagem-materia" alt="Matéria" src="../assetss/fisica.png">
                            <div class="texto-conteudo-materia">
                                <h4>Física</h4>
                            </div>
                        </div>
                    </div>
                    <a href="listar_prova_fisica.php" class="btn-simulados">Ver Simulados</a>
                </div>    
                <div class="card">
                    <h3>Química</h3>
                    <div class="conteudo-card">
                        <q> Química é o ramo da ciência que estuda a matéria e suas transformações, analisando as propriedades, a composição e as variações energéticas durante as reações químicas.</q>
                        <div class="pessoa-materia">
                            <img class="imagem-materia" alt="Matéria" src="../assetss/quimica.png">
                            <div class="texto-conteudo-materia">
                                <h4>Química</h4>
                                
                            </div>
                        </div>
                    </div>
                    <a href="listar_prova_quimica.php" class="btn-simulados">Ver Simulados</a>
                </div>   
                <div class="card">
                    <h3>Geografia</h3>
                    <div class="conteudo-card">
                        <q>Geografia é a ciência cujo objeto de estudo é o espaço geográfico, onde são estabelecidas as relações humanas.</q>
                        <div class="pessoa-materia">
                            <img class="imagem-materia" alt="Matéria" src="../assetss/geografia.png">
                            <div class="texto-conteudo-materia">
                                <h4>Geografia</h4>                              
                            </div>
                        </div>
                    </div> 
                    <a href="listar_prova_geografia.php" class="btn-simulados">Ver Simulados</a>
                </div>
    
                <div class="card">
                    <h3>Inglês</h3>
                    <div class="conteudo-card">
                        <q>Inglês é considerada a lingua universal.</q>
                        <div class="pessoa-materia">
                            <img class="imagem-materia" alt="Matéria" src="../assetss/ingles.png">
                            <div class="texto-conteudo-materia">
                                <h4>Inglês</h4>                              
                            </div>
                        </div>
                    </div>
                    <a href="listar_prova_ingles.php" class="btn-simulados">Ver Simulados</a>
                </div>
            </div>
        </div>
    </section>
    
    
     <section id="conheca" class="conheca">
        <div class="container">
            <div class="text-content">
                <span class="section-badge">Nosso Portal</span>
                <h2>Por que estudar conosco?</h2>
                <p>Preparamos você para o ENEM com recursos exclusivos e metodologia comprovada</p>
            </div>
            <div class="cards">
                <div class="card">
                    <div class="cardContent">
                        <div class="card-icon">
                            <img src="../assetss/clock-icon.svg" alt="Disponibilidade">
                        </div>
                        <h3>Estude no seu ritmo</h3>
                        <p>Acesso 24h por dia, 7 dias por semana. Estude quando e onde quiser.</p>
                        <span class="card-stat">100% Flexível</span>
                    </div>
                </div>
                
                <div class="card">
                    <div class="cardContent">
                        <div class="card-icon">
                            <img src="../assetss/book-icon.svg" alt="Material">
                        </div>
                        <h3>Material Atualizado</h3>
                        <p>Conteúdo alinhado com o último formato do ENEM e questões comentadas.</p>
                        <span class="card-stat">+1000 Exercícios</span>
                    </div>
                </div>

                <div class="card">
                    <div class="cardContent">
                        <div class="card-icon">
                            <img src="../assetss/chart-icon.svg" alt="Desempenho">
                        </div>
                        <h3>Acompanhe seu Progresso</h3>
                        <p>Análise detalhada do seu desempenho por matéria e conteúdo.</p>
                        <span class="card-stat">Relatórios Personalizados</span>
                    </div>
                </div>

                <div class="card">
                    <div class="cardContent">
                        <div class="card-icon">
                            <img src="../assetss/target-icon.svg" alt="Simulados">
                        </div>
                        <h3>Simulados ENEM</h3>
                        <p>Pratique com simulados no formato oficial da prova.</p>
                        <span class="card-stat">Atualizado 2025</span>
                    </div>
                </div>
            </div>

            <div class="stats-container">
                <div class="stat-item">
                    <span class="stat-number">10.000+</span>
                    <span class="stat-label">Alunos Ativos</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">95%</span>
                    <span class="stat-label">Taxa de Aprovação</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">8.000+</span>
                    <span class="stat-label">Questões Disponíveis</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">50+</span>
                    <span class="stat-label">Simulados Completos</span>
                </div>
            </div>
        </div>
     </section>


     <section id="fotos" class="fotos">
        <div class="container">
            <div class="text-content">
                <h2>Fotos de Inspiração</h2>
                <p>Veja alguns momentos especiais de nossos alunos</p>
            </div>
            <div class="carousel-container">
                <div class="carousel-track">
                    <img class="carousel-slide" alt="Estudantes celebrando" src="../assetss/foto2.jpg">
                    <img class="carousel-slide" alt="Formandos comemorando" src="../assetss/foto1.jpg">
                    <img class="carousel-slide" alt="Estudantes felizes" src="../assetss/foto3.jpg">
                    <img class="carousel-slide" alt="Momento de estudo" src="../assetss/foto4.jpg">
                    <img class="carousel-slide" alt="Conquista acadêmica" src="../assetss/foto5.jpg">
                </div>
                <button class="carousel-button prev" aria-label="Foto anterior">
                    <i class="fa fa-chevron-left"></i>
                </button>
                <button class="carousel-button next" aria-label="Próxima foto">
                    <i class="fa fa-chevron-right"></i>
                </button>
                <div class="carousel-dots">
                    <span class="dot active" aria-label="Foto 1"></span>
                    <span class="dot" aria-label="Foto 2"></span>
                    <span class="dot" aria-label="Foto 3"></span>
                    <span class="dot" aria-label="Foto 4"></span>
                    <span class="dot" aria-label="Foto 5"></span>
                </div>
            </div>
        </div>
    </section>
     
     <section id="contato" class="contato">
        <div class="container">
            <div class="text-content">
                <h2>Fale Conosco</h2>
                <p>Entre em contato conosco para tirar suas dúvidas</p>
            </div>
            <form onsubmit="handleSubmit(event)">
                <div class="row">
                    <div class="input-field">
                        <label for="name">Nome:</label>
                        <input placeholder="Seu nome" id="name" name="name" type="text" />
                        <span id="name-error" class="error"></span>
                    </div>
                    <div class="input-field">
                        <label for="lastName">Sobrenome:</label>
                        <input placeholder="Seu sobrenome" id="lastName" name="lastName" type="text" />
                        <span id="lastName-error" class="error"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field">
                        <label for="email">Email:</label>
                        <input placeholder="Seu email" id="email" name="email" type="email" />
                        <span id="email-error" class="error"></span>
                    </div>
                    <div class="input-field">
                        <label for="phone">Telefone:</label>
                        <input placeholder="(xx) 9 9999-9999" maxlength="15" id="phone" name="phone" type="text" oninput="formatarTelefone(this)" />
                        <span id="phone-error" class="error"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field">
                        <label for="message">Sua mensagem:</label>
                        <textarea placeholder="Escreva sua mensagem" maxlength="200" id="message" name="message" rows="8"></textarea>
                    </div>
                </div> 
                <div class="buttonForm">
                    <button type="submit" id="submitButton">Enviar mensagem</button>
                </div>     
            </form>
        </div>
    </section> 
    </main>
    <footer>
        <div class="rowFooter">
            <div class="logoFooter">
                <img src="..assetss/logo.png">
            </div>
            <div class="footerContent">
                <div class="links">
                    <h3>Links</h3>
                    <ul>
                        <li><a href=" ">inicio</a></li>
                        <li><a href="#beneficios">beneficios</a></li>
                        <li><a href="#materias">Matérias</a></li>
                        <li><a href="conheca">Sobre site</a></li>
                        <li><a href="contato">Contato</a></li>
                    </ul>
                </div>
                <div class="contatoFooter">
                    <h3>Nosso contato</h3>
                    <ul>
                        <li><i class="fa fa-envelope" aria-hidden="true"></i>
                            contato@enemfudendo.com.br
                        </li>
                        <li><i class="fa fa-phone" aria-hidden="true"></i>
                            (19) 4002 8922
                        </li>
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i>
                            Campinas SP
                        </li>
                    </ul>
                    <ul class="socialMedia">
                        <li>
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </li>
                        <li>
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </li>
                        <li>
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </li>
                        <li>
                            <i class="fa fa-youtube" aria-hidden="true"></i>
                        </li>
                    </ul>
                </div>
            </div>
           
        </div>
    </footer>
</body>
</html>