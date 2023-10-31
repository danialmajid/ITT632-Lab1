<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Biodata</title>
    <link rel="stylesheet" href="styles-desktop.css" media="screen and (min-width: 769px)">
    <link rel="stylesheet" href="styles-mobile.css" media="screen and (max-width: 768px)">
</head>
<body>
    <?php require('action.php'); ?>
    <div class="container">
        <header>
            <h1><img src="<?php echo $images ?>" width="300" height="400"></h1>
            <h1>My Name is</h1>
            <h1><?php echo $name ?></h1>
        </header>
        <div class="info">
            <div class="center">
                <h2>Personal Details</h2>
                <div class="personal-details">
                <table>
                   <tr> <td> IC: </td> <td> <?php echo $ic ?> </td> </td> </tr>
                   <tr> <td> Nationality: </td> <td> <?php echo $nationality ?> </tr>
                   <tr> <td> Gender: </td> <td> <?php echo $gender ?> </tr>
                   <tr> <td> Date of Birth: </td> <td> <?php echo $dateofbirth ?> </tr>
                   <tr> <td> Age: </td> <td> <?php echo $age ?> </tr>
                   <tr> <td> Address: </td> <td> <?php echo $address ?> </tr>
                   <tr> <td> Language Spoken: </td> <td> <?php echo $language ?> </tr>
                   <tr> <td> Email: </td> <td> <?php echo $email ?> </tr>
                   <tr> <td> Hobbies: </td> <td> <?php echo $hobbies ?> </tr>
                   <tr> <td> Favourite Team: </td> <td><?php echo $team ?> </tr>
                   </table>
                </div>
                
            </div>
        </div>
    </div>
</body>
</html>