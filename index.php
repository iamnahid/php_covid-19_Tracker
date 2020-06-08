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
        <h1 >Covid-19 Tracker</h1>
    </div> <br><br><br>
    <div class="container" style="text-align:center;">
        <h1>Bangladesh</h1>
        <a href="historical.php">BD Hhistorical Data last 30 Days</a>
        <table class="table">
            <thead class="thead">            
                <tr>
                    <th>Total Cases</th>
                    <th>Total Deaths</th>
                    <th>Total Recovered</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($dataAll as $key1 => $value1) {
                  
                    if($value1['country'] == 'Bangladesh')
                    {
                    ?>
                <tr>
                    <td style="color: grey;"><?=$value1['cases'];  ?> </td>
                    <td style="color: red;"><?=$value1['deaths'];?></td>
                    <td style="color: lightgreen;"><?=$value1['recovered'];?></td>
                </tr>

                    <?php }
            } ?>
            </tbody>
        </table> <br>
        <table class="table">
            <thead class="thead">            
                <tr>
                    <th>Cases (Today)</th>
                    <th>Deaths (Today)</th>
                    <th>Recovered (Today)</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($dataAll as $key1 => $value1) {
                    // $increase = $value[$days_count]['confirmed'] - $value[$days_count_prev]['confirmed'] ;
                    if($value1['country'] == 'Bangladesh')
                    {
                    ?>
                <tr>
                    <td style="color: grey;"><?=$value1['todayCases'];  ?> </td>
                    <td style="color: red;"><?=$value1['todayDeaths'];?></td>
                    <td style="color: lightgreen;"><?=$value1['todayRecovered'];?></td>
                </tr>

                    <?php }
            } ?>
            </tbody>
        </table>

    </div> <br> <br>

    <div class="container" style="text-align:center;">
        <h1>World Wide Country Data</h1>
        <table class="table">
            <thead class="thead">            
                <tr>
                    <th>Countries</th>
                    <th>Confirmed</th>
                    <th>Recovered</th>
                    <th>Deaths</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($dataAll as $key => $value) {
                    // $increase = $value[$days_count]['confirmed'] - $value[$days_count_prev]['confirmed'] ;?>
                <tr>
                    <td style="color: lightblue;"><?=$value['country'];?></td>
                    <td style="color: grey;"><?=$value['cases'];  ?> </td>
                    <td style="color: green;"><?=$value['recovered'];?></td>
                    <td style="color: red;"><?=$value['deaths'];?></td>
                </tr>

                <?php } ?>
            </tbody>
        </table>


    </div>
</body>
</html>