
var btn1 = document.getElementById("patient");


function viewPatient(firstName, lastName, email, Numerotalephone,city,gender,cin,birthDay,icon){
  input=document.getElementsByTagName("input");
  for (i = 0; i < input.length; i++) {
    input[i].setAttribute("disabled", "");
  }
  document.getElementById("firstName").value = firstName;
  document.getElementById("lastName").value = lastName;
  document.getElementById("email").value = email;
  document.getElementById("password").value = password;
  document.getElementById("NumeroTalephone").value = Numerotalephone;
  document.getElementById("city").value = city;
  document.getElementById("cin").value = cin;
  document.getElementById("birthDay").value = birthDay;
  document.getElementById("gender").value = gender;
  document.getElementById(
    "img"
  ).innerHTML = `<img src="${icon}" height="200" width="130">`;
  btn1.innerHTML = ``;
  document.getElementById("remove").innerHTML=``;
  // Ouvrir Modal form
  $("#ModalPatient").modal("show");

}


function editPatient(id, firstName, lastName, email, Numerotalephone,city,cin,gender,icon) {
    // console.log(
    //   id +
    //     "  " +
    //     firstName +
    //     "  " +
    //     lastName +
    //     "  " +
    //     dateFin +
    //     "   " +
    //     maxNumber +
    //     "   " +
    //     codeDoctor
    // );
    input=document.getElementsByTagName("input");
    for (i = 0; i < input.length; i++) {
      input[i].removeAttribute("disabled");
    }
    document.getElementById("firstName1").value = firstName;
    document.getElementById("lastName1").value = lastName;
    document.getElementById("email1").value = email;
    document.getElementById("password1").value = password;
    document.getElementById("NumeroTalephone1").value = Numerotalephone;
    document.getElementById("city1").value = city;
    document.getElementById("cin1").value = cin;
    document.getElementById("gender").value = gender;
    document.getElementById("hidden").innerHTML = `<input type="hidden" name="user_id" value="${id}">`;
    document.getElementById(
      "hidden_img"
    ).innerHTML = `<input type="hidden" name="img" value="${icon}">`;
    document.getElementById(
      "img"
    ).innerHTML = `<img src="${icon}" height="200" width="130">`;
    document.getElementById("remove").innerHTML=`      <label for="exampleInputEmail1" class="form-label">icon</label>
    <input type="text" class="form-control" id="icon" name="icon">`;
    // Ouvrir Modal form
    $("#ModalPatient").modal("show");
  }
  
  function updateSession() {
    // Fermer Modal form
    $("#ModalPatient").modal("hide");
    Swal.fire("Good job!", "You clicked the button!", "success");
    // Refresh tasks
    // afficher();
  }
  
  function deleteSession(id) {
    if (confirm("Are you sure you want to Delete?")) {
      window.location.href = "/gestion-hospital/Classes/Patient/PatientController.php?patient_id=" + id;
    }
  } 