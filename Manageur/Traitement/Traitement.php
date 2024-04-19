<?php
session_start();

// Assurez-vous que les variables de session existent
if (isset($_SESSION['ids'])) {
    $id_manageur = $_SESSION['ids'];
    
} else {
    
  header("location:../../connexion.html");
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../asset/comt.css">
  <link rel="stylesheet" href="../asset/traitement1.css">
  
  <title>Document</title>
</head>
<body>
  <nav>
    <a href="Traitement.php">
      <div class="logo">
      <strong>MATA</strong>
      <span>Company</span>
    </div>
    </a>
    <ul>
      <li>
  <section class="table__header">
            <div class="input-group">
            <input class="t"  type="text"
        name="search" placeholder="Search employe.." >
      
                <img src="search.png">
            </div>
</li>
      <li>
        <a href="../php/logout.php" class=".lia">Logout</a>
      </li>
    </ul>
    <style>
      
    .table__header {
        width: 150%;
        height: 50%;
        
        padding: .8rem 1rem;
        display: flex;
        justify-content: space-between;
        align-items: center;
        position: relative;
        right: 450px;
    }
    
    .table__header .input-group {
        width: 95%;
        height: 100%;
        background-color:white;
        color: #000;
        padding: 0 .8rem;
        border-radius: 2rem;
        display: flex;
        justify-content: center;
        align-items: center;
        transition: .2s;
    }
    
    
    .table__header .input-group img {
        width: 1.2rem;
        height: 1.2rem;
        position: relative;
        top: -1.2px;
    }
    
    .table__header .input-group input {
        width: 100%;
        padding: 0 .5rem 0 .3rem;
        background-color: transparent;
        border: none;
        outline: none;
    }
    

    </style>
  </nav>
  <div class="sidebar">
    <span class="lock1"> 
      <svg width="64px" height="64px" viewBox="-8.16 -8.16 40.32 40.32" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0" transform="translate(0,0), scale(1)"><rect x="-8.16" y="-8.16" width="40.32" height="40.32" rx="20.16" fill="#7ed0ec" strokewidth="0"/></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="0.43200000000000005"/><g id="SVGRepo_iconCarrier"> <path opacity="0.5" d="M2 16C2 13.1716 2 11.7574 2.87868 10.8787C3.75736 10 5.17157 10 8 10H16C18.8284 10 20.2426 10 21.1213 10.8787C22 11.7574 22 13.1716 22 16C22 18.8284 22 20.2426 21.1213 21.1213C20.2426 22 18.8284 22 16 22H8C5.17157 22 3.75736 22 2.87868 21.1213C2 20.2426 2 18.8284 2 16Z" fill="#1C274C"/> <path d="M12 18C13.1046 18 14 17.1046 14 16C14 14.8954 13.1046 14 12 14C10.8954 14 10 14.8954 10 16C10 17.1046 10.8954 18 12 18Z" fill="#1C274C"/> <path d="M6.75 8C6.75 5.10051 9.10051 2.75 12 2.75C14.4453 2.75 16.5018 4.42242 17.0846 6.68694C17.1879 7.08808 17.5968 7.32957 17.9979 7.22633C18.3991 7.12308 18.6405 6.7142 18.5373 6.31306C17.788 3.4019 15.1463 1.25 12 1.25C8.27208 1.25 5.25 4.27208 5.25 8V10.0546C5.68651 10.022 6.18264 10.0089 6.75 10.0036V8Z" fill="#1C274C"/> </g></svg></span>
      <span class="lock2">
        <svg width="64px" height="64px" viewBox="-7.44 -7.44 38.88 38.88" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"><rect x="-7.44" y="-7.44" width="38.88" height="38.88" rx="19.44" fill="#7ed0ec" strokewidth="0"/></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/><g id="SVGRepo_iconCarrier"> <path opacity="0.5" d="M2 16C2 13.1716 2 11.7574 2.87868 10.8787C3.75736 10 5.17157 10 8 10H16C18.8284 10 20.2426 10 21.1213 10.8787C22 11.7574 22 13.1716 22 16C22 18.8284 22 20.2426 21.1213 21.1213C20.2426 22 18.8284 22 16 22H8C5.17157 22 3.75736 22 2.87868 21.1213C2 20.2426 2 18.8284 2 16Z" fill="#1C274C"/> <path d="M12 18C13.1046 18 14 17.1046 14 16C14 14.8954 13.1046 14 12 14C10.8954 14 10 14.8954 10 16C10 17.1046 10.8954 18 12 18Z" fill="#1C274C"/> <path d="M6.75 8C6.75 5.10051 9.10051 2.75 12 2.75C14.8995 2.75 17.25 5.10051 17.25 8V10.0036C17.8174 10.0089 18.3135 10.022 18.75 10.0546V8C18.75 4.27208 15.7279 1.25 12 1.25C8.27208 1.25 5.25 4.27208 5.25 8V10.0546C5.68651 10.022 6.18264 10.0089 6.75 10.0036V8Z" fill="#1C274C"/> </g></svg>
      </span>
    <span class="space">
      <span>Espace Manager</span>
    </span>
  <ul>
    <li class="list">
        <a href="../Employe/">
          <span class="icon"><span class="employe"><svg fill="#000000" width="800px" height="800px" viewBox="0 0 36 36" xmlns="http://www.w3.org/2000/svg"><title>employee_group_line</title><g id="e1709d41-49e9-409f-9912-e2615f9236f6" data-name="Layer 3"><path d="M18.42,16.31a5.7,5.7,0,1,1,5.76-5.7A5.74,5.74,0,0,1,18.42,16.31Zm0-9.4a3.7,3.7,0,1,0,3.76,3.7A3.74,3.74,0,0,0,18.42,6.91Z"/><path d="M18.42,16.31a5.7,5.7,0,1,1,5.76-5.7A5.74,5.74,0,0,1,18.42,16.31Zm0-9.4a3.7,3.7,0,1,0,3.76,3.7A3.74,3.74,0,0,0,18.42,6.91Z"/><path d="M21.91,17.65a20.6,20.6,0,0,0-13,2A1.77,1.77,0,0,0,8,21.25v3.56a1,1,0,0,0,2,0V21.38a18.92,18.92,0,0,1,12-1.68Z"/><path d="M33,22H26.3V20.52a1,1,0,0,0-2,0V22H17a1,1,0,0,0-1,1V33a1,1,0,0,0,1,1H33a1,1,0,0,0,1-1V23A1,1,0,0,0,33,22ZM32,32H18V24h6.3v.41a1,1,0,0,0,2,0V24H32Z"/><rect x="21.81" y="27.42" width="5.96" height="1.4"/><path d="M10.84,12.24a18,18,0,0,0-7.95,2A1.67,1.67,0,0,0,2,15.71v3.1a1,1,0,0,0,2,0v-2.9a16,16,0,0,1,7.58-1.67A7.28,7.28,0,0,1,10.84,12.24Z"/><path d="M33.11,14.23a17.8,17.8,0,0,0-7.12-2,7.46,7.46,0,0,1-.73,2A15.89,15.89,0,0,1,32,15.91v2.9a1,1,0,1,0,2,0v-3.1A1.67,1.67,0,0,0,33.11,14.23Z"/><path d="M10.66,10.61c0-.23,0-.45,0-.67a3.07,3.07,0,0,1,.54-6.11,3.15,3.15,0,0,1,2.2.89,8.16,8.16,0,0,1,1.7-1.08,5.13,5.13,0,0,0-9,3.27,5.1,5.1,0,0,0,4.7,5A7.42,7.42,0,0,1,10.66,10.61Z"/><path d="M24.77,1.83a5.17,5.17,0,0,0-3.69,1.55,7.87,7.87,0,0,1,1.9,1,3.14,3.14,0,0,1,4.93,2.52,3.09,3.09,0,0,1-1.79,2.77,7.14,7.14,0,0,1,.06.93,7.88,7.88,0,0,1-.1,1.2,5.1,5.1,0,0,0,3.83-4.9A5.12,5.12,0,0,0,24.77,1.83Z"/></g></svg></span></span>
          <span class="text">Employe</span>
        </a>
      </li>
    <li class="list">
      <a href="../index.php">
        <span class="icon"><span class="profile"><svg width="800px" height="800px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M21 16.0002C21 18.8286 21 20.2429 20.1213 21.1215C19.2426 22.0002 17.8284 22.0002 15 22.0002H9C6.17157 22.0002 4.75736 22.0002 3.87868 21.1215C3 20.2429 3 18.8286 3 16.0002V13.0002M16 4.00195C18.175 4.01406 19.3529 4.11051 20.1213 4.87889C21 5.75757 21 7.17179 21 10.0002V12.0002M8 4.00195C5.82497 4.01406 4.64706 4.11051 3.87868 4.87889C3.11032 5.64725 3.01385 6.82511 3.00174 9" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/><path d="M9 17.5H15" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/><path d="M8 3.5C8 2.67157 8.67157 2 9.5 2H14.5C15.3284 2 16 2.67157 16 3.5V4.5C16 5.32843 15.3284 6 14.5 6H9.5C8.67157 6 8 5.32843 8 4.5V3.5Z" stroke="#1C274C" stroke-width="1.5"/><path d="M8 14H9M16 14H12" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/><path d="M17 10.5H15M12 10.5H7" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/></svg></span></span>
        <span class="text">Manager</span>
      </a>
    </li>
  </ul>
</div>



<div class="grid">


<?php

$connect=mysqli_connect("localhost","root","","rh");
$resultat = mysqli_query($connect, "SELECT DISTINCT* FROM employes,utilisateurs
WHERE utilisateurs.id_utilisateurs=employes.id_utilisateur and id_role=2 ");


while($ligne=mysqli_fetch_assoc($resultat)){
  $c=$ligne["id_employe"];
$a=$ligne["nom"];
$x=$ligne["prenom"];
$b=$ligne["poste"];

    echo'
  <div class="item">
    <div class="item-content">
      <span class="lien lien-4"><svg width="64px" height="64px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"/><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/><g id="SVGRepo_iconCarrier"> <path d="M12.0001 2.84955C17.0538 2.84955 21.1506 6.94637 21.1506 12.0001C21.1506 17.0537 17.0538 21.1506 12.0001 21.1506C6.94643 21.1506 2.84961 17.0537 2.84961 12.0001C2.84961 6.94637 6.94643 2.84955 12.0001 2.84955Z" stroke="#1C1C1C" stroke-width="1.69905" stroke-linecap="round"/> <path d="M7 12.6842H8.67217C8.75916 12.6842 8.83616 12.628 8.86266 12.5451L10.3761 7.81366C10.4405 7.61227 10.7327 7.63557 10.7643 7.84463L11.8836 15.2319C11.9146 15.4363 12.1974 15.4651 12.269 15.2712L14.0716 10.3871C14.1375 10.2086 14.3918 10.2142 14.4497 10.3954L15.1373 12.5451C15.1638 12.628 15.2408 12.6842 15.3278 12.6842H17" stroke="#e14714" stroke-width="1.7" stroke-linecap="round"/> </g></svg></span>
      <span class="lien lien-3"><svg width="64px" height="64px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"/><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/><g id="SVGRepo_iconCarrier"> <path d="M20.8506 12.0002V6.50992C20.8506 4.48846 19.2118 2.84973 17.1904 2.84973H6.5098C4.48833 2.84973 2.84961 4.48845 2.84961 6.50992V17.4905C2.84961 19.512 4.48833 21.1507 6.5098 21.1507H11.8501" stroke="#1C1C1C" stroke-width="1.69904" stroke-linecap="round"/> <path d="M7.00269 12H10.0018" stroke="#1C1C1C" stroke-width="1.69904" stroke-linecap="round"/> <path d="M7.00269 8.0022H12.9993" stroke="#1C1C1C" stroke-width="1.69904" stroke-linecap="round"/> <path d="M20.79 15.8827L18.8369 13.8971C18.6389 13.6957 18.3177 13.6957 18.1196 13.8971L14.3632 17.716C14.2545 17.8266 14.201 17.9813 14.2177 18.1368L14.4325 20.1323C14.4455 20.2525 14.5388 20.3474 14.657 20.3605L16.6198 20.5789C16.7727 20.5959 16.9249 20.5415 17.0337 20.431L20.79 16.612C20.9881 16.4106 20.9881 16.0841 20.79 15.8827Z" stroke="#8f14e1" stroke-width="1.69904" stroke-linecap="round"/> </g></svg></span>
      <span class="lien lien-Mod1"><svg width="64px" height="64px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"/><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/><g id="SVGRepo_iconCarrier"> <path d="M12.0001 2.84955C17.0538 2.84955 21.1506 6.94636 21.1506 12C21.1506 17.0537 17.0538 21.1505 12.0001 21.1505C6.94642 21.1505 2.84961 17.0537 2.84961 12C2.84961 6.94636 6.94642 2.84955 12.0001 2.84955Z" stroke="#1C1C1C" stroke-width="1.69904"/> <path d="M9.39941 12L14.5902 12" stroke="#09f6e6" stroke-width="1.69904" stroke-linecap="round"/> </g></svg></span>
      <span class="lien lien-2"><svg width="64px" height="64px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"/><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/><g id="SVGRepo_iconCarrier"> <path d="M13.2418 3.62262H12.0001H10.8557M18.4571 3.62262H18.8668V3.62262C20.131 3.62262 21.1557 4.6474 21.1557 5.91153V17.0382C21.1557 19.0608 19.5161 20.7004 17.4935 20.7004H6.50674C4.48413 20.7004 2.84448 19.0608 2.84448 17.0382V5.91153C2.84448 4.6474 3.86926 3.62262 5.13339 3.62262V3.62262H5.54312" stroke="#1C1C1C" stroke-width="1.7" stroke-linecap="round"/> <path d="M9.01978 12.7782L9.76481 13.5233C10.1763 13.9348 10.8434 13.9348 11.2549 13.5233L14.9801 9.7981" stroke="#1C1C1C" stroke-width="1.7" stroke-linecap="round"/> <path d="M8.02637 2.84436V4.83113" stroke="#DF1463" stroke-width="1.7" stroke-linecap="round"/> <path d="M15.9736 2.84436V4.83113" stroke="#DF1463" stroke-width="1.7" stroke-linecap="round"/> </g></svg></span>
      <span class="lienb lien-1" ><svg width="64px" height="64px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"/><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/><g id="SVGRepo_iconCarrier"> <path d="M10 17.25C9.30964 17.25 8.75 16.6904 8.75 16C8.75 15.3096 9.30964 14.75 10 14.75C10.6904 14.75 11.25 15.3096 11.25 16C11.25 16.6904 10.6904 17.25 10 17.25Z" fill="#1C274C"/> <path d="M15.25 8C15.25 8.69036 14.6904 9.25 14 9.25C13.3096 9.25 12.75 8.69036 12.75 8C12.75 7.30964 13.3096 6.75 14 6.75C14.6904 6.75 15.25 7.30964 15.25 8Z" fill="#1C274C"/> <path fill-rule="evenodd" clip-rule="evenodd" d="M2 12C2 7.28595 2 4.92893 3.46447 3.46447C4.92893 2 7.28595 2 12 2C16.714 2 19.0711 2 20.5355 3.46447C22 4.92893 22 7.28595 22 12C22 16.714 22 19.0711 20.5355 20.5355C19.0711 22 16.714 22 12 22C7.28595 22 4.92893 22 3.46447 20.5355C2 19.0711 2 16.714 2 12ZM10 18.75C8.48122 18.75 7.25 17.5188 7.25 16C7.25 14.4812 8.48122 13.25 10 13.25C11.5188 13.25 12.75 14.4812 12.75 16C12.75 17.5188 11.5188 18.75 10 18.75ZM16.75 8C16.75 9.51878 15.5188 10.75 14 10.75C12.4812 10.75 11.25 9.51878 11.25 8C11.25 6.48122 12.4812 5.25 14 5.25C15.5188 5.25 16.75 6.48122 16.75 8ZM13.25 16C13.25 15.5858 13.5858 15.25 14 15.25H19C19.4142 15.25 19.75 15.5858 19.75 16C19.75 16.4142 19.4142 16.75 19 16.75H14C13.5858 16.75 13.25 16.4142 13.25 16ZM10 7.25C10.4142 7.25 10.75 7.58579 10.75 8C10.75 8.41421 10.4142 8.75 10 8.75L5 8.75C4.58579 8.75 4.25 8.41421 4.25 8C4.25 7.58579 4.58579 7.25 5 7.25L10 7.25ZM4.25 16C4.25 15.5858 4.58579 15.25 5 15.25H6C6.41421 15.25 6.75 15.5858 6.75 16C6.75 16.4142 6.41421 16.75 6 16.75H5C4.58579 16.75 4.25 16.4142 4.25 16ZM19 7.25C19.4142 7.25 19.75 7.58579 19.75 8C19.75 8.41421 19.4142 8.75 19 8.75H18C17.5858 8.75 17.25 8.41421 17.25 8C17.25 7.58579 17.5858 7.25 18 7.25H19Z" fill="#1C274C"/> </g></svg></span>
      <span class="no">Nom :</span><span class="no1">'.$a.'</span>
      <span class="type">Prenom:</span><span class="type1">'.$x.'</span>
      <span class="statut">Poste :</span> <span class="statut1">'.$b.'</span>
      <a href="description.php?id='.$c.'" class="voire" style="--clr:rgb(2, 2, 198);"><span>Voir plus</span><i></i></a>
  <span class="num"><input type="number" value="'.$c.'"></span>
    </div>
  </div>
 ';}?>
</div>

<div class="popup" id="motdepass">
  <h1>Nouveau mot de passe </h1>
  <div class="f1"><svg  width="64px" height="64px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"/><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/><g id="SVGRepo_iconCarrier"> <path d="M10.0303 8.96965C9.73741 8.67676 9.26253 8.67676 8.96964 8.96965C8.67675 9.26255 8.67675 9.73742 8.96964 10.0303L10.9393 12L8.96966 13.9697C8.67677 14.2625 8.67677 14.7374 8.96966 15.0303C9.26255 15.3232 9.73743 15.3232 10.0303 15.0303L12 13.0607L13.9696 15.0303C14.2625 15.3232 14.7374 15.3232 15.0303 15.0303C15.3232 14.7374 15.3232 14.2625 15.0303 13.9696L13.0606 12L15.0303 10.0303C15.3232 9.73744 15.3232 9.26257 15.0303 8.96968C14.7374 8.67678 14.2625 8.67678 13.9696 8.96968L12 10.9393L10.0303 8.96965Z" fill="#1C274C"/> <path fill-rule="evenodd" clip-rule="evenodd" d="M12 1.25C6.06294 1.25 1.25 6.06294 1.25 12C1.25 17.9371 6.06294 22.75 12 22.75C17.9371 22.75 22.75 17.9371 22.75 12C22.75 6.06294 17.9371 1.25 12 1.25ZM2.75 12C2.75 6.89137 6.89137 2.75 12 2.75C17.1086 2.75 21.25 6.89137 21.25 12C21.25 17.1086 17.1086 21.25 12 21.25C6.89137 21.25 2.75 17.1086 2.75 12Z" fill="#1C274C"/> </g></svg></div>
  <form class="form1" id="form1" >
      <label for="" class="Nom">Nom utilisateur</label>
      <input type="text" class="Nom1">
      <label for="" class="mot">Nouveau Mot de passe</label>
      <input type="text" class="mot1" name="password" readonly ><a class="generer" href="#">generer</a>
      <button class="valid" id="btnEnvoyerMail">Valider</button>
  </form>
</div>
<div class="popup" id="Absence">
  <h1>Ajouter une Absence</h1>
  <div class="f1"><svg  width="64px" height="64px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"/><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/><g id="SVGRepo_iconCarrier"> <path d="M10.0303 8.96965C9.73741 8.67676 9.26253 8.67676 8.96964 8.96965C8.67675 9.26255 8.67675 9.73742 8.96964 10.0303L10.9393 12L8.96966 13.9697C8.67677 14.2625 8.67677 14.7374 8.96966 15.0303C9.26255 15.3232 9.73743 15.3232 10.0303 15.0303L12 13.0607L13.9696 15.0303C14.2625 15.3232 14.7374 15.3232 15.0303 15.0303C15.3232 14.7374 15.3232 14.2625 15.0303 13.9696L13.0606 12L15.0303 10.0303C15.3232 9.73744 15.3232 9.26257 15.0303 8.96968C14.7374 8.67678 14.2625 8.67678 13.9696 8.96968L12 10.9393L10.0303 8.96965Z" fill="#1C274C"/> <path fill-rule="evenodd" clip-rule="evenodd" d="M12 1.25C6.06294 1.25 1.25 6.06294 1.25 12C1.25 17.9371 6.06294 22.75 12 22.75C17.9371 22.75 22.75 17.9371 22.75 12C22.75 6.06294 17.9371 1.25 12 1.25ZM2.75 12C2.75 6.89137 6.89137 2.75 12 2.75C17.1086 2.75 21.25 6.89137 21.25 12C21.25 17.1086 17.1086 21.25 12 21.25C6.89137 21.25 2.75 17.1086 2.75 12Z" fill="#1C274C"/> </g></svg></div>
  <form class="form4" id="form2">
    <label for="" class="Nom">Nom Employe</label>
    <input type="text" class="Nom1">
    <label for="" class="Prenom">Prenom Employe</label>
    <input type="text" class="Prenom1" ><a class="Histo" id="histoAbsence" href="#">Historique</a>
    <label for="" class="Departement">Type d'Absence</label>
    <select name="type1"  class="Departement1" require>
        <option value="Malade">Malade</option>
        <option value="Cas personnel">Cas personnel</option>
        <option value="Mariage">Mariage</option>
    </select>
    <label for="" class="dateDebut">Date de Debut</label>
    <input type="date" class="dateDebut1" name="DateA" id=""  require>
    <label for="" class="dateLimite">Date de fin</label>
    <input type="date" class="dateLimite1" name="DateB" id="" require>
    <label for="", class="com">Description</label>
    <textarea class="com1"  name="Des" cols="30" rows="10" require></textarea>
      
      <button class="valid" id="btnEnvoyerMail">Valider</button>
  </form>
</div>
<div class="popup" id="Affectation">
  <h1>Affectation</h1>
  <div class="f1"><svg  width="64px" height="64px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"/><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/><g id="SVGRepo_iconCarrier"> <path d="M10.0303 8.96965C9.73741 8.67676 9.26253 8.67676 8.96964 8.96965C8.67675 9.26255 8.67675 9.73742 8.96964 10.0303L10.9393 12L8.96966 13.9697C8.67677 14.2625 8.67677 14.7374 8.96966 15.0303C9.26255 15.3232 9.73743 15.3232 10.0303 15.0303L12 13.0607L13.9696 15.0303C14.2625 15.3232 14.7374 15.3232 15.0303 15.0303C15.3232 14.7374 15.3232 14.2625 15.0303 13.9696L13.0606 12L15.0303 10.0303C15.3232 9.73744 15.3232 9.26257 15.0303 8.96968C14.7374 8.67678 14.2625 8.67678 13.9696 8.96968L12 10.9393L10.0303 8.96965Z" fill="#1C274C"/> <path fill-rule="evenodd" clip-rule="evenodd" d="M12 1.25C6.06294 1.25 1.25 6.06294 1.25 12C1.25 17.9371 6.06294 22.75 12 22.75C17.9371 22.75 22.75 17.9371 22.75 12C22.75 6.06294 17.9371 1.25 12 1.25ZM2.75 12C2.75 6.89137 6.89137 2.75 12 2.75C17.1086 2.75 21.25 6.89137 21.25 12C21.25 17.1086 17.1086 21.25 12 21.25C6.89137 21.25 2.75 17.1086 2.75 12Z" fill="#1C274C"/> </g></svg></div>
  <form class="form3" id="form3">
      <label for="" class="Nom">Nom Employe</label>
      <input type="text" class="Nom1">
      <label for="" class="Prenom">Prenom Employe</label>
      <input type="text" class="Prenom1" ><a class="Histo" id="histoAffectation" href="#">Historique</a>
      
      <label for="" class="Departement">Nouveau Departement</label>
      <select class="Departement1" name="NEW" id="">
         <option value="Recrutement et Acquisition de Talents ">Recrutement et Acquisition de Talents</option>
         
         <option value="Formation et Développement">Formation et Développement</option>
               
         <option value="Gestion des Performances">Gestion des Performances</option>
               
         <option value="Santé et Sécurité au Travail">Santé et Sécurité au Travail</option>
         
         <option value="Développement Organisationnel">Développement Organisationnel</option>
               
      </select>
      
      <button class="valid" id="btnEnvoyerMail">Valider</button>
  </form>
</div>
<div class="popup" id="sanction">
  <h1>Ajouter une sanction</h1>
  <div class="f1"><svg  width="64px" height="64px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"/><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/><g id="SVGRepo_iconCarrier"> <path d="M10.0303 8.96965C9.73741 8.67676 9.26253 8.67676 8.96964 8.96965C8.67675 9.26255 8.67675 9.73742 8.96964 10.0303L10.9393 12L8.96966 13.9697C8.67677 14.2625 8.67677 14.7374 8.96966 15.0303C9.26255 15.3232 9.73743 15.3232 10.0303 15.0303L12 13.0607L13.9696 15.0303C14.2625 15.3232 14.7374 15.3232 15.0303 15.0303C15.3232 14.7374 15.3232 14.2625 15.0303 13.9696L13.0606 12L15.0303 10.0303C15.3232 9.73744 15.3232 9.26257 15.0303 8.96968C14.7374 8.67678 14.2625 8.67678 13.9696 8.96968L12 10.9393L10.0303 8.96965Z" fill="#1C274C"/> <path fill-rule="evenodd" clip-rule="evenodd" d="M12 1.25C6.06294 1.25 1.25 6.06294 1.25 12C1.25 17.9371 6.06294 22.75 12 22.75C17.9371 22.75 22.75 17.9371 22.75 12C22.75 6.06294 17.9371 1.25 12 1.25ZM2.75 12C2.75 6.89137 6.89137 2.75 12 2.75C17.1086 2.75 21.25 6.89137 21.25 12C21.25 17.1086 17.1086 21.25 12 21.25C6.89137 21.25 2.75 17.1086 2.75 12Z" fill="#1C274C"/> </g></svg></div>
  <form class="form4" id="form5">
      <label for="" class="Nom">Nom Employe</label>
      <input type="text" class="Nom1">
      <label for="" class="Prenom">Prenom Employe</label>
      <input type="text" class="Prenom1" ><a class="Histo" id="histoSanction" href="#">Historyque</a>
      <label for="" class="Departement">Type de Sanction</label>
      <select name="type1" id="" class="Departement1">
          <option value="Avertissement ou blâme">Avertissement ou blâme</option>
          <option value="Mise à pied">Mise à pied</option>
          <option value="Mutation">Mutation</option>
          <option value="Rétrogradation">Rétrogradation</option>
          <option value="Licenciement">Licenciement</option>
      </select>
      <label for="" class="dateDebut">Date de Debut</label>
      <input type="date" class="dateDebut1" name="DateA" id="" require>
      <label for="" class="dateLimite">Date de fin</label>
      <input type="date" class="dateLimite1" name="DateB" id="" require>
      <label for="", class="com">Commentaire</label>
      <textarea class="com1" cols="30" name="Des" rows="10" require></textarea>
      
      <button class="valid" id="btnEnvoyerMail">Valider</button>
  </form>
</div>
<div class="popup " id="avantage">
  <h1>Ajouter un avantage sociale</h1>
  <div class="f1"><svg  width="64px" height="64px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"/><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/><g id="SVGRepo_iconCarrier"> <path d="M10.0303 8.96965C9.73741 8.67676 9.26253 8.67676 8.96964 8.96965C8.67675 9.26255 8.67675 9.73742 8.96964 10.0303L10.9393 12L8.96966 13.9697C8.67677 14.2625 8.67677 14.7374 8.96966 15.0303C9.26255 15.3232 9.73743 15.3232 10.0303 15.0303L12 13.0607L13.9696 15.0303C14.2625 15.3232 14.7374 15.3232 15.0303 15.0303C15.3232 14.7374 15.3232 14.2625 15.0303 13.9696L13.0606 12L15.0303 10.0303C15.3232 9.73744 15.3232 9.26257 15.0303 8.96968C14.7374 8.67678 14.2625 8.67678 13.9696 8.96968L12 10.9393L10.0303 8.96965Z" fill="#1C274C"/> <path fill-rule="evenodd" clip-rule="evenodd" d="M12 1.25C6.06294 1.25 1.25 6.06294 1.25 12C1.25 17.9371 6.06294 22.75 12 22.75C17.9371 22.75 22.75 17.9371 22.75 12C22.75 6.06294 17.9371 1.25 12 1.25ZM2.75 12C2.75 6.89137 6.89137 2.75 12 2.75C17.1086 2.75 21.25 6.89137 21.25 12C21.25 17.1086 17.1086 21.25 12 21.25C6.89137 21.25 2.75 17.1086 2.75 12Z" fill="#1C274C"/> </g></svg></div>
  <form class="form4" id="form4">
      <label for="" class="Nom">Nom Employe</label><a href="#" id="dossier" class="Dossier">Dossier</a>
      <input type="text" class="Nom1">
      <label for="" class="Prenom">Prenom Employe</label>
      <input type="text" class="Prenom1" ><a class="Histo" id="histoAvantage" href="#">Historyque</a>
      <label for="" class="Departement">Type d'avantage</label>
      <select name="type1" id="" class="Departement1" require>
          <option value="Assurances santé">Assurances santé</option>
          <option value="congés payés">congés payés </option>
          <option value="Prime">Prime</option>
          <option value="Promotion">Promotion</option>
      </select>
      
      <label for="" class="dateDebut">Date de Debut</label>
      <input type="date" class="dateDebut1" name="DateA" id="" require>
      <label for="" class="dateLimite">Date de fin</label>
      <input type="date" class="dateLimite1" name="DateB" id="" require>
      <label for="", class="com">Commentaire</label>
      <textarea class="com1" cols="30" name="Des" rows="10" require></textarea>
      
      <button class="valid" id="btnEnvoyerMail">Valider</button>
  </form>
</div>

<script>
 document.querySelector('#dossier').addEventListener("click", function(e) {
  const id = localStorage.getItem('get_id'); // Récupérer l'ID

// Rediriger vers la page PHP avec l'ID comme paramètre de requête GET
window.location.href = "dossier.php?id=" + id;
}); 

document.querySelector('#histoAvantage').addEventListener("click", function(e) {
  const id = localStorage.getItem('get_id'); // Récupérer l'ID

// Rediriger vers la page PHP avec l'ID comme paramètre de requête GET
window.location.href = "historique/historiqueAvantage.php?id=" + id;
});
document.querySelector('#histoSanction').addEventListener("click", function(e) {
  const id = localStorage.getItem('get_id'); // Récupérer l'ID

// Rediriger vers la page PHP avec l'ID comme paramètre de requête GET
window.location.href = "historique/historiqueSanction.php?id=" + id;
});
document.querySelector('#histoAffectation').addEventListener("click", function(e) {
  const id = localStorage.getItem('get_id'); // Récupérer l'ID

// Rediriger vers la page PHP avec l'ID comme paramètre de requête GET
window.location.href = "historique/historiqueAffectation.php?id=" + id;
});
document.querySelector('#histoAbsence').addEventListener("click", function(e) {
  const id = localStorage.getItem('get_id'); // Récupérer l'ID
// Rediriger vers la page PHP avec l'ID comme paramètre de requête GET
window.location.href = "historique/historiqueAbsence.php?id=" + id;
});


</script>

<script>
  var data = {};

document.getElementById("form1").addEventListener("submit", function(e) {
  

  // Créez une requête AJAX
  const xhr = new XMLHttpRequest();
  xhr.open("POST", "page/motDePasse.php", true);
  xhr.responseType = "text"; // ou xhr.responseType = "text";

  // Envoyez les données du formulaire
  const formData = new FormData(this);
  
 formData.append("local_storage_value",localStorage.getItem('get_id'));
   xhr.send(formData);

  // Gérez la réponse
  xhr.onload = function() {
    if (xhr.status == 200) {
      // La requête AJAX a été réussie
      console.log(xhr.responseText);
      var data = JSON.parse(xhr.responseText);
      if (data.success) {
        console.log("Utilisateur inscrit !");
      } else {
        alert(data.msg);
      }
    } else {
      // La requête AJAX a échoué
      alert("Une erreur est survenue...");
    }
  };

  return false;
});


document.getElementById("form3").addEventListener("submit", function(e) {


  // Créez une requête AJAX
  const xhr = new XMLHttpRequest();
  xhr.open("POST", "page/AffectationEmploye.php", true);
  xhr.responseType = "text"; // ou xhr.responseType = "text";

  // Envoyez les données du formulaire
  const formData = new FormData(this);
  formData.append("local_storage_value",localStorage.getItem('get_id'));
  xhr.send(formData);

  // Gérez la réponse
  xhr.onload = function() {
    if (xhr.status == 200) {
      // La requête AJAX a été réussie
      console.log(xhr.responseText);
      var data = JSON.parse(xhr.responseText);
      if (data.success) {
        console.log("Utilisateur inscrit !");
      } else {
        alert(data.msg);
      }
    } else {
      // La requête AJAX a échoué
      alert("Une erreur est survenue...");
    }
  };

  return false;
});
document.getElementById("form2").addEventListener("submit", function(e) {
 

  // Créez une requête AJAX
  const xhr = new XMLHttpRequest();
  xhr.open("POST", "page/AjouteAbsence.php", true);
  xhr.responseType = "text"; // ou xhr.responseType = "text";

  // Envoyez les données du formulaire
  const formData = new FormData(this);
  formData.append("local_storage_value",localStorage.getItem('get_id'));
  xhr.send(formData);
  // Gérez la réponse
  xhr.onload = function() {
    if (xhr.status == 200) {
      // La requête AJAX a été réussie
      console.log(xhr.responseText);
      var data = JSON.parse(xhr.responseText);
      if (data.success) {
        console.log("Utilisateur inscrit !");
      } else {
        alert(data.msg);
      }
    } else {
      // La requête AJAX a échoué
      alert("Une erreur est survenue...");
    }
  };

  return false;
});
document.getElementById("form4").addEventListener("submit", function(e) {



  // Créez une requête AJAX
  const xhr = new XMLHttpRequest();
  xhr.open("POST", "page/AjoutAvantageSociale.php", true);
  xhr.responseType = "text"; // ou xhr.responseType = "text";

  // Envoyez les données du formulaire
  const formData = new FormData(this);
  formData.append("local_storage_value",localStorage.getItem('get_id'));
  xhr.send(formData);

  // Gérez la réponse
  xhr.onload = function() {
    if (xhr.status == 200) {
      // La requête AJAX a été réussie
      console.log(xhr.responseText);
      var data = JSON.parse(xhr.responseText);
      if (data.success) {
        console.log("Utilisateur inscrit !");
      } else {
        alert(data.msg);
      }
    } else {
      // La requête AJAX a échoué
      alert("Une erreur est survenue...");
    }
  };

  return false;
});
document.getElementById("form5").addEventListener("submit", function(e) {



// Créez une requête AJAX
const xhr = new XMLHttpRequest();
xhr.open("POST", "page/AjoutSanction.php", true);
xhr.responseType = "text"; // ou xhr.responseType = "text";

// Envoyez les données du formulaire
const formData = new FormData(this);
formData.append("local_storage_value",localStorage.getItem('get_id'));
xhr.send(formData);

// Gérez la réponse
xhr.onload = function() {
  if (xhr.status == 200) {
    // La requête AJAX a été réussie
    console.log(xhr.responseText);
    var data = JSON.parse(xhr.responseText);
    if (data.success) {
      console.log("Utilisateur inscrit !");
    } else {
      alert(data.msg);
    }
  } else {
    // La requête AJAX a échoué
    alert("Une erreur est survenue...");
  }
};

return false;
});

</script>

<script>
   localStorage.setItem("get_id", undefined);
  const items = document.querySelectorAll('.item');
  const pop = document.querySelector('#motdepass')
  const popAbsence=document.querySelector('#Absence')
  const popAffectation=document.querySelector('#Affectation')
  const popSanction=document.querySelector('#sanction')
  const popAvantageSociale=document.querySelector('#avantage')

for (const item of items) {
  const modifiers = item.querySelectorAll('.lien-4');
  const Absences = item.querySelectorAll('.lien-3')
  const Affectations=item.querySelectorAll('.lien-2')
  const Sanctions=item.querySelectorAll('.lien-Mod1')
  const Avantages=item.querySelectorAll('.lien-1')
  for (const modifier of modifiers) {
    // Do something with the modifier
    modifier.addEventListener('click',()=>{
      const form = pop.querySelector('#form1');
      const item = modifier.closest('.item-content')
      const no = item.querySelector('.num input').value;
      localStorage.setItem("get_id", no);
      console.log(localStorage.getItem("get_id"));
      const nn1 = form.querySelector('.Nom1');
      const nom=item.querySelector('.no1').textContent
      nn1.value=nom
    })
  }
  for (const Absence of Absences) {
    // Do something with the modifier
    Absence.addEventListener('click',()=>{
      const form = popAbsence.querySelector('#form2');
      const item = Absence.closest('.item-content')
      const no = item.querySelector('.num input').value;
      localStorage.setItem("get_id", no);
      console.log(localStorage.getItem("get_id"));
      const nn1 = form.querySelector('.Nom1');
      const premon=form.querySelector('.Prenom1');
      const nom=item.querySelector('.no1').textContent;
      const itprenom=item.querySelector('.type1').textContent;
      premon.value=itprenom
      nn1.value=nom
    })
  }
  for (const Affectation of Affectations) {
    // Do something with the modifier
    Affectation.addEventListener('click',()=>{
      const form = popAffectation.querySelector('#form3');
      const item = Affectation.closest('.item-content')
      const no = item.querySelector('.num input').value;
      localStorage.setItem("get_id", no);
      console.log(localStorage.getItem("get_id"));
      const nn1 = form.querySelector('.Nom1');
      const premon=form.querySelector('.Prenom1');
      const itprenom=item.querySelector('.type1').textContent;
      const nom=item.querySelector('.no1').textContent
      premon.value=itprenom
      nn1.value=nom
    })
  }
  for (const Sanction of Sanctions) {
    // Do something with the modifier
    Sanction.addEventListener('click',()=>{
      const form = popSanction.querySelector('#form5');
      const item = Sanction.closest('.item-content')
      const no = item.querySelector('.num input').value;
      localStorage.setItem("get_id", no);
      console.log(localStorage.getItem("get_id"));
      const nn1 = form.querySelector('.Nom1');
      const premon=form.querySelector('.Prenom1');
      const itprenom=item.querySelector('.type1').textContent;
      const nom=item.querySelector('.no1').textContent
      premon.value=itprenom
      nn1.value=nom
    })
  }
  for (const Avantage of Avantages) {
    // Do something with the modifier
    Avantage.addEventListener('click',()=>{
      const form = popAvantageSociale.querySelector('#form4');
      const item = Avantage.closest('.item-content')
      const no = item.querySelector('.num input').value;
      localStorage.setItem("get_id", no);
      console.log(localStorage.getItem("get_id"));
      const nn1 = form.querySelector('.Nom1');
      const premon=form.querySelector('.Prenom1');
      const itprenom=item.querySelector('.type1').textContent;
      const nom=item.querySelector('.no1').textContent
      premon.value=itprenom
      nn1.value=nom
    })
  }
}


  
</script>

<script>
  console.log(localStorage.getItem("dossier"))
  const lien_dossier=document.querySelector('.Dossier').addEventListener('click',() =>{
    localStorage.setItem("dossier",1)
  })
</script>

<script>
  function genererMotDePasse(longueur) {
  const caracteres = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
  let motDePasse = "";
  for (let i = 0; i < longueur; i++) {
      const caractereAleatoire = caracteres[Math.floor(Math.random() * caracteres.length)];
      motDePasse += caractereAleatoire;
  }
  return motDePasse;
}


const generer=document.querySelector(".generer").addEventListener("click",()=>{
  const motDePasseAleatoire = genererMotDePasse(8);
  const inputMotDePasse=document.querySelector(".mot1")
  inputMotDePasse.value=motDePasseAleatoire;
})

</script>
<script>
  const motdepass=document.querySelector('#motdepass')
  const Absence=document.querySelector('#Absence')
  const Affectation=document.querySelector('#Affectation')
  const Sanction=document.querySelector('#sanction')
  const Avantage=document.querySelector('#avantage')


  function afficherPopup1(motdepass) {
  
  
  motdepass.classList.add('active')
  motdepass.style.transition = "500ms ease-in-out";
  
  
}



function cacherPopup1(motdepass) {
  
 
  motdepass.classList.remove("active")
  const inputMotDePasse=document.querySelector(".mot1")
  inputMotDePasse.value="";
}

const btn_motdepass=document.querySelectorAll('.lien-4');
  for (let btnPartage of btn_motdepass) {
    let btn = btnPartage
    
    

    btn.addEventListener("click", () => {
      afficherPopup1(motdepass)
  })

 
  }
  let popup = document.querySelectorAll(".f1")
  for(f1 of popup){
    f1.addEventListener("click", (event) => {

cacherPopup1(motdepass)
cacherPopup1(Absence)
cacherPopup1(Affectation)
cacherPopup1(Sanction)
cacherPopup1(Avantage)
})
  }
  
  
  const absence=document.querySelectorAll('.lien-3')
  for (let btnPartage of absence) {
    let btn = btnPartage
   
    

    btn.addEventListener("click", () => {
      afficherPopup1(Absence)
  })
}

const affectation=document.querySelectorAll('.lien-2')
for (let btnPartage of affectation) {
    let btn = btnPartage
   
    

    btn.addEventListener("click", () => {
      afficherPopup1(Affectation)
  })
}
const sanction=document.querySelectorAll('.lien-Mod1')
for (let btnPartage of sanction) {
    let btn = btnPartage
   
    

    btn.addEventListener("click", () => {
      afficherPopup1(Sanction)
  })
}
const avantage=document.querySelectorAll('.lien-1')
for (let btnPartage of avantage) {
    let btn = btnPartage
   
    

    btn.addEventListener("click", () => {
      afficherPopup1(Avantage)
  })
}
</script>
<script src="https://unpkg.com/popper.js@1"></script>
<script src="https://unpkg.com/tippy.js@5/dist/tippy-bundle.iife.js"></script>
<script>
  
  tippy('.lien-4', {
    content:'<strong class="f" style="font-size: 1.5em;">Reinisialiser son mot de passe</strong>',
    animation:'tada',
    inertia: true,
    flip: true,
    theme: 'tomato',
    arrow: true,
});
tippy('.lien-3', {
    content:'<strong class="f" style="font-size: 1.5em;">Enregister des absence</strong>',
    animation:'tada',
    inertia: true,
    flip: true,
    theme: 'voil',
    arrow: true,
});
tippy('.lien-2', {
    content:'<strong class="f" style="font-size: 1.5em;">Affecter l\'employe</strong>',
    animation:'tada',
    inertia: true,
    flip: true,
    theme: 'voil1',
    arrow: true,
});
tippy('.lien-Mod1', {
    content:'<strong class="f" style="font-size: 1.5em;">Ajouter une sanction</strong>',
    animation:'tada',
    inertia: true,
    flip: true,
    theme: 'voil2',
    arrow: true,
});
tippy('.lien-1', {
    content:'<strong class="f" style="font-size: 1.5em;">Ajouter un avantage sociale</strong>',
    animation:'tada',
    inertia: true,
    flip: true,
    theme: 'voil3',
    arrow: true,
});

</script>

<script>
  const s = document.querySelector('.lock1');
s.classList.add('z');
const s2 = document.querySelector('.lock2');
const q = document.querySelector('.sidebar');
s.addEventListener('click', () => {
q.classList.add('hover');
q.classList.add('blocked');
s2.classList.add('z');
});
s2.addEventListener('click', () =>{
q.classList.remove('blocked');
s2.classList.remove('z');
});
</script>
<script>
 const sidebar = document.querySelector('.sidebar');
const listItems = document.querySelectorAll('.list');

// Calculer la hauteur de la sidebar et la position des éléments de la liste
const sidebarHeight = sidebar.offsetHeight;
const listItemHeight = listItems[0].offsetHeight;
const listHeight = listItems.length * listItemHeight;
const padding = (sidebarHeight - listHeight + 1) / 8;

// Ajouter une marge supérieure et inférieure aux éléments de la liste
listItems.forEach((item) => {
item.style.marginTop = padding + 'px';
item.style.marginBottom = padding + 'px';
});

</script>
<script src="https://cdn.jsdelivr.net/npm/muuri@0.9.5/dist/muuri.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/web-animations-js@2.3.2/web-animations.min.js"></script>
<script>
  const btns = document.querySelectorAll('.btn');
  btns.forEach(btn => {
    btn.addEventListener('click', function () {
      // Ajoute la classe active au bouton cliqué
      btns.forEach(otherBtn => {
        otherBtn.classList.remove('active');
      });
      btn.classList.add('active');
    });

    btn.onmousemove = function (e) {
      const x = e.pageX - btn.offsetLeft;
      const y = e.pageY - btn.offsetTop;
      btn.style.setProperty('--x', x + 'px');
      btn.style.setProperty('--y', y + 'px');
    };
  });
  var grid = new Muuri('.grid', {
    dragEnabled: true,
    dragHandle: '.item-content', // Activer la poignée de glisser-déposer pour déplacer les éléments
    layout: {
      fillGaps: true,
      horizontal: false,
    },
    layoutDuration: 500
  });
  function resizeGrid() {
    grid.layout();
  }
  grid.refreshItems().layout();
  window.addEventListener('load', resizeGrid);

  
  var filterButton1 = document.querySelector('.t');
  filterButton1.addEventListener('keyup', function () {
 

  
  if (grid && filterButton1) {
    var items = grid.getItems();
    var searchTerm = this.value.toLowerCase(); 

    for (var i = 0; i < items.length; i++) {
      var titleElement = items[i].getElement().querySelector('.no1');

      if (titleElement) {
        var title = titleElement.textContent.toLowerCase(); 

        if (title.includes(searchTerm)) {
          items[i].getElement().setAttribute('data-category', 'Refusé');
        } else {
          items[i].getElement().setAttribute('data-category', '');
        }
      }
    }


    grid.filter('[data-category="Refusé"]');

   
    

    grid.layout();
  }
});



</script>

</body>
</html>