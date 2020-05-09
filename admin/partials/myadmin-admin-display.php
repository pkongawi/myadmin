<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       www.patrickkongawi.com/blog
 * @since      1.0.0
 *
 * @package    Myadmin
 * @subpackage Myadmin/admin/partials
 */
    $json_feed_url = 'https://jsonplaceholder.typicode.com/users/';
    $json_feed = wp_remote_get($json_feed_url);
    $json_results = json_decode($json_feed['body'], true);
//  var_dump($json_results);
?>

<script>
    
        

    
</script>


<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>


<h2><?php esc_attr_e( 'Users', 'wp_admin_style' ); ?></h2>

<table>
<tr>
    
    <td><table class="form-table">
    <tr>
        <th class="row-title"><?php esc_attr_e( 'Names', 'wp_admin_style' ); ?></th>
    <td>	
    <?php for( $i = 0; $i < count($json_results); $i++ ) 
    { echo '<tr valign="top"><td scope="row"><a href="#" class="users"  onclick="getUsers(this.id);"  id="'.$json_results[$i]["id"].'">' . $json_results[$i]["name"] . '</a></td></tr>' ; } ?>
    </td>
    </tr>
    </table>
    </td>

<td>
<table class="widefat" id="myData">

</table>

<br class="clear" />

</td>

</tr>
</table>


