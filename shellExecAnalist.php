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
          <a class="navbar-brand" href="#" >
            <img src="img/icong 1.png" width="60" height="60" class="d-inline-block align-text-top" align="left">

            <h3 class="" style="margin-top:10px; color: rgb(126, 126, 126);">SubLayer</h3>
               
          </a>
       
          <a href="#"  data-toggle="modal" data-target="#ExemploModalCentralizado35">  <p style="position:absolute; font-size:14px; margin-left:20px; "><svg style=""xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
            width="25" height="25"
            viewBox="0 0 172 172"
            style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#666666"><path d="M86,21.34043l-62.35,24.49404v12.21553h6.45v10.75h4.3v55.9h-6.45v10.75h-6.45v15.05h129v-15.05h-6.45v-10.75h-6.45v-55.9h4.3v-10.75h6.45v-12.21553zM86,25.95957l58.05,22.80596v4.98447h-6.45v10.75h-4.3v64.5h6.45v10.75h2.15h4.3v6.45h-120.4v-6.45h6.45v-10.75h6.45v-64.5h-4.3v-10.75h-6.45v-4.98447zM38.7,53.75c-1.18741,0 -2.15,0.96259 -2.15,2.15c0,1.18741 0.96259,2.15 2.15,2.15c1.18741,0 2.15,-0.96259 2.15,-2.15c0,-1.18741 -0.96259,-2.15 -2.15,-2.15zM47.3,53.75c-1.18741,0 -2.15,0.96259 -2.15,2.15c0,1.18741 0.96259,2.15 2.15,2.15c1.18741,0 2.15,-0.96259 2.15,-2.15c0,-1.18741 -0.96259,-2.15 -2.15,-2.15zM55.9,53.75c-1.18741,0 -2.15,0.96259 -2.15,2.15c0,1.18741 0.96259,2.15 2.15,2.15c1.18741,0 2.15,-0.96259 2.15,-2.15c0,-1.18741 -0.96259,-2.15 -2.15,-2.15zM64.5,53.75c-1.18741,0 -2.15,0.96259 -2.15,2.15c0,1.18741 0.96259,2.15 2.15,2.15c1.18741,0 2.15,-0.96259 2.15,-2.15c0,-1.18741 -0.96259,-2.15 -2.15,-2.15zM73.1,53.75c-1.18741,0 -2.15,0.96259 -2.15,2.15c0,1.18741 0.96259,2.15 2.15,2.15c1.18741,0 2.15,-0.96259 2.15,-2.15c0,-1.18741 -0.96259,-2.15 -2.15,-2.15zM81.7,53.75c-1.18741,0 -2.15,0.96259 -2.15,2.15c0,1.18741 0.96259,2.15 2.15,2.15c1.18741,0 2.15,-0.96259 2.15,-2.15c0,-1.18741 -0.96259,-2.15 -2.15,-2.15zM90.3,53.75c-1.18741,0 -2.15,0.96259 -2.15,2.15c0,1.18741 0.96259,2.15 2.15,2.15c1.18741,0 2.15,-0.96259 2.15,-2.15c0,-1.18741 -0.96259,-2.15 -2.15,-2.15zM98.9,53.75c-1.18741,0 -2.15,0.96259 -2.15,2.15c0,1.18741 0.96259,2.15 2.15,2.15c1.18741,0 2.15,-0.96259 2.15,-2.15c0,-1.18741 -0.96259,-2.15 -2.15,-2.15zM107.5,53.75c-1.18741,0 -2.15,0.96259 -2.15,2.15c0,1.18741 0.96259,2.15 2.15,2.15c1.18741,0 2.15,-0.96259 2.15,-2.15c0,-1.18741 -0.96259,-2.15 -2.15,-2.15zM116.1,53.75c-1.18741,0 -2.15,0.96259 -2.15,2.15c0,1.18741 0.96259,2.15 2.15,2.15c1.18741,0 2.15,-0.96259 2.15,-2.15c0,-1.18741 -0.96259,-2.15 -2.15,-2.15zM124.7,53.75c-1.18741,0 -2.15,0.96259 -2.15,2.15c0,1.18741 0.96259,2.15 2.15,2.15c1.18741,0 2.15,-0.96259 2.15,-2.15c0,-1.18741 -0.96259,-2.15 -2.15,-2.15zM133.3,53.75c-1.18741,0 -2.15,0.96259 -2.15,2.15c0,1.18741 0.96259,2.15 2.15,2.15c1.18741,0 2.15,-0.96259 2.15,-2.15c0,-1.18741 -0.96259,-2.15 -2.15,-2.15zM43,64.5c-1.18741,0 -2.15,0.96259 -2.15,2.15c0,1.18741 0.96259,2.15 2.15,2.15c1.18741,0 2.15,-0.96259 2.15,-2.15c0,-1.18741 -0.96259,-2.15 -2.15,-2.15zM47.3,64.5v64.5h23.65c0.77537,0.01097 1.49657,-0.39641 1.88746,-1.06613c0.39088,-0.66972 0.39088,-1.49803 0,-2.16775c-0.39088,-0.66972 -1.11209,-1.07709 -1.88746,-1.06613h-19.35v-55.9h19.35c0.77537,0.01097 1.49657,-0.39641 1.88746,-1.06613c0.39088,-0.66972 0.39088,-1.49803 0,-2.16775c-0.39088,-0.66972 -1.11209,-1.07709 -1.88746,-1.06613zM101.05,64.5c-0.77537,-0.01097 -1.49657,0.39641 -1.88746,1.06613c-0.39088,0.66972 -0.39088,1.49803 0,2.16775c0.39088,0.66972 1.11209,1.07709 1.88746,1.06613h19.35v55.9h-19.35c-0.77537,-0.01097 -1.49657,0.39641 -1.88746,1.06613c-0.39088,0.66972 -0.39088,1.49803 0,2.16775c0.39088,0.66972 1.11209,1.07709 1.88746,1.06613h23.65v-64.5zM129,64.5c-1.18741,0 -2.15,0.96259 -2.15,2.15c0,1.18741 0.96259,2.15 2.15,2.15c1.18741,0 2.15,-0.96259 2.15,-2.15c0,-1.18741 -0.96259,-2.15 -2.15,-2.15zM84.02637,70.77363v4.12783c-8.0754,0.7482 -12.97978,5.32437 -12.97978,12.23232c0,5.8351 3.64818,9.8429 10.31748,11.54785l2.6623,0.68867v13.63906c-4.45695,-0.50955 -7.33113,-2.99253 -7.62998,-6.55078h-6.33662c0.0301,6.9402 5.41175,11.63533 13.9666,12.20293v3.88428h4.09844v-3.91367c8.7634,-0.7482 13.81963,-5.32289 13.81963,-12.65224c0,-6.192 -3.53195,-9.99125 -11.03975,-11.8166l-2.77988,-0.62568v-12.8958c3.9474,0.47945 6.64034,3.04917 6.76074,6.34082h6.24844c-0.1806,-6.67145 -5.26273,-11.39315 -13.00918,-12.08115v-4.12783zM84.02637,80.6124v12.05596c-4.3086,-0.8686 -6.58018,-2.99112 -6.58018,-6.07207c0,-3.26155 2.75103,-5.77534 6.58018,-5.98389zM88.1248,100.14717c5.08475,1.01695 7.44522,3.07924 7.44522,6.52139c0,3.79905 -2.71952,6.12871 -7.44522,6.39961zM43,124.7c-1.18741,0 -2.15,0.96259 -2.15,2.15c0,1.18741 0.96259,2.15 2.15,2.15c1.18741,0 2.15,-0.96259 2.15,-2.15c0,-1.18741 -0.96259,-2.15 -2.15,-2.15zM129,124.7c-1.18741,0 -2.15,0.96259 -2.15,2.15c0,1.18741 0.96259,2.15 2.15,2.15c1.18741,0 2.15,-0.96259 2.15,-2.15c0,-1.18741 -0.96259,-2.15 -2.15,-2.15zM38.7,135.45c-1.18741,0 -2.15,0.96259 -2.15,2.15c0,1.18741 0.96259,2.15 2.15,2.15c1.18741,0 2.15,-0.96259 2.15,-2.15c0,-1.18741 -0.96259,-2.15 -2.15,-2.15zM47.3,135.45c-1.18741,0 -2.15,0.96259 -2.15,2.15c0,1.18741 0.96259,2.15 2.15,2.15c1.18741,0 2.15,-0.96259 2.15,-2.15c0,-1.18741 -0.96259,-2.15 -2.15,-2.15zM55.9,135.45c-1.18741,0 -2.15,0.96259 -2.15,2.15c0,1.18741 0.96259,2.15 2.15,2.15c1.18741,0 2.15,-0.96259 2.15,-2.15c0,-1.18741 -0.96259,-2.15 -2.15,-2.15zM64.5,135.45c-1.18741,0 -2.15,0.96259 -2.15,2.15c0,1.18741 0.96259,2.15 2.15,2.15c1.18741,0 2.15,-0.96259 2.15,-2.15c0,-1.18741 -0.96259,-2.15 -2.15,-2.15zM73.1,135.45c-1.18741,0 -2.15,0.96259 -2.15,2.15c0,1.18741 0.96259,2.15 2.15,2.15c1.18741,0 2.15,-0.96259 2.15,-2.15c0,-1.18741 -0.96259,-2.15 -2.15,-2.15zM81.7,135.45c-1.18741,0 -2.15,0.96259 -2.15,2.15c0,1.18741 0.96259,2.15 2.15,2.15c1.18741,0 2.15,-0.96259 2.15,-2.15c0,-1.18741 -0.96259,-2.15 -2.15,-2.15zM90.3,135.45c-1.18741,0 -2.15,0.96259 -2.15,2.15c0,1.18741 0.96259,2.15 2.15,2.15c1.18741,0 2.15,-0.96259 2.15,-2.15c0,-1.18741 -0.96259,-2.15 -2.15,-2.15zM98.9,135.45c-1.18741,0 -2.15,0.96259 -2.15,2.15c0,1.18741 0.96259,2.15 2.15,2.15c1.18741,0 2.15,-0.96259 2.15,-2.15c0,-1.18741 -0.96259,-2.15 -2.15,-2.15zM107.5,135.45c-1.18741,0 -2.15,0.96259 -2.15,2.15c0,1.18741 0.96259,2.15 2.15,2.15c1.18741,0 2.15,-0.96259 2.15,-2.15c0,-1.18741 -0.96259,-2.15 -2.15,-2.15zM116.1,135.45c-1.18741,0 -2.15,0.96259 -2.15,2.15c0,1.18741 0.96259,2.15 2.15,2.15c1.18741,0 2.15,-0.96259 2.15,-2.15c0,-1.18741 -0.96259,-2.15 -2.15,-2.15zM124.7,135.45c-1.18741,0 -2.15,0.96259 -2.15,2.15c0,1.18741 0.96259,2.15 2.15,2.15c1.18741,0 2.15,-0.96259 2.15,-2.15c0,-1.18741 -0.96259,-2.15 -2.15,-2.15zM133.3,135.45c-1.18741,0 -2.15,0.96259 -2.15,2.15c0,1.18741 0.96259,2.15 2.15,2.15c1.18741,0 2.15,-0.96259 2.15,-2.15c0,-1.18741 -0.96259,-2.15 -2.15,-2.15z"></path></g></g></svg>Banco de regras</p>
            </a>     <a href="links.php"><p style="position:absolute;margin-left:20px;  margin-top:50px;  font-size:14px;"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
            width="25" height="25"
            viewBox="0 0 172 172"
            style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#666666"><path d="M51.6,27.95c-8.28926,0 -15.05,6.76074 -15.05,15.05v0.61309c-6.86992,3.36778 -12.19453,9.59941 -14.21016,17.36797l-10.10332,38.99395c-0.96582,3.04863 -1.48652,6.30723 -1.48652,9.675c0,17.78789 14.46211,32.25 32.25,32.25c14.11777,0 26.11914,-9.1291 30.46953,-21.78555c2.7043,4.05644 7.31504,6.73555 12.53047,6.73555c5.21543,0 9.82617,-2.6791 12.53047,-6.73555c4.35039,12.65644 16.35176,21.78555 30.46953,21.78555c17.78789,0 32.25,-14.46211 32.25,-32.25c0,-3.36777 -0.5207,-6.62637 -1.48652,-9.675l-10.10332,-38.99395c-2.01562,-7.76855 -7.34023,-14.00019 -14.21016,-17.36797v-0.61309c0,-8.28926 -6.76074,-15.05 -15.05,-15.05c-8.28926,0 -15.05,6.76074 -15.05,15.05v4.47637c-2.48594,2.23399 -4.51836,4.93828 -5.99648,7.97012c-2.51113,-4.8291 -7.5502,-8.14649 -13.35352,-8.14649c-5.80332,0 -10.84238,3.31738 -13.35351,8.14649c-1.47813,-3.03184 -3.51055,-5.73613 -5.99649,-7.97012v-4.47637c0,-8.28926 -6.76074,-15.05 -15.05,-15.05zM51.6,32.25c5.96289,0 10.75,4.78711 10.75,10.75v1.34375c-3.80449,-2.20879 -8.19687,-3.49375 -12.9,-3.49375h-1.0834c-2.57832,0 -5.08105,0.38633 -7.45781,1.075c0.5291,-5.45059 5.08945,-9.675 10.69121,-9.675zM120.4,32.25c5.60176,0 10.16211,4.22441 10.69121,9.675c-2.37676,-0.68867 -4.87949,-1.075 -7.45781,-1.075h-1.0834c-4.70312,0 -9.09551,1.28496 -12.9,3.49375v-1.34375c0,-5.96289 4.78711,-10.75 10.75,-10.75zM48.3666,45.15h1.0834c11.90059,0 21.5,9.59941 21.5,21.5c0,1.18418 0.96582,2.15 2.15,2.15c1.18418,0 2.15,-0.96582 2.15,-2.15v-4.3c0,-5.96289 4.78711,-10.75 10.75,-10.75c5.96289,0 10.75,4.78711 10.75,10.75v4.3c0,1.18418 0.96582,2.15 2.15,2.15c1.18418,0 2.15,-0.96582 2.15,-2.15c0,-11.90059 9.59941,-21.5 21.5,-21.5h1.0834c10.30488,0 19.27441,6.94551 21.86113,16.91445l6.48359,24.98535c-5.85371,-5.94609 -13.9918,-9.6498 -22.97813,-9.6498c-15.24316,0 -28.01719,10.64082 -31.36816,24.86777c-2.76309,-3.35937 -6.95391,-5.51777 -11.63184,-5.51777c-4.67793,0 -8.86875,2.1584 -11.63184,5.51777c-3.35098,-14.22695 -16.125,-24.86777 -31.36816,-24.86777c-8.98633,0 -17.12441,3.70371 -22.97812,9.6498l6.48359,-24.98535c2.58672,-9.96895 11.55625,-16.91445 21.86113,-16.91445zM73.1,73.1c-1.18418,0 -2.15,0.96582 -2.15,2.15c0,1.18418 0.96582,2.15 2.15,2.15c1.18418,0 2.15,-0.96582 2.15,-2.15c0,-1.18418 -0.96582,-2.15 -2.15,-2.15zM98.9,73.1c-1.18418,0 -2.15,0.96582 -2.15,2.15c0,1.18418 0.96582,2.15 2.15,2.15c1.18418,0 2.15,-0.96582 2.15,-2.15c0,-1.18418 -0.96582,-2.15 -2.15,-2.15zM43,81.7c15.46152,0 27.95,12.48848 27.95,27.95c0,15.46152 -12.48848,27.95 -27.95,27.95c-15.46152,0 -27.95,-12.48848 -27.95,-27.95c0,-2.80508 0.41992,-5.50937 1.19258,-8.0625h0.0168l0.11758,-0.46191c3.60293,-11.2791 14.13457,-19.42559 26.62305,-19.42559zM73.1,81.7c-1.18418,0 -2.15,0.96582 -2.15,2.15c0,1.18418 0.96582,2.15 2.15,2.15c1.18418,0 2.15,-0.96582 2.15,-2.15c0,-1.18418 -0.96582,-2.15 -2.15,-2.15zM98.9,81.7c-1.18418,0 -2.15,0.96582 -2.15,2.15c0,1.18418 0.96582,2.15 2.15,2.15c1.18418,0 2.15,-0.96582 2.15,-2.15c0,-1.18418 -0.96582,-2.15 -2.15,-2.15zM129,81.7c12.48848,0 23.02012,8.14649 26.61465,19.42559l0.12598,0.46191h0.0252c0.76426,2.55313 1.18418,5.25742 1.18418,8.0625c0,15.46152 -12.48848,27.95 -27.95,27.95c-15.46152,0 -27.95,-12.48848 -27.95,-27.95c0,-15.46152 12.48848,-27.95 27.95,-27.95zM43,88.15c-1.18418,0 -2.15,0.96582 -2.15,2.15c0,1.18418 0.96582,2.15 2.15,2.15c1.18418,0 2.15,-0.96582 2.15,-2.15c0,-1.18418 -0.96582,-2.15 -2.15,-2.15zM129,88.15c-1.18418,0 -2.15,0.96582 -2.15,2.15c0,1.18418 0.96582,2.15 2.15,2.15c1.18418,0 2.15,-0.96582 2.15,-2.15c0,-1.18418 -0.96582,-2.15 -2.15,-2.15zM73.1,90.3c-1.18418,0 -2.15,0.96582 -2.15,2.15c0,1.18418 0.96582,2.15 2.15,2.15c1.18418,0 2.15,-0.96582 2.15,-2.15c0,-1.18418 -0.96582,-2.15 -2.15,-2.15zM98.9,90.3c-1.18418,0 -2.15,0.96582 -2.15,2.15c0,1.18418 0.96582,2.15 2.15,2.15c1.18418,0 2.15,-0.96582 2.15,-2.15c0,-1.18418 -0.96582,-2.15 -2.15,-2.15zM33.27461,90.73672c-0.36113,0.0168 -0.71387,0.10918 -1.02461,0.29395c-1.02461,0.59629 -1.38574,1.90645 -0.78945,2.93105c0.28555,0.49551 0.75586,0.85664 1.31016,1.00781c0.5459,0.14277 1.13379,0.06719 1.6293,-0.21836c1.02461,-0.59629 1.37734,-1.90645 0.78105,-2.93945c-0.38633,-0.68027 -1.11699,-1.0918 -1.90644,-1.075zM119.26621,90.73672c-0.35273,0.0084 -0.70547,0.10918 -1.01621,0.29395c-0.49551,0.27715 -0.85664,0.74746 -1.00781,1.30176c-0.14277,0.5543 -0.06719,1.14219 0.21836,1.6293c0.59629,1.03301 1.90644,1.38574 2.93945,0.78945c1.02461,-0.59629 1.37734,-1.90645 0.78105,-2.93945c-0.38633,-0.68027 -1.12539,-1.0918 -1.91484,-1.075zM52.57422,90.74512c-0.73906,0.03359 -1.40254,0.43672 -1.76367,1.075c-0.59629,1.02461 -0.23516,2.34316 0.78945,2.93945c1.02461,0.58789 2.34316,0.23516 2.93105,-0.78945c0.29395,-0.49551 0.36953,-1.0834 0.21836,-1.6293c-0.14277,-0.5543 -0.50391,-1.02461 -0.99941,-1.31016c-0.36113,-0.20996 -0.76426,-0.30234 -1.17578,-0.28555zM138.57422,90.74512c-0.73066,0.04199 -1.39414,0.44512 -1.76367,1.075c-0.59629,1.02461 -0.24356,2.34316 0.78945,2.93945c0.48711,0.28555 1.075,0.36113 1.6293,0.20996c0.5543,-0.14277 1.02461,-0.50391 1.30176,-0.99941c0.59629,-1.02461 0.24356,-2.34316 -0.78105,-2.93105c-0.36113,-0.20996 -0.77266,-0.31074 -1.17578,-0.29395zM26.13594,97.825c-0.73066,0.03359 -1.39414,0.43672 -1.75527,1.075c-0.59629,1.02461 -0.24355,2.34316 0.78105,2.93105c1.03301,0.59629 2.34316,0.24356 2.93945,-0.78105c0.28555,-0.49551 0.36113,-1.0834 0.21836,-1.6293c-0.15117,-0.5543 -0.5123,-1.02461 -1.00781,-1.31016c-0.35273,-0.20996 -0.76426,-0.30234 -1.17578,-0.28555zM59.70449,97.825c-0.36113,0.0084 -0.71387,0.10918 -1.02461,0.28555c-1.02461,0.59629 -1.37734,1.90644 -0.78945,2.93945c0.59629,1.02461 1.91484,1.37734 2.93945,0.78105c0.49551,-0.27715 0.85664,-0.74746 1.00781,-1.30176c0.14277,-0.5543 0.06719,-1.14219 -0.21836,-1.6293c-0.39472,-0.68027 -1.12539,-1.0918 -1.91484,-1.075zM145.69609,97.825c-0.35273,0.0084 -0.70547,0.10918 -1.01621,0.28555c-1.02461,0.59629 -1.38574,1.90644 -0.78945,2.93945c0.28555,0.48711 0.75586,0.84824 1.31016,0.99941c0.5459,0.15117 1.13379,0.07559 1.6293,-0.21836c0.49551,-0.27715 0.85664,-0.74746 0.99941,-1.30176c0.15117,-0.5543 0.07559,-1.14219 -0.21836,-1.6293c-0.38633,-0.68027 -1.12539,-1.0918 -1.91484,-1.075zM112.13594,97.825c-0.73066,0.04199 -1.39414,0.44512 -1.75527,1.075c-0.59629,1.03301 -0.24355,2.34316 0.78105,2.93945c1.03301,0.59629 2.34316,0.24355 2.93945,-0.78945c0.28555,-0.48711 0.36113,-1.075 0.21836,-1.6293c-0.15117,-0.5543 -0.5123,-1.02461 -1.00781,-1.30176c-0.35273,-0.20996 -0.76426,-0.31074 -1.17578,-0.29395zM86,101.05c5.96289,0 10.75,4.78711 10.75,10.75c0,5.96289 -4.78711,10.75 -10.75,10.75c-5.96289,0 -10.75,-4.78711 -10.75,-10.75c0,-5.96289 4.78711,-10.75 10.75,-10.75zM23.65,107.5c-1.18418,0 -2.15,0.96582 -2.15,2.15c0,1.18418 0.96582,2.15 2.15,2.15c1.18418,0 2.15,-0.96582 2.15,-2.15c0,-1.18418 -0.96582,-2.15 -2.15,-2.15zM62.35,107.5c-1.18418,0 -2.15,0.96582 -2.15,2.15c0,1.18418 0.96582,2.15 2.15,2.15c1.18418,0 2.15,-0.96582 2.15,-2.15c0,-1.18418 -0.96582,-2.15 -2.15,-2.15zM109.65,107.5c-1.18418,0 -2.15,0.96582 -2.15,2.15c0,1.18418 0.96582,2.15 2.15,2.15c1.18418,0 2.15,-0.96582 2.15,-2.15c0,-1.18418 -0.96582,-2.15 -2.15,-2.15zM148.35,107.5c-1.18418,0 -2.15,0.96582 -2.15,2.15c0,1.18418 0.96582,2.15 2.15,2.15c1.18418,0 2.15,-0.96582 2.15,-2.15c0,-1.18418 -0.96582,-2.15 -2.15,-2.15zM86,109.65c-1.18418,0 -2.15,0.96582 -2.15,2.15c0,1.18418 0.96582,2.15 2.15,2.15c1.18418,0 2.15,-0.96582 2.15,-2.15c0,-1.18418 -0.96582,-2.15 -2.15,-2.15zM26.19473,117.175c-0.36113,0.0084 -0.71387,0.10078 -1.03301,0.28555c-1.02461,0.59629 -1.37734,1.90644 -0.78105,2.93945c0.59629,1.02461 1.90645,1.37734 2.93105,0.78105c0.49551,-0.27715 0.85664,-0.74746 1.00781,-1.30176c0.15117,-0.5543 0.07559,-1.14219 -0.20996,-1.6293c-0.39473,-0.68867 -1.13379,-1.1002 -1.91484,-1.075zM112.19473,117.175c-0.36113,0.0084 -0.71387,0.10078 -1.03301,0.28555c-1.02461,0.59629 -1.37734,1.90644 -0.78105,2.93945c0.27715,0.48711 0.74746,0.84824 1.30176,0.99941c0.5543,0.15117 1.14219,0.07559 1.6293,-0.21836c0.49551,-0.27715 0.85664,-0.74746 1.00781,-1.30176c0.14277,-0.5543 0.06719,-1.14219 -0.21836,-1.6293c-0.39473,-0.68867 -1.12539,-1.1002 -1.90645,-1.075zM59.6541,117.175c-0.73906,0.04199 -1.40254,0.44512 -1.76367,1.075c-0.59629,1.03301 -0.23516,2.34316 0.78945,2.93945c1.02461,0.59629 2.34316,0.24355 2.93105,-0.78945c0.29395,-0.48711 0.36953,-1.075 0.21836,-1.6293c-0.14278,-0.5543 -0.50391,-1.02461 -0.99941,-1.30176c-0.36113,-0.20996 -0.76426,-0.31074 -1.17578,-0.29395zM145.6541,117.1834c-0.73066,0.03359 -1.39414,0.43672 -1.76367,1.0666c-0.59629,1.03301 -0.23516,2.34316 0.78945,2.93945c1.02461,0.59629 2.34316,0.24355 2.93105,-0.78945c0.59629,-1.02461 0.24355,-2.33476 -0.78105,-2.93105c-0.35274,-0.20996 -0.76426,-0.30234 -1.17578,-0.28555zM52.61621,124.25488c-0.35273,0.0084 -0.70547,0.10918 -1.01621,0.28555c-0.49551,0.28555 -0.85664,0.75586 -1.00781,1.31016c-0.14277,0.5459 -0.06719,1.13379 0.21836,1.6293c0.28555,0.49551 0.75586,0.85664 1.31016,0.99941c0.5459,0.15117 1.13379,0.07559 1.6293,-0.21836c1.02461,-0.58789 1.37734,-1.90645 0.78105,-2.93105c-0.38633,-0.68027 -1.12539,-1.0918 -1.91484,-1.075zM138.61621,124.25488c-0.35273,0.0084 -0.70547,0.10918 -1.01621,0.28555c-0.49551,0.28555 -0.85664,0.75586 -1.00781,1.31016c-0.14277,0.5459 -0.06719,1.13379 0.21836,1.6293c0.59629,1.02461 1.90644,1.37734 2.93945,0.78105c1.02461,-0.58789 1.37734,-1.90645 0.78105,-2.93105c-0.39472,-0.68027 -1.12539,-1.0918 -1.91484,-1.075zM33.22422,124.26328c-0.73066,0.03359 -1.39414,0.43672 -1.76367,1.075c-0.59629,1.02461 -0.24356,2.33477 0.78945,2.93105c0.48711,0.28555 1.075,0.36113 1.6293,0.21836c0.5543,-0.15117 1.02461,-0.5123 1.30176,-0.99941c0.59629,-1.03301 0.24356,-2.34316 -0.78105,-2.93945c-0.36113,-0.20996 -0.77266,-0.30234 -1.17578,-0.28555zM119.22422,124.26328c-0.73066,0.03359 -1.39414,0.43672 -1.76367,1.075c-0.59629,1.02461 -0.24356,2.33477 0.78945,2.93105c0.48711,0.28555 1.075,0.36113 1.6293,0.21836c0.5543,-0.15117 1.02461,-0.5123 1.30176,-0.99941c0.59629,-1.03301 0.24356,-2.34316 -0.78105,-2.93945c-0.36113,-0.20996 -0.77266,-0.30234 -1.17578,-0.28555zM43,126.85c-1.18418,0 -2.15,0.96582 -2.15,2.15c0,1.18418 0.96582,2.15 2.15,2.15c1.18418,0 2.15,-0.96582 2.15,-2.15c0,-1.18418 -0.96582,-2.15 -2.15,-2.15zM129,126.85c-1.18418,0 -2.15,0.96582 -2.15,2.15c0,1.18418 0.96582,2.15 2.15,2.15c1.18418,0 2.15,-0.96582 2.15,-2.15c0,-1.18418 -0.96582,-2.15 -2.15,-2.15z"></path></g></g></svg>Analise Automatizada</p>
            </a>  
              <a href="shellExecAnalist.php"><p style="position:absolute; margin-left:20px; margin-top:100px;  font-size:14px;"><img src="img/iic.png"  width="25" height="25"> Scaner e Banco de regras</p>
              </a> 
              <button type="button" id="dd" class="btn btn-outline-light btn-sm" style=" margin-right:auto; margin-top:200px; position:absolute;"  data-toggle="modal" data-target="#ExemploModalCentralizado34">Diretórios</button>
        </div>
      </div>

      <div class="row">

        <div class="col-10">


          <button type="button" id="dd2" class="btn btn-outline-light btn-sm" style=" margin-right:auto; margin-top:-10px; width:200px;"  data-toggle="modal" data-target="#ExemploModalCentralizado33">Modo Usuario</button>
         
        </div>
      </div>
    </div>
  </nav>
  <center><img src="img/iic.png" style="margin-top: -60px;" width="190" height="190"></center>
  <form method="post" enctype="multipart/form-data" style="margin-top:-30px;" >

    <h1><strong></strong>Drop seu arquivo para Análise</h1>

    <div class="container" style="width:550px;">
      <?php

      // Pasta onde o arquivo vai ser salvo
      $_UP['pasta'] = "BancoYara/";

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
          echo "<center>  <div id='loading2' style='display: none' marin-top:200px;>Por favor, Aguarde a Verificação!</div></center>";
          #echo '<br /><a href="' . $_UP['pasta'] . $nome_final . '">Clique aqui para acessar o arquivo</a>';


          $path = "BancoYara/";
          $diretorio = dir($path);
          $dados = "";
          #echo "Lista de Arquivos do diretório '<strong>" . $path . "</strong>':<br />";
          while ($arquivo = $diretorio->read()) {
            #echo "<a href='" . $path . $arquivo . "'>" . $arquivo . "</a><br />";
            $regra = "cd BancoYara & yara -s $arquivo $nome_final.";
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
         
            <div class="loader" id="loading">Loading...</div>
              <center>


              <?php
              echo "<div id='conteudo' style='display: none'>
  <div class='alert alert-danger' role='alert'>
 Este arquivo contém padrões Maliciosos <br><button type='button' class='btn text-primary' data-toggle='modal' data-target='#exampleModalCenter'>Clique aqui para visualizar padrões</button>
    </div>
</div>";
              unlink("BancoYara/" . $nome_final);
            } else {
              ?>

                <center>
                <div class="loader" id="loading">Loading...</div>
                  <center>


                  <?php

                  echo "<div id='conteudo' style='display: none'>
                      <div class='alert alert-success' role='alert'>
                     Este arquivo não contem Nenhum  padrão malicioso
                        </div>
                    </div>";
                  unlink("BancoYara/" . $nome_final);
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
<center>



<form method="post" enctype="multipart/form-data" >

<div class="ar1" style="display:inline-block;  margin:10px;">
<!--Primeiro caixa de drop-->
<div class="form-group file-area" id="upda-2">
  <label for="images"> <span>Extensões Permitidas: jpg, png, gif e txt</span></label>
  <input type="file" name="images" id="images" required="required" multiple="multiple" />
  <div class="file-dummy">
    <div class="success">Ótimo! Seu artefato está pronto para ser Scaneado.</div>
    <div class="default">Por Favor, Selecione um artefato.</div>
  </div>
</div>


<div class="form-group">
  <button type="submit"  id="dd2" class="btn btn-outline-dark buttons" style="color:white; border-color:white;" >Scanear padrões</button>
</div>
</div>
    </form>
<div class="ar1" style="display:inline-block; margin:10px;">
<!--segundok-->
<form method="post" enctype="multipart/form-data" >
<div class="form-group file-area">

  <label for="imagensyar"> <span>Apenas arquivos.yar</span></label>
  <input type="file" name="imagensyar" id="imagesyar" required="required" multiple="multiple">
  <div class="file-dummy">
    <div class="success">Ótimo! Sua regra está pronta para ser Scaneado.</div>
    <div class="default">Por Favor, Selecione sua regra Yara.</div>
  </div>
</div>
<button type="submit"  name="guardar" id="dd2" class="btn btn-outline-dark buttons" style="color:white; border-color:white;">Guardar Regra</button>
</form>
</div>
<!--modo dark-->
<div class="onoff" style="margin-top:-40px;">
    <input type="checkbox" class="toggle" id="onoff1">
    <label for="onoff1"></label>
</div>
<p id="estado">Modo Dark</p>
</div>
</form>

<?php



   

    @$nome_imagem = $_FILES['imagensyar']['name'];

    $diretorio = 'BancoYara/';
  
        
        if(move_uploaded_file(@$_FILES['imagensyar']['tmp_name'], $diretorio.@$nome_imagem)){
          echo "<div id='loading2' style='margin-top:-350px; position:absolute; margin-left:00px;'>Regra Upada, Consulte suas Regras em Banco de Regras</div>";
            
        }else{
           
        }   
     
    
?>
</div>



<div class="alert alert-light al1" role="alert" id="aviso" style="width:300px; margin-left:540px; margin-top:-650px; cursor:pointer;">

Lembre-se sempre de guardar a regra antes de Executala no artefato.

</div>

<!-- Modal -->
<div class="modal fade" id="ExemploModalCentralizado33" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="TituloModalCentralizado">Aviso</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Deseja mesmo ir para o modo usuario? 
        Arquivos já dropados não serão salvos.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-dismiss="modal">Voltar</button>
       <a href="shellExec.php"> <button type="button" class="btn btn-dark">Trocar</button></a>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="ExemploModalCentralizado34" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Configurações de diretório</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="onoff" style="display:inline-block;">
    <input type="checkbox" class="toggle toggle-2" id="onoff1-2">
    <label for="onoff1-2"></label>
</div>
<p id="estado-2" style="display:inline-block;">Desativar Apenas Upload de regras</p>
      </div>
      <div class="modal-body">
      <div class="onoff" style="display:inline-block;">
    <input type="checkbox" class="toggle toggle-2" id="onoff1-2">
    <label for="onoff1-2"></label>
</div>
<p id="estado-2" style="display:inline-block;">Desativar Apenas Upload de regras</p>
      </div>
      
      <div class="modal-body">
      <div class="onoff" style="display:inline-block;">
    <input type="checkbox" class="toggle toggle-2" id="onoff1-2">
    <label for="onoff1-2"></label>
</div>
<p id="estado-2" style="display:inline-block;">Desativar Apenas Upload de regras</p>
      </div>
      
      <div class="modal-body">
      <div class="onoff" style="display:inline-block;">
    <input type="checkbox" class="toggle toggle-2" id="onoff1-2">
    <label for="onoff1-2"></label>
</div>
<p id="estado-2" style="display:inline-block;">Desativar Apenas Upload de regras</p>
      </div>
      
  
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-dismiss="modal">Voltar</button>
        <button type="button" class="btn btn-dark" data-dismiss="modal">Salvar</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="ExemploModalCentralizado35" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Banco de Regras</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
      <?php
$path = "BancoYara/";
$diretorio = dir($path);

echo "Lista de Arquivos do diretório '<strong>".$path."</strong>':<br />";
while($arquivo = $diretorio -> read()){
echo "<a href='".$path.$arquivo."'>".$arquivo."</a><br />";
}
$diretorio -> close();
?>
  

      <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-dismiss="modal">Voltar</button>
        <button type="button" class="btn btn-dark" data-dismiss="modal">Salvar</button>
      </div>
    </div>
  </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<script type="text/javascript" src=" https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js"></script>
<script>
 


 aviso = document.getElementById("aviso");
 aviso.style.display = "none";

  

 setInterval(() => {
  aviso.style.display = "block";
  setTimeout(function(){  aviso.style.display = "none"; }, 6000);
 }, 40000);


var estado = document.getElementById('estado');
$('#onoff1').on('change', function() {
    var el = this;
    estado.innerHTML = el.checked ? 'Modo light' : 'Modo Dark';

    // aqui podes juntar a lógica do ajax
    $.ajax({
        url: "some.php",
        data: {
            estado: this.checked
        }
    }).done(function(msg) {
        if (msg == 'failed') return el.checked = !el.checked; // caso o servidor retorne "failed" mudar o estado do botão
        else alert("Info gravada: " + msg);
    });
});




var estado = document.getElementById('estado-2');
$('#onoff1-2').on('change', function() {
    var el = this;
    estado.innerHTML = el.checked ? 'Ativar Apenas Upload de regras' : 'Desativar Apenas Upload de regras';

    // aqui podes juntar a lógica do ajax
    $.ajax({
        url: "some.php",
        data: {
            estado: this.checked
        }
    }).done(function(msg) {
        if (msg == 'failed') return el.checked = !el.checked; // caso o servidor retorne "failed" mudar o estado do botão
        else alert("Info gravada: " + msg);
    });
});


$("#onoff1-2").on("click", () => {
  if($("#onoff1-2").prop("checked")) {


  


  } else {
  


  }
})


$("#onoff1").on("click", () => {
  if($("#onoff1").prop("checked")) {
    dd = document.getElementById("dd");
    dd2 = document.getElementById("dd2");
    sbm = document.getElementById("sbm");
    document.body.className = "AnErrorHasOccured";
    dd.style.color = "rgb(126, 126, 126)"
    dd2.style.color = "rgb(126, 126, 126)"


  } else {
    document.body.className = "body";

  }
  
})
</script>
</body>

</html>