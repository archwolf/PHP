<?php
    $name ="Gosho";
    $phNumber ="0882-321-423";
    $age = 24;
    $address = "Hadji Dimitar"
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Information Table</title>
    <style>    
        table{
            width:610px;
        }
        table,td{
            border: 1px solid black;
            width:300px;
            text-align:right;
        }
        table td:first-child{
            background:#ff9c00;
            font-weight:bold;
            text-align:left;
            border: 1px solid black;
        }
        
    </style>
</head>
<body>
    <table> 
        <tr>
            <td>Name</td>
            <td><?php echo($name); ?></td>
        </tr>
        <tr>
            <td>Phone Number</td>
            <td><?php echo $phNumber; ?></td>
        </tr>
        <tr>
            <td>Age</td>
            <td><?php echo $age; ?></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo $address; ?></td>
        </tr>
    </table>
</body>
</html>
