  NodeList.prototype.map = Array.prototype.map;
  NodeList.prototype.forEach = Array.prototype.forEach;

  var all_excursions = document.querySelectorAll(".excursion").map(function(value){return value.parentNode});
  var lviv_excursions = document.querySelectorAll(".lviv").map(function(value){return value.parentNode});
  var bus_excursions = document.querySelectorAll(".bus").map(function(value){return value.parentNode});

  var all_excursions_block = document.querySelectorAll(".excursion");

  var describe_of_excursion = document.querySelectorAll(".excursion_describe")[0];
  var order_excursion = document.querySelectorAll(".order_excursion")[0];

  var nav_lviv = document.querySelectorAll(".input_in_nav_lviv")[0];
  var nav_bus = document.querySelectorAll(".input_in_nav_bus")[0];
  var nav_all = document.querySelectorAll(".input_in_nav_all")[0];
  var nav_reviews = document.querySelectorAll(".input_in_nav_reviews")[0];
  // // var nav_button = document.querySelectorAll(".input_in_nav");
  // // var all_excursions = document.querySelectorAll(".excursion").map(function(value){return value.parentNode});
  // // for(var i=0; i<nav_button.length; i++) {nav_button[i].addEventListener("click", display, true)};

  for(var i=0; i<all_excursions_block.length; i++) {all_excursions_block[i].addEventListener("click", showDescription, true)};
  // document.querySelectorAll(".close_in_ex")[0].addEventListener("click", hideDescription, true);
  // document.querySelectorAll(".close_order_ex")[0].addEventListener("click", hideOrderExcursion, true);
  // document.querySelectorAll(".button_review")[0].addEventListener("click", showOrderExcursion, true);
  nav_lviv.addEventListener("click", display_lviv, true);
  nav_bus.addEventListener("click", display_bus, true);
  nav_all.addEventListener("click", display_all, true);
  nav_reviews.addEventListener("click", display_reviews, true);
  document.querySelectorAll(".lviv_ex")[0].addEventListener("click", display_lviv, true);
  document.querySelectorAll(".bus_ex")[0].addEventListener("click", display_bus, true);
  document.querySelectorAll(".all_ex")[0].addEventListener("click", display_all, true);
  document.querySelectorAll(".reviews")[0].addEventListener("click", display_reviews, true);
  // console.log(document.querySelectorAll(".lviv_ex")[0]);
  bus_excursions.forEach(function(value){value.style.display="none"});

  var in_name_excursion = document.querySelectorAll(".in_name_excursion")[0];
  var main_foto = document.querySelectorAll(".main_foto")[0];
  var smal_foto_0 = document.querySelectorAll(".smal_foto_0")[0];
  var smal_foto_1 = document.querySelectorAll(".smal_foto_1")[0];
  var smal_foto_2 = document.querySelectorAll(".smal_foto_2")[0];
  var smal_foto_3 = document.querySelectorAll(".smal_foto_3")[0];
  var addition_info = document.querySelectorAll(".addition_info")[0];
  var main_description = document.querySelectorAll(".main_description")[0];

  function loadDoc(value) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("test").innerHTML = this.responseText;
      }
    };
    xhttp.open("GET", "index.php?id=1&tx_semexcursion_pi1%5Baction%5D=description&tx_semexcursion_pi1%5Bcontroller%5D=Excursion&cHash=cad12fb6921cfc7eab18136c17ce7596", true);
    xhttp.send();
  }
 
  function showDescription(){
    // describe_of_excursion.style.display = "block";
    // var excursion_var = JSON.parse(window[this.id]);
   
    // in_name_excursion.innerHTML = excursion_var.in_name_excursion;
    // main_foto.style = excursion_var.main_foto;
    // smal_foto_0.style = excursion_var.smal_foto_0;
    // smal_foto_1.style = excursion_var.smal_foto_1;
    // smal_foto_2.style = excursion_var.smal_foto_2;
    // smal_foto_3.style = excursion_var.smal_foto_3;
    // addition_info.innerHTML = excursion_var.addition_info;
    // main_description.innerHTML = excursion_var.main_description;
    loadDoc(this.id);

    // console.log(document.querySelectorAll(".test")[0].innerHTML);
    // document.querySelectorAll(".test")[0].innerHTML = this.id;


  }

  function hideDescription(){
    describe_of_excursion.style.display = "none";
  }

  function showOrderExcursion(){
    order_excursion.style.display = "block";
    document.getElementById('order_excursion').value = this.parentNode.parentNode.querySelectorAll('.in_name_excursion')[0].innerHTML;
  }

  function hideOrderExcursion(){
    order_excursion.style.display = "none";
  }

  function display_lviv(){
    all_excursions.forEach(function(value){value.style.display="none"});
    lviv_excursions.forEach(function(value){value.style.display="block"});

    nav_lviv.className="check input_in_nav_lviv input_in_nav";
    nav_bus.className="input_in_nav_lviv input_in_nav";
    nav_all.className="input_in_nav_all input_in_nav";
    nav_reviews.className="input_in_nav_reviews input_in_nav";
  }
  function display_bus(){
    all_excursions.forEach(function(value){value.style.display="none"});
    bus_excursions.forEach(function(value){value.style.display="block"});

    nav_lviv.className="input_in_nav_lviv input_in_nav";
    nav_bus.className="check input_in_nav_lviv input_in_nav";
    nav_all.className="input_in_nav_all input_in_nav";
    nav_reviews.className="input_in_nav_reviews input_in_nav";
  }
  function display_all(){
    all_excursions.forEach(function(value){value.style.display="none"});
    all_excursions.forEach(function(value){value.style.display="block"});

    nav_lviv.className="input_in_nav_lviv input_in_nav";
    nav_bus.className="input_in_nav_lviv input_in_nav";
    nav_all.className=" check input_in_nav_all input_in_nav";
    nav_reviews.className="input_in_nav_reviews input_in_nav";
  }
  function display_reviews(){
    
    nav_lviv.className="input_in_nav_lviv input_in_nav";
    nav_bus.className="input_in_nav_lviv input_in_nav";
    nav_all.className="input_in_nav_all input_in_nav";
    nav_reviews.className="check input_in_nav_reviews input_in_nav";
  }
