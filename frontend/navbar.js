var htmlPages = [
    "main",
    "course_review_form",
    "prof_review_form",
    "university_review_form",
    "view_course_review",
    "view_prof",
    "view_uni_review",
    "register",
    "login",
    "logout",
];

var niceNames = [
    "Home",
    "Review a course",
    "Review a prof",
    "Review a university",
    "View Courses",
    "View Professors",
    "View Universities",
    "Register",
    "Login",
    "Logout",
];
async function createNavbar() {
    var nav = document.getElementsByClassName("navbar")[0];
    console.log(nav);
    for (var i in htmlPages) {
        var buttons = document.createElement("button");
        var name = htmlPages[i];
        var ref = name + ".html";
        buttons.onclick = (function (ref) {
            return function () {
                goLink(ref);
            };
        })(ref);

        buttons.innerText = niceNames[i];
        await nav.appendChild(buttons);
    }
}

function goLink(link) {
    window.location.href = link;
}
