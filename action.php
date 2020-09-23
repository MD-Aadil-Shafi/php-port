<?php
include 'db.php';

class userAction extends Database{
    
    public function insert_record(){
        $name = mysqli_real_escape_string($this->con, $_POST['name']);
        
        $email = mysqli_real_escape_string($this->con, $_POST['email']);
        
        $msg = mysqli_real_escape_string($this->con, $_POST['msg']);
        
        $sql = "insert into portregister (name, email, msg)values('$name','$email','$msg')";
        
        $query = mysqli_query($this->con, $sql);
        
        if($query){
            $this->msgAlert('bg-success', 'Message sent successfully');
        }else{
            $this->msgAlert('bg-danger', 'Failed to send message');
        }
    }
    
    public function msgAlert($class, $message){
        echo '<div class="msg_class '.$class.' alert-dismissible"> &times '.$message.'</div>';
    }
}
$obj = new userAction;

if(isset($_POST['submit'])){
    $obj->insert_record();
}
?>
