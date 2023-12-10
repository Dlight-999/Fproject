<?php 
    include('../user/bootstrap_headder.php');
    include('../user/navbar.php')
?>

<link rel="stylesheet" href="../css/book.css">
</head>
<body>
<div class="booking-form-box">
      
      <div class="booking-form">
        <label for="">Full Name</label>
        <input type="text" class="form-control" placeholder="Full Name" />
        <div class="input-grp">
          <label for="">Email</label>
          <input type="email" class="form-control select-date" placeholder="Enter email" />
        </div>
        <div class="input-grp">
          <label for="">Phone</label>
          <input type="Number" maxlength="10" placeholder="Phone number" class="form-control select-date" />
        </div>
        <div class="input-grp">
          <label for="">Checkin Date</label>
          <input type="date" class="form-control select-date" />
        </div>

        <div class="input-grp">
          <label for="">Checkout Date</label>
          <input type="date" class="form-control select-date" />
        </div>

        <div class="input-grp">
          <label for="">Select Room Type</label>
          <select class="custom-select">
            <option value="1">Standard</option>
            <option value="2">Delux</option>
            <option value="2">Suite</option>
          </select>
        </div>

        <div class="input-grp">
          <label for="">Select Bed Type</label>
          <select class="custom-select">
            <option value="1">Single</option>
            <option value="2">Double</option>
            <option value="">Twin</option>
          </select>
        </div>
        
        
      </div>
        <div class="input-grp">
          <button type="button" class="btn btn-primary flight">
            Book Room
          </button>
        </div>
      </div>
    </div>