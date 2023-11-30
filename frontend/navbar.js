var htmlPages = [
    "main",
    "course_review_form",
    "register",
    "login",
    "logout",


];

function createNavbar(){
    var nav = document.getElementsByClassName("navbar")[0]
    console.log(nav)
    for (var i in htmlPages){
        var li = document.createElement("li")
        var name = htmlPages[i];
        var ref = name + ".html";
        var tag = document.createElement("a");
        tag.setAttribute("href",ref);
        tag.innerHTML = name;
        li.appendChild(tag);
        nav.appendChild(li);
    } 
};

