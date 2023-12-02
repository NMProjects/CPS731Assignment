var htmlPages = [
    "main",
    "course_review_form",
    "prof_review_form",
    "course_review_form",
    "view_prof",
    "register",
    "login",
    "logout",
];

function createNavbar() {
    var nav = document.getElementsByClassName("navbar")[0];
    console.log(nav);
    for (var i in htmlPages) {
        var buttons = document.createElement("button");
        var name = htmlPages[i];
        var ref = name + ".html";
        var tag = document.createElement("a");
        tag.setAttribute("href", ref);
        tag.innerHTML = name;
        buttons.appendChild(tag);
        nav.appendChild(buttons);
    }
}
