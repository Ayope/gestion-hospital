modform = document.forms['modalForm']

function func(id, city, speciality, gender){
    modform.id.value = id;
    modform.city.value = city;
    modform.speciality.value = speciality;
    modform.gender.value = gender;
}
