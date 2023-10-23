<html>
    <body>
    <?php
        echo "prepared by Sarvaiya Ronak"; echo"<br> <br>";
        $cnn = mysqli_connect('localhost', 'root');
        if(! $cnn ){
            die('Could not connect: ' .mysqli_error());
        }
        mysqli_select_db( $cnn,'mall');
        $sql="SELECT * FROM customer";
        echo "<table border='6' cellspacing='5'>";
        echo "<tr>
            <td>Customer No</td>
            <td>Customer Name</td>
            <td>Items Purchased</td>
            <td>Mobile number</td>
        </tr>";
        $result = mysqli_query($cnn,$sql);
        if($result->num_rows>0)
        {
            while($row = mysqli_fetch_array ($result,MYSQLI_ASSOC))
            {
                $cust_no=$row["custo_no"];
                $cust_name=$row["custo_name"];
                $item_purchase=$row["custo_purchase"];
                $mob_no=$row["mob_no"];
                echo "<tr>
                        <td>$cust_no</td>
                        <td>$cust_name</td>
                        <td>$item_purchase</td>
                        <td>$mob_no</td>
                    </tr>";
            }
            $result->free();
            mysqli_close($cnn);
        }
    ?>
</body>
</html>
