<?php
// Database connection

$servername = "localhost";
$username = "root";
$password = "";
$dbname ="bonafide";

$conn = new mysqli($servername, $username, $password, $dbname);


// Assuming you have already connected to your database
// $conn = mysqli_connect("your_host", "your_username", "your_password", "your_database");

// Check connection
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}


// Fetch student information (replace with your actual SQL query)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $_POST["reg_number"]; // Assuming login is the user identifier
    $query = "SELECT * FROM student WHERE roll_no = '$login'";
    $result = mysqli_query($conn, $query);


if ($result->num_rows > 0) {
    // Fetch data
    $row = $result->fetch_assoc();

    // Include TCPDF library
    ob_start();
    require('tcpdf/tcpdf.php');

    // Create PDF document
    $pdf = new TCPDF('P','mm','A4');
    



    

   
    $pdf->AddPage();
    
    $pdf->SetFont('times', 'B', 12);



    $content = "<!DOCTYPE html>
    <html>
    <head>
        <title>Bonafide Certificate</title>
        <style>
            body {
                font-family: 'Arial', sans-serif;
            }
    
            h2 {
                max-width: 600px;
                margin: 20px auto;
                padding: 20px;
                border: 2px solid #333;
                border-radius: 10px;
            }
    
            h2 {
                text-align: center;
                margin-bottom: 20px;
            }
    
            p {
                text-align: justify;
            }
    
           
        </style>
    </head>
    <body>
    
        
                <h2>Bonafide Certificate</h2>
            
    
            
                <p>This is to certify that <strong>John Doe</strong>, with student ID <strong>12345</strong>, is a bonafide student of <strong>XYZ University</strong> enrolled in the <strong>Computer Science</strong> program.</p>
    
                <p>This certificate is issued on <strong><?php echo date('Y-m-d'); ?></strong> and is valid for the academic year <strong>2024-2025</strong>.</p>
            
    
           
    
    </body>
    </html>
    
    ";

    $pdf->writeHTML($content, true, false, true, false, '');

    // Output the PDF as inline
    $pdf->Output('bonafide_certificate.pdf', 'I');
} else {
    echo "Register Number is wrong.Please type valid Register Number ";
}


// Close the database connection
$conn->close();
}
?>
