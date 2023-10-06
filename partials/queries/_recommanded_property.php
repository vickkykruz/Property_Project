<?php

$propertySql = mysqli_query($connection, "SELECT * FROM propertyInfo WHERE recommandStatus = 'Yes' ORDER BY id DESC");