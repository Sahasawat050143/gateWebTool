<?php
    function router($routes){
        $routing = array(
            '/'      => '/tool_organization/index.php',
            '/asedrch' => 'localhost/tool_organization/search.php',
            '/customer' => '/tool_organization/customer.php',
            '/employee' => 'localhost/tool_organization/employee.php'
        );
        
        // Iterate through a given list of routes.
        foreach ($routing as $path => $content) {
            if ($path == $routes) {
                echo $content;
                return;
            }
        }

        // This can only be reached if none of the routes matched the path.
        echo 'Sorry! Page not found';
    }
?>