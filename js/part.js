var usedata;
$.ajax({
type: "GET",
url: "./data/doctors.json",
beforeSend: function (xhr) {
    if (xhr.overrideMimeType) {
    xhr.overrideMimeType("application/json");
    }
},
success: function (data) {
    usedata = data;
    doctor();
},
error: function (abc) {
    alert(abc.status + "오류발생");
},
})


function doctor() {
    var doctorList = "";
    var part = $('.pageTitle').next().attr('id')
    console.log(usedata)
    for (var i in usedata[part]) {
        doctorList += `<li><div class="img"><img src="${usedata[part][i].photo}" alt=""></div>`;
        doctorList += `<div class="info"><strong>${usedata[part][i].name}</strong>`;
        doctorList += `<p>${usedata[part][i].depart}</p>`;
        doctorList += `<div>${usedata[part][i].about}</div></div></li>`
    }
    $('#wrap .doctor').append(`<ul class="dlist">${doctorList}</ul>`)
}


