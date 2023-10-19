<?php
    $roomSql = mysqli_query($connection, "SELECT * FROM room_type WHERE propertyId = '$propertyId'");