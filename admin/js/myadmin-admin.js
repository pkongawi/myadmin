const API_BASE = "https://jsonplaceholder.typicode.com";

document.addEventListener(
    "click",
    (event) => {
      if (event.target && event.target.getAttribute("data-user-id"))
        getUsers(event.target.getAttribute("data-user-id"));
    },
    false
  );

function getUsers(id){
               
        fetch(API_BASE + "/users/" + id)
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
        
    };