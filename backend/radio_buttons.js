function createRadioButtons(divID){

  var radioInputsContainer = document.getElementById(divID);

  for (var i = 1; i <= 10; i++) {
    var radioInput = document.createElement("input");
    radioInput.type = "radio";
    radioInput.id = "radio" + i;
    radioInput.name = divID +"Number";
    radioInput.value = i;

    var label = document.createElement("label");
    label.htmlFor = "radio" + i;
    label.appendChild(document.createTextNode(i));

    radioInputsContainer.appendChild(radioInput);
    radioInputsContainer.appendChild(label);
  }
}
function createGradeDropdown(divID){
  var dropdown = document.getElementById(divID);
  for (var i = 100; i >= 0; i--) {
    o = new Option(i,i)
    dropdown.appendChild(o);
  }
}

  var ontarioUniversities = [
    "University of Toronto",
    "Queen's University",
    "McMaster University",
    "University of Waterloo",
    "University of Western Ontario",
    "York University",
    "Toronto Metropolitan University",
    "Carleton University",
    "University of Ottawa",
    "University of Guelph",
    "Brock University",
    "Wilfrid Laurier University",
    "Lakehead University",
    "Nipissing University",
    "Trent University",
    "Ontario Tech University",
    "Algoma University",
    "Laurentian University"
  ];
  ontarioUniversities.sort();

  function createSchoolDropdown(divID){
    var dropdown = document.getElementById(divID);
    for (var i in ontarioUniversities) {
      console.log(ontarioUniversities[i])
      s = new Option(ontarioUniversities[i],ontarioUniversities[i])
      dropdown.appendChild(s);
    }

}
  