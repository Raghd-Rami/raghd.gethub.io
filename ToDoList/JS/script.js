let addToDoButton = document.getElementById('button');
let listContainor = document.getElementById('list-conrainor');
let inputField =  document.getElementById('input-box');

addToDoButton.addEventListener('click', function(){
    var paragraph = document.createElement('li')
    paragraph.innerText = inputField.value;
    listContainor.appendChild(paragraph);
    inputField.value = ""; //after u click Add the field will be empty
    paragraph.addEventListener('click', function(){
        paragraph.style.textDecoration = "line-through";   
    })
    paragraph.addEventListener('dblclick', function(){
        paragraph.removeChild(paragraph) = "line-through";   
    })
    
    })
