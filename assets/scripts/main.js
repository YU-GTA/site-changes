function openTab(evt, tabName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(tabName).style.display = "grid";
  evt.currentTarget.className += " active";
}

var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function () {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}

document.getElementById("defaultOpen").click();

function start() {
  var colbut = document.getElementById("colbut");
  colbut.addEventListener("click", toggle);
};

function toggle() {
  var collapse = document.getElementById("collapsetab");
  var colbut = document.getElementById("colbut");
  collapse.classList.toggle("collapse");
  colbut.innerText = colbut.textContent == 'Read More' ? colbut.innerText = colbut.textContent = 'Read Less' : colbut.innerText = colbut.textContent.textContent = 'Read More';
};

start();