<?php
                                $fetch_sql = "SELECT * FROM `emails`";
                                $fetch_query = mysqli_query($conn,$sql);
                                while($row =  mysqli_fetch_assoc($fetch_query)){
                                    print_r($row);
                                };
                               
                                ?> 
