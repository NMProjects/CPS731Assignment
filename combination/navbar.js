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

        buttons.innerText = name;
        await nav.appendChild(buttons);
    }
}

function goLink(link) {
    window.location.href = link;
}
