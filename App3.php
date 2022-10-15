<html>
    <body>
        <table align="center" border="3" style="width:600px; line-height:40px;">
        <tr>
            <th colspan="4"><h2>Job details</h2></th>
</tr>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Location</th>
                <th>Contact</th>
                <th>Deadline</th>
                <th>Email</th>
            </tr>

<?php
            $conn = mysqli_connect('localhost','root','','nbyula');
            $sql = "SELECT * FROM registration1";
            $result = $conn-> query($sql);

            if ($result->num_rows > 0){
                while  ($row = $result-> fetch_assoc()){
                    echo "<tr>
                    <td>" . $row["Title"] . "</td>
                        <td>" . $row ["Description"] . "</td>
                        <td>" .$row["Location"] . "</td>
                        <td>" .$row["Contact"] . "</td>
                        <td>" .$row["Deadline"] . "</td>
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
              <h1> Apply Here</h1>
               <h3 ><a href="app4 navy5.html"> 1 : Click Here</a></h3>
              

    </body>
</html>

     