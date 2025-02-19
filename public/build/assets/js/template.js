(function($) {
  'use strict';
  $(function() {
    var body = $('body');
    var contentWrapper = $('.content-wrapper');
    var scroller = $('.container-scroller');
    var footer = $('.footer');
    var sidebar = $('.sidebar');

    //Add active class to nav-link based on url dynamically
    //Active class can be hard coded directly in html file also as required

    function addActiveClass(element) {
      if (current === "") {
        //for root url
        if (element.attr('href').indexOf("index.html") !== -1) {
          element.parents('.nav-item').last().addClass('active');
          if (element.parents('.sub-menu').length) {
            element.closest('.collapse').addClass('show');
            element.addClass('active');
          }
        }
      } else {
        //for other url
        if (element.attr('href').indexOf(current) !== -1) {
          element.parents('.nav-item').last().addClass('active');
          if (element.parents('.sub-menu').length) {
            element.closest('.collapse').addClass('show');
            element.addClass('active');
          }
          if (element.parents('.submenu-item').length) {
            element.addClass('active');
          }
        }
      }
    }

    var current = location.pathname.split("/").slice(-1)[0].replace(/^\/|\/$/g, '');
    $('.nav li a', sidebar).each(function() {
      var $this = $(this);
      addActiveClass($this);
    })

    $('.horizontal-menu .nav li a').each(function() {
      var $this = $(this);
      addActiveClass($this);
    })

    //Close other submenu in sidebar on opening any

    sidebar.on('show.bs.collapse', '.collapse', function() {
      sidebar.find('.collapse.show').collapse('hide');
    });


    //Change sidebar and content-wrapper height
    applyStyles();

    function applyStyles() {
      //Applying perfect scrollbar
      if (!body.hasClass("rtl")) {
        if ($('.settings-panel .tab-content .tab-pane.scroll-wrapper').length) {
          const settingsPanelScroll = new PerfectScrollbar('.settings-panel .tab-content .tab-pane.scroll-wrapper');
        }
        if ($('.chats').length) {
          const chatsScroll = new PerfectScrollbar('.chats');
        }
        if (body.hasClass("sidebar-fixed")) {
          if($('#sidebar').length) {
            var fixedSidebarScroll = new PerfectScrollbar('#sidebar .nav');
          }
        }
      }
    }

    $('[data-toggle="minimize"]').on("click", function() {
      if ((body.hasClass('sidebar-toggle-display')) || (body.hasClass('sidebar-absolute'))) {
        body.toggleClass('sidebar-hidden');
      } else {
        body.toggleClass('sidebar-icon-only');
      }
    });

    //checkbox and radios
    $(".form-check label,.form-radio label").append('<i class="input-helper"></i>');

    //Horizontal menu in mobile
    $('[data-toggle="horizontal-menu-toggle"]').on("click", function() {
      $(".horizontal-menu .bottom-navbar").toggleClass("header-toggled");
    });
    // Horizontal menu navigation in mobile menu on click
    var navItemClicked = $('.horizontal-menu .page-navigation >.nav-item');
    navItemClicked.on("click", function(event) {
      if(window.matchMedia('(max-width: 991px)').matches) {
        if(!($(this).hasClass('show-submenu'))) {
          navItemClicked.removeClass('show-submenu');
        }
        $(this).toggleClass('show-submenu');
      }        
    })

    $(window).scroll(function() {
      if(window.matchMedia('(min-width: 992px)').matches) {
        var header = $('.horizontal-menu');
        if ($(window).scrollTop() >= 70) {
          $(header).addClass('fixed-on-scroll');
        } else {
          $(header).removeClass('fixed-on-scroll');
        }
      }
    });
  });

  // focus input when clicking on search icon
  $('#navbar-search-icon').click(function() {
    $("#navbar-search-input").focus();
  });

  var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
  var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
    return new bootstrap.Popover(popoverTriggerEl)
  })  
  var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
  var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
  })
  
})

function toggleDetailsAdmin(element) {
  var modal = document.getElementById("infoModal");
  
  // Extraire les données depuis les attributs data-
  var titre = element.getAttribute("data-titre");
  var category = element.getAttribute("data-category");
  var description = element.getAttribute("data-description");
  var formateur = element.getAttribute("data-formateur");
  var date = element.getAttribute("data-date");
  var prix = element.getAttribute("data-prix");
  var lien = element.getAttribute("data-lien");
  var duree = element.getAttribute("data-duree");
  var inscrits = element.getAttribute("data-inscrits"); // Liste des inscrits
  
  // Remplir les informations dans le modal
  document.getElementById("modalTitre").innerText = titre;
  document.getElementById("modalCategory").innerText = category;
  document.getElementById("modalDescription").innerText = description;
  document.getElementById("modalFormateur").innerText = formateur;
  document.getElementById("modalDate").innerText = date;
  document.getElementById("modalPrix").innerText = prix;
  document.getElementById("modalLien").innerText = lien;
  document.getElementById("modalDuree").innerText = duree;

  // Afficher la liste des inscrits
  var inscritsList = document.getElementById("modalInscrits");
  inscritsList.innerHTML = ""; // Effacer la liste précédente
  var inscritsArray = inscrits.split(", "); // Convertir la chaîne en tableau
  inscritsArray.forEach(function(inscrit) {
    var li = document.createElement("li");
    li.textContent = inscrit;
    inscritsList.appendChild(li);
  });

  // Afficher le modal
  modal.style.display = "block";
}

// Fermer le modal lorsque l'on clique sur la croix
document.querySelector(".close").onclick = function() {
  var modal = document.getElementById("infoModal");
  modal.style.display = "none";
}

