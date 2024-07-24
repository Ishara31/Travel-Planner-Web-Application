<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tourist Packages</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
  <style>
    body {
      background-image: url("");
      background-size: cover;
      background-repeat: no-repeat;
      color: #fff;
    }

    .container {
      margin-top: 50px;
    }

    .package-card {
      border: 5px solid;
      padding: 20px;
      margin: 20px;
      background: transparent;
      text-align: center;
      color:black;
    }

    .platinum {
      border-color: #E5E4E2;
    }

    .gold {
      border-color: #FFD700;
    }

    .silver {
      border-color: #C0C0C0;
    }

    .learn-more-btn {
      display: block;
      width: 100%;
      text-align: center;
      margin-top: 10px;
    }

    .book-now-btn {
      margin-top: 20px;
      display: block;
      margin-left: auto;
      margin-right: auto;
      width: 150px;
      
     
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="package-card platinum">
          <h3>Platinum</h3>
          <p>Price: $500</p>
          <p>Includes: Luxury accommodation, guided tours, meals</p>
          <button class="learn-more-btn btn btn-primary" onclick="showDialog('Platinum')">Learn More</button>
        </div>
        <button class="book-now-btn btn btn-success">Book Now</button>
      </div>
      <div class="col-md-4">
        <div class="package-card gold">
          <h3>Gold</h3>
          <p>Price: $300</p>
          <p>Includes: Comfortable accommodation, city tours</p>
          <button class="learn-more-btn btn btn-primary" onclick="showDialog('Gold')">Learn More</button>
        </div>
        <button class="book-now-btn btn btn-success">Book Now</button>
      </div>
      <div class="col-md-4">
        <div class="package-card silver">
          <h3>Silver</h3>
          <p>Price: $150</p>
          <p>Includes: Standard accommodation, local attractions</p>
          <button class="learn-more-btn btn btn-primary" onclick="showDialog('Silver')">Learn More</button>
        </div>
        <button class="book-now-btn btn btn-success">Book Now</button>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS (Optional, for the dialog functionality) -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.min.js"></script>
  <script>
    function showDialog(packageName) {
      alert("More information about " + packageName + " package goes here.");
      // You can replace the alert with a Bootstrap modal for a nicer pop-up dialog.
    }
  </script>
</body>
</html>
