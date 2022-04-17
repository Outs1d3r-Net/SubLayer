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
      /*overflow: hidden;*/

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
    
.onoff input.toggle {
    display: none;
}

.onoff input.toggle+label {
    display: inline-block;
    position: relative;
    box-shadow: inset 0 0 0px 1px #d5d5d5;
    height: 30px;
    width: 80px;
    border-radius: 30px;
}

.onoff input.toggle+label:before {
    content: "";
    display: block;
    height: 30px;
    width: 30px;
    border-radius: 30px;
    background: rgba(19, 191, 17, 0);
    transition: 0.1s ease-in-out;
}

.onoff input.toggle+label:after {
    content: "";
    position: absolute;
    height: 30px;
    width: 30px;
    top: 0;
    left: 0px;
    border-radius: 30px;
    background: #fff;
    box-shadow: inset 0 0 0 1px rgba(0, 0, 0, 0.2), 0 2px 4px rgba(0, 0, 0, 0.2);
    transition: 0.1s ease-in-out;
}

.onoff input.toggle:checked+label:before {
    width: 100px;
    background: #13bf11;
}

.onoff input.toggle:checked+label:after {
    left: 40px;
    box-shadow: inset 0 0 0 1px #13bf11, 0 2px 4px rgba(0, 0, 0, 0.2);
}
.loader,
.loader:before,
.loader:after {
  border-radius: 50%;
  width: 2.5em;
  height: 2.5em;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
  -webkit-animation: load7 2.0s infinite ease-in-out;
  animation: load7 2.0s infinite ease-in-out;

}
.loader {
  color: #c0c0c0;
  font-size: 10px;
  margin: 80px auto;
  position: absolute;
  text-indent: -9999em;
  -webkit-transform: translateZ(0);
  -ms-transform: translateZ(0);
  transform: translateZ(0);
  -webkit-animation-delay: -0.30s;
  animation-delay: -0.30s;
  margin-top:-60px;
  margin-left:240px;
 

}
.loader:before,
.loader:after {
  content: '';
  position: absolute;
  top: 0;
  
}
.loader:before {
  left: -3.5em;
  -webkit-animation-delay: -0.32s;
  animation-delay: -0.32s;
}
.loader:after {
  left: 3.5em;
}
@-webkit-keyframes load7 {
  0%,
  80%,
  100% {
    box-shadow: 0 2.5em 0 -1.3em;
  }
  40% {
    box-shadow: 0 2.5em 0 0;
  }
}
@keyframes load7 {
  0%,
  80%,
  100% {
    box-shadow: 0 2.5em 0 -1.3em;
  }
  40% {
    box-shadow: 0 2.5em 0 0;
  }
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

            <h3 class="" style="margin-top:10px; color: rgb(126, 126, 126);">SubLayer</h3>
               
          </a>
            <a href="shellExecAnalist.php"><p>Voltar</p></a>
        </div>
      </div>
   </div>
</div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Nome</label>
    <input type="email" class="form-control" id="nameMa" placeholder="Nome Malware">
    <label for="exampleFormControlInput1">Hash</label>
    <input type="email" class="form-control" id="hashMa" placeholder="Hash Malware">
    <label for="exampleFormControlInput1">File Type</label>
    <input type="email" class="form-control" id="fileType" placeholder="FileType">
    <div class="form-group">
    <label for="exampleFormControlFile1">Regra Yara</label>
    <input type="file" class="form-control-file" multiple="multiple" id="regraMa">
  </div>
    <button type="button" id="cadastrarRegra" class="btn btn-danger">Cadastrar Regra no banco de regras</button>
  </div>

<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Nome Mallware</th>
      <th scope="col">Hash</th>
      <th scope="col">File Type</th>
      <th scope="col">Regra</th>
    </tr>
  </thead>
  <tbody id="RegrasCadastradas">
    
  </tbody>
</table>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" src=" https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js"></script>
<script>
 
 $.ajax({
        url: `http://localhost:8080/rules`,
        async: true,
        type: "GET",
        contentType: 'application/json',
        headers: {
            "Content-Type": "application/json"
        },
        success: function(data) {

          console.log(data.length);
            var teste = 0 
            while(teste< data.length){
              console.log(data[teste].name)

              var elementoTr = document.createElement("tr")
              var elementoTdName = document.createElement("td")
              var elementoTdHash = document.createElement("td")
              var elementoTdType = document.createElement("td")
              var tdregra = document.createElement("td")
              

              elementoTdName.textContent = data[teste].name
              elementoTr.append(elementoTdName)

              elementoTdHash.textContent = data[teste].hash
              elementoTr.append(elementoTdHash)

              elementoTdType.textContent = data[teste].fileType
              elementoTr.append(elementoTdType)

              tdregra.textContent = data[teste].RulesYara
              elementoTr.append(tdregra)

              document.getElementById("RegrasCadastradas").append(elementoTr)

              teste++
  }
         

        },

        error: function(data) {
            if (data.status == 404) {
                alert("Serviço Indisponivel no momento")
            } else if (data.status == 400) {

              alert("Serviço Indisponivel no momento")
            }
        }
    });

    $(document).on("click", "#cadastrarRegra", function(){

      var reader = new FileReader();
      var file1 = document.getElementById("regraMa").files[0]
        reader.readAsDataURL(file1);

            reader.onload = function () {
                
                    hashSemIni = reader.result.split(",")
                    arTypeOne = hashSemIni[0].split(";")
                    artypeTwo = arTypeOne[0].split(":")




        $.ajax({
          url: `http://localhost:8080/registerRules`,
          async: true,
          type: "POST",
          contentType: 'application/json',
          headers: {
              "Content-Type": "application/json"
          },
          data: "{\n\t\"name\":\""+$("#nameMa").val()+"\",\n\t\"hash\":\""+$("#hashMa").val()+"\",\n\t\"fileType\":\""+$("#fileType").val()+"\",\n\t\"RulesYara\":\""+hashSemIni[1]+"\"\n\t\n}",
          success: function(data) {

            alert("Malware Registrado com sucesso");
            location.reload()

         
          },
          

     

          error: function(data) {
              if (data.status == 404) {
                  alert("Serviço Indisponivel no momento")
              } else if (data.status == 400) {

                alert("Serviço Indisponivel no momento")
              }
          }
      });
      
    };
    })




</script>
</body>

</html>