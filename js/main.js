/*FOR THE CLICKABLE ROW IN emp_mang.php to new page emp_profile.php*/ 

jQuery(document).ready(function($) {
    $(".clickable-row").click(function() {
        window.location = $(this).data("href");
    });
});
 
 
/* FOR SWICTHING BETWWEN PANEL IN emp_profile.php*/ 
function openpanel(index) {
  var i;
  var x = document.getElementsByClassName("emp_profile_section2 ");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  document.getElementById(index).style.display = "block";
}

$(document).on('click','button',function(){
    $(this).addClass('active').siblings().removeClass('active');
});





function opentab(index) {
  var i;
  var x = document.getElementsByClassName("emp_profile_section2_tab ");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  document.getElementById(index).style.display = "block";
}

$(document).on('click','.emp_profile_section1_tab',function(){
    $(this).addClass('active').siblings().removeClass('active');
});



function openpanel2(index) {
  var i;
  var x = document.getElementsByClassName("emp_profile_tab2");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  document.getElementById(index).style.display = "block";
}

$(document).on('click','button',function(){
    $(this).addClass('active').siblings().removeClass('active');
});

/**FOR THE FILE UPLOAD IN doc.php */
$('.file-upload').file_upload();