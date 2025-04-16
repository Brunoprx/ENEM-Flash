<?php
session_start();
require('config.php');
require('protect.php');
?>
<!DOCTYPE html>
<html lang="en" class="professor">
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
    <link rel="stylesheet" href="../contato.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    

    <!-- <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script> -->
    <script src="./script/headeInteration.js" defer></script>
    <script src="./script/forms.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    


    

    <title>ENEM Flash - Home</title>

    <style>
        .materias-escolares {
            background-color: #7B68EE;
            padding: 4rem 0;
        }

        .materias-escolares .container {
            padding: 2rem;
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: center;
        }

        .materias-superiores {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 2rem;
            max-width: 1000px;
            width: 100%;
        }

        .materias-escolares .card {
            background: white;
            border-radius: 20px;
            padding: 2rem;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            width: calc(50% - 1rem);
            min-width: 280px;
            max-width: 350px;
            display: flex;
            flex-direction: column;
        }

        .materias-escolares .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(255, 255, 255, 0.2);
        }

        .materias-escolares .card h3 {
            color: var(--primary);
            font-size: 1.5rem;
            margin-bottom: 1rem;
            text-align: center;
        }

        .materias-escolares .conteudo-card {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 1.5rem;
            flex: 1;
        }

        .materias-escolares .conteudo-card q {
            color: #666;
            font-style: italic;
            text-align: center;
            display: block;
            font-size: 1rem;
        }

        .materias-escolares .pessoa-materia {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 1rem;
            margin: 1rem 0;
        }

        .materias-escolares .imagem-materia {
            width: 100px;
            height: 100px;
            object-fit: contain;
        }

        .materias-escolares .texto-conteudo-materia {
            text-align: center;
        }

        .materias-escolares .texto-conteudo-materia h4 {
            color: #2D3436;
            font-size: 1.2rem;
            margin-top: 0.5rem;
        }

        .materias-escolares .btn-simulados {
            display: inline-block;
            background: linear-gradient(135deg, #7B68EE, #9B59B6);
            color: white;
            text-decoration: none;
            padding: 1rem;
            border-radius: 8px;
            margin-top: auto;
            font-weight: 600;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            text-align: center;
            width: 100%;
        }

        .materias-escolares .btn-simulados:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(123, 104, 238, 0.3);
            opacity: 0.9;
        }

        @media (max-width: 768px) {
            .materias-superiores {
                flex-direction: column;
                align-items: center;
            }

            .materias-escolares .card {
                width: 100%;
                max-width: 320px;
            }
        }
    </style>

</head>
 
<body>
<?php require('topo professor.php');?>
  
     <div class="background"></div> 
        <aside>
            <nav class="mobile-nav">
                <ul class="nav-links">
                    <li class="nav-item"><a href="#hero" class="nav-link active">Início</a></li>
                    <li class="nav-item"><a href="#beneficios" class="nav-link">Benefícios</a></li>
                    <li class="nav-item"><a href="#materias" class="nav-link">Matérias</a></li>
                    <li class="nav-item"><a href="#conheca" class="nav-link">Sobre o Projeto</a></li>
                    <li class="nav-item"><a href="#contato" class="nav-link">Contato</a></li>
                    <li class="buttonSidebar-logout"><a href="../aluno ou prof.html"><i class="fa fa-sign-out"></i>Sair</a></li>
                </ul>
            </nav>
        </aside>
     <section class="hero" id="hero">
      <div class="text-content">
        <h1>Bem vindo</h1>
      <h3>Esse é o site perfeito para estudar</h3>
      <a href="#conheca"><button>Conheça nosso site de estudos</button></a>
      </div>
      </section>

     <section class="beneficios" id="beneficios">
        <div class="container">
            <h2>Beneficios</h2>
            <div class="item">
                <div class="itemPhoto">
                    <img class="ImgItem" src="../assetss/beneficioProf1.jpg" alt="beneficio 1">
                </div>
                <div class="Item-text">
                    <h3>Diversidade de questões</h3>
                    <p>Nosso site oferece um diversificado banco de questões abordando de diversas disciplinas, abrangendo áreas como Matemática, Ciências, Português, História, Geografia, Física, Química, entre outras. além da opção de  atribuir tarefas e acompanhar o progresso dos alunos.</p>
                </div>
            </div> 
            <div class="item reverse">
                <div class="itemPhotoRight">
                    <img class="ImgItem" src="../assetss/beneficioProf2.jpg" alt="beneficio 2">
                </div>
                <div class="Item-text">
                    <h3>Estudar em casa</h3>
                    <p>Estudar em casa possibilita ao estudante o exercício da organização, disciplina, raciocínio e pesquisa, visando ajudar mais jovens a conseguir o ingresso ao ensino superior desenvolvemos esse site.</p>
                </div>
            </div>  
            <div class="item">
                <div class="itemPhoto">
                    <img class="ImgItem" src="../assetss/beneficioProf3.jpg" alt="beneficio 3">
                </div>
                <div class="Item-text">
                    <h3>Suporte Técnico Dedicado</h3>
                    <p>Nosso site está no ar 24 horas por dia, caso ocorra algum problema contamos com uma equipe de suporte técnico especializado para resolver rapidamente problemas técnicos e oferecer treinamento adicional, se necessário.</p>
                </div>
            </div> 
        </div> 
     </section>

     <section id="materias" class="materias-escolares">
        <div class="container">
            <div class="materias-superiores">
                <div class="card">
                    <h3>Adicionar Alternativa</h3>
                    <div class="conteudo-card">
                        <q>Adicione alternativas ao nosso banco de dados</q>
                        <div class="pessoa-materia">
                            <img class="imagem-materia" alt="Alternativa" src="../assetss/alternativa.png">
                            <div class="texto-conteudo-materia">
                                <h4>Alternativas</h4>    
                            </div>
                        </div>
                    </div>
                    <a href="../PHP/adicionar_alternativa.php" class="btn-simulados">Criar Alternativas</a>
                </div>
    
                <div class="card">
                    <h3>Perguntas</h3>
                    <div class="conteudo-card">
                        <q>Adicione perguntas ao nosso banco de dados</q>
                        <div class="pessoa-materia">
                            <img class="imagem-materia" alt="Pergunta" src="../assetss/pergunta.png">
                            <div class="texto-conteudo-materia">
                                <h4>Perguntas</h4>                              
                            </div>
                        </div>
                    </div>
                    <a href="../PHP/adicionar_pergunta.php" class="btn-simulados">Criar Perguntas</a>
                </div>
    
                <div class="card">
                    <h3>Provas</h3>
                    <div class="conteudo-card">
                        <q>Adicione provas ao nosso banco de dados</q>
                        <div class="pessoa-materia">
                            <img class="imagem-materia" alt="Prova" src="../assetss/prova.png">
                            <div class="texto-conteudo-materia">
                                <h4>Provas</h4>                               
                            </div>
                        </div>
                    </div>
                    <a href="../PHP/adicionar_prova.php" class="btn-simulados">Criar Provas</a>
                </div>    
    
                <div class="card">
                    <h3>Resultados</h3>
                    <div class="conteudo-card">
                        <q>Ver resultado das provas criadas</q>
                        <div class="pessoa-materia">
                            <img class="imagem-materia" alt="Ver resultado" src="../assetss/resultadoprova.png">
                            <div class="texto-conteudo-materia">
                                <h4>Resultados</h4>                              
                            </div>
                        </div>
                    </div>
                    <a href="../PHP/resultados_professor.php" class="btn-simulados">Ver Resultados</a>
                </div>
            </div>
        </div>
    </section>
    
    
     <section id="conheca" class="conheca">
        <div class="container">
            <div class="text-content">
                <h2>Conheça nosso Portal de Estudos</h2>
                <p>Explore nossos recursos de estudo online</p>
            </div>
            <div class="conheca-cards">
                <div class="conheca-card">
                    <div class="card-icon">
                        <img src="../assetss/🦆 icon _clock_.svg" alt="Ícone de relógio">
                    </div>
                    <div class="card-content">
                        <h3>Disponível 24 horas</h3>
                        <p>Acesse o portal a qualquer momento do dia ou da noite</p>
                    </div>
                </div> 
                <div class="conheca-card">
                    <div class="card-icon">
                        <img src="../assetss/🦆 icon _calendar_.svg" alt="Ícone de calendário">
                    </div>
                    <div class="card-content">
                        <h3>Todos os dias da semana</h3>
                        <p>Estude quando quiser, sem restrições de dias</p>
                    </div>
                </div>
                <div class="conheca-card">
                    <div class="card-icon">
                        <img src="../assetss/🦆 icon _library building_.svg" alt="Ícone de biblioteca">
                    </div>
                    <div class="card-content">
                        <h3>Suporte completo</h3>
                        <p>Nossa equipe está sempre pronta para ajudar</p>
                    </div>
                </div>
            </div>
        </div>  
     </section>


     <section id="fotos" class="fotos">
        <div class="container">
            <div class="text-content">
                <h2>Ficar perto dos alunos independente da distância</h2>
            </div>
                <div class="listPhotos">
                    <img class="Photo" alt="foto de inspiração" src="../assetss/fotoprof1.jpg">
                    <img class="Photo" alt="foto de inspiração" src="../assetss/fotoprof2.jpg">
                    <img class="Photo" alt="foto de inspiração" src="../assetss/fotoprof3.jpg">
                </div>
         </div>       
     </section>
     
     <section id="contato" class="contato">
        <div class="container">
            <div class=" text-content">
                <h2>fale conosco</h2>
            </div>
            <form onsubmit="handleSubmit(event)">
                <div class="row">
                    <div class="input-field">
                        <label for="name">Name:</label>
                        <input placeholder="Seu nome" id="name" name="name"  type="text" />
                        <span id="name-error" class="error"></span>
                    </div>
                    <div class="input-field">
                        <label for="lastName">Sobrenome:</label>
                        <input placeholder="Seu Sobrenome" id="lastName" name="lastName" type="text" />
                        <span id="lastName-error" class="error"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field">
                        <label for="email">Email:</label>
                        <input placeholder="Seu email" id="email" name="email"type="email" />
                        <span id="email-error" class="error"></span>
                    </div>
                    <div class="input-field">
                        <label for="phone">Telefone:</label>
                        <input placeholder="(xx) 9 9999-9999" maxlength="15" id="phone" name="phone" type="text"  oninput="formatarTelefone(this)"/>
                        <span id="phone-error" class="error"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field">
                        <label for="message">Sua mensagem:</label>
                        <textarea placeholder="Escreva sua mensagem" maxlength="200" id="message" name="message" rows="8" type="text" >
                        </textarea>
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
                <img src="assetss/logo.png">
            </div>
            <div class="footerContent">
                <div class="links">
                    <h3>Links</h3>
                    <ul>
                        <li><a href="#hero" target="_blank">inicio</a></li>
                        <li><a href="#beneficios">beneficios</a></li>
                        <li><a href="#materias">Matérias</a></li>
                        <li><a href="conheca">Sobre site</a></li>
                        <li><a href="../contato prof.html">Contato</a></li>
                    </ul>
                </div>
                 

                <div class="contatoFooter">
                    <h3>Nosso contato</h3>
                    <ul>
                        <li><i class="fa fa-envelope" aria-hidden="true"></i>
                            enembemlegal@gmail.com
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
</html></html>
