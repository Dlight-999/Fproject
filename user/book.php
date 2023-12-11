<?php
include('../config/constants.php');
include('../user/bootstrap_headder.php');
include('../user/navbar.php');

$minimumDate = date('Y-m-d', strtotime('+1 day'));


    $room_type = $_GET['room_type'];
    $sql = "SELECT room_no FROM room WHERE room_type = '$room_type' AND status = 'Available'";
    $result = $conn->query($sql);
$roomNumbers = [];
while ($row = $result->fetch_assoc()) {
    $roomNumbers[] = $row['room_no'];
}
?>

<link rel="stylesheet" href="../css/book.css">
</head>

<body>
    <div class="booking-form-box">
        <form action="" method="post">
            <div class="booking-form">
                <label for="uname">Full Name</label>
                <input type="text" class="form-control" name="uname" placeholder="Full Name" />
                <div class="input-grp">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter email" />
                </div>
                <div class="input-grp">
                    <label for="phone">Phone</label>
                    <input type="Number" maxlength="10" placeholder="Phone number" class="form-control " name="phone" />
                </div>
                <div class="input-grp">
                    <label for="checkin">Checkin Date</label>
                    <input type="date" name="checkin" class="form-control select-date" min="<?php echo $minimumDate; ?>" required />
                </div>
                <div class="input-grp">
                    <label for="checkout">Checkout Date</label>
                    <input type="date" name="checkout" class="form-control select-date" min="<?php echo $minimumDate; ?>" required />
                </div>
                <div class="input-grp">
                    <label for="roomType">Select Room Type</label>
                    <select class="custom-select" name="roomType">
                        <?php
                        if (isset($_GET['room_type'])) {
                            $selectedRoomType = $_GET['room_type'];
                            echo "<option value='$selectedRoomType' selected>$selectedRoomType</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="input-grp">
                    <label for="availableRoom">Select Available Room</label>
                    <select class="custom-select" name="availableRoom">
                    <?php foreach ($roomNumbers as $roomNumber) : ?>
            <option value="<?php echo $roomNumber; ?>"><?php echo $roomNumber; ?></option>
        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="input-grp">
                <input type="submit" class="form-control" value="Book Room" name="submit">
            </div>
        </form>
        <?php
        
        ?>
    </div>
</body>

</html>
