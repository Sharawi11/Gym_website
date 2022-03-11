function validateForm() {
  let x = document.forms["form"]["fname"].value;
  let y = document.forms["form"]["lname"].value;
  let z = document.forms["form"]["phone_number"].value;
  if(x == "") {
    alert("Name must be filled out");
    return false;
  }else if (y == "") {
    alert("Name must be filled out");
    return false;
  }else if (z == "") {
    alert("Name must be filled out");
    return false;
  }
}
