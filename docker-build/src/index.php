<?php
    // Attempt MySQL server connection. Assuming you are running MySQL
    include 'conn.inc';
        
    // Check connection
    if($conn === false)
    {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    else
    {
    
?>
        <html>
        <head><title>Welcome to Registration</title></head>
        <body>
        <div>
        <form method="post" action="process.php">
        <table>
        <tr>
        <td>Firstname</td>
        <td><input type="text" name="firstname" /></td>
        </tr>
        <tr>
        <td>Lastname</td>
        <td><input type="text" name="lastname" /></td>
        </tr>
        <tr>
        <td>Email</td>
        <td><input type="text" name="email" /></td>
        </tr>
        <tr>
        <td>&nbsp;</td>
        <td><input type="submit" text="Submit" /></td>
        </tr>
        </table>
        </form>
        </div>
        <div>
<?php
        $sql = "SELECT * FROM registration_tbl";
        if($result = mysqli_query($conn, $sql))
        {
            if(mysqli_num_rows($result) > 0)
            {
                echo "<table>";
                    echo "<tr>";
                        echo "<th>ID</th>";
                        echo "<th>Firstname</th>";
                        echo "<th>Lastname</th>";
                        echo "<th>Email</th>";
                    echo "</tr>";
                while($row = mysqli_fetch_array($result))
                {
                    echo "<tr>";
                        echo "<td>" . $row['reg_id'] . "</td>";
                        echo "<td>" . $row['first_name'] . "</td>";
                        echo "<td>" . $row['last_name'] . "</td>";
                        echo "<td>" . $row['email'] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
                // Free result set
                mysqli_free_result($result);
            } 
            else
            {
                echo "No registrations were found.";
            }
            $conn->close();
        }
?>
</div>
</body>
</html>
<?php
}
?>