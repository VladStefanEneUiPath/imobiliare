<!DOCTYPE html>
<head>
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <style>
      .container {
  padding-right: 150px;
  padding-left: 150px;
  margin-right: auto;
  margin-left: auto;
}
@media (min-width: 768px) {
  .container {
    width: 750px;
  }
}
@media (min-width: 992px) {
  .container {
    width: 970px;
  }
}
@media (min-width: 1200px) {
  .container {
    width: 1170px;
  }
}

table {
  border:1px solid #d3d3d3
}
td,th {
  border:none
}
    </style>
</head>
<body>
 <nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Imobiliare</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Alte anunturi <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Page 1-1</a></li>
                        <li><a href="#">Page 1-2</a></li>
                        <li><a href="#">Page 1-3</a></li>
                    </ul>
                </li>
                <li><a href="#">Cauta</a></li>
                <li><a href="http://127.0.0.1:8000/adauga-anunt">Adauga anunt</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="http://127.0.0.1:8000/register"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="http://127.0.0.1:8000/login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>
    </div>
</nav>


<div class="container"> 
  <h3>Anunţul tău</h3>
  <div style="position:relative;left:60px;">
    <table>
      <tr valign="top">
        <td>
          <img src="https://img2.imonet.ro/XV0A/V0A00H47NTS/apartament-de-vanzare-2-camere-bucuresti-bucurestii-noi-75997504_210x158.jpg">
        </td>
        <td style="padding-left:10px;width:300px;">
          <h3>{{$date->titlu}}<br><small>{{$date->zona}}</small></h3>
          <button type="button" class="btn btn-default">{{$date->nr_camere}} camere</button>
          <button type="button" class="btn btn-default">{{$date->suprafata_utila}} mp</button>
          <button type="button" class="btn btn-default">Etaj {{$date->etaje}}</button>
          <h3><small>{{$date->pret}} euro</small></h3>
        </td>
      </tr>
      </table>
  </div>
  <h3 style="padding-top:40px;">Alege optiunile de promovare:</h3>


    <form action="http://127.0.0.1:8000/vp/{{$date->id}}" style="text-align: center;">
    <table style="border-spacing:30px;border-collapse: separate;border:none; ">
      <tr>
        <td  bgcolor="#ffff99" style="font-size:30px;"><font color="gold">Promovare Gold<br>
        vizibil pentru 97% dintre cumparatorii interesati<br> Numar de contacte maxim garantat<br>Promovare maxima garantata<br>
        <select>
          <option>3 zile - 20 euro</option>
          <option>15 zile - 50 euro</option>
          <option>30 zile - 80 euro</option>
        </select><br>
         <input type="radio" name="option" value="gold" checked=""> <br>
       

        </font></td>
        <td  bgcolor="#d9d9d9" style="font-size:30px;"><font color="silver">Promovare Silver<br>
        Vizibil pentru 67% dintre cumparatorii interesati<br> Numar ridicat de contacte<br>Promovare suplimentara inclusa<br>
          <select>
          <option>7 zile - 10 euro</option>
          <option>30 zile - 20 euro</option>
          <option>90 zile - 40 euro</option>
        </select><br>
        <input type="radio" name="option" value="silver"><br>
        </font></td>
      </tr>
      </table>
      <h3>Metode de plata</h3>
      <div>
        <input type="radio" name="tip" value="gold">Card
        <input type="radio" name="tip" value="gold">Card din cont
        <input type="radio" name="tip" value="gold">Ordin de plata
      </div><br>
      <input type="submit" class="btn btn-success"  value="Plateste">
      </form><br>
  </div>



</body>