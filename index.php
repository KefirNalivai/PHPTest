<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Каталог</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    


<script>

function clickstr()
{
  


let paramsString  = new URLSearchParams(window.location.search);
let searchParams = new URLSearchParams(paramsString);
let res = searchParams.get('page');

key="page";
  value = event.target.innerHTML;
  

    // kvp looks like ['key1=value1', 'key2=value2', ...]
    var kvp = document.location.search.substr(1).split('&');
    let i=0;

    for(; i<kvp.length; i++){
        if (kvp[i].startsWith(key + '=')) {
            let pair = kvp[i].split('=');
            pair[1] = value;
            kvp[i] = pair.join('=');
            break;
        }
    }

    if(i >= kvp.length){
        kvp[kvp.length] = [key,value].join('=');
    }

    // can return this or...
    let params = kvp.join('&');

    // reload page with new params
    document.location.search = params;
  
}
function clickstr1()
{
 

let paramsString  = new URLSearchParams(window.location.search);
let searchParams = new URLSearchParams(paramsString);
let res = searchParams.get('page');

key="page";
  value = Number(res)-1;
  

    // kvp looks like ['key1=value1', 'key2=value2', ...]
    var kvp = document.location.search.substr(1).split('&');
    let i=0;

    for(; i<kvp.length; i++){
        if (kvp[i].startsWith(key + '=')) {
            let pair = kvp[i].split('=');
            pair[1] = value;
            kvp[i] = pair.join('=');
            break;
        }
    }

    if(i >= kvp.length){
        kvp[kvp.length] = [key,value].join('=');
    }

    // can return this or...
    let params = kvp.join('&');

    // reload page with new params
    document.location.search = params;
  

  
}
function clickstr2()
{
 
let paramsString  = new URLSearchParams(window.location.search);
let searchParams = new URLSearchParams(paramsString);
let res = searchParams.get('page');

key="page";
  value = Number(res)+1;
  

    // kvp looks like ['key1=value1', 'key2=value2', ...]
    var kvp = document.location.search.substr(1).split('&');
    let i=0;

    for(; i<kvp.length; i++){
        if (kvp[i].startsWith(key + '=')) {
            let pair = kvp[i].split('=');
            pair[1] = value;
            kvp[i] = pair.join('=');
            break;
        }
    }

    if(i >= kvp.length){
        kvp[kvp.length] = [key,value].join('=');
    }

    // can return this or...
    let params = kvp.join('&');

    // reload page with new params
    document.location.search = params;
  
}

</script>









<style type="text/css">
  
  .loader-container {
  width: 500px;
  height: 200px;
  background-color: black;
  opacity: 0.5;
  vertical-align:middle;
}
.loader-container.show {
  display:table-cell;
}
.loader-container.hide {
  display: none;
}
.loader {
    border: 16px solid #f3f3f3;
    border-top: 16px solid #3498db;
    border-radius: 50%;
    width: 120px;
    height: 120px;
    animation: spin 2s linear infinite;
    margin: 50px auto;
}
@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}
</style>




<style type="text/css">
  #p_prldr{
position: fixed;
left: 0;
top: 0;
right:0;
bottom:0;
background: white;
z-index: 30;}
 
.contpre small{font-size:25px;}
 
.contpre{
width: 250px;
height: 100px;
position: absolute;
left: 50%;top: 48%;
margin-left:-125px;
margin-top:-75px;
color:black;
font-size:40px;
letter-spacing:-2px;
text-align:center;
line-height:35px;}
 
#p_prldr .svg_anm {
position: absolute;
width: 41px;
height: 41px;
background: url(images/oval.svg) center center no-repeat;
background-size:41px;    
margin: -16px 0 0 -16px;}
</style>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script type="text/javascript">$(window).on('load', function () {
    var $preloader = $('#p_prldr'),
        $svg_anm   = $preloader.find('.svg_anm');
    $svg_anm.fadeOut();
    $preloader.delay(500).fadeOut('slow');
});</script>
</head>



















<body>


<div id="p_prldr"><div class="contpre"><span class="svg_anm"></span><br>Подождите<br><small></small></div></div>








  <script type="text/javascript">
  
const searchString = new URLSearchParams(window.location.search);

const clickid = searchString.get('page');

if(clickid===null)
{
  var newurl = window.location.protocol + "//" + window.location.host + window.location.pathname + window.location.search +'?page=1';

window.history.pushState({ path: newurl }, '', newurl);
}

</script> 


  <?php
ob_start(); 
?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<script src="jquery-migrate-3.3.2.min.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<link rel="stylesheet" href="nouislider-demo-master/css/nouislider.min.css">
    <link rel="stylesheet" href="nouislider-demo-master/css/main.css">
    <link rel="stylesheet" href="ГимнТекст.css">
    <script src="ГимнСкрипт.js"></script>

<nav class="navbar navbar-expand-lg navbar-light d-flex justify-content-between ">
  <a class="navbar-brand "  href="#"><ins>DillerGiames</ins></a>
  
  <div class="navbar " id="navbarNav">
    <ul class="navbar-nav ">
      <li class="nav-item " >



        <a class="nav-link "  href="#">Главная <span class="sr-only"></span></a>
      </li>
      <li class="nav-item dropdown ">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="false">
            Каталог
          </a>
          <ul class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink">
          	<span style="font-size: 10px">Приключения</span>
          	<div class="dropdown-divider"></div>
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
            	<span style="font-size: 10px">Приключения2</span>
            <div class="dropdown-divider"></div>
             <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      <li class="nav-item">
        <a class="nav-link" href="#">О нас</a>
      </li>
     
    
    </ul>
  </div>

</nav>


  </ul>
</div>


<div class="container-fluid">
<div class="dropdown-divider"></div>




<div style="text-align: center;">
<div><a href="javascript:collapsElement('identifikator')" title="" rel="nofollow" id = "gmtxt" style = "font-size:25px;margin-left: auto; margin-right: auto; ">Фильтр &darr;</a>
<div id="identifikator" style="display: none; text-align:center; ">
 <div class="row" >






 <div class="col " >
     <div style=" background-color: #fafaf5af; border-radius: 7px; border: 3px solid black; margin-top: 14px; margin-bottom: 14px; text-align: center; font-size: 20px; width: 60%; margin-left: auto;margin-right: auto;">
     
      Цена:
<br>
<div class="bar" >
        
        <div id="r-slider" style="width: 70% ; margin-left: auto; margin-right: auto;"></div>
    </div>




<?php



if(!isset($_GET['pricerange']))
{
 
   $connect = new mysqli("localhost", "mysql", "" );
mysqli_set_charset($connect,"utf8");
$res1 = $connect->query("SELECT MIN(Цена) as min FROM games.spisok");
$row1 = mysqli_fetch_array($res1);

$str1 = (string)$row1[0] . '.00';
$str12 = $row1[0];

$res2 = $connect->query("SELECT MAX(`Цена`) FROM games.spisok");
$row2 = mysqli_fetch_array($res2);
$str2 = (string)$row2[0] . '.00';
$str22 = $row2[0];
$mojo = ",";
$str3 =  (string)$str1 . $mojo . (string)$str2;

}



?>


<?php
 $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
function getUrlQuery($url, $key = null)
{
  $parts = parse_url($url); 
  if (!empty($parts['query'])) {
    parse_str($parts['query'], $query); 
    if (is_null($key)) {
      return $query;
    } elseif (isset($query[$key])) {
      return $query[$key];
    }        
  }

 
  return false;
};
$row1 = [];
$row2 = [];
$connect = new mysqli("localhost", "mysql", "" );
mysqli_set_charset($connect,"utf8");
$res1 = $connect->query("SELECT MIN(`Год выхода`) as min FROM games.spisok");
$row1 = mysqli_fetch_array($res1);
$res2 = $connect->query("SELECT MAX(`Год выхода`) as max FROM games.spisok");
$row2 = mysqli_fetch_array($res2);
if(isset($_GET['years']))
{
$yyer = getUrlQuery($actual_link, 'years');
$yyer = explode(',', $yyer);

$row12[0] = $yyer[0];
$row22[0] = $yyer[1];
}
else
{
$row12[0] = $row1[0];
$row22[0] = $row2[0];
}
if(isset($_GET['company']))
{
$compn = getUrlQuery($actual_link, 'company');
}
if(isset($_GET['razz']))
{
$rasb = getUrlQuery($actual_link, 'razz');
}
if(isset($_GET['janre']))
{
$yyer = getUrlQuery($actual_link, 'janre');
$yyer = explode(',', $yyer);

$q1 = $yyer[0];
$q2 = $yyer[1];
$q3 = $yyer[2];
if($q1==='1')
{$qq1 = "checked";}
if($q2==='1')
{$qq2 = "checked";}
if($q3==='1')
{$qq3 = "checked";}

}
else
{
  $qq1 = "checked";
  $qq2 = "checked";

  $qq3 = "checked";
}

echo <<<HTML




<div>
   
  </div>
       <div class="dropdown-divider" style="border-color: black;  "></div>

        Название игры:
<br>
<br>
<input type="input" class="form-control" id="studiya" placeholder="Название" value="{$compn}" autocomplete="off" style="width: 70%;text-align: center; margin-left: auto; margin-right: auto;">
       <div class="dropdown-divider" style="border-color: black"></div>

       Разработчик:
<br>
<br>
<input type="input" class="form-control" id="razrab" placeholder="Название" value="{$rasb}" autocomplete="off" style="width: 70%;text-align: center; margin-left: auto; margin-right: auto;">
       <div class="dropdown-divider" style="border-color: black"></div>
   
      Год выхода:
       <br>
       <br>

      
       <input type="number" style="text-align: center; width: 110px" id = "changemin" onchange="onminch()" min="{$row1[0]}" max="{$row2[0]}" step="1" value="{$row12[0]}" />
     - 
       <input type="number" style="text-align: center; width: 110px" id = "changemax" onchange="onmaxch()" min="{$row1[0]}" max="{$row2[0]}" step="1" value="{$row22[0]}" />
      

       
<br>
<div class="dropdown-divider" style="border-color: black"></div>

Режим игры:
<br>
<div style="text-align: left; width: 200px; margin-right: auto; margin-left: auto;">
<input type="checkbox" id="scales1" onclick="rejm()" name="scales" {$qq1}>
  <label for="scales1">Одиночный</label>
  <br>
  <input type="checkbox" id="scales2" onclick="rejm()" name="scales" {$qq2}>
  <label for="scales2">Сетевой</label>
  <br>
  <input type="checkbox" id="scales3" onclick="rejm()" name="scales" {$qq3}>
  <label for="scales3">Корпоротивный</label>
</div>


<div class="dropdown-divider" style="border-color: black"></div>
<div class="bar flex">
        <div id="reset" type="reset" class="button">Reset</div>
    </div>

     </div>

    </div>
</div>
HTML;





?>


</div>
</div>
</div>

<div class="dropdown-divider" ></div>

  <div class="row" style="">
   

    <div class="col bg-light -auto " style=" min-height: 41.3vw; text-align: center;">




<?php 
$ss = getUrlQuery($actual_link, 'page');
if($ss == null)
{$ss = 1;}
$sso = (18 * ((int)$ss-1));


$connect = new mysqli("localhost", "mysql", "" );
mysqli_set_charset($connect,"utf8");






$resn = "SELECT * FROM games.spisok WHERE TRUE";
$resc = "";
$zapr = "";
if($ss === "1")
$resc = " LIMIT 0, 18";

else
{
 $resc = " LIMIT $sso, 18";
}

if(isset($_GET['price']))
  { 
  
    $qwe = getUrlQuery($actual_link,'price');

$zapr=$zapr . " AND (Цена >= " . explode(',', $qwe)[0] ." AND". " Цена <= " . explode(',', $qwe)[1].")";
  }

if(isset($_GET['company']))
  { 
  
    $qwe = getUrlQuery($actual_link,'company');

$zapr=$zapr . " AND (Название LIKE '" . $qwe ."%' OR Название LIKE '%" . $qwe ."' OR Название LIKE '%" . $qwe ."%')";
  }

if(isset($_GET['years']))
  { 
  
    $qwe = getUrlQuery($actual_link,'years');



$zapr=$zapr . " AND (`Год выхода` >= " . (int)explode(',', $qwe)[0] ." AND". " `Год выхода` <= " . (int)explode(',', $qwe)[1].")";
  }

if(isset($_GET['janre']))
  { 
  
    $qwe = getUrlQuery($actual_link,'janre');
if((int)explode(',', $qwe)[0] === 0)
  { $zapr=$zapr . " AND Режим != 'Одиночный'";}
if((int)explode(',', $qwe)[1] === 0)
  { $zapr=$zapr . " AND Режим != 'Сетевой'";}
if((int)explode(',', $qwe)[2] === 0)
  { $zapr=$zapr . " AND Режим != 'Корпоротивный'";}
 
  }





if(isset($_GET['razz']))
  { 
  
    $qwe = getUrlQuery($actual_link,'razz');

$zapr=$zapr . " AND (разработчик LIKE '" . $qwe ."%' OR разработчик LIKE '%" . $qwe ."' OR разработчик LIKE '%" . $qwe ."%')";
  }

  $resn = $resn . $zapr . $resc;

$res = $connect->query($resn);

$i1 = 0;
while ($i1<18 && $row = mysqli_fetch_array($res)) {

$i1++;

echo <<<HTML

<div class="card " id = "card{$i1}" style="width: 17rem;  margin: 0.7vw ; display: inline-block;  ">
  <img src=" {$row['Картинка']} " class="card-img-top" alt="..." style="height: 180px">
  <div class="card-body">
    <h5 class="card-title" id = 'nazv{$i1}'>{$row['Название']}</h5>
    <div id = "junre{$i1}" style="font-size: 13px; text-align: left; text-decoration: underline;">Жанр: {$row['Жанр']}</div>
    <div id = "rej2{$i1}" style="font-size: 13px; text-align: left; text-decoration: underline;">Режим игры: {$row['Режим']}</div>
     <div id = "raz2{$i1}" style="font-size: 13px; text-align: left; text-decoration: underline;">Разработчик: {$row['разработчик']}</div>
    <div class="dropdown-divider"></div>
    <p class="card-text" id = "opes{$i1}" style="overflow: hidden;-webkit-line-clamp: 6;display: -webkit-box;-webkit-box-orient: vertical; text-align: justify; font-size: 15px">
{$row['Описание']}</p>
    <div id = "cena2{$i1}" style="font-size: 23px; font-weight: 800px ; margin-bottom: 5px">&#36;{$row['Цена']}</div>
    <a href="#" class="btn btn-success" style="width: 49%">Купить</a>
    <a href="#" class="btn btn-primary" style="width: 49%">В корзину</a>
    <a href="#" class="btn btn-info" id = "podr{$i1}" data-toggle="modal" data-target="#exampleModalCenter" onclick="modokno({$i1})" style="width: 100%; margin-top: 1vw">Подробнее</a>
  </div>
</div>
HTML;


}

?>



<div class="modal fade bd-example-modal-lg" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document" >
    <div class="modal-content" style="width: 98%">
      <div class="modal-header" >
        <h5 class="modal-title" id="exampleModalLongTitle" style = "">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id = "modbod" style="text-align: justify;">
        ...
      </div>
      <div class="modal-body" id = "modbo2" style="margin-bottom: 0px;padding-bottom: 4px ;text-align: justify; font-size: 13px ; text-decoration: underline;">
        ...
      </div>
      <div class="modal-body" id = "rej" style="margin-top: 0px ;padding-top: 5px;text-align: justify; font-size: 13px; text-decoration: underline;">
        ...
      </div>
      <div class="modal-body" id = "cena" style="text-align: right; font-size: 25px; ">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


<?php

$res1 = $connect->query("SELECT count(*) FROM games.spisok");

$row1 = mysqli_fetch_array($res1);

$sq =  intdiv((int)$row1[0],18)+1;

$pglink="";







$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";





$ss = getUrlQuery($actual_link, 'page');
if($ss == null)
  {$ss = '1';}
if($ss === '1')
  {$pglink="page-item disabled";}
else
  { $pglink="page-item";}


if($ss === '1' && $sq === 2)
  {
echo <<<HTML
<nav aria-label="...">
  <ul class="pagination justify-content-center">
    <li class="{$pglink}">

      <span class="page-link">Предыдущая</span>
    </li>

    <li class="page-item  disabled"><a onclick="clickstr()"  style="background-color: #adf2f7" id="str1" class="page-link" >1</a></li>
     <li class="page-item"><a  onclick="clickstr()" id="str2"  class="page-link" >2</a></li>
   
    <li class="page-item">
      <a class="page-link" onclick = "clickstr2()" >Следующая</a>
    </li>
  </ul>
</nav>
HTML;
  }

  else
  {

if($ss === '2' && $sq === 2)
{

echo <<<HTML
<nav aria-label="...">
  <ul class="pagination justify-content-center">
    <li class="{$pglink}">

     <a class="page-link" onclick = "clickstr1()">Предыдущая</a>
    </li>

    <li class="page-item  "><a onclick="clickstr()"  id="str1" class="page-link" >1</a></li>
     <li class="page-item disabled"><a  onclick="clickstr()" style="background-color: #adf2f7" id="str2"  class="page-link">2</a></li>
   
    <li class="page-item disabled">
      <a class="page-link" onclick = "clickstr2()">Следующая</a>
    </li>
  </ul>
</nav>
HTML;
}
else
{


if($ss === '1')
  {
echo <<<HTML
<nav aria-label="...">
  <ul class="pagination justify-content-center">
    <li class="{$pglink}">

      <span class="page-link">Предыдущая</span>
    </li>

    <li class="page-item  disabled"><a onclick="clickstr()"  style="background-color: #adf2f7" id="str1" class="page-link" >1</a></li>
     <li class="page-item"><a  onclick="clickstr()" id="str2"  class="page-link">2</a></li>
    <li class="page-item"><a  onclick="clickstr()" id="str3"  class="page-link">3</a></li>
    <li class="page-item">
      <a class="page-link" onclick = "clickstr2()" >Следующая</a>
    </li>
  </ul>
</nav>
HTML;
}
else
{


  if($ss ===  (string)$sq)
  {
    $ss1=(int)$ss - 2;
$ss2=(int)$ss - 1;
echo <<<HTML
<nav aria-label="...">
  <ul class="pagination justify-content-center">
    <li class="{$pglink}">

      <a class="page-link" onclick = "clickstr1()" >Предыдущая</a>
    </li>

    <li class="page-item"><a onclick="clickstr()" id="str1"  class="page-link" >{$ss1}</a></li>
     <li class="page-item"><a onclick="clickstr()"   id="str2" class="page-link" >{$ss2}</a></li>
    <li class="page-item disabled"><a onclick="clickstr()"  id="str3" style="background-color: #adf2f7"  class="page-link" >{$ss}</a></li>
    <li class="page-item disabled">
      <a class="page-link" onclick = "clickstr2()" >Следующая</a>
    </li>
  </ul>
</nav>
HTML;
  }
else
{
  if($ss === "2" && (string)$sq===2)
  {

    echo <<<HTML
<nav aria-label="...">
  <ul class="pagination justify-content-center">
    <li class="{$pglink}">

      <a class="page-link" onclick = "clickstr1()" >Предыдущая</a>
    </li>

    <li class="page-item"><a onclick="clickstr()" id="str1"  class="page-link" >1</a></li>
     <li class="page-item  disabled"><a onclick="clickstr()"   id="str2" class="page-link" style="background-color: #adf2f7" >2</a></li>
    
    <li class="page-item disabled">
      <a class="page-link" onclick = "clickstr2()" href = "">Следующая</a>
    </li>
  </ul>
</nav>
HTML;
  }
else
{
   if($ss === "1" || (string)$sq==="1")
  {

    echo <<<HTML
<nav aria-label="...">
  <ul class="pagination justify-content-center">
    <li class="{$pglink}">

      <a class="page-link disabled" onclick = "clickstr1()" >Предыдущая</a>
    </li>

    <li class="page-item" disabled><a onclick="clickstr()" id="str1"  class="page-link" style="background-color: #adf2f7" >1</a></li>
     
    
    <li class="page-item disabled">
      <a class="page-link" onclick = "clickstr2()" >Следующая</a>
    </li>
  </ul>
</nav>
HTML;
  }
else
{
$ss1=(int)$ss - 1;
$ss2=(int)$ss + 1;
echo <<<HTML
<nav aria-label="...">
  <ul class="pagination justify-content-center">
    <li class="{$pglink}">

      <a class="page-link" onclick = "clickstr1()" >Предыдущая</a>
    </li>

    <li class="page-item"><a onclick="clickstr()" id="str1"  class="page-link">{$ss1}</a></li>
     <li class="page-item  disabled"><a onclick="clickstr()"   id="str2" class="page-link" style="background-color: #adf2f7" >{$ss}</a></li>
    <li class="page-item"><a onclick="clickstr()"  id="str3"  class="page-link" >{$ss2}</a></li>
    <li class="page-item">
      <a class="page-link" onclick = "clickstr2()" >Следующая</a>
    </li>
  </ul>
</nav>
HTML;
}
}
}
}
}
}
?>

    </div>
   
  </div>
  <div class="dropdown-divider"></div>
</div>


<footer class="bg-light  text-center text-lg-start">
  <!-- Copyright -->
  <div class="text-center p-3"  style=" ;">
    © 2022 Copyright:
    <a class="text-dark" href="">Игнатович Никита</a>
  </div>
  <!-- Copyright -->
</footer>



<script src="nouislider-demo-master/js/nouislider.min.js"></script>

</body>











<?php

echo <<<HTML


<script type="text/javascript">
  
document.addEventListener("DOMContentLoaded", () => {






  let button = document.querySelector('#studiya');




  button.addEventListener('blur', function() {
  
  let searchString2 = new URLSearchParams(window.location.search);

let clickid2 = searchString2.get('company');
if(clickid2===null)
{
  var newurl = window.location.protocol + "//" + window.location.host + window.location.pathname + window.location.search +'&company=' +  document.getElementById("studiya").value;

window.history.pushState({ path: newurl }, '', newurl);
}
else
{
let paramsString  = new URLSearchParams(window.location.search);
let searchParams = new URLSearchParams(paramsString);
let res = searchParams.get('page');

key="company";
  value = document.getElementById("studiya").value;
  

    // kvp looks like ['key1=value1', 'key2=value2', ...]
    var kvp = document.location.search.substr(1).split('&');
    let i=0;

    for(; i<kvp.length; i++){
        if (kvp[i].startsWith(key + '=')) {
            let pair = kvp[i].split('=');
            pair[1] = value;
            kvp[i] = pair.join('=');
            break;
        }
    }

    if(i >= kvp.length){
        kvp[kvp.length] = [key,value].join('=');
    }

    // can return this or...
    let params = kvp.join('&');

    // reload page with new params
    var newurl = window.location.protocol + "//" + window.location.host + window.location.pathname +"?"+ params;

window.history.pushState({ path: newurl }, '', newurl);

}




});




let button2 = document.querySelector('#razrab');




  button2.addEventListener('blur', function() {
  
  let searchString2 = new URLSearchParams(window.location.search);

let clickid2 = searchString2.get('razz');
if(clickid2===null)
{
  var newurl = window.location.protocol + "//" + window.location.host + window.location.pathname + window.location.search +'&razz=' +  document.getElementById("razrab").value;

window.history.pushState({ path: newurl }, '', newurl);
}
else
{
let paramsString  = new URLSearchParams(window.location.search);
let searchParams = new URLSearchParams(paramsString);
let res = searchParams.get('page');

key="razz";
  value = document.getElementById("razrab").value;
  

    // kvp looks like ['key1=value1', 'key2=value2', ...]
    var kvp = document.location.search.substr(1).split('&');
    let i=0;

    for(; i<kvp.length; i++){
        if (kvp[i].startsWith(key + '=')) {
            let pair = kvp[i].split('=');
            pair[1] = value;
            kvp[i] = pair.join('=');
            break;
        }
    }

    if(i >= kvp.length){
        kvp[kvp.length] = [key,value].join('=');
    }

    // can return this or...
    let params = kvp.join('&');

    // reload page with new params
    var newurl = window.location.protocol + "//" + window.location.host + window.location.pathname +"?"+ params;

window.history.pushState({ path: newurl }, '', newurl);

}




});











    // ======== Slider with one handle
    
    const priceSlider = document.getElementById('r-slider');

    
        noUiSlider.create(priceSlider, {
        start: [{$str12}-1, {$str22}-1],
        tooltips: true,
        connect: true,
        padding: 1,
        range: {
            'min': Math.round({$str12}-1),
            'max': Math.round({$str22}-1)
      
       },
        



          });


priceSlider.noUiSlider.on('change', (values, handle) => {
        goSearch();
    });
   

    // ======== Slider with two handles
    

    function goSearch() {

     let searchString2 = new URLSearchParams(window.location.search);

let clickid2 = searchString2.get('price');

if(clickid2===null)
{
  var newurl = window.location.protocol + "//" + window.location.host + window.location.pathname + window.location.search +'&price=' + priceSlider.noUiSlider.get();

window.history.pushState({ path: newurl }, '', newurl);
}
else
{


let paramsString  = new URLSearchParams(window.location.search);
let searchParams = new URLSearchParams(paramsString);
let res = searchParams.get('page');

key="price";
  value = priceSlider.noUiSlider.get();
  

    // kvp looks like ['key1=value1', 'key2=value2', ...]
    var kvp = document.location.search.substr(1).split('&');
    let i=0;

    for(; i<kvp.length; i++){
        if (kvp[i].startsWith(key + '=')) {
            let pair = kvp[i].split('=');
            pair[1] = value;
            kvp[i] = pair.join('=');
            break;
        }
    }

    if(i >= kvp.length){
        kvp[kvp.length] = [key,value].join('=');
    }

    // can return this or...
    let params = kvp.join('&');

    // reload page with new params
    var newurl = window.location.protocol + "//" + window.location.host + window.location.pathname +"?"+ params;

window.history.pushState({ path: newurl }, '', newurl);


}
    };
   

    // ======== Search filters
    
    





    // ======== Slider reset
    
    const resetButton = document.getElementById('reset');
    resetButton.onclick = (e) => {
        priceSlider.noUiSlider.reset();
        document.getElementById("changemax").value = document.getElementById("changemax").max;
       document.getElementById("changemin").value = document.getElementById("changemin").min;
        document.getElementById("studiya").value = "";
        document.getElementById("scales1").checked = false;
         document.getElementById("scales2").checked = false;
          document.getElementById("scales3").checked = false;
    };

    // ======== Slider set
    
    const params = new URLSearchParams(window.location.search);
    const priceRange = params.get("price");

    
    if (priceRange) {
        priceSlider.noUiSlider.set(priceRange.split(','));
    }
});


</script>
HTML;

?>
<script type="text/javascript">
  function onmaxch()
  {
    if(parseInt(document.getElementById("changemax").value)< parseInt(document.getElementById("changemin").value))
    {
      alert('Максимальное значение не может меньше минимального!');
      document.getElementById("changemax").value = Number(document.getElementById("changemin").value);
    }
    let searchString2 = new URLSearchParams(window.location.search);

let clickid2 = searchString2.get('years');
if(clickid2===null)
{
  var newurl = window.location.protocol + "//" + window.location.host + window.location.pathname + window.location.search +'&years=' +  document.getElementById("changemin").value+","+ document.getElementById("changemax").value;

window.history.pushState({ path: newurl }, '', newurl);
}
else
{
let paramsString  = new URLSearchParams(window.location.search);
let searchParams = new URLSearchParams(paramsString);
let res = searchParams.get('years');

key="years";
  value = document.getElementById("changemin").value + "," + document.getElementById("changemax").value;
  

    // kvp looks like ['key1=value1', 'key2=value2', ...]
    var kvp = document.location.search.substr(1).split('&');
    let i=0;

    for(; i<kvp.length; i++){
        if (kvp[i].startsWith(key + '=')) {
            let pair = kvp[i].split('=');
            pair[1] = value;
            kvp[i] = pair.join('=');
            break;
        }
    }

    if(i >= kvp.length){
        kvp[kvp.length] = [key,value].join('=');
    }

    // can return this or...
    let params = kvp.join('&');

    // reload page with new params
    var newurl = window.location.protocol + "//" + window.location.host + window.location.pathname +"?"+ params;

window.history.pushState({ path: newurl }, '', newurl);
  }
}




  function onminch()
  {
    if(parseInt(document.getElementById("changemax").value)< parseInt(document.getElementById("changemin").value))
    {
      alert('Минимальное значение не может выше максимального!');
      document.getElementById("changemin").value = Number(document.getElementById("changemax").value);
    }

let searchString2 = new URLSearchParams(window.location.search);

let clickid2 = searchString2.get('years');
if(clickid2===null)
{
  var newurl = window.location.protocol + "//" + window.location.host + window.location.pathname + window.location.search +'&years=' +  document.getElementById("changemin").value+","+ document.getElementById("changemax").value;

window.history.pushState({ path: newurl }, '', newurl);
}
else
{
let paramsString  = new URLSearchParams(window.location.search);
let searchParams = new URLSearchParams(paramsString);
let res = searchParams.get('years');

key="years";
  value = document.getElementById("changemin").value + "," + document.getElementById("changemax").value;
  

    // kvp looks like ['key1=value1', 'key2=value2', ...]
    var kvp = document.location.search.substr(1).split('&');
    let i=0;

    for(; i<kvp.length; i++){
        if (kvp[i].startsWith(key + '=')) {
            let pair = kvp[i].split('=');
            pair[1] = value;
            kvp[i] = pair.join('=');
            break;
        }
    }

    if(i >= kvp.length){
        kvp[kvp.length] = [key,value].join('=');
    }

    // can return this or...
    let params = kvp.join('&');

    // reload page with new params
    var newurl = window.location.protocol + "//" + window.location.host + window.location.pathname +"?"+ params;

window.history.pushState({ path: newurl }, '', newurl);

}
  }




function rejm()
  {
  

let searchString2 = new URLSearchParams(window.location.search);

let clickid2 = searchString2.get('janre');
 if(document.getElementById("scales1").checked)
 {sc1 ="1,";}
else
{sc1 = "0,";}
 if(document.getElementById("scales2").checked)
 {sc1 =sc1+ "1,";}
else
{sc1 =sc1+ "0,";}
 if(document.getElementById("scales3").checked)
 {sc1 = sc1 + "1";}
else
{sc1 =sc1 + "0";}
if(clickid2===null)
{

  var newurl = window.location.protocol + "//" + window.location.host + window.location.pathname + window.location.search +'&janre=' +  sc1;
  window.history.pushState({ path: newurl }, '', newurl);
}
else
{

let paramsString  = new URLSearchParams(window.location.search);
let searchParams = new URLSearchParams(paramsString);
let res = searchParams.get('janre');

key="janre";
  value = sc1;
  
 // kvp looks like ['key1=value1', 'key2=value2', ...]
    var kvp = document.location.search.substr(1).split('&');
    let i=0;

    for(; i<kvp.length; i++){
        if (kvp[i].startsWith(key + '=')) {
            let pair = kvp[i].split('=');
            pair[1] = value;
            kvp[i] = pair.join('=');
            break;
        }
    }

    if(i >= kvp.length){
        kvp[kvp.length] = [key,value].join('=');
    }

    // can return this or...
    let params = kvp.join('&');

    
    var newurl = window.location.protocol + "//" + window.location.host + window.location.pathname +"?"+ params;

window.history.pushState({ path: newurl }, '', newurl);


}







}













</script>



<script type="text/javascript">
  
  function modokno(cid)
  {
 
    document.getElementById("exampleModalLongTitle").innerHTML = document.getElementById("nazv" + cid).innerHTML;
    document.getElementById("modbod").innerHTML = document.getElementById("opes" + cid).innerHTML;
 document.getElementById("modbo2").innerHTML = document.getElementById("junre" + cid).innerHTML;
 document.getElementById("rej").innerHTML = document.getElementById("rej2" + cid).innerHTML;
  document.getElementById("cena").innerHTML = document.getElementById("cena2" + cid).innerHTML;
   }
</script>
</html>