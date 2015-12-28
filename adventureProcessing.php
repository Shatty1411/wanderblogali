 <?php
            include ("function/login.php");
            include ("function/db.php");
           global $DbConnection;;
            if (isset($_POST['create'])) {
                $title = $_POST['InputTitle'];
                $ad_country = $_POST['InputCountry'];
                $story = $_POST['InputAdventure'];
                $user_email = $_SESSION['username'];
                $id = mysqli_query($DbConnection, "SELECT * from users WHERE email='$user_email'");
                while ($run_id = mysqli_fetch_assoc($id)) {
                    $user_id = $run_id['userID'];
                    echo $user_id;
                    $authorname = $run_id['name'];

                    $data = "INSERT INTO adventures( adventure, adv_writer, country, date, userID, title)
        VALUES ('$story', '$authorname', '$ad_country', NOW, '$user_id' ,'$title')";

                    $run_data = mysqli_query($DbConnection, $data);
                    if (false===$run_data){
                     printf("error: %s\n", mysqli_error($DbConnection));
                    }
                    else{
                        echo "done";
                    }
                    /*if ($run_data) {
                        echo "<script>alert('Your adventure was successfully created')</script>";
                        echo "<script>window.open('../profile.php', '_self')</script>";

                    }*/

                }
            }
                    /*if (isset($_FILES['files'])) {
                        foreach ($_FILES['files']['tmp_name'] as $key => $tmp_name) {
                            $file_name = $key . $_FILES['files']['name'][$key];
                            $file_size = $_FILES['files']['size'][$key];
                            $file_tmp = $_FILES['files']['tmp_name'][$key];
                            $file_type = $_FILES['files']['type'][$key];
                            $desired_dir = "../images/".$title."/";
                            if (is_dir($desired_dir) == false) {
                                mkdir("$desired_dir", 0755);
                            }// Create directory if it does not exist
                            if (is_dir("$desired_dir/" . $file_name)==false ) {
                                move_uploaded_file($file_tmp, $desired_dir . $file_name);
                            }

                        }

                    }
                    $data = "INSERT INTO adventures( story, adventureTitle, adventureCountry, adventureAuthor, date, adventurePhotoName, userID)
        VALUES ('$story', '$title', '$ad_country', '$authorname', '$ad_date', '$desired_dir', '$user_id')";
                    $run_data = mysqli_query($conn, $data);

                    if ( $run_data) {
                        echo "<script>alert('Your adventure was successfully created')</script>";
                        echo "<script>window.open('../profile.php', '_self')</script>";

                    }
                }
            }