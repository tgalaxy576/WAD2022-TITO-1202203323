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

<br>

  <div class = "container style="text-align: center; padding-top: 0.5cm;">
     <div class="class text-center mb-5 text-primary">
       <h3 style="text-align: center;color:black">
        <p>
            Thank You TITO_1202203323 for Reserving
        </p> 
       </h3>
       <h6 style="text-align: center;color:black">
         <p>
           Please double check your reservation details!
         </p>
       </h6>   

<table class="table">
  <thead>
    <tr>
      <th scope="col">
          <b>
              Booking Number
          </b>
      </th>
      <th scope="col">
          <b>
              Name
          </b>
      </th>
      <th scope="col">
          <b>
              Check-in
          </b>
      </th>
      <th scope="col">
          <b>
                Check-out
          </b>
      </th>

      <th scope="col">
          <b>
                Car Type
          </b>
      </th>

      <th scope="col">
          <b>
                Phone Number
          </b>
      </th>

      <th scope="col">
          <b>
                Service(s)
          </b>
      </th>

      <th scope="col">
          <b>
                Total Price
          </b>
      </th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">
          <?php 
          echo rand();
          ?></th>
      <td>Tito Galaxy WIJAYA</td>
      <td>15-10-2022 12:00:00</td>
      <td>16-10-2022 12:00:00</td>
      <td>Wuling AIR EV</td>
      <td>08212345678</td>
      <td>- Health protocol
        <br>
        - Fuel Filled
      </td>
      <td>Rp. 999.999</td>
    </tr>

  </tbody>
</table>

<div class="d-flex justify-content-center">
    <p class="text-center fixed-bottom bg-light">Created by TITO GALAXY WIJAYA_1202203323</p>
</div>

</body>
</html>