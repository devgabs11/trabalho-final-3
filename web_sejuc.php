<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>SEJUC/CONECTA JOVEM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    <style>
        h2 { 
            font-family: Arial Black, sans-serif; 
            margin-left: 20px;
        }   

        .two {
            background-color: #4682B4; /* azul escuro */
            color: white;
        }

        .bandeira {
            text-align: center;
            background-color: #4682B4;
        }

        .menu {
            background-color: #f1f1f1;
            color: white;
            justify-content: flex start;
        }

        .menu2 {
            /* vazio */
        }

        /* 🔹 Faixa azul-claro aumentada */
        .baixo {
            background-color: #00BFFF; /* azul-claro */
            height: 25px; /* aumentei de 50px para 100px */
            width: 100%;
        }
    </style> 
</head>

<body>
    <div class="one row justify-content row-cols-1 row-cols-md-1 mb-1">
        <div class="two row justify-content">
            <img src="imagens\link_gov.png" style="margin: 20px; width: 190px; height: 50px"/>
            <img src="imagens\secretaria_juventude.jpg" style="margin-right: 20px; margin-bottom: 0px; margin-left: 300px; margin-top: 0px; width: 880px; height: 200px"/>   
            
            <div class="menu2 row justify-content row-cols-1 row-cols-md-6 mb-2">
                <?php include 'menu2.php'; ?>
            </div>  
        </div>

        <!-- 🔹 Faixa azul-claro -->
        <div class="baixo"></div>

        <div class="menu d-flex justify-content-start align-items-center p-2">
            <?php include 'menu1.php'; ?>
        </div>    
    </div>
    <br>
</body>
</html>
