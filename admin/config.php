<?php
                 $conn = mysqli_connect('localhost','root','','onlineexam');

                    if(!$conn){
                        die("connecetion:failed to connect".mysqli_connect_error());
                    }

?>