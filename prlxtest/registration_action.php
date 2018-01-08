
        <?php
        if(isset($_POST))
            if(isset($_POST['btnSubmit']))
            {
               $data["firstname"]= $firstname = $_POST['firstname'];
               $data["lastname"]= $lastname= $_POST['lastname'];
               $data["city"]=$city=$_POST['city'];
               $data["cellphone"]=  $phone=$_POST['cellphone'];
            }
            $i=0;
        echo "First name: ".$firstname."<br>";
        echo "Last name: ".$lastname."<br>";
        echo "City: ".$city."<br>";
        echo "Phone Number :".$phone."<br>";
        //to save the data into a text file
        while(true) {
             if(file_exists("lidClients".$i.".txt"))
             {
                 $i++;
             }
             else {
                 file_put_contents("lidClients".$i.".txt", serialize($data));
                 break;
             }
            //to get the data from the text file
            //$data=unserialize("lidClients.txt");
        }
        ?>