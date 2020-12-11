                                                <?php 
                    require_once 'admin/database.php'; 
                    $query = "SELECT * FROM lottery";
                    $result = $conn->query($query); 
                    while($row = $result->fetch_assoc()){?>

                                                <div class="single-lottery">
                                                            
                                                            <h5 class="title"><?php echo $row['LName'];  ?></h5>
                                                            <div class="part-icon">
                                                                <img src="<?php echo "admin/".$row['Limage'];?> " style="height:100%; width:100%;">
                                                            </div>
                                                            <a href="all-lotteries2.php">Play Game</a>
                                                            <div class="draw-time">
                                                                <ul class="date-counter timer" data-date="<?php echo $row["next_draw_date"]; ?> GMT+05:00">
                                                                    <li>
                                                                        <span class="number day">0</span>
                                                                        <span class="text">Day</span>
                                                                    </li>
                                                                    <li>
                                                                        <span class="number hour">0</span>
                                                                        <span class="text">Hour</span>
                                                                    </li>
                                                                    <li>
                                                                        <span class="number minute">0</span>
                                                                        <span class="text">Min</span>
                                                                    </li>
                                                                    <li>
                                                                        <span class="number second">0</span>
                                                                        <span class="text">Sec</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div><?php }  ?>