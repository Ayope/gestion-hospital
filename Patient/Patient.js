
function editSession(id, firstName, lastName, email, password, Numerotalephone,city,cin,gender,icon) {
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
    // Ouvrir Modal form
    $("#ModalSession").modal("show");
  }
  
  function updateSession() {
    // Fermer Modal form
    $("#ModalSession").modal("hide");
    Swal.fire("Good job!", "You clicked the button!", "success");
    // Refresh tasks
    // afficher();
  }
  
  function deleteSession(id) {
    if (confirm("Are you sure you want to Delete?")) {
      window.location.href = "/gestion-hospital/Session/SessionController.php?session_id=" + id;
    }
  } 