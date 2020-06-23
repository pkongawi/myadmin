<?php

class Users {
    // Call the remote URL, process the result, and always return an array

    public static function retrieve() {

        // This is our source URL
        $url = 'https://jsonplaceholder.typicode.com/users/';

        // Get the remote data
        $response = wp_remote_get($url);

        // Error checking
        if (is_array($response) && !is_wp_error($response)) {

            // Extract the body of the response
            $body = wp_remote_retrieve_body($response);

            // If we got a blank body, return an empty array
            if ($body === '') return [];

            // We are expecting a JSON here, want an associative array
            $users = json_decode($body, true);

            // Catch a decode problem or non-array result
            if (is_null($users) || !is_array($users)) return [];

            // We could further process the array here, but we should have an array of users now
            // ...

            return $users;

        } else {
            // Something broke
            // Return an empty array, we could also add error reporting
            return [];
        }
    }
}

// Somewhere else, but normally would not be sitting in global space
$data = Users::retrieve();

?>