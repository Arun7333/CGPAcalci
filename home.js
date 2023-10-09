function Submit(){
    let dep=document.getElementById("dep").value;
    let sem=document.getElementById("semester").value;
    localStorage.setItem("input",document.getElementById("semester").value);
    if(dep=="Select your Department"&&sem=="Select your Semester"){
        window.alert("Select the Department and Semester");
    }
    else if(dep=="Select your Department"){
        window.alert("Select the Department");
    }
    else if(sem=="Select your Semester"){
        window.alert("Select the Semester");
    }
}