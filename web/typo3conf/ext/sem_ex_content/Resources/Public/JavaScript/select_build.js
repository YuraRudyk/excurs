console.log('hello');

NodeList.prototype.map = Array.prototype.map;
NodeList.prototype.forEach = Array.prototype.forEach;

var lviv_ex = document.querySelectorAll(".lviv");
var bus_ex = document.querySelectorAll(".bus");

var lviv_name = [], 
     bus_name = [];

for(var i=0; i<lviv_ex.length; i++) 
    {
        lviv_name[i] = lviv_ex[i].querySelectorAll(".name_ex")[0].innerHTML;
        console.log(lviv_name[i]);
    };
document.querySelectorAll(".form-control")[2][5] = "<option value=\"Почаївська лавра\">Почаївська лавра</option>";
console.log(document.querySelectorAll(".form-control")[2][5]);