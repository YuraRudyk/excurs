NodeList.prototype.map = Array.prototype.map;
NodeList.prototype.forEach = Array.prototype.forEach;

var lviv_ex = document.querySelectorAll(".lviv");
var bus_ex = document.querySelectorAll(".bus");

var lviv_name = [], 
     bus_name = [];

for(var i=0; i<lviv_ex.length; i++) 
{
    lviv_name[i] = lviv_ex[i].querySelectorAll(".name_ex")[0].innerHTML;
};

for(var i=0; i<bus_ex.length; i++) 
{
    bus_name[i] = bus_ex[i].querySelectorAll(".name_ex")[0].innerHTML;
};

var select_ex = "Оберіть екскурсію";
var ex_by_lviv = document.querySelectorAll(".lviv_ex")[0].innerHTML;
var ex_by_bus = document.querySelectorAll(".bus_ex")[0].innerHTML;

var lviv_option, bus_option;

for(var i=0; i<lviv_name.length; i++) 
{
    lviv_option = lviv_option + "<option value=" + "'" + lviv_name[i] + "'" + ">" + lviv_name[i] + "</option>"
};

for(var i=0; i<bus_name.length; i++) 
{
    bus_option = bus_option + "<option value=" + "'" + bus_name[i] + "'" + ">" + bus_name[i] + "</option>"
};

document.querySelectorAll(".form-control")[2].innerHTML = document.querySelectorAll(".form-control")[2].innerHTML +"<optgroup label="+ "'" + ex_by_lviv +"'" + ">" + lviv_option + "</optgroup>" + " <optgroup label="+ "'" + ex_by_bus +"'" +">" + bus_option + "</optgroup>";
