<?php
    $propertyImages = mysqli_query($connection, "SELECT * FROM propertyimages WHERE properyId = '$propertyId'");