<?php
// Github Webhook deployment Code

// Swap the path to the directory of our git project
$path = "/var/www/html/lunchApi"; 
chdir( $path );

// Now run the git stuf
exec( 'git fetch --all' );
exec( 'git reset --hard origin/master' );

// Probably done so just return a fun true response
header( 'Content-type: application/json' );
$response = array( "status" => "success" );
echo json_encode( $response );

?>
