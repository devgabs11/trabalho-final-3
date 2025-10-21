<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>SEJUC/CONECTA JOVEM - Cursos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        body {
            background-color: #ffffff;
            color: black;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            width: 130px;
            background-color: #f1f1f1;
            position: fixed;
            height: 100%;
            overflow: auto;
        }

        li a {
            display: block;
            color: black;
            padding: 8px 16px;
            text-decoration: none;
        }

        li a.active {
            background-color: #00BFFF;
            color: white;
        }

        li a:hover:not(.active) {
            background-color: #00BFFF;
            color: black;
        }

        h2, h3, p {
            color: black;
        }

        .two {
            background-color: #4682B4;
            color: white;
        }

        .baixo {
            background-color: #00BFFF;
            height: 25px;
            width: 100%;
        }
    </style>
</head>

<body>
    <div class="two row justify-content">
        <img src="imagens/link_gov.png" style="margin: 20px; width: 190px; height: 50px"/>
        <img src="imagens/secretaria_juventude.jpg" style="margin-right: 20px; margin-left: 300px; width: 880px; height: 200px"/>   
    </div>

    <div class="baixo"></div>

    <ul>
        <li><a href="web_sejuc.php">Home</a></li>
        <li><a href="noticias.php">Notícias</a></li>
        <li><a href="eventos.php">Eventos</a></li>
        <li><a href="esportes.php">Esportes</a></li>
        <li><a class="active" href="cursos.php">Cursos</a></li>
        <li><a href="sugestões.php">Sugestões</a></li>
    </ul>

    <div style="margin-left:130px; padding:20px;">
        <h2>Secretaria da Juventude e Cidadania</h2>
        <h3>Cursos</h3>

        <p>
            A Secretaria da Juventude e Cidadania oferece diversos cursos gratuitos voltados à formação pessoal e profissional dos jovens.
            Nosso objetivo é proporcionar oportunidades de aprendizado que ampliem o acesso ao mercado de trabalho e incentivem o desenvolvimento de novas habilidades.
        </p>

        <p>
            Os cursos abrangem áreas como tecnologia, empreendedorismo, idiomas, artes, esportes e cidadania, sempre buscando atender às demandas atuais da juventude.
        </p>

        <p>
            Além das aulas teóricas, muitas formações incluem atividades práticas e certificação ao final do curso, valorizando o esforço e o crescimento de cada participante.
        </p>

        <p>
            A SEJUC acredita que a educação é a base da transformação social e, por isso, investe constantemente em programas que fortalecem o protagonismo e o futuro dos jovens.
        </p>
    </div>
</body>
</html>
