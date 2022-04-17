<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">

  <link rel="apple-touch-icon" type="image/png" href="https://cpwebassets.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png" />
  <meta name="apple-mobile-web-app-title" content="CodePen">

  

  <link rel="mask-icon" type="" href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg" color="#111" />
  <link rel="mask-icon" type="" href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg" color="#111" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

  <link  href="css/css.css" rel="stylesheet">

  <link  href="css/css3.scss" rel="stylesheet">

  <title>Sub</title>

  <script>
    var i = setInterval(function() {
      clearInterval(i);
      // O código desejado é apenas isto:
      document.getElementById("loading").style.display = "none";
      document.getElementById("loading2").style.display = "none";
      document.getElementById("conteudo").style.display = "inline";

      document.getElementById("conteudo2").style.display = "inline";

    }, 4000);
  </script>


  <style>
    /* ===================== FILE INPUT ===================== */
    .file-area {
      width: 100%;
      position: relative;
      
    }

    .file-area input[type=file] {
      position: absolute;
      width: 100%;
      height: 100%;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      opacity: 0;
      cursor: pointer;
    }

    .file-area .file-dummy {
      width: 100%;
      padding: 30px;
      background: rgba(255, 255, 255, 0.2);
      border: 2px dashed rgba(255, 255, 255, 0.2);
      text-align: center;
      transition: background 0.3s ease-in-out;
    }

    .file-area .file-dummy .success {
      display: none;
    }

    .file-area:hover .file-dummy {
      background: rgba(255, 255, 255, 0.1);
    }

    .file-area input[type=file]:focus+.file-dummy {
      outline: 2px solid rgba(255, 255, 255, 0.5);
      outline: -webkit-focus-ring-color auto 5px;
    }

    .file-area input[type=file]:valid+.file-dummy {
      border-color: rgba(0, 255, 0, 0.4);
      background-color: rgba(0, 255, 0, 0.3);
    }

    .file-area input[type=file]:valid+.file-dummy .success {
      display: inline-block;
    }

    .file-area input[type=file]:valid+.file-dummy .default {
      display: none;
    }

    /* ===================== BASIC STYLING ===================== */
    * {
      box-sizing: border-box;
      font-family: 'Lato', sans-serif;
      color: rgb(126, 126, 126);
    }

    html,
    body {
      margin: 0;
      padding: 0;
      font-weight: 300;
      height: 100%;
      transition: 1s all ease;
      background:black;
      color: rgb(126, 126, 126);
      font-size: 16px;
      overflow: hidden;

    }

    h1 {
      text-align: center;
      margin: 50px auto;
      font-weight: 100;
      color: rgb(126, 126, 126);
    }

    label {
      font-weight: 500;
      display: block;
      margin: 4px 0;
      text-transform: uppercase;
      font-size: 13px;
      overflow: hidden;
    }

    label span {
      float: right;
      text-transform: none;
      font-weight: 200;
      line-height: 1em;
      font-style: italic;
      opacity: 0.8;
    }

    .form-controll {
      display: block;
      padding: 8px 16px;
      width: 100%;
      font-size: 16px;
      background-color: rgba(255, 255, 255, 0.2);
      border: 1px solid rgba(255, 255, 255, 0.3);
      color: #fff;
      font-weight: 200;
    }

    .form-controll:focus {
      outline: 2px solid rgba(255, 255, 255, 0.5);
      outline: -webkit-focus-ring-color auto 5px;
    }

    button {
      padding: 8px 30px;
      background: rgba(255, 255, 255, 0.8);
      color: white;
      text-transform: uppercase;
      font-weight: 600;
      font-size: 11px;
      border: 0;

      cursor: pointer;
    }
    buttons:hover{
      background-color:black;
    }

    .form {
      margin-top: -50px;
    }

    .form-group {
      max-width: 500px;
      margin: auto;
      margin-bottom: 30px;


    }

    .back-to-article {
      color: #fff;
      text-transform: uppercase;
      font-size: 12px;
      position: absolute;
      right: 20px;
      top: 20px;
      text-decoration: none;
      display: inline-block;
      background: rgba(0, 0, 0, 0.6);
      padding: 10px 18px;
      transition: all 0.3s ease-in-out;
      opacity: 0.6;
    }

    .back-to-article:hover {
      opacity: 1;
      background: rgba(0, 0, 0, 0.8);
    }
    body.AnErrorHasOccured
    {
  background: white;
  transition: 1s all ease;
    }
  </style>

  <script>
    window.console = window.console || function(t) {};
  </script>



  <script>
    if (document.location.search.match(/type=embed/gi)) {
      window.parent.postMessage("resize", "*");
    }
  </script>


</head>

<body translate="no">
<div class="wrapper">
  <nav class="navbar navbar">
    <div class="container-fluid">
      <div class="row">
        <div class="col-3">
          <a class="navbar-brand" href="index.php" >
            <img src="img/icong 1.png" width="60" height="60" class="d-inline-block align-text-top" align="left">

            <h3 class="" style="margin-top:11px; color: rgb(126, 126, 126);">SubLayer</h3>

          </a>
        </div>
      </div>

      <div class="row">

        <div class="col-10">


          <button type="button" id="dd" class="btn btn-outline-light btn-sm" style=" margin-right:auto; margin-top:-10px;"  data-toggle="modal" data-target="#ExemploModalCentralizado33">Avançado</button>
         
        </div>
      </div>
    </div>
  </nav>
  <center><img src="img/icong 1.png" style="margin-top: -60px;" width="190" height="190"></center>
  <form method="post" enctype="multipart/form-data" style="margin-top:-80px;">

    <h1><strong></strong>Drop seu arquivo para Análise</h1>

    <div class="container" style="width:550px;">
      <?php

      // Pasta onde o arquivo vai ser salvo
      $_UP['pasta'] = "yara/";

      // Tamanho máximo do arquivo (em Bytes)
      $_UP['tamanho'] = 1024 * 1024 * 2; // 2Mb

      // Array com as extensões permitidas
      $_UP['extensoes'] = array('jpg', 'txt', 'png', 'docx', 'exe', 'gif','pdf');

      // Renomeia o arquivo? (Se true, o arquivo será salvo como .jpg e um nome único)
      $_UP['renomeia'] = false;

      // Array com os tipos de erros de upload do PHP
      $_UP['erros'][0] = 'Não houve erro';
      $_UP['erros'][1] = 'O arquivo no upload é maior do que o limite do PHP';
      $_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especifiado no HTML';
      $_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
      $_UP['erros'][4] = 'Não foi feito o upload do arquivo';

      // Verifica se houve algum erro com o upload. Se sim, exibe a mensagem do erro
      if (@$_FILES['images']['error'] != 0) {
        die("Não foi possível fazer o upload, erro:<br />" . $_UP['erros'][$_FILES['arquivo']['error']]);
        exit; // Para a execução do script
      }

      // Caso script chegue a esse ponto, não houve erro com o upload e o PHP pode continuar

      // Faz a verificação da extensão do arquivo
      @$extensao = strtolower(end(explode('.', $_FILES['images']['name'])));
      if (array_search($extensao, $_UP['extensoes']) === false) {
        echo "";
      }

      // Faz a verificação do tamanho do arquivo
      else if ($_UP['tamanho'] < $_FILES['images']['size']) {
        echo "O arquivo enviado é muito grande, envie arquivos de até 2Mb.";
      }

      // O arquivo passou em todas as verificações, hora de tentar movê-lo para a pasta
      else {
        // Primeiro verifica se deve trocar o nome do arquivo
        if ($_UP['renomeia'] == true) {
          // Cria um nome baseado no UNIX TIMESTAMP atual e com extensão .jpg
          $nome_final = time() . '.jpg';
        } else {
          // Mantém o nome original do arquivo
          $nome_final = $_FILES['images']['name'];
        }

        // Depois verifica se é possível mover o arquivo para a pasta escolhida
        if (move_uploaded_file($_FILES['images']['tmp_name'], $_UP['pasta'] . $nome_final)) {
          // Upload efetuado com sucesso, exibe uma mensagem e um link para o arquivo
          echo "<center>  <div id='loading2' style='display: block'>Por favor, Aguarde a Verificação!</div></center>";
          #echo '<br /><a href="' . $_UP['pasta'] . $nome_final . '">Clique aqui para acessar o arquivo</a>';


          $path = "yara/";
          $diretorio = dir($path);
          $dados = "";
          #echo "Lista de Arquivos do diretório '<strong>" . $path . "</strong>':<br />";
          while ($arquivo = $diretorio->read()) {
            #echo "<a href='" . $path . $arquivo . "'>" . $arquivo . "</a><br />";
            $regra = "cd yara & yara -s $arquivo $nome_final.";
            $finalvalue = exec($regra);
            $dados .= "$finalvalue <br>" . " ";
            #echo "$finalvalue<br />";
          }
          #echo $dados;
          #$diretorio->close();


          # $regra = "cd yara & yara -s regra.yar $nome_final.";

          #$finalvalue = exec($regra);

          #echo  $finalvalue;



          if (strpos($dados, '$') !== false) {
      ?>

            <center>
              <div id="loading" style="display: block">
                <div class="spinner-grow text-light" role="status">
                  <span class="sr-only"></span>
                </div>
                <div class="spinner-grow text-light" role="status">
                  <span class="sr-only"></span>
                </div>
                <div class="spinner-grow text-light" role="status">
                  <span class="sr-only"></span>
                </div>
                <div class="spinner-grow text-light" role="status">
                  <span class="sr-only"></span>
                </div>
                <div class="spinner-grow text-light" role="status">
                  <span class="sr-only"></span>
                </div>
                <div class="spinner-grow text-light" role="status">
                  <span class="sr-only"></span>
                </div>
                <div class="spinner-grow text-light" role="status">
                  <span class="sr-only"></span>
                </div>
                <div class="spinner-grow text-light" role="status">
                  <span class="sr-only"></span>
                </div>

              </div>
              <center>


              <?php
              echo "<div id='conteudo' style='display: none'>
  <div class='alert alert-danger' role='alert'>
 Este arquivo contém padrões Maliciosos <br><button type='button' class='btn text-primary' data-toggle='modal' data-target='#exampleModalCenter'>Clique aqui para visualizar padrões</button>
    </div>
</div>";
              unlink("yara/" . $nome_final);
            } else {
              ?>

                <center>
                  <div id="loading" style="display: block">
                    <div class="spinner-grow text-light" role="status">
                      <span class="sr-only"></span>
                    </div>
                    <div class="spinner-grow text-light" role="status">
                      <span class="sr-only"></span>
                    </div>
                    <div class="spinner-grow text-light" role="status">
                      <span class="sr-only"></span>
                    </div>
                    <div class="spinner-grow text-light" role="status">
                      <span class="sr-only"></span>
                    </div>
                    <div class="spinner-grow text-light" role="status">
                      <span class="sr-only"></span>
                    </div>
                    <div class="spinner-grow text-light" role="status">
                      <span class="sr-only"></span>
                    </div>
                    <div class="spinner-grow text-light" role="status">
                      <span class="sr-only"></span>
                    </div>
                    <div class="spinner-grow text-light" role="status">
                      <span class="sr-only"></span>
                    </div>

                  </div>
                  <center>


                  <?php

                  echo "<div id='conteudo' style='display: none'>
                      <div class='alert alert-success' role='alert'>
                     Este arquivo não contem Nenhum  padrão malicioso
                        </div>
                    </div>";
                  unlink("yara/" . $nome_final);
                }
                  ?>
                  <html>

                  <head>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle" style="color:black;">Padrões Encontrados</h5>

                          </div>
                          <?php
                          echo "<div class='container modal-body' style='color:black;'>
                      
                             <center><pre>$dados</pre><center>
                   
                          </div>"
                          ?>
                          <div class="modal-footer">

                            <button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>
                          </div>
                        </div>
                      </div>
                    </div>
</body>


</html>
<?php

        } else {
          // Não foi possível fazer o upload, provavelmente a pasta está incorreta
          echo "Não foi possível enviar o arquivo, tente novamente";
        }
      }

?>
</div>
<div class="form-group file-area">

  <label for="images"> <span>Extensões Permitidas: jpg, png, gif e txt</span></label>
  <input type="file" name="images" id="images" required="required" multiple="multiple" />
  <div class="file-dummy">
    <div class="success">Ótimo! Seu arquivo está pronto para ser Scaneado.</div>
    <div class="default">Por Favor, Selecione um arquivo.</div>
  </div>
</div>

<div class="form-group">
  
  <center><button type="submit"  class="btn btn-outline-dark buttons">Scanear padrões</button></center>
</div>
<center>
  <input type="checkbox" id="switch" style="margin-top:20px; diplay:inline-bloc;">
  <label for="switch" class="switch-label">
    <div class="toggle"><p Style="margin-top:5px;">Light mode</p></div>
  </label></center>
</div>



</form>
</div>




<!-- Modal -->
<div class="modal fade" id="ExemploModalCentralizado33" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="TituloModalCentralizado">Aviso </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      O modo analista é exclusivo para analista de artefatos maliciosos, onde o mesmo cria seu banco de regras e possui funcionalidades mais avançada, deseja mesmo mudar para o modo analista?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-dismiss="modal">Voltar</button>
       <a href="shellExecAnalist.php"> <button type="button" class="btn btn-dark">Trocar</button></a>
      </div>
    </div>
  </div>
</div>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<script type="text/javascript" src=" https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js"></script>
<script>
$("#switch").on("click", () => {
  if($("#switch").prop("checked")) {
    dd = document.getElementById("dd");
    document.body.className = "AnErrorHasOccured";
    dd.style.color = "rgb(126, 126, 126)"
    dd.style.borderolor = "rgb(126, 126, 126)"

  } else {
    document.body.className = "body";

  }
})
</script>
</body>

</html>