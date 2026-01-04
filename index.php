<?php

// Name: Md. Rakib Khan
// Designation: PHP Developer, Web Designer
// Contact me: https://web.facebook.com/mark.rakib/
// Website: https://horje.com
// This Script written by Horje Admin

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Age Calculator Tools - Horje</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<meta name="description" content="Free Online Age Calculator Tool. Calculator Your Age Free. We have counted Your Age in the Right way.">
<meta property="og:title" content="Age Calculator Tools - Horje" />
<meta name="keywords" content="free age calcultor, online age calculator, age calculator tool">
<meta property="og:description" content="Free Online Age Calculator Tool. Calculator Your Age Free. We have counted Your Age in the Right way." />
<meta property="og:url" content="https://agecalculator.horje.com/" />

<meta property="og:image" content="https://agecalculator.horje.com/images/site/apps/agecalculator/agecalculator.png" />
<meta property="twitter:title" content="Age Calculator Tools" />
<meta name="twitter:description" content="Free Online Age Calculator Tool. Calculator Your Age Free. We have counted Your Age in the Right way." />
<meta name="twitter:image" content="https://agecalculator.horje.com/images/site/apps/agecalculator/agecalculator.png" />
<meta property="article:published_time" content="2025-12-20 01:09:46" />
<meta property="article:modified_time" content="2025-12-20 06:51:48" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="icon" type="image/png" sizes="32x32" href="https://dnscheck.horje.com/favico.png">
  <style>
      /* style.css */
.spinner {
    border: 4px solid rgba(0, 0, 0, 0.1);
    border-left-color: #333;
    border-radius: 50%;
    width: 40px;
    height: 40px;
    animation: spin 1s linear infinite;
    display: none; /* Initially hidden */
    margin: 10px auto;
}

@keyframes spin {
    to { transform: rotate(360deg); }
}

    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="https://agecalculator.horje.com/">Horje.com</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="https://agecalculator.horje.com/">Home</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron">
  <div class="container text-center">
    <h1>Age Calculator Tools</h1>      
    <p>Check Your Date of Birth</p>
  </div>
</div>
  
<div class="container-fluid bg-3 text-center">    
  <h3>Select Your Birthday</h3>
  
  
<p>
<form action="" method="post">
<?php
// Get current year for the year dropdown range
$currentYear = date('Y');

// Year dropdown
echo '<label for="birth_year">Year:</label><br>';
echo '<select name="year" id="myInput" aria-label="Select Year">';
echo '<option value="">Select Year</option>';
for ($year = $currentYear; $year >= $currentYear - 100; $year--) { // Example: 100 years back
    echo '<option value="' . $year . '">' . $year . '</option>';
}
echo '</select><br>';

// Month dropdown
$months = [
    1 => 'January', 2 => 'February', 3 => 'March', 4 => 'April',
    5 => 'May', 6 => 'June', 7 => 'July', 8 => 'August',
    9 => 'September', 10 => 'October', 11 => 'November', 12 => 'December'
];
echo '<label for="birth_month">Month:</label><br>';
echo '<select name="month" id="myInput2" aria-label="Select Month">';
echo '<option value="">Select Month</option>';
foreach ($months as $num => $name) {
    echo '<option value="' . $num . '">' . $name . '</option>';
}
echo '</select><br>';

// Day dropdown
echo '<label for="birth_day">Day:</label><br>';
echo '<select name="day" id="myInput3" aria-label="Select Day">';
echo '<option value="">Select Day</option>';
for ($day = 1; $day <= 31; $day++) { // Days 1-31 (adjust with JavaScript for month/year changes)
    echo '<option value="' . $day . '">' . $day . '</option>';
}
echo '</select><br>';
?>
<br>
    <button id="myButton" class="btn btn-primary">Age Calculator</button>
</form>    
</p>

<?php


// fetch.php
if (isset($_POST['year'])) {
    $receivedData = htmlspecialchars($_POST['year']);
    // Simulate some processing time
    sleep(2); 
    
// Start

if (!empty($receivedData)) {



function calculate_age($dob_string) {
    // Create DateTime objects for the date of birth and today's date
    $birthdate = new DateTime($dob_string);
    $today = new DateTime('today');

    // Calculate the difference between the two dates, resulting in a DateInterval object
    $age_interval = $today->diff($birthdate);

    // Return the difference as an associative array
    return [
        'years' => $age_interval->y,
        'months' => $age_interval->m,
        'days' => $age_interval->d
    ];
}



// Example Usage:
$year = $_POST['year'];
$month = $_POST['month'];
$day = $_POST['day'];

$date_of_birth = ''.$year.'-'.$month.'-'.$day.''; // Date format can be flexible (YYYY-MM-DD recommended)
$age = calculate_age($date_of_birth);

// Output the result
echo '<div class="alert alert-success">';
printf('<strong>Your age: %d years, %d months, %d days</strong>', $age['years'], $age['months'], $age['days']);
echo '</div>';
// Example output might be: Your age: 35 years, 8 months, 14 days





} else {
    echo '<h3>
    <p>Field Cannot empty !</p>
  </h3>';    
}


    
}


?>

    
</div><br>

<br><br>

<footer class="container-fluid text-center">
  <p><a href="https://agecalculator.horje.com/">Horje Tools</a> &copy; <?php echo date('Y'); ?></p>
</footer>
</body>
</html>
