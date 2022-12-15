let save=document.getElementById("save_Appointment");
let update=document.getElementById("update_Appointment");

    update.style.display="none";

function remplir_form(id){
    save.style.display="none";
    update.style.display="block";
    document.appointmentForm.date.value=document.getElementById(id).getAttribute("date");
    document.appointmentForm.description.value=document.getElementById(id).getAttribute("description");
    document.appointmentForm.cp.value=document.getElementById(id).getAttribute("codePatient");
    document.appointmentForm.cs.value=document.getElementById(id).getAttribute("codeSession");
    document.appointmentForm.idHide.value=id;
}
    