let nip=["NCC","NSS"]

let act_head = document.getElementById("act-head-drop")
let activity = document.getElementById("activity-drop");

category.forEach(function addCategory(item)
{
    let option = document.createElement("option");
    option.text = item;
    option.value = item;
});

act_head.onchange = function(){
    activity.innerHTML = "<option></option>"
    if(this.value == "nip"){
        addToActivity(nip);
    }
}