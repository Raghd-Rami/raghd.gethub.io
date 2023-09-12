const inputBox = document.getElementById("input-box");
const listContainor = document.getElementById(list-conrainor)
function addTask(){
    if(inputBox.value ===''){
        alert("You must add a task!")
        // so here it says that if the button is clicked but there is no value in the inputbox, send an alert
    }

    else{
        let li = document.createElement("li") //for every added task it'll create an li in the ul
        li.innerHTML = inputBox.value; //the contents of the created li will be the text that ws inputed in the inputBox
        listContainor.appendChild(li); //where will the new added li be displayed.
        let span = document.createElement("span");
        span.innerHTML = "\u00d7" //cross icon
        li.appendChild(span); 
    }

    //to clean the add task field once task is aded to the list
    inputBox.value = ""; 
    saveData(); //saving the updated content in the server
    
    }

    //j.s for the once task is clicked
    listContainor.addEventListener("click", finction(x) {
            if (e.target.tagName === "LI") {
                e.target.classList.toggle("checked");
            }
            else (e.target.tagName === "span"){
                e.target.parentElement.remove();
            }
        } ,false);

function saveData(){
    localStorage.saveItem("data", listContainor.innerHTML)
}

//diaplayin the stored data even after closing the tab
function showTask(){
    listContainor.innerHTML = localStorage.getItem("data");
}

showTask();