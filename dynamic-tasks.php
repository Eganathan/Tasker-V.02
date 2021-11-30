<?php 
                        $sql = "SELECT * FROM tasks WHERE user_id = '$curr_user_id' ";
                          $result = $conn->query($sql);

                      
                          if($result == TRUE){
                            $counts = mysqli_num_rows($result);
                            

                              if($counts > 0){
                                  while($row = $result->fetch_assoc()){
                                    $task = $row["task_text"];
                                    $t_id = $row["task_id"];

                                    ?>  <tr class="list-item-tr">
                                          <th scope="row"></th>
                                          <td class="col-9"><span class="task-text-item"><?php echo($task);?></span></td>
                                          <td class="col-3 text-right"> 
                                                 
                                            <!--<a href="../php-files/update-task.php?id=<?php echo $t_id?> "></a>-->
                                              
                                            
                                                
                                                <a href="../php-files/del-task.php?id=<?php echo $t_id?> ">
                                                  <button type="button" class="btn btn-danger">Del</button>
                                                </a>
                                            </td> 
                                        </tr> 
                                    <?php
                                  }
                              }
                          }
                      ?>