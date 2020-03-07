<?php require_once("includes/header.php");?>
<?php

if($session->is_signed_in()) {

redirect("index.php");

}

if(isset($_POST['submit'])){
$username = trim($_POST['username']);
$password = trim($_POST['password']);
    
$user_found = User::verify_user($username, $password);    
    
    
    
 if($user_found) {
 
 $session->login($user_found);
redirect("index.php");
 }else{
 
 $the_message = "Your password or username are incorrect";
 
 }
 
 }else{
$the_message = "";
 $username = "";
 $password = "";  


}


?>




<div class="col-md-4 col-md-offset-3">
   <h4 class="bg-danger"><?php echo $the_message;?></h4>
    <form action="" method="post">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control"value="<?php echo htmlentities($username);?>" name="username">
        </div>
        <div class="form-group">
            <label for="username">Password</label>
            <input type="password" value="<?php echo htmlentities($password);?>" class="form-control" name="password">
        </div>
        
        <div class="form-group">
            <input type="submit" class="btn btn-danger" value="submit" name="submit">
        </div>
    </form>
    
    
</div>