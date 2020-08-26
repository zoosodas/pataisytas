/* more about me*/
function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "More about me";
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Minimize";
    moreText.style.display = "inline";
  }
} 

/* progresso baras */
function progress(percent, $element) {
    var progressBarWidth = percent * $element.width() / 100;
        $element.find('div').animate({ width: progressBarWidth }, 500).html(percent + "% ");
}

progress(90, $('#progressBar'));
progress(98, $('#progressBar1'));
progress(70, $('#progressBar2'));
progress(90, $('#progressBar3'));
progress(80, $('#progressBar4'));
progress(96, $('#progressBar5'));


/* Mob ir gallery */
$(document).ready(function(){
    $(".menu-toggle a").click(function(){ 
        $(".menu").slideToggle(700);
    });
    
    $('.tab_container:first').show();
    $('.tab_navigation li :first').addClass('active');
    $('.tab_navigation li').click(function(event) {
      index = $(this).index();   
        $('.tab_navigation li').removeClass('active');
        $(this).addClass('active');
        $('.tab_container').hide();
        $('.tab_container').eq(index).show();
    });
});

