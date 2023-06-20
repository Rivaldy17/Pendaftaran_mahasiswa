<?php 
function setting(){

    $CB = DB::connection();
    $row = $CB->table('setting')->where('id_setting','1')->first();
    
    return $row;
    
}
function alert_sudah_login($message) {
      
    // Display the alert box 
    echo "<script>alert('$message');
    window.location='home';
    </script>";
    
}
function alert_contact($message) {
      
    // Display the alert box 
    echo "<script>alert('$message');
    window.history.back()
    </script>";
}