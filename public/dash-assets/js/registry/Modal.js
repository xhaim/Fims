var nextPartBtn = document.getElementById("btn-next");
var nextPartBtn1 = document.getElementById("btn-next1");
var nextPartBtn2 = document.getElementById("btn-next2");
var nextPartBtn3 = document.getElementById("btn-next3");
var nextPartBtn4 = document.getElementById("btn-next4");

var backPartBtn1 = document.getElementById("btn-back1");
var backPartBtn2 = document.getElementById("btn-back2");
var backPartBtn3 = document.getElementById("btn-back3");
var backPartBtn4 = document.getElementById("btn-back4");
var backPartBtn5 = document.getElementById("btn-back5");


var saveBtn = document.getElementById("btn-save");

var firstModalPart = document.getElementById("first_part");
var secondModalPart = document.getElementById("second_modal_part");
var thirdModalPart = document.getElementById("third_part");
var fourthModalPart = document.getElementById("fourth_part");
var OptionalModalPart1 = document.getElementById("optional_part1");
var OptionalModalPart2 = document.getElementById("optional_part2");

// FIRST PART
nextPartBtn.addEventListener("click", function(){
  firstModalPart.setAttribute("hidden", "hidden");
  secondModalPart.removeAttribute("hidden");
  nextPartBtn.style.display = "none";
  nextPartBtn1.style.display = "inline-flex";
  backPartBtn1.style.display = "inline-flex";
  saveBtn.style.display = "none";
});

// SECOND PART
backPartBtn1.addEventListener("click", function(){
  firstModalPart.removeAttribute("hidden");
  secondModalPart.setAttribute("hidden", "hidden");
  thirdModalPart.setAttribute("hidden", "hidden");
  nextPartBtn.style.display = "inline-flex";
  nextPartBtn1.style.display = "none";
  backPartBtn1.style.display = "none";
  saveBtn.style.display = "none";
});

nextPartBtn1.addEventListener("click", function(){
  secondModalPart.setAttribute("hidden", "hidden");
  thirdModalPart.removeAttribute("hidden");
  nextPartBtn1.style.display = "none";
  nextPartBtn2.style.display = "inline-flex";
  backPartBtn2.style.display = "inline-flex";
  backPartBtn1.style.display = "none";
  saveBtn.style.display = "none";
});

// THIRD PART
backPartBtn2.addEventListener("click", function(){
  secondModalPart.removeAttribute("hidden");
  thirdModalPart.setAttribute("hidden", "hidden");
  nextPartBtn1.style.display = "inline-flex";
  nextPartBtn2.style.display = "none";
  backPartBtn2.style.display = "none";
  backPartBtn1.style.display = "inline-flex";
  saveBtn.style.display = "none";
});

nextPartBtn2.addEventListener("click", function(){
  thirdModalPart.setAttribute("hidden", "hidden");
  fourthModalPart.removeAttribute("hidden");
  nextPartBtn2.style.display = "none";
  nextPartBtn3.style.display = "inline-flex";
  backPartBtn3.style.display = "inline-flex";
  backPartBtn2.style.display = "none";
  saveBtn.style.display = "inline-flex";
});

// FOURTH PART
backPartBtn3.addEventListener("click", function(){
  thirdModalPart.removeAttribute("hidden");
  fourthModalPart.setAttribute("hidden", "hidden");
  nextPartBtn2.style.display = "inline-flex";
  nextPartBtn3.style.display = "none";
  backPartBtn3.style.display = "none";
  backPartBtn2.style.display = "inline-flex";
  saveBtn.style.display = "none";
});

nextPartBtn3.addEventListener("click", function(){
  fourthModalPart.setAttribute("hidden", "hidden");
  OptionalModalPart1.removeAttribute("hidden");
  nextPartBtn3.style.display = "none";
  nextPartBtn4.style.display = "inline-flex";
  backPartBtn4.style.display = "inline-flex";
  backPartBtn3.style.display = "none";
  saveBtn.style.display = "inline-flex";
});

// FIFTH PART
backPartBtn4.addEventListener("click", function(){
  fourthModalPart.removeAttribute("hidden");
  OptionalModalPart1.setAttribute("hidden", "hidden");
  nextPartBtn3.style.display = "inline-flex";
  nextPartBtn4.style.display = "none";
  backPartBtn4.style.display = "none";
  backPartBtn3.style.display = "inline-flex";
  saveBtn.style.display = "inline-flex";
});

nextPartBtn4.addEventListener("click", function(){
  OptionalModalPart1.setAttribute("hidden", "hidden");
  OptionalModalPart2.removeAttribute("hidden");
  nextPartBtn4.style.display = "none";
  backPartBtn5.style.display = "inline-flex";
  backPartBtn4.style.display = "none";
  saveBtn.style.display = "inline-flex";
});

// SIXTH PART
backPartBtn5.addEventListener("click", function(){
  OptionalModalPart1.removeAttribute("hidden");
  OptionalModalPart2.setAttribute("hidden", "hidden");
  nextPartBtn4.style.display = "inline-flex";
  backPartBtn5.style.display = "none";
  backPartBtn4.style.display = "inline-flex";
  saveBtn.style.display = "inline-flex";
});