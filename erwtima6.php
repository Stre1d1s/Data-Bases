<?php
include_once("connection.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="mycss.css" rel="stylesheet" />
  <title>Document</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Database Manager</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Erwtima 1</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="erwtima2.php">Erwtima 2</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="erwtima3.php">Erwtima 3</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="erwtima4.php">Erwtima 4</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="erwtima5.php">Erwtima 5</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="erwtima6.php">Erwtima 6</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="erwtima7.php">Erwtima 7</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="erwtima8.php">Erwtima 8</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="erwtima9.php">Erwtima 9</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="erwtima10.php">Erwtima 10</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- EDW XEKINAEI TO TABLE ME TA APOTELESMATA -->

  <?php
  $stmt = $conn->prepare("SELECT E.eonomateponimo AS 'Ονοματεπώνυμο Εργαζόμενου', 
    MI.poso AS 'Μισθός' 
    FROM ERGAZOMENOS E 
    JOIN PLIRONI P ON E.erg_id = P.erg_id 
    JOIN MISTHOS MI ON P.plir_id = MI.plir_id 
    ORDER BY MI.poso DESC, E.eonomateponimo ASC; ");
  $stmt->execute(); //ektelesi tou erwtimatos
  $result = $stmt->get_result(); //anaktisi apotelesmatos 

  ?>

<h1 style="margin-left:20%">Εμφάνιση υπαλλήλων και των μισθών τους, ταξινομημένους πρώτα κατά φθίνουσα σειρά μισθού και, αν υπάρχουν ίδιοι μισθοί, κατά αύξουσα σειρά ονοματεπωνύμου</h1>

  <table class="table" id="mytable">
    <thead>
      <tr>
        <th scope="col">Ονοματεπώνυμο</th>
        <th scope="col">Μισθός</th>
      </tr>
    </thead>
    <tbody>

      <?php
      while ($row = $result->fetch_assoc()) { //gia kathe grammi tou select
        echo '<tr>';
        echo '<td>' . $row['Ονοματεπώνυμο Εργαζόμενου'] . '</td>';
        echo '<td>' . $row['Μισθός'] . '</td>';
        echo '<tr>';
      }
      ?>

    </tbody>
  </table>




  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
    crossorigin="anonymous"></script>
</body>

</html>