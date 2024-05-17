const d = new Date();

var DATE = String(d.getDate()) + '/' + String(d.getMonth()+1) + '/' + String(d.getFullYear());

var TIME = d.toLocaleString("es-CL",

  {
    hour: "numeric",

    minute: "numeric",

    hour12: false
  }

);

 console.log(DATE);

 console.log(TIME);

var dateTime = DATE + ', ' + TIME;

document.getElementById("blogDate").value = dateTime;