<?php

require 'dbconfig.php';

class User {

    function checkUser($uid, $oauth_provider, $username,$email) 
	{
        $query = mysql_query("SELECT * FROM `users2` WHERE oauth_uid = '$uid' and oauth_provider = '$oauth_provider'") or die(mysql_error());
        $result = mysql_fetch_array($query);
        if (!empty($result)) {
            # User is already present
        } else {
            #user not present. Insert a new Record
            $query = mysql_query("INSERT INTO `users2` (oauth_provider, oauth_uid, username,email) VALUES ('$oauth_provider', $uid, '$username','$email')") or die(mysql_error());
            $query = mysql_query("SELECT * FROM `users2` WHERE oauth_uid = '$uid' and oauth_provider = '$oauth_provider'");
            $result = mysql_fetch_array($query);
            return $result;
        }
        return $result;
    }

    

}

?>
