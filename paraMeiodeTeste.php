<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="valaor" placeholder="digite sua hash">
        <button type="submit" name="btn">enviar</button>
        <input type="text" name="valaorIp" placeholder="digite seu IP">
        <button type="submit" name="btnIp">enviar</button>
    </form>

    <?php 
     @$ip = $_POST['valaorIp'];
     if (isset($_POST['btnIp']))
     {
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => "http://www.virustotal.com/vtapi/v2/ip-address/report?ip=".$ip."&apikey=4455f10d6655458ebd8337af57c45e4a2f536a9cdf43d41b2d3da9e06ede2e14",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'GET',
        ));
        
        $response = curl_exec($curl);
        
        curl_close($curl);
        echo $response;
        
     }else{
         echo "valor de IP incorreto";
     }


    @$url = $_POST['valaor'];
    if (isset($_POST['btn']))
    {
    if (filter_var($url, FILTER_VALIDATE_URL) === FALSE) {
        
        echo 'Not a valid URL';
        $tipo = "hash";
        
    }
    else{
        echo 'isso é uma url';
        $tipo = "url";
        $url = urlencode($url);
        echo $url;
    
    }
   
  
$curl = curl_init();

curl_setopt_array($curl, [
  CURLOPT_URL => "https://api.metadefender.com/v4/".$tipo."/".$url."",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_POSTFIELDS => "",
  CURLOPT_HTTPHEADER => [
    "Content-Type: application/json",
    "apikey: c2248cf29d8765fb843cf9fbf992c16e"
  ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;

  if (filter_var($url, FILTER_VALIDATE_URL) === FALSE) {
    
$obj = json_decode($response);


@$result = $obj->process_info->blocked_reason;
@$result2 = $obj2->ML->def_time;
echo $result2."<br>";

if(!empty($result) || null )
{
  echo "<br><h1 class='bd-title' style='color:red;' id='content'>".$result."</h1><br>";
}

if(!empty($obj->malware_family) || null)
{
  echo "<h3 class='bd-title'  id='content'>Familia do Malware: $obj->malware_family</h3><br>";
}
if(!empty($obj->threat_name) || null)
{
  echo "<h3 class='bd-title'  id='content'>Threat name: $obj->threat_name</h3><br>";
}
if(!empty($obj->file_id) ||null)
{
  echo "<h3 class='bd-title'  id='content'>File ID: $obj->file_id</h3><br>";
}
if(!empty($obj->data_id) || null)
{
  echo "<h3 class='bd-title'  id='content'>Data ID: $obj->data_id</h3><br>";
}



@$tipos = $obj->scan_results->scan_details;
if(!empty($tipos) || null)
{
echo "<table class='table table-dark table-striped'><tr><td>Scan Time</td><td>Ameaça encontrada</td></tr>";
foreach ( $tipos as $e  )
    {
      echo "<tr>";
	    echo "<td>$e->scan_time</td>";
      if(!empty($e->threat_found) || null)
      {
        echo "<td style='color:red;' >$e->threat_found</td>";
      }
      else{
        echo "<td style='color:blue;'>Analise limpa</td>";
      }
      
      echo "</tr>";
     
  
    }
echo "</table>";
  }
}
else{
    $objUrl = json_decode($response);
    
    echo $url;
   

}

}


}
else{
    echo "valor incorreto";
}
    ?>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>