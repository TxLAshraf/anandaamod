<?php
require 'config.php';
$output = '';
if(isset($_POST["booking_exported_excel"])){
    $sql = "SELECT * FROM booking ORDER BY id DESC";
    $result = mysqli_query ($conn,$sql);
    if(mysqli_num_rows($result) > 0){
        $output .= '
            <table class="table" border="1">
            <tr>
                <th>ID</th>
                <th>Nme</th>
                <th>Contact</th>
                <th>Email</th>
                <th>Arrival</th>
                <th>Leaving</th>
            </tr>
        ';
        while($row = mysqli_fetch_array($result)){
            $output .= '
                <tr>
                <td>'.$row["Id"].'</td>
                <td>'.$row["name"].'</td>
                <td>'.$row["phone"].'</td>
                <td>'.$row["email"].'</td>
                <td>'.$row["arrival"].'</td>
                <td>'.$row["leaving"].'</td>
                </tr>
            ';
        }
        $output .= '</table>';
        header("Content-Type: application/xls");
        header("Content-Disposition: attachment; filename=booking.xls");
        echo $output;
    }
}

?>