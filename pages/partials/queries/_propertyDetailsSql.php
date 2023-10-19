<?php
    $propertySql = mysqli_query($connection, "SELECT * FROM propertyInfo WHERE id = '$propertyId'");
    $rowDetail = $propertySql->fetch_assoc();