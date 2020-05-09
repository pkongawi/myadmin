(function( $ ) {
	'use strict';

	/**
	 * All of the code for your public-facing JavaScript source
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

})( jQuery );

var a;  
    $.ajax({
    async: false,
    url: "https://jsonplaceholder.typicode.com/users",
    type: "GET",
    dataType: "JSON",
    data: JSON.stringify({ }),
    success:function(data){
    a = JSON.stringify(data);
  }
      
});
let data = JSON.parse(a);
console.log(data.length);    //will show 10 objects

let col=["Names"]; //create array and put Name
let table = document.createElement("table"); //create table element
let tr = table.insertRow(-1); //create a table row at the end
let th = document.createElement("th");      // create table header
th.innerHTML = col[0];// displays names in the col array
tr.appendChild(th); // appends the child element with table header

for (var i=0;i< data.length ;i++) // loops through all the objects
{
tr = table.insertRow(-1);//create a table row in function

let td1 = document.createElement("td"); //create table data
let a = document.createElement("a");// create a link tag
a.innerHTML=data[i].name;//get all the names from objects
a.href="#";// empty anchor tag
a.id=data[i].id;// get all the ids from ojbect
a.onclick = function click()
{       
document.getElementById("Data").innerHTML="";
let id = event.srcElement.id;// get the id when clicked on
let index = id-1;
let col=["Id","Name","Username","Email","Address"];
let table = document.createElement("table");
table.id="customers"; //create table with id of customers
let tr = table.insertRow(-1);// TABLE ROW.
for (var i = 0; i < col.length; i++) // loop through array of col
{
let th = document.createElement("th");      // TABLE HEADER.
th.innerHTML = col[i];// get all the headers
tr.appendChild(th); // append to all child table rows
}

console.log(data[index].length);
tr = table.insertRow(-1); // create a row

let td2 = document.createElement("td"); // create table data                        
td2.innerHTML=data[index].id;// get ID of user selected
tr.appendChild(td2);  //append it to child element

let td3 = document.createElement("td");// create another table data
td3.innerHTML=data[index].name;// get name of user selected
tr.appendChild(td3);  //append it to child element

let td4 = document.createElement("td");// create another table data
td4.innerHTML=data[index].username; // get username of user selected
tr.appendChild(td4);  // appned it to tr element
  
let td5 = document.createElement("td");// create another table data
td5.innerHTML=data[index].email; // get email of user selected
tr.appendChild(td5);  // appned it to tr element

let td6 = document.createElement("td");// create another table data
                                             td6.innerHTML=data[index].address.street+", "+data[index].address.suite+", "+data[index].address.city+", "+data[index].address.zipcode;
tr.appendChild(td6);  // appned it to tr element
                                             

let divContainer = document.getElementById("Data");
divContainer.appendChild(table);
}
td1.appendChild(a);
tr.appendChild(td1);
                             
}
let divContainer = document.getElementById("myData");
divContainer.innerHTML = "";
divContainer.appendChild(table);
