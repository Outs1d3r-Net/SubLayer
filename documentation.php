<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

<link href="css/cssDocumentation.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documentation</title>
</head>
<body>
   
        <div class="container">
        <ul class="nav nav-pills flex-column mb-auto">
             <li class="nav-item">
                <img src="img/icong 1.png" width="120" height="120" class="d-inline-block align-text-top" align="center">
            </li>
            <li class="nav-item">
               <hr style="color:white;">
            </li>


            <li class="nav-item">
                <a href="#" class="nav-link  text-white active" aria-current="page" id="liBtn1" onclick="btn1()">
                    Why SubLayer?
                </a>
            </li>
            <li>
                <a href="#instalacao" class="nav-link text-white" id="liBtn2" onclick="btn2()">
              
                    Instaletion
                </a>
            </li>
            <li>
                <a href="#" class="nav-link text-white" id="liBtn3" onclick="btn3()">
               
                    Get Started
                </a>
            </li>
            <li>
                <a href="#" class="nav-link text-white">
                
                Voltar
                </a>
            </li>
            <li>
                <a href="#" class="nav-link text-white">
                <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
                
                </a>
            </li>
            </ul>
        </div>
           
    </div>  
    <div class="cont1" style="display:inline-block;">
        <h3>Why SubLayer?</h3>
        <div itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
        <p itemprop="text"><strong> Lorem ipsum dolor sit amet </strong>. Os operadores gráficos e tipográficos sabem disso bem, na realidade, todas as profissões que lidam com o universo da comunicação têm um relacionamento estável com essas palavras, mas o que é? <strong> Lorem ipsum </strong> é um <strong> texto fofo </strong> sem qualquer sentido. </p> <p> É uma seqüência de <strong> palavras latinas </strong> que, como estão posicionadas, não formem frases com um sentido completo, mas dão vida a um texto de teste útil para preencher espaços que irão Posteriormente serão ocupados a partir de textos ad hoc compostos por profissionais de comunicação. </p> <p> É certamente o texto de marcador de posição <strong> mais famoso </strong>, mesmo que existam diferentes versões distinguíveis da ordem em que as palavras latinas são repetidas. </p> <p> Lorem ipsum contém as <strong> tipos de letra </strong> mais em uso, um aspecto que permite que você tenha uma visão geral da renderização do texto em termos de <strong> escolha da fonte </strong> e <strong> tamanho da fonte </strong>. </p> <p> Ao se referir a Lorem ipsum, diferentes expressões são usadas, nomeadamente <strong> texto de preenchimento </strong>, <strong> texto fictício </strong>, <strong> texto cego </strong> ou <strong> texto do espaço reservado</strong>: em suma, seu significado também pode ser zero, mas sua utilidade é tão clara quanto ao longo dos séculos e resiste às versões irônicas e modernas que vieram com a chegada da web.</p>
        </div>
        <h3>Instaletion.</h3>
        <div id="instalacao" itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
        <p itemprop="text"><strong> Lorem ipsum dolor sit amet </strong>. Os operadores gráficos e tipográficos sabem disso bem, na realidade, todas as profissões que lidam com o universo da comunicação têm um relacionamento estável com essas palavras, mas o que é? <strong> Lorem ipsum </strong> é um <strong> texto fofo </strong> sem qualquer sentido. </p> <p> É uma seqüência de <strong> palavras latinas </strong> que, como estão posicionadas, não formem frases com um sentido completo, mas dão vida a um texto de teste útil para preencher espaços que irão Posteriormente serão ocupados a partir de textos ad hoc compostos por profissionais de comunicação. </p> <p> É certamente o texto de marcador de posição <strong> mais famoso </strong>, mesmo que existam diferentes versões distinguíveis da ordem em que as palavras latinas são repetidas. </p> <p> Lorem ipsum contém as <strong> tipos de letra </strong> mais em uso, um aspecto que permite que você tenha uma visão geral da renderização do texto em termos de <strong> escolha da fonte </strong> e <strong> tamanho da fonte </strong>. </p> <p> Ao se referir a Lorem ipsum, diferentes expressões são usadas, nomeadamente <strong> texto de preenchimento </strong>, <strong> texto fictício </strong>, <strong> texto cego </strong> ou <strong> texto do espaço reservado</strong>: em suma, seu significado também pode ser zero, mas sua utilidade é tão clara quanto ao longo dos séculos e resiste às versões irônicas e modernas que vieram com a chegada da web.</p>
        </div>
    </div>
    <script>
        function btn1()
        {
            console.log("teste");
           //document.getElementById('liBtn1').style.backgroundColor = "red";
           document.getElementById("liBtn1").classList.add('active');
         
           document.getElementById("liBtn2").classList.remove('active');
           document.getElementById("liBtn3").classList.remove('active');
        }
        function btn2()
        {
            console.log("teste");
           //document.getElementById('liBtn1').style.backgroundColor = "red";
           document.getElementById("liBtn2").classList.add('active');
          
           document.getElementById("liBtn1").classList.remove('active');
           document.getElementById("liBtn3").classList.remove('active');
        }
        function btn3()
        {
            console.log("teste");
           //document.getElementById('liBtn1').style.backgroundColor = "red";
           document.getElementById("liBtn3").classList.add('active');
           document.getElementById("liBtn1").classList.remove('active');
           document.getElementById("liBtn2").classList.remove('active')
        }
    </script>
</body>
</html>