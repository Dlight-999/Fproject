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
            <option value="1">Economy class</option>
            <option value="2">Business class</option>
          </select>
        </div>
        
        <div class="radio-btn">
        <input type="radio" class="btn" name="check" checked="checked" /><span
          >One Way</span
        >
        <input type="radio" class="btn" name="check" checked="checked" /><span
          >Multi-city</span
        >
        <input type="radio" class="btn" name="check" checked="checked" /><span
          >Multi-city</span
        >
      </div>
        <div class="input-grp">
          <button type="button" class="btn btn-primary flight">
            Show flight
          </button>
        </div>
      </div>
    </div>