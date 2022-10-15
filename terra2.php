<html>
    <body>
        <table align="center" border="3" style="width:600px; line-height:40px;">
        <tr>
            <th colspan="4"><h2>Job details</h2></th>
</tr>
            <tr>
                <th>Name</th>
                <th>Company</th>
                <th>Role</th>
                <th>Contact</th>
                <th>Email</th>
            </tr>

<?php
            $conn = mysqli_connect('localhost','root','','nbyula');
            $sql = "SELECT * FROM registration2";
            $result = $conn-> query($sql);

            if ($result->num_rows > 0){
                while  ($row = $result-> fetch_assoc()){
                    echo "<tr>
                        <td>" . $row ["Name"] . "</td>
                        <td>" .$row["Company"] . "</td>
                        <td>" .$row["Role"] . "</td>
                        <td>" .$row["Contact"] . "</td>
                        <td>" .$row["Email"] . "</td>
                        </tr>
                        ";
                } 
            }
            else {
                echo "No Results";
            }
            $conn-> close();
            ?>
               </table>


    </body>
</html>