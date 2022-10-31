<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  
    <ul class="nav justify-content-center bg-black">

      <li class="nav-item">
        <a class="nav-link te text-muted" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-muted" href="#">Booking</a>
      </li>
    </ul>
    <h3 class="text-center">Rent Your Car Now!</h3>

    <div class="modal-body row">
            <div class="col-md-6">
                <img src="air.jpeg" class="img-thumbnail mt-5 border-0" alt="CRV">
            </div>
            <div class="col-md-6">
              <br>
                <!-- Name -->
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Name</label>
                    <input class="form-control" style="width: 90% ;" type="text" value="TITO GALAXY WIJAYA 1202203323" aria-label="Wuling AIR EV" disabled readonly>
                  </div>   
                <!-- Book Date -->                
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Book Date</label>                    
                    <input type="date" class="form-control" style="width: 90%" id="exampleFormControlInput1" placeholder="dd/mm/yyyy">
                  </div>
                <!-- Start Time -->
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Start Time</label>                    
                  <input type="time" class="form-control" style="width: 90%" id="exampleFormControlInput1" placeholder="dd/mm/yyyy">
                </div>
                <!-- Duration (days) -->
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Duration (Days)</label>
                  <input type="email" class="form-control" style="width: 90%" id="exampleFormControlInput1" placeholder="">
                </div>
                <!-- Car Type -->
                <label for="exampleFormControlInput1" class="form-label">Car Type</label>
                <!-- <select class="form-select" style="width: 90%;" aria-label="Default select example"> -->
                  <option selected>Wuling AIR EV</option>
                  <option value="1">Hyundai STARGAZER</option>
                  <option value="2">HRV RS Turbo</option>
                </select> <br>
                <!-- Phone Number -->
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Phone Number</label>
                  <!-- <input type="email" class="form-control" style="width: 90%" id="exampleFormControlInput1" placeholder=""> -->
                </div>
                <!-- Add Service -->
                <label for="exampleFormControlInput1" class="form-label">Add Service</label>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Health protocol / RP25.000
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                  <label class="form-check-label" for="flexCheckChecked">
                    Driver / RP100.000
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                  <label class="form-check-label" for="flexCheckChecked">
                    Fuel Filled / RP250.000
                  </label>
                </div>
                <br>
                <!-- Book -->
                <form action="mybooking.php" method="POST">
                          <button type="submit" class="btn btn-success" style="padding-left: 3%; padding-right: 3%; width: 90%">
                          <a class="nav-link active text-light" href="tito_mybooking.php">
                                BOOK
                            </a>
                        </button>
                        </form>
      </div>             
   </div>
        
          <div class="d-flex justify-content-center">
            <p class="text-center fixed-bottom bg-light">Created by TITO GALAXY WIJAYA_1202203323</p>
          </div>
  </body>
</html>