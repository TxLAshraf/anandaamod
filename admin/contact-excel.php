<?php
require 'config.php';
$output = '';
if(isset($_POST["contact_exported_excel"])){
    $sql = "SELECT * FROM contact ORDER BY id DESC";
    $result = mysqli_query ($conn,$sql);
    if(mysqli_num_rows($result) > 0){
        $output .= '
            <table class="table" border="1">
            <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Number</th>
            <th>Subject</th>
            <th>Message</th>
            </tr>
        ';
        while($row = mysqli_fetch_array($result)){
            $output .= '
                <tr>
                <td>'.$row["Id"].'</td>
                <td>'.$row["name"].'</td>
                <td>'.$row["email"].'</td>
                <td>'.$row["phone"].'</td>
                <td>'.$row["subject"].'</td>
                <td>'.$row["message"].'</td>
                </tr>
            ';
        }
        $output .= '</table>';
        header("Content-Type: application/xls");
        header("Content-Disposition: attachment; filename=contact.xls");
        echo $output;
    }
}

?>