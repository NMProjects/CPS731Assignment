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
  