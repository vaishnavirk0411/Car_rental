<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE-edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Click & Go</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet"  href="css/style.css">
  <link rel="stylesheet"  href="css/all.min.css">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="script.js"></script>
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
              <a href={{route('user')}} class="nav-link"><span><i class="fa fa-car" aria-hidden="true"></i>Users</span></a>
            </li>
            <li class="nav-item ">
              <a href={{route('car')}} class="nav-link"><span><i class="fa fa-car" aria-hidden="true"></i>Cars</span></a>
            </li>

              <li class="nav-item dropdown">
              <a href={{route('bookcar')}} class="nav-link"><span><i class="fa fa-car" aria-hidden="true"></i>Booked Cars</span></a>
              </li>

          

            </ul>

            
      </div>
    </div>
  </nav>
  <div class="container-fluid">
  <form id="cardata" method="post" action="/car" enctype="multipart/form-data">

  {{ csrf_field() }}
  <div class="form-row">
    
     <div class="col-md-6 mb-3">
      <div class="len">
       <label for="validationDefault03">Name Of User</label>
      <input name="user_name"  type="text" class="form-control" id="user_name" required>
  </div>
</div>
<div class="col-md-6 mb-3">
      <label for="validationDefault01">DL Number</label>
      <input name="dlno" type="text" class="form-control" id="dlno" value="">
    </div>
     <div class="col-md-6 mb-3">
      <div class="len">
       <label for="validationDefault03">Email Id</label>
      <input name="email" type="email" class="form-control" id="email" required>
  </div>
</div>
    <div class="col-md-6 mb-3">
      <label for="validationDefault01">Password</label>
      <input name="password" type="password" class="form-control" id="password" value="" >
    </div>
     


 
</form>

</div>
<div class="vertical-center" style="text-align: center;">
  <button class="btn btn-primary" type="submit">Submit form</button></div>

<!-- <div class="container-fluid">
    <table class="table table-dark">
  <thead>
    <tr>
     
      <td scope="col">Id</td>
       <td scope="col">Car unique id</td> 
      <td scope="col">Name of Car</td>
      <td scope="col">Plate number </td>
      <td scope="col">No of seats</td>
      <th scope="col">Price</th>
      <th scope="col">Model</th>
      <th scope="col">Transmision</th>
      <th scope="col">Fuel</th>
      <th scope="col">Description</th>
      <th scope="col">Image</th>

      <th scope="col">active</th>
      <td scope="col">Created at</td>
      <td scope="col">Updated at</td>
      <td scope="col">Action</td>
    </tr>
  </thead>
  
    
   
</table>
  </div> -->

  <script src="/js/script.js"></script>
  <script src="js/jquery-3.5.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

</body>
</html>