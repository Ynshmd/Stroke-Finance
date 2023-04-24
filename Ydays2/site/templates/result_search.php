<?php include('wassil.html'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultats de la recherche</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/echarts@5/dist/echarts.min.js"></script>
    <style>
        body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
        body, html {
        height: 100%;
        /* color: (255,255,255); */
        line-height: 1.8;
        }

/* Create a Parallax Effect */
        .bgimg-1, .bgimg-2, .bgimg-3 {
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        }

/* First image (Logo. Full height) */
        .bgimg-1 {
        background-image: url('https://wallpapercave.com/wp/wp5436071.jpg');
        min-height: 100%;
        }
        .w3-wide {letter-spacing: 10px;}
        .w3-hover-opacity {cursor: pointer;}

        /* Turn off parallax scrolling for tablets and phones */
        @media only screen and (max-device-width: 1600px) {
        .bgimg-1, .bgimg-2, .bgimg-3 {
            background-attachment: scroll;
            min-height: 400px;
        }
        }

    </style>
</head>
<body>
    
    <div class="w3-bar" id="myNavbar">
        <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
        <i class="fa fa-bars"></i>
        </a>
        <a href="/" class="w3-bar-item w3-button">HOME</a>
        <!-- <a href="#about" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-search"></i></i> Recherchez votre véhicule </a>
        <a href="#contact" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-user"></i></i> Qui sommes-nous ?</a>
        <a href="#location" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-envelope"></i> Contact</a> -->
        </a>
        <img src="https://media.discordapp.net/attachments/1078306573635559478/1098955434045472828/Capture_d_ecran_2023-04-21_a_14.55.04-removebg-preview.png?width=963&height=75" alt="logoSF" style="float: right;">
    </div>
    <h3>Résultats de votre recherche</h3>
    <div class="bgimg-1 w3-display-container w3-opacity-min mb-4" id="home">
  <!-- <div><img src ="https://th.bing.com/th/id/R.c0c44a3ef9cbaa952805be3f73ad4559?rik=m%2fk39ulZdtVRAA&pid=ImgRaw&r=0" alt = "" ></div> -->
  <table class="table table-striped text-light">
    <thead>
      <tr>
        <th>Marque</th>
        <th>Modèle</th>
        <th>Motorisation</th>
        <th>Carburant</th>
        <th>Kilométrage</th>
        <th>Année</th>
        <th>Prix</th>
        <th>NoteConsommation</th>
        <th>DureeGarantie</th>
        <th>Performance</th>
        <th>Cote Attendue</th>
        <th>Habitabilite</th>
        <th>Fiabilite</th

        
      </tr>
    </thead>
    <tbody>
      {% for result in results %}
        <tr>
          <td>{{ result.Marque }}</td>
          <td>{{ result.MODELE }}</td>
          <td>{{ result.MOTEUR }}</td>
          <td>{{ result.CARBURANT }}</td>
          <td>{{ result.KILOMETRAGE }}</td>
          <td>{{ result.ANNEE }}</td>
          <td>{{ result.PRIX }}</td>
          <td><progress max=5 value='{{ result.NoteConsommation }}'></progress>{{ result.NoteConsommation }} / 5</td>
          <td><progress max=5 value='{{ result.DureeGarantie }}'></progress>{{ result.DureeGarantie }} / 5</td>
          <td><progress max=5 value='{{ result.Performance }}'></progress>{{ result.Performance }} / 5</td>
          <td><progress max=5 value='{{ result.CoteAttendue }}'></progress>{{ result.CoteAttendue }} / 5</td>
          <td><progress max=5 value='{{ result.Habitabilite }}'></progress>{{ result.Habitabilite }} / 5</td>
          <td><progress max=5 value='{{ result.Fiabilite }}'></progress>{{ result.Fiabilite }} / 5</td>
        
        </tr>
      {% endfor %}
    </tbody>
  </table>
        </div>
    </div>
  
 
</body>
</html>
