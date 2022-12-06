
function editSession(id, title, dateDebut, dateFin, maxNumber, codeDoctor) {
  console.log(
    id +
      "  " +
      title +
      "  " +
      dateDebut +
      "  " +
      dateFin +
      "   " +
      maxNumber +
      "   " +
      codeDoctor
  );

  document.getElementById("dateDebut1").value = dateDebut;
  document.getElementById("dateFin1").value = dateFin;
  document.getElementById("title1").value = title;
  document.getElementById("maxNumber1").value = maxNumber;
  document.getElementById("codeDoctor1").value = codeDoctor;
  document.getElementById("hidden").innerHTML = `<input type="hidden" name="session_id" value="${id}">`;
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
    window.location.href = "../scriptPhp/script.php?session_id=" + id;
  }
} 