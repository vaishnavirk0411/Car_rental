<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE-edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>VYX Monkey</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet"  href="css/style.css">
  <link rel="stylesheet"  href="css/all.min.css">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

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
              <a href={{route('car')}} class="nav-link"><span><i class="fa fa-car" aria-hidden="true"></i>Cars</span></a>
            </li>

              <li class="nav-item dropdown">
              <a href={{route('bookcar')}} class="nav-link"><span><i class="fa fa-car" aria-hidden="true"></i>Booked Cars</span></a>
              </li>

          

            </ul>

            <ul id="nav-list" class="nav navbar-nav ml-auto">
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="fa fa-cog" aria-hidden="true"></i><span>Settings</span></a>
            </li></ul>
      </div>
    </div>
  </nav>
  
   <div class="container-fluid">
  <form id="" method="post" action="/car" enctype="multipart/form-data">

  {{ csrf_field() }}
  <div class="form-row">
    
     <div class="col-md-6 mb-3">
      <div class="len">
       <label for="validationDefault03">Name Of Car </label>
      <input name="car_name"  type="text" class="form-control" id="car_name" required>
  </div>
</div>
<div class="col-md-6 mb-3">
      <label for="validationDefault01">Plate Number</label>
      <input name="plateno" type="text" class="form-control" id="plateno" value="" required placeholder="MH.16 etc.">
    </div>
     <div class="col-md-6 mb-3">
      <div class="len">
       <label for="validationDefault03">No. of seats </label>
      <input name="seatno" type="number" class="form-control" id="seatno" required>
  </div>
</div>
<div class="col-md-6 mb-3">
      <label for="validationDefault01">Price per Km</label>
      <input name="price" type="number" class="form-control" id="price" value="" required>
    </div>
     <div class="col-md-6 mb-3">
      <div class="len">
       <label for="validationDefault03">Model Name </label>
      <input name="modelno" type="text" class="form-control" id="modelno" required>
  </div>
</div>
    <div class="col-md-6 mb-3">
      <label for="validationDefault01">Transmission</label>
      <input name="transmission" type="text" class="form-control" id="transmission" value="" required placeholder="Auto/Manual">
    </div>
     <div class="col-md-6 mb-3">
      <div class="len">
       <label for="validationDefault03">Fuel </label>
      <input name="fuel" type="text" class="form-control" id="fuel" required placeholder="Petrol/Diesel">

  </div>
</div>
<div class="col-md-6 mb-3">
      <label for="validationDefault01">Description</label>
      <input name="desc" type="text" class="form-control" id="desc" value="" required>
    </div>

   


  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="myfile">Select a Image:</label>
<input type="file" id="myfile" name="myfile">
    </div>
</div>
 <div class="vertical-center" style="text-align: center;">
  <button class="btn btn-primary" type="submit">Submit form</button></div>
</form>
</div>

  <div class="container-fluid">
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
      <th scope="col">active</th>
      <td scope="col">Created at</td>
      <td scope="col">Updated at</td>
    </tr>
  </thead>
  <tbody>
    <tr>
    @forelse($carList as $car)
      <td>{{$car->car_id}}</td>
      <td>{{$car->car_unique_id}}</td>
      <td>{{$car->car_name}}</td>
      <td>{{$car->plate_no}}</td>
      <td>{{$car->seat_no}}</td>
      
      <td>{{$car->price_km}}</td>
      <td>{{$car->model_name}}</td>
      <td>{{$car->transmission}}</td>
      <td>{{$car->fuel}}</td>
      <td>{{$car->description}}</td>
      <td>{{$car->is_active}}</td>
      <td>{{$car->created_at}}</td>
      <td>{{$car->updated_at}}</td>
      <!-- <td><i class="fa fa-file-image-o" aria-hidden="true"></i></td>
      <td><i class="fa fa-pencil-square-o" aria-hidden="true"></i><i class="fa fa-trash-o" aria-hidden="true"></i></td> -->
    </tr>
    
    @empty
        <p>No car</p>
    @endforelse
  </tbody>
</table>
  </div>

  <script src="js/jquery-3.5.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

</body>
</html>