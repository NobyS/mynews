<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aktuelle Nachrichten ansehen!</title>
    <link rel="stylesheet" href="vendor/twitter/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
</head>
<div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">
                    <h3 class="panel-title">Aktuelle Nachrichten ansehen!</h3>
            </div>
            <div class="panel-body">
            <form action="" method="post">
                <select name="category">
                    <option value="business">Geschäft</option>
                    <option value="entertainment">Entertainment</option>
                    <option value="health">Gesundheit</option>
                    <option value="science">Szene</option>
                    <option value="sports">Sports</option>
                    <option value="technology">Technology</option>
                </select>
                <br>
                <br>
                <input type="submit">
        </form>
            </div>
        </div>
<?
If (count($_POST)>0)
{
    $cat = $_POST['category'];
}else
{
    $cat = "entertainment";
}
echo '
<div class="panel panel-info">
      <div class="panel-heading">
            <h3 class="panel-title">Gewählte Kategorie: '.$cat. '</h3>
      </div>
    
</div>';


$api = "7c496bf13fa54708aba065e72e3ee6c9";
$country = "country=de";
$pagesize= "pagesize=20";


$ch = curl_init("https://newsapi.org/v2/top-headlines?$country&apiKey=$api&category=$cat&$pagesize");


curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($ch);
$result = json_decode($result);
//var_dump($result);
foreach ($result->articles as $article) { ?>

<div class="row">
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 thumbnail"><img src="<?php echo $article->urlToImage?>"><?php echo date("d.m.Y H:i:s", strtotime($article->publishedAt))?></div>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"><?php echo $article->title?></div>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"><?php echo $article->description?></div>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"><a href="<?php echo $article->url?>" target=_blank><?php echo $article->title?></a> </div>       
    
</div>
<?php
}
?>
<body>
</div>   
</body>
</html>

