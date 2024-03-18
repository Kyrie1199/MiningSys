var riseUp = true;
$(document).ready(function() {
  $('#cataloguediv').children('.flgexgrid').each(function () {
    this.style.display = "none";
  });
  $('#actionbtn').children('button').each(function () {
    this.style.display = "none";
  });
});
function popup() {
  if (document.getElementById('underlay').style.display == "none" && document.getElementById('popup').style.display == "none") {
    $('#underlay').fadeIn();
    $('#popup').fadeIn();
  }else {
    $('#underlay').fadeOut();
    $('#popup').fadeOut();
  }
}
var uploadedpercentage = 0;
function uploadProduct(looped) {
  $('#successdiv').slideDown();
  $('#successmessage').html("Please wait, this will take a long time");
  var failed = false;
  let name = document.getElementById('name');
  let price = document.getElementById('price');
  let description = document.getElementById('description');
  let category = document.getElementById('category');
  let picture1 = document.getElementById('picture1');
  let picture2 = document.getElementById('picture2');
  let picture3 = document.getElementById('picture3');
  $("#productadd").children('.generalinput').each(function () {
    this.style.borderColor = "black";
    if (this.value == "") {
      failed = true;
      this.style.borderColor = "red";
    }
  });
  if (failed == true) {
    return
  }else {
    var fd = new FormData();
    fd.append("uploadProduct", "");
    fd.append("name", name.value);
    fd.append("price", price.value);
    fd.append("category", category.value);
    fd.append("description", description.value);
    const picture1Upload = $(picture1)[0].files;
    const picture2Upload = $(picture2)[0].files;
    const picture3Upload = $(picture3)[0].files;
    fd.append("picture1", picture1Upload[0]);
    fd.append("picture2", picture2Upload[0]);
    fd.append("picture3", picture3Upload[0]);
    $.ajax({
    url: 'extras/products.php',
    type: 'post',
    data: fd,
    contentType: false,
    processData: false,
    success: function(response){
      console.log(category.value);
      console.log(response);
      var status;
      if (response == "done") {
        $('#successmessage').html("Upload complete");
        $('#successdiv').delay(5000).slideUp();
      }else {
        $('#errordiv').slideDown().delay(5000).slideUp();
        $('#errormessage').html(response);
      }
    },
   });
  }
}
var progress = 0;
function progressmove(num, type, status) {
  progress = progress + num;
  const elem = document.getElementById('myBar');
  if (type == "upload") {
    document.getElementById('loadingStatus').innerHTML = status + " " +  progress + "%";
  }
  if (progress >= 95) {
    document.getElementById('loadingStatus').innerHTML = "Upload complete";
    progress = 0;
    endLoading();
  }
  elem.style.width = progress + "%";
}
function endLoading() {
  $('#myProgress').delay(5000).slideUp();
}
var imgcount = 1;

function imageLeft(id, allimages) {
  const arrayString = allimages.split("_,_");
  const actualid = "image" + id;
  const elem = document.getElementById(actualid);
  imgcount++;
  var target;
  var looper = 0;
  if (imgcount > 3) {
    imgcount = 1;
  }
  target = imgcount - 1;
  while (looper < arrayString.length) {
    if (looper == target) {
      elem.src = arrayString[looper];
      break;
    }
    looper++;
  }
}
function imageRight(id, allimages) {
  const arrayString = allimages.split("_,_");
  const actualid = "image" + id;
  const elem = document.getElementById(actualid);
  imgcount--;
  var looper = 0;
  var target;
  if (imgcount <= 0) {
    imgcount = 3;
  }
  target = imgcount - 1;
  while (looper < arrayString.length) {
    if (looper == target) {
      elem.src = arrayString[looper];
      break;
    }
    looper++;
  }
}
function showDescription(id) {
  let actualid = "product" + id;
  $("#"+actualid).children('.rboxinfo').each(function () {
    this.style.display = "block";
    $(this).children('.generalcontent').each(function () {
      $(this).fadeIn();
    });
  });
}
function closeDescription(id) {
  let actualid = "product" + id;
  $("#"+actualid).children('.rboxinfo').each(function () {
    this.style.display = "none";
    $(this).children('.generalcontent').each(function () {
      $(this).fadeOut();
    });
  });
}
  function viewProducts(id, elem, name) {
    $('#cataloguediv').children('.flexgrid').each(function () {
      this.style.display = "none";
    });
    var divelem = document.getElementById(id);
    divelem.style.display = "flex";

    $('#selectedcatalog').html(name);
    bottomtoogle();
  }
  function contactView(indexNumber, elem) {
    var arrayCount = 0;
    $('#contactheader').html(contactarray[indexNumber]);
    clearInterval(rackswapper2);
    $('#buttonrack2').children('button').each(function () {
      this.style.transform = "scale(1)";
    });

    $('#actionbtn').children('button').each(function () {
      this.style.display = "none";
    });
    $('#actionbtn').children('button').each(function () {
      if (arrayCount == indexNumber) {
        this.style.display = "block";
        return false;
      }
      arrayCount++;
    });
    elem.style.transform = "scale(1.2)";
  }
  function contactAction(indexNumber, elem) {
    if (elem.innerHTML == "Visit") {
      window.open("", "_self");
    }else {
      contactinfo[indexNumber].select();
      contactinfo[indexNumber].setSelectionRange(0, 99999); /* For mobile devices */
      document.execCommand("copy");
      $('#successdiv').slideDown().delay(5000).slideUp();
      $('#successmessage').html("Copied!");
    }
  }
  function bottomtoogle() {
    if (riseUp == true) {
      $('#bottompop').slideDown();
      riseUp = false;
    }else {
      $('#bottompop').slideUp();
      riseUp = true;
    }
  }
