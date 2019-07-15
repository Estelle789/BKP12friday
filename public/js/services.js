function fmd() {
  var boarding = document.getElementById("boarding");
  if (boarding.checked == true) {
    document.getElementById("boardingg").style.display = "block";
    console.log("boarding checked");
  } else {
    document.getElementById("boardingg").style.display = "none";
  }
}

function highSessionX() {
  var hs = document.getElementById("hs");
  if (hs.checked == true) {
    document.getElementById("highsession").style.display = "block";
  } else {
    document.getElementById("highsession").style.display = "none";
  }
}

function catBoardingX() {
  var catB = document.getElementById("catboarding");
  if (catB.checked == true) {
    document.getElementById("catb").style.display = "block";
  } else {
    document.getElementById("catb").style.display = "none";
  }
}
function dogprice() {
  var z = document.getElementById("dogpricecheck");
  if (z.checked == true) {
    document.getElementById("dogpricing").style.display = "block";
  } else {
    document.getElementById("dogpricing").style.display = "none";
  }
}
function highSessioncatX() {
  var t = document.getElementById("hscat");
  if (t.checked == true) {
    document.getElementById("highsessioncat").style.display = "block";
  } else {
    document.getElementById("highsessioncat").style.display = "none";
  }
}


function dogdaycarepricing() {
  var ddc = document.getElementById("dogdaycareP");
  if (ddc.checked == true) {
    document.getElementById("ddpricing").style.display = "block";
  } else {
    document.getElementById("ddpricing").style.display = "none";
  }
}
function highSessiondaycaredog() {
  var hsdd = document.getElementById("hsdaycaredog");
  if (hsdd.checked == true) {
    document.getElementById("highsessiondaycaredog").style.display = "block";
  } else {
    document.getElementById("highsessiondaycaredog").style.display = "none";
  }
}
function catdaycares() {
  var catdc = document.getElementById("catdayca");
  console.log("xxx");
  if (catdc.checked == true) {
    document.getElementById("catday").style.display = "block";
  } else {
    document.getElementById("catday").style.display = "none";
  }
}
function highsessioncatd() {
  var xxx = document.getElementById("hscatday");
  if (xxx.checked == true) {
    document.getElementById("highsessioncatday").style.display = "block";
  } else {
    document.getElementById("highsessioncatday").style.display = "none";
  }
}
