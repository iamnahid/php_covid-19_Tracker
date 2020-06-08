<?php include('./init.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Covid_19 Tracker</title>

    <!-- CSS -->
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!--JS  -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <!-- Fonts -->
    <script src="https://kit.fontawesome.com/82fb6fe7fe.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="./assets/style.css">
</head>
<body>
    <div class="container-fluid" style="text-align:center;">
        <h1 >Last 90 Days Historical Data</h1>
    </div> <br><br><br>
    
    <div class="container" style="text-align:center;">
        <h1>World Wide Country Data</h1>
        <table class="table">
            <thead class="thead">            
                <tr>
                    <th>Day</th>
                    <th>Date</th>
                    <th>Cases</th>
                    <th>Recovered</th>
                    <th>Deaths</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($dataHS as $key => $value)  {
                    if($key == "Bangladesh")
                    {
                        for ($c; $c !=0; $c--)
                        {
                     ?>
                <tr>
                    <!-- <td style="color: lightblue;"> <pre><?php print_r($value[$c]['date']);?></pre> </td>
                    <td><?=$day_c;?></td> -->
                    <td style="color: grey;"> <?=$c;  ?> </td>
                    <td style="color: grey;"> <?=$value[$c]['date'];  ?> </td>
                    <td style="color: grey;"> <?=$value[$c]['confirmed'];  ?> </td>
                    <td style="color: grey;"> <?=$value[$c]['deaths'];  ?> </td>
                    <td style="color: grey;"> <?=$value[$c]['recovered'];  ?> </td>
                    
                </tr>

                <?php }

                } 
            } ?>
            </tbody>
        </table>


    </div>
</body>
</html>