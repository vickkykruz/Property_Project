<?php
    $propertyDetailsSql = mysqli_query($connection, "SELECT * FROM propertydetail WHERE propertyId = '$propertyId'");
    $fetchDetail = $propertyDetailsSql->fetch_assoc();