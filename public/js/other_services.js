function serviceWashing() {
  var wsh = document.getElementById("wash");
  if (wsh.checked == true) {
    document.getElementById("washingDiv").style.display = "block";
    console.log("washing button checked");
  } else {
    document.getElementById("washingDiv").style.display = "none";
    console.log("washing div display none ");
  }
}
function dogWashprice() {
  var wshprice = document.getElementById("dogWashpriceCheck");
  if (wshprice.checked == true) {
    document.getElementById("dogWashingPricetable").style.display = "block";
    console.log("washing dog div display true ");
  } else {
    document.getElementById("dogWashingPricetable").style.display = "none";
    console.log("washing div display false");
  }
}
function dogWashhighSessionprice() {
  var wshigh = document.getElementById("washinghs");
  if (wshigh.checked == true) {
    document.getElementById("washinghighDiv").style.display = "block";
    console.log("dog washinghorhor high session div opened");
  } else {
    document.getElementById("washinghighDiv").style.display = "none";
    console.log("dog washing high session div closed");
  }
}
function catWashingX() {
  var catwsh = document.getElementById("catWashing");
  if (catwsh.checked == true) {
    document.getElementById("catWashingdiv").style.display = "block";
    console.log('cat washing div opened');
  } else {
    document.getElementById("catWashingdiv").style.display = "none";
    console.log("cat washing div closed");
  }
}
function catWashingH() {
  var catHws = document.getElementById("washingCathigh");
  if (catHws.checked == true) {
    document.getElementById("highsessioncatWash").style.display = "block";
  } else {
    document.getElementById("highsessioncatWash").style.display = "none";
  }
}
function nailClipping() {
  var nail = document.getElementById("nailclipping");
  if (nail.checked == true) {
    document.getElementById("nailClippingDiv").style.display = "block";
    document.getElementById("catNailClipping").style.display = "block";
  } else {
    document.getElementById("nailClippingDiv").style.display = "none";
    document.getElementById("catNailClipping").style.display = "none";
  }
}
function dogNailclipping() {
  var dogN = document.getElementById("nailClippingDog");
  if (dogN.checked == true) {
    document.getElementById("dogNailclippingDiv").style.display = "block";
  } else {
    document.getElementById("dogNailclippingDiv").style.display = "none";
  }
}
function highSessionNailclippingDog() {
  var nailhigh = document.getElementById("hsnailclippingdog");
  if (nailhigh.checked == true) {
    document.getElementById("highsessionNailclippingDiv").style.display =
      "block";
  } else {
    document.getElementById("highsessionNailclippingDiv").style.display =
      "none";
  }
}
function catNailclippingX() {
  var catNail = document.getElementById("catNailX");
  if (catNail.checked == true) {
    document.getElementById("catNailclippingDiv").style.display = "block";
  } else {
    document.getElementById("catNailclippingDiv").style.display = "none";
  }
}
function catNailclippingHigh() {
  var catHn = document.getElementById("hsnailclippingCat");
  if (catHn.checked == true) {
    document.getElementById("highsessioncatNail").style.display = "block";
  } else {
    document.getElementById("highsessioncatNail").style.display = "none";
  }
}
function grommingTrimming() {
  var gt = document.getElementById("GT");
  if (gt.checked == true) {
    document.getElementById("grommingTrimmingDiv").style.display = "block";
  } else {
    document.getElementById("grommingTrimmingDiv").style.display = "none";
  }
}
function dogGrommingtrimmingX() {
  var dogGT = document.getElementById("dogGT");
  if (dogGT.checked == true) {
    document.getElementById("dogGTramming").style.display = "block";
    console.log("dog g-t checked");
  } else {
    document.getElementById("dogGTramming").style.display = "none";
    console.log("dog g-t unchecked");
  }
}
function gtHigh() {
  var gth = document.getElementById("hsGT");
  if (gth.checked == true) {
    document.getElementById("gtHighSession").style.display = "block";
    console.log("dog g-t checked");
  } else {
    document.getElementById("gtHighSession").style.display = "none";
    console.log("dog g-t unchecked");
  }
}
function catGt() {
  var catgt = document.getElementById("catGrommingtrimming");
  if (catgt.checked == true) {
    document.getElementById("catGtdiv").style.display = "block";
  } else {
    document.getElementById("catGtdiv").style.display = "none";
  }
}
function catGtH() {
  var catgth = document.getElementById("hsCatgt");
  if (catgth.checked == true) {
    document.getElementById("highCatgt").style.display = "block";
  } else {
    document.getElementById("highCatgt").style.display = "none";
  }
}
function medication() {
  var med = document.getElementById("medic");
  if (med.checked == true) {
    document.getElementById("medicationDiv").style.display = "block";
    document.getElementById("catMedicationdiv").style.display = "block";
  } else {
    document.getElementById("medicationDiv").style.display = "none";
    document.getElementById("catMedicationdiv").style.display = "none";
  }
}
function dogMedication() {
  var dogM = document.getElementById("dogmedic");
  if (dogM.checked == true) {
    document.getElementById("dogMedicationdiv").style.display = "block";
  } else {
    document.getElementById("dogMedicationdiv").style.display = "none";
  }
}
function dogHighmedication() {
  var dogMedication = document.getElementById("hsDogmedication");
  if (dogMedication.checked == true) {
    document.getElementById("highSessiondogmedication").style.display = "block";
  } else {
    document.getElementById("highSessiondogmedication").style.display = "none";
  }
}
function catMedication() {
  var catM = document.getElementById("catMedic");
  if (catM.checked == true) {
    document.getElementById("catMedicationd").style.display = "block";
  } else {
    document.getElementById("catMedicationd").style.display = "none";
  }
}
function catMedicationhigh() {
  var hgcatmedic = document.getElementById("hscatMedication");
  if (hgcatmedic.checked == true) {
    document.getElementById("highsessioncatmedication").style.display = "block";
  } else {
    document.getElementById("highsessioncatmedication").style.display = "none";
  }
}
