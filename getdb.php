
    <?php
        $servername = "INSERT_SERVER_NAME";
        $username = "INSERT_USERNAME";
        $password = "INSERT_PASSWORD";
        $dbname = "INSERT_DB_NAME";
        
        $conn = mysqli_connect($servername, $username, $password, $dbname);


        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }



        //testing
        $sql = "SELECT * FROM sentences";
        $result = mysqli_query($conn, $sql);
        $myarray = array();
        if (mysqli_num_rows($result) > 0)
        {
            while($row = mysqli_fetch_array($result))
            {
                $myarray[] = $row[0];

            }
        }


        

        mysqli_close($conn);
        
        //test
       // $phpvar = ["Foo", "Var", "Bar"];
       // echo json_encode($phpvar);
       //print_r($myarray);        //show all array data

        echo json_encode($myarray);

        exit;
        


 
        
        
        
        
        ?>

 


