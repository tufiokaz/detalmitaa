function navSelect(evt, menu)   {
    var i, tabcontent, tablinks;
    
    tablinks = document.getElementsByClassName("menuOption");
    tabcontent = document.getElementsByClassName('contentBoxContent');
    

    for (i = 0; i < tabcontent.length; i++){
        tabcontent[i].style.display = "none";
    }

    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    document.getElementById(menu).style.display = "block";
    evt.currentTarget.className += " active";

  }