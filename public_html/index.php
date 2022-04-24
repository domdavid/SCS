<?php

// Display errors in production mode
//error_log($_SERVER['REQUEST_URI']." is the REQUEST URI",0);
// let's get started
// Router will catch all of the incoming parameters that index.php is passing it. Such as what controllers to load and views.
require '../assignments/application/router.php';

?>
