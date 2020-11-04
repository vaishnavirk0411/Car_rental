
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE-edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>VFX Monkey</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet"  href="css/style.css">
  <link rel="stylesheet"  href="css/all.min.css">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="cssfile.css">
</head>

<body>



  <nav class="navbar navbar-expand-sm navbar-light bg-secondary">
    <div class="container-fluid">
      <a href={{route('car')}} class="navbar-brand ">
          <div id="logo-img" alt="Logo image"><img src="images/car.png" height="auto" width="160px" style="margin-left: 50px;"></div>
        </a>
    <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarMenu">
          <ul id="nav-list" class="nav navbar-nav mr-auto">
            <li class="nav-item ">
              <a href={{route('car')}} class="nav-link"><span><i class="fa fa-briefcase" aria-hidden="true"></i>Cars</span></a>
            </li>

              <li class="nav-item dropdown">
              <a href={{route('bookcar')}} class="nav-link"><span><i class="fa fa-sliders" aria-hidden="true"></i>Booked Cars</span></a>
              </li>
            </ul>

      
      </div>
    </div>
  </nav>
  
 
  <div class="container-fluid">
    <table class="table table-dark">
  <thead>
    <tr>
     
      <td scope="col">Car id</td> 
      <td scope="col">Cust id</td>
      <td scope="col">Pick date</td>
      <td scope="col">Pick time</td>
      <th scope="col">Drop date</th>
      <td scope="col">Drop time</td>
      <td scope="col">Status</td>
      
    </tr>
  </thead>
  <tbody>
    <tr>
    
      <td>ABCD</td>
      <td>www.abc</td>
      
      <td>www.abc</td>
      
      <td>www.abc</td>
      <td><i class="fa fa-file-image-o" aria-hidden="true"></i></td>
      <td>www.abc</td>
      <td><i class="fa fa-pencil-square-o" aria-hidden="true"></i><i class="fa fa-trash-o" aria-hidden="true"></i></td>
    </tr>
    
  </tbody>
</table>
  </div>




  <script src="js/jquery-3.5.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js" integrity="sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD" crossorigin="anonymous"></script>
</body>
</html>
