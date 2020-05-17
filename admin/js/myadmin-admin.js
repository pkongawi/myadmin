(function( $ ) {
	'use strict';

	/**
	 * All of the code for your admin-facing JavaScript source
	 * should reside in this file.
	 *
	 * Note: It has been assumed you will write jQuery code here, so the
	 * $ function reference has been prepared for usage within the scope
	 * of this function.
	 *
	 * This enables you to define handlers, for when the DOM is ready:
	 *
	 * $(function() {
	 *
	 * });
	 *
	 * When the window is loaded:
	 *
	 * $( window ).load(function() {
	 *
	 * });
	 *
	 * ...and/or other possibilities.
	 *
	 * Ideally, it is not considered best practise to attach more than a
	 * single DOM-ready or window-load handler for a particular page.
	 * Although scripts in the WordPress core, Plugins and Themes may be
	 * practising this, we should strive to set a better example in our own work.
	 */
    
    $(function getUsers(clicked_id){
        
        
            const myID = parseInt(clicked_id); 
            const url = 'https://jsonplaceholder.typicode.com/users/'+ myID;
       
        fetch(url)
        .then(response => response.json())
        .then((data) => {
            let output = `
            <tr valign="top">
            <th class="row-title">ID</th>
            <th class="row-title">Name</th>
            <th class="row-title">Email</th>
            </tr>
            
            <tr valign="top">
            <td>${data.id}</td>
            <td>${data.name}</td>
            <td>${data.email}</td>
            </tr>`;
            document.getElementById('myData').innerHTML = output;
        })
        
    });
    

})( jQuery );

    

    
