<?php
    $roomPriceSql = mysqli_query($connection, "SELECT * FROM room_prices WHERE roomId = '$roomId'");