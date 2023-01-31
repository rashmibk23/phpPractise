// ------------- Left Container Tabs (Top Tabs)---------------

function openLtabContent(evt, cityName) {
  // Declare all variables
  var i, leftTabContent, leftTabBtn;

  // Get all elements with class="leftTabContent" and hide them
  leftTabContent = document.getElementsByClassName("leftTabContent");
  for (i = 0; i < leftTabContent.length; i++) {
    leftTabContent[i].style.display = "none";
  }

  // Get all elements with class="leftTabBtn" and remove the class "active"
  leftTabBtn = document.getElementsByClassName("leftTabBtn");
  for (i = 0; i < leftTabBtn.length; i++) {
    leftTabBtn[i].className = leftTabBtn[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
document.getElementById("defaultOpen1").click();  



// ------------- Left Container Tabs (Inside Elements tab)----------------

  function openFieldcontent(evt, cityName) {
    // Declare all variables
    var i, elementsTabcontent, tabBtn;
  
    // Get all elements with class="elementsTabcontent" and hide them
    elementsTabcontent = document.getElementsByClassName("elementsTabcontent");
    for (i = 0; i < elementsTabcontent.length; i++) {
      elementsTabcontent[i].style.display = "none";
    }
  
    // Get all elements with class="tabBtn" and remove the class "active"
    tabBtn = document.getElementsByClassName("tabBtn");
    for (i = 0; i < tabBtn.length; i++) {
      tabBtn[i].className = tabBtn[i].className.replace(" active", "");
    }
  
    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
  }
  document.getElementById("defaultOpen2").click();

  
  
  // ------------ Right Container Tabs --------------

  function openRtabContent(evt, cityName) {
    // Declare all variables
    var i, rightTabContent, rightTabBtn;
  
    // Get all elements with class="rightTabContent" and hide them
    rightTabContent = document.getElementsByClassName("rightTabContent");
    for (i = 0; i < rightTabContent.length; i++) {
      rightTabContent[i].style.display = "none";
    }
  
    // Get all elements with class="rightTabBtn" and remove the class "active"
    rightTabBtn = document.getElementsByClassName("rightTabBtn");
    for (i = 0; i < rightTabBtn.length; i++) {
      rightTabBtn[i].className = rightTabBtn[i].className.replace(" active", "");
    }
  
    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
  }
  document.getElementById("defaultOpen3").click();


// Toggle Content
  function togglePropertiesContent() {
    var x = document.getElementById("form-text1");
    if(x.style.display == "none") {
      x.style.display = "block";
    } else {
      x.style.display = "none"
    }
  }

  function toggleSubmissionContent() {
    var x = document.getElementById("form-text2");
    if(x.style.display == "none") {
      x.style.display = "block";
    } else {
      x.style.display = "none"
    }
  }


  // Drag and Drop
  function allowDrop(ev) {
    ev.preventDefault();
  }

  function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
  }
  
  function drop(ev, el) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
    ev.target.appendChild(document.getElementById(data));
  }