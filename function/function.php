<?php
include ("login.php");
include("db.php");

function register() {
    global $DbConnection;

    if (isset($_POST['register'])) {
        $f_name = mysqli_real_escape_string($DbConnection, $_POST['fname']);
        $l_name = mysqli_real_escape_string($DbConnection, $_POST['lname']);
        $country = mysqli_real_escape_string($DbConnection, $_POST['country']);
        $passw = MD5($_POST['passw']);
        $dofb = $_POST['bday'];
        $role = $_POST['role'];
        $email = mysqli_real_escape_string($DbConnection, $_POST['email']);
        $get_email = mysqli_query($DbConnection,"select email from USERS where email = '$email'");
        $check_mail = mysqli_num_rows($get_email);

        if ($check_mail==1) {
            $html = "<script>alert('This email already exists')</script>";
            echo $html;
            exit();
        }
        if (isset($passw)){
            if (strlen($passw)<=6) {
                echo "<script>alert('Password too short')</script>";

                exit();
            }
        }
        else {
            echo "<script>alert('Password needed')</script>";

            exit();
        }
        /*if ($role=='Author'){
            $admin_data = "INSERT INTO Admins (username, password) VALUES ('$email', $passw)";
            $insert_admin_data = mysqli_query($conn, $admin_data);
        }*/

        $data = "INSERT INTO USERS (firstname, lastname, email, country, dofBirth, password, role) VALUES ('$f_name', '$l_name', '$email', '$country', '$role', ('$passw'), '$dofb')";
        $insert_data = mysqli_query($DbConnection, $data);

        if ($insert_data) {
            header( "refresh:2;url=../index.php" );
            echo "<script>alert('Your registration was successful')</script>";
            flush();
            exit();
        }
    }
}



function get_adventure() {
    global $DbConnection;
    $adventure = "SELECT * FROM adventures ORDER BY date LIMIT 5 ";
    $get_adventure = mysqli_query($DbConnection, $adventure);
    while($row = mysqli_fetch_array($get_adventure)){
        $adv_title= $row['title'];
        $adv_id = $row['adID'];
        echo "<li><a href='adventures.php?adventure=$adv_id'>$adv_title</a></li>";
    }
}

function full_adventure(){
    global $DbConnection;
    if(isset($_GET['adventure'])){
        $id = $_GET['adventure'];
        $advent= "SELECT * FROM adventures WHERE adID = '$id'";
        $run_advent = mysqli_query($DbConnection, $advent);

        while ($row = mysqli_fetch_array($run_advent)){
            $event_title = $row['title'];
            $event_author = $row['adv_writer'];
            $event_country = $row['country'];
            $event_date = $row['date'];
            $event = $row['adventure'];
            $photo = $row['image_folder'];
            echo "<div id='full_adventure'>
<p><h2>$event_title </h2></p>
 <p><div class='media - body'>
                        <h4 class='media - heading'>Wanderblog
                            <small>$event_date</small>
                        </h4>
                </div></p>
<p>$event</p>
<p><h4>$event</h4></p>
</div>";
        }

    }
}

function adventure_images(){
    global $DbConnection;
    if(isset($_GET['adventure'])){
        $id = $_GET['adventure'];
        $advent= "SELECT * FROM Adventures WHERE adID = '$id'";
        $run_advent = mysqli_query($DbConnection, $advent);

        while ($row = mysqli_fetch_array($run_advent)){
            $photo = $row['image_folder'];
        }
        $dirname = $photo;
        $files = glob("$dirname*.*");
        for ($i=0; $i<count($files); $i++) {
            $image = $files[$i];
            $supported_file = array(
                'gif',
                'jpg',
                'jpeg',
                'png'
            );
            $ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));
            if (in_array($ext, $supported_file)) {
                echo '
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="'.$image.'" alt="">
                    </a>

                </div>';
            }
            else {
                continue;
            }
        }

    }

}


function comment(){
    global $DbConnection;
    $html ="";
    $adv_id = $_GET['adventure'];
    $save_comment = "SELECT * FROM comments WHERE adID='$adv_id'";
    $read_comment = mysqli_query($DbConnection, $save_comment);
    while ($row = mysqli_fetch_array($read_comment)){
        $name = $row ['userID'];
        $story = $row['comment'];
        $date = $row['date'];
        $d_name = "SELECT firstname FROM users WHERE userID = '$name'";
        $r_name = mysqli_query($DbConnection, $d_name);
        $p_name = mysqli_fetch_assoc($r_name);
        $real_name =$p_name['name'];
        $html .=<<<EOT
<div class ="comment">
<div id = "name">$real_name wrote</div>
<div id = "raw_comment">$story</div>
</div>
EOT;
    }
    return $html;
}

function get_adventures() {
    global $DbConnection;
    $adventure = "SELECT * FROM adventures ORDER BY date";
    $get_adventure = mysqli_query($DbConnection, $adventure);
    while($row = mysqli_fetch_array($get_adventure)){
        $adv_title= $row['title'];
        $adv_id = $row['adID'];
        echo "
        <p>$adv_title</p>
            <li> <a class='btn btn-primary' href='adventures.php?adventure=$adv_id'>Read More <i class='fa fa-angle-right'></i></a>
            </li>";

        }
}

function search(){
    global $DbConnection;
    $html = ' ';
    if (isset($_GET['search'])){
        $result = filter_var($_GET['wondasearch'], FILTER_SANITIZE_STRING);
        $d_result = "SELECT * FROM USERS WHERE name LIKE LOWER ('%$result%') OR surname LIKE LOWER ('%$result%')";
        $r_result = mysqli_query($DbConnection, $d_result);
        $search_count = mysqli_num_rows($r_result);
        if (!$search_count==0){
            while ($row = mysqli_fetch_array($r_result)){
                $name = $row['name'];
                $lname = $row['surname'];
                $full_name = $name . ' ' . $lname;
                $html .=<<<EOT
EOT;
            }
        }
        else{
            echo "NO search result for the keywords entered";
        }


    }
}

function get_authors (){
    global $DbConnection;

    $author = "SELECT * FROM users WHERE role = 'author' ORDER BY name";
    $d_author = mysqli_query($DbConnection, $author);
    while($row = mysqli_fetch_array($d_author)){
        $author_name= $row['name'];
        $author_l_name = $row['surname'];
        $full_name = $author_name . ' ' . $author_l_name;
        $author_id = $row['userID'];
        $author_story = "SELECT * FROM adventures WHERE userID='$author_id'";
        $run_author_story = mysqli_query($DbConnection, $author_story);
        $data_author = mysqli_fetch_assoc($run_author_story);
        $story_title = $data_author['title'];
        echo "<li><a href='user.php?author=$author_id'>$full_name wrote $story_title</a></li>";
    }
}

function user_info (){

    global $DbConnection;
    $value = '';
    $author_id = $_GET['author'];
    $author = "SELECT * FROM users WHERE userID = '$author_id'";
    $d_author = mysqli_query($DbConnection, $author);
    while($row = mysqli_fetch_array($d_author)){
        $author_name= $row['name'];
        $author_l_name = $row['surname'];
        $full_name = $author_name . ' ' . $author_l_name;
        $author_email= $row['email'];
        $author_country=$row['nationality'];
        $author_doB = $row['birthday'];
        $author_story = "SELECT * FROM adventures WHERE userID='$author_id'";
        $run_author_story = mysqli_query($DbConnection, $author_story);
        $amount = mysqli_num_rows($run_author_story);
        while ($data_author = mysqli_fetch_assoc($run_author_story)){
            $story_title = $data_author['title'];
        }
        $value .=<<<EOT
<div class = "facts">
Name: $full_name
Email: $author_email
Country: $author_country
Date of Birth: $author_doB
He has written $amount adventures
</div>
EOT;
    }
    return $value;
}


function getUserInfo (){
    global $DbConnection;;
    $value = '';
    $author_id = $_GET['id'];
    $author = "SELECT * FROM users WHERE userID = '$author_id'";
    $d_author = mysqli_query($DbConnection, $author);
    while($row = mysqli_fetch_array($d_author)){
        $author_name= ucfirst($row['name']);
        $author_email= $row['email'];
        $author_country=$row['country'];
        $role = $row['role'];
        $author_story = "SELECT * FROM adventures WHERE userID='$author_id'";
        $run_author_story = mysqli_query($DbConnection, $author_story);
        $amount = mysqli_num_rows($run_author_story);
        $value .=<<<EOT
<div class = "facts">
<p>Name: $author_name</p>
<p>Email: $author_email</p>
<p>Country: $author_country</p>
<p>Role: $role </p>
<p>Adventures ($amount) </p>
</div>
EOT;
        if ($role == 'Author'){
            $value .=<<<EOT
<p><a href='adventureform.php'>click here to create an adventure</a> </p>;
EOT;
        }
    }
    return $value;
}