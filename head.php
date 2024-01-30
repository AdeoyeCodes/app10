<!DOCTYPE html>
<head>
 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="PHP">
    <meta name="keywords" content="HTML, CSS, PHP">
    <meta name="author" content="Bolux"> 
  <!-- Latest compiled and minified CSS -->
  <link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 <!-- jQuery library -->
  <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>    
 <!-- Popper JS -->
  <script src = "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
 <!-- Latest compiled JavaScript -->
  <script src = "https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>    
  <script src="https://kit.fontawesome.com/965b829563.js" crossorigin="anonymous"></script>
  <title> PERFECT PANEL </title>
  <link rel= "stylesheet" type= "text/css" href= "css/style.css">
</head>

<style>


        .animated-element {
            position: absolute;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: #f39c12;
            animation: elementAnimation 5s ease infinite;
            z-index: -1;
        }

        .element1 { top: 20%; left: 10%; }
        .element2 { top: 50%; left: 70%; }
        .element3 { top: 80%; left: 30%; }
        .element4 { top: 10%; left: 80%; }
        .element5 { top: 40%; left: 40%; }
        .element6 { top: 70%; left: 5%; }
        .element7 { top: 90%; left: 60%; }
        .element8 { top: 30%; left: 20%; }
        .element9 { top: 60%; left: 75%; }
        .element10 { top: 85%; left: 15%; }
        .element11 { top: 15%; left: 50%; }
        .element12 { top: 45%; left: 90%; }
        .element13 { top: 75%; left: 25%; }
        .element14 { top: 5%; left: 65%; }
        .element15 { top: 35%; left: 10%; }
        .element16 { top: 65%; left: 55%; }
        .element17 { top: 90%; left: 85%; }
        .element18 { top: 20%; left: 40%; }
        .element19 { top: 50%; left: 95%; }
        .element20 { top: 80%; left: 5%; }

        /* Add more elements as needed */

        @keyframes backgroundAnimation {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        @keyframes elementAnimation {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.2); }
        }
</style>
