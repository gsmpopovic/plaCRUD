// Use DOM manipulation to toggle the display property of the 
// create record form 


//Get a reference to create button 
let createButton = document.getElementById('create-button');
//Get a reference to create form 
let createForm = document.getElementById('create-form');
//Create a boolean to check whether form displaying
let isCreateFormDisplaying = false; 

createButton.onclick = function (){
    if (isCreateFormDisplaying==false){
        // if form is not displaying 

        createForm.style.display='block';
        // access style, access display property,
        // change display property to block; 

        isCreateFormDisplaying = true; 
        // form is displaying
    }

    else{
        createForm.style.display='none';
        // if form is displaying

          // access style, access display property,
        // change display property to none; 

        isCreateFormDisplaying = false;
        // form no longer displaying 
    }

}
// Get a reference to the edit button
let updateButton = document.getElementById("update-button");
// Get a reference to the update form 
let updateForm = document.getElementById("update-form");

// boolean to check whether form is displaying 
let isUpdateFormDisplaying = false; 

// when button clicked, 
updateButton.onclick = function(){
    // if the form is displaying, 
    if (isUpdateFormDisplaying){
        // hide the form, and set bool to false
        updateForm.style.display = 'none';
        isUpdateFormDisplaying = false; 
    }

    else{// if form is not displaying, 
        // display form, and set bool to true 
        updateForm.style.display = 'block';
        isUpdateFormDisplaying = true; 
    }
}
////////////////////////////////////////////////////////////////////

let deleteButton = document.getElementById("delete-button");
let deleteForm = document.getElementById("delete-form");
let isDeleteFormDisplaying = false; 

deleteButton.onclick = function(){

    if(!isDeleteFormDisplaying){
        deleteForm.style.display ="block";
        isDeleteFormDisplaying = true; 
    }

    else{
        deleteForm.style.display="none";
        isDeleteFormDisplaying = false; 
    }

}












///////////////////////////////////////////////////////////////////
// Can also accomplish the same task by using addEvent Listener

// createButton.addEventListener('click', function(){
   
//     if (isCreateFormDisplaying==false){
//         createForm.style.display='block';
//         isCreateFormDisplaying=true; 
//     }
//     else{
//         createForm.style.display='none';
//         isCreateFormDisplaying=false; 
//     }
// });

// in jQuery, $('.class').click( () => {}); // to get an elem by class
// in jQuery, $('#id').click( () => {}); // to get an elem by ID
// $('.class/#id/element')

// Can hide form in jQuery using .toggleClass('hide') where
// hide is a defined class in css that changes the display to none

//Or you can use the .css method to change the property, i.e., 
// .css('display', 'none'), 
// .css('display', 'block')