<script
			async
			src="https://www.googletagmanager.com/gtag/js?id=G-GBZ3SGGX85"
		></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag() {
				dataLayer.push(arguments);
			}
			gtag("js", new Date());

			gtag("config", "G-GBZ3SGGX85");
		</script>
		<!-- Google Tag Manager -->
		<script>
			(function (w, d, s, l, i) {
				w[l] = w[l] || [];
				w[l].push({ "gtm.start": new Date().getTime(), event: "gtm.js" });
				var f = d.getElementsByTagName(s)[0],
					j = d.createElement(s),
					dl = l != "dataLayer" ? "&l=" + l : "";
				j.async = true;
				j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
				f.parentNode.insertBefore(j, f);
			})(window, document, "script", "dataLayer", "GTM-NXZMQSS");
		</script>
		<!-- End Google Tag Manager -->

        <script>
               $(function () {
              "use strict";
              $.sidebarMenu = function (menu) {
                var animationSpeed = 300,
                  subMenuSelector = '.sidebar-submenu';
                $(menu).on('click', 'li a', function (e) {
                  var $this = $(this);
                  var checkElement = $this.next();
                  if (checkElement.is(subMenuSelector) && checkElement.is(':visible')) {
                    checkElement.slideUp(animationSpeed, function () {
                      checkElement.removeClass('menu-open');
                    });
                    checkElement.parent("li").removeClass("active");
                  }
                  //If the menu is not visible
                  else if ((checkElement.is(subMenuSelector)) && (!checkElement.is(':visible'))) {
                    //Get the parent menu
                    var parent = $this.parents('ul').first();
                    //Close all open menus within the parent
                    var ul = parent.find('ul:visible').slideUp(animationSpeed);
                    //Remove the menu-open class from the parent
                    ul.removeClass('menu-open');
                    //Get the parent li
                    var parent_li = $this.parent("li");
                    //Open the target menu and add the menu-open class
                    checkElement.slideDown(animationSpeed, function () {
                      //Add the class active to the parent li
                      checkElement.addClass('menu-open');
                      parent.find('li.active').removeClass('active');
                      parent_li.addClass('active');
                    });
                  }
                  //if this isn't a link, prevent the page from being redirected
                  if (checkElement.is(subMenuSelector)) {
                    e.preventDefault();
                  }
                });
              }
          
          
          
            });
          
          
          
          
            // apppscript
          
          
            $(function () {
              "use strict";
          
          
              //sidebar menu js
              $.sidebarMenu($('.sidebar-menu'));
          
              // === toggle-menu js
              $(".toggle-menu").on("click", function (e) {
                e.preventDefault();
                $("#wrapper").toggleClass("toggled");
              });
          
              // === sidebar menu activation js
          
              $(function () {
                for (var i = window.location, o = $(".sidebar-menu a").filter(function () {
                  return this.href == i;
                }).addClass("active").parent().addClass("active"); ;) {
                  if (!o.is("li")) break;
                  o = o.parent().addClass("in").parent().addClass("active");
                }
              }),
          
          
                /* Top Header */
          
                $(document).ready(function () {
                  $(window).on("scroll", function () {
                    if ($(this).scrollTop() > 60) {
                      $('.topbar-nav .navbar').addClass('bg-dark');
                    } else {
                      $('.topbar-nav .navbar').removeClass('bg-dark');
                    }
                  });
          
                });
          
          
              /* Back To Top */
          
              $(document).ready(function () {
                $(window).on("scroll", function () {
                  if ($(this).scrollTop() > 300) {
                    $('.back-to-top').fadeIn();
                  } else {
                    $('.back-to-top').fadeOut();
                  }
                });
          
                $('.back-to-top').on("click", function () {
                  $("html, body").animate({ scrollTop: 0 }, 600);
                  return false;
                });
              });
          
          
              $(function () {
                $('[data-toggle="popover"]').popover()
              })
          
          
              $(function () {
                $('[data-toggle="tooltip"]').tooltip()
              })
          
          
              // theme setting
              $(".switcher-icon").on("click", function (e) {
                e.preventDefault();
                $(".right-sidebar.side2").toggleClass("right-toggled");
              });
          
              $('#theme1').click(theme1);
              $('#theme2').click(theme2);
              $('#theme3').click(theme3);
              $('#theme4').click(theme4);
              $('#theme5').click(theme5);
              $('#theme6').click(theme6);
              $('#theme7').click(theme7);
              $('#theme8').click(theme8);
              $('#theme9').click(theme9);
              $('#theme10').click(theme10);
              $('#theme11').click(theme11);
              $('#theme12').click(theme12);
              $('#theme13').click(theme13);
              $('#theme14').click(theme14);
              $('#theme15').click(theme15);
          
              function theme1() {
                $('body').attr('class', 'bg-theme bg-theme1');
              }
          
              function theme2() {
                $('body').attr('class', 'bg-theme bg-theme2');
              }
          
              function theme3() {
                $('body').attr('class', 'bg-theme bg-theme3');
              }
          
              function theme4() {
                $('body').attr('class', 'bg-theme bg-theme4');
              }
          
              function theme5() {
                $('body').attr('class', 'bg-theme bg-theme5');
              }
          
              function theme6() {
                $('body').attr('class', 'bg-theme bg-theme6');
              }
          
              function theme7() {
                $('body').attr('class', 'bg-theme bg-theme7');
              }
          
              function theme8() {
                $('body').attr('class', 'bg-theme bg-theme8');
              }
          
              function theme9() {
                $('body').attr('class', 'bg-theme bg-theme9');
              }
          
              function theme10() {
                $('body').attr('class', 'bg-theme bg-theme10');
              }
          
              function theme11() {
                $('body').attr('class', 'bg-theme bg-theme11');
              }
          
              function theme12() {
                $('body').attr('class', 'bg-theme bg-theme12');
              }
          
              function theme13() {
                $('body').attr('class', 'bg-theme bg-theme13');
              }
          
              function theme14() {
                $('body').attr('class', 'bg-theme bg-theme14');
              }
          
              function theme15() {
                $('body').attr('class', 'bg-theme bg-theme15');
              }
          
          
          
          
            });
          
          
          
            // script
          
            $(function () {
              "use strict";
          
              // chart 1
          
              var ctx = document.getElementById('chart1').getContext('2d');
          
              var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                  labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct"],
                  datasets: [{
                    label: 'New Visitor',
                    data: [3, 3, 8, 5, 7, 4, 6, 4, 6, 3],
                    backgroundColor: '#fff',
                    borderColor: "transparent",
                    pointRadius: "0",
                    borderWidth: 3
                  }, {
                    label: 'Old Visitor',
                    data: [7, 5, 14, 7, 12, 6, 10, 6, 11, 5],
                    backgroundColor: "rgba(255, 255, 255, 0.25)",
                    borderColor: "transparent",
                    pointRadius: "0",
                    borderWidth: 1
                  }]
                },
                options: {
                  maintainAspectRatio: false,
                  legend: {
                    display: false,
                    labels: {
                      fontColor: '#ddd',
                      boxWidth: 40
                    }
                  },
                  tooltips: {
                    displayColors: false
                  },
                  scales: {
                    xAxes: [{
                      ticks: {
                        beginAtZero: true,
                        fontColor: '#ddd'
                      },
                      gridLines: {
                        display: true,
                        color: "rgba(221, 221, 221, 0.08)"
                      },
                    }],
                    yAxes: [{
                      ticks: {
                        beginAtZero: true,
                        fontColor: '#ddd'
                      },
                      gridLines: {
                        display: true,
                        color: "rgba(221, 221, 221, 0.08)"
                      },
                    }]
                  }
          
                }
              });
          
          
              // chart 2
          
              var ctx = document.getElementById("chart2").getContext('2d');
              var myChart = new Chart(ctx, {
                type: 'doughnut',
                data: {
                  labels: ["Direct", "Affiliate", "E-mail", "Other"],
                  datasets: [{
                    backgroundColor: [
                      "#ffffff",
                      "rgba(255, 255, 255, 0.70)",
                      "rgba(255, 255, 255, 0.50)",
                      "rgba(255, 255, 255, 0.20)"
                    ],
                    data: [5856, 2602, 1802, 1105],
                    borderWidth: [0, 0, 0, 0]
                  }]
                },
                options: {
                  maintainAspectRatio: false,
                  legend: {
                    position: "bottom",
                    display: false,
                    labels: {
                      fontColor: '#ddd',
                      boxWidth: 15
                    }
                  }
                  ,
                  tooltips: {
                    displayColors: false
                  }
                }
              });
          
          
          
          
            });
        </script>
        <script>
    function myFunction() {
      var x = document.getElementById("mb-menus");
      if (x.style.display === "none") {
        x.style.display = "block";
      } else {
        x.style.display = "none";
      }
    }
    </script>

    <noscript
			><iframe
				src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS"
				height="0"
				width="0"
				style="display: none; visibility: hidden"
			></iframe
		></noscript>

        <script>
        (function () {
	"use strict";
	$(document).ready(function () {
		// Store object for local storage data
		var currentOptions = {
			headerBackground: "header-white",
			navigationBackground: "sidebar-light",
			menuDropdownIcon: "icon-style-1",
			menuListIcon: "icon-list-style-1",
			welcomemodal: "show",
		};

		/**
		 * Get local storage value
		 */
		function getOptions() {
			return JSON.parse(localStorage.getItem("optionsObject"));
		}

		/**
		 * Set local storage property value
		 */
		function setOptions(propertyName, propertyValue) {
			//Store in local storage
			var optionsCopy = Object.assign({}, currentOptions);
			optionsCopy[propertyName] = propertyValue;

			//Store in local storage
			localStorage.setItem("optionsObject", JSON.stringify(optionsCopy));
		}

		if (getOptions() != null) {
			currentOptions = getOptions();
		} else {
			localStorage.setItem("optionsObject", JSON.stringify(currentOptions));
		}

		/**
		 * Clear local storage
		 */
		function clearOptions() {
			localStorage.removeItem("optionsObject");
		}

		// Set localstorage value to variable
		if (getOptions() != null) {
			currentOptions = getOptions();
		} else {
			localStorage.setItem("optionsObject", JSON.stringify(currentOptions));
		}

		//Layout settings visible
		$('[data-toggle="right-sidebar"]').on("click", function () {
			jQuery(".right-sidebar.user").addClass("right-sidebar-visible");
		});

		//THEME OPTION CLOSE BUTTON
		$('[data-toggle="right-sidebar-close"]').on("click", function () {
			jQuery(".right-sidebar.user").removeClass("right-sidebar-visible");
		});

		//VARIABLE
		var body = jQuery("body");
		var left_sidebar = jQuery(".left-side-bar");

		// Header Background
		var header_dark = jQuery(".header-dark");
		var header_light = jQuery(".header-white");

		header_dark.click(function () {
			"use strict";
			jQuery(this).addClass("active");
			header_light.removeClass("active");
			body.removeClass("header-white").addClass("header-dark");

			//Store in local storage
			setOptions("headerBackground", "header-dark");
		});

		//Click for current options
		if (currentOptions.headerBackground === "header-dark") {
			header_dark.trigger("click");
		}

		header_light.click(function () {
			"use strict";
			jQuery(this).addClass("active");
			header_dark.removeClass("active");
			body.removeClass("header-dark").addClass("header-white");

			//Store in local storage
			setOptions("headerBackground", "header-white");
		});

		//Click for current options
		if (currentOptions.headerBackground === "header-white") {
			header_light.trigger("click");
		}

		// Sidebar Background
		var sidebar_dark = jQuery(".sidebar-dark");
		var sidebar_light = jQuery(".sidebar-light");

		sidebar_dark.click(function () {
			"use strict";
			jQuery(this).addClass("active");
			sidebar_light.removeClass("active");
			body.removeClass("sidebar-light").addClass("sidebar-dark");

			//Store in local storage
			setOptions("navigationBackground", "sidebar-dark");
		});

		//Click for current options
		if (currentOptions.navigationBackground === "sidebar-dark") {
			sidebar_dark.trigger("click");
		}

		sidebar_light.click(function () {
			"use strict";
			jQuery(this).addClass("active");
			sidebar_dark.removeClass("active");
			body.removeClass("sidebar-dark").addClass("sidebar-light");

			//Store in local storage
			setOptions("navigationBackground", "sidebar-light");
		});

		//Click for current options
		if (currentOptions.navigationBackground === "sidebar-light") {
			sidebar_light.trigger("click");
		}

		// Menu Dropdown Icon
		$("input:radio[name=menu-dropdown-icon]").change(function () {
			// var className = $('input:radio[name=menu-dropdown-icon]:checked').val().toLowerCase().replace(/\s+/, "-");
			// $(".sidebar-menu").attr('class', 'sidebar-menu ' + className);
			// setOptions("menuDropdownIcon", className);
			var newClass1 = ["sidebar-menu"];
			newClass1.push(
				$("input:radio[name=menu-dropdown-icon]:checked")
					.val()
					.toLowerCase()
					.replace(/\s+/, "-")
			);
			newClass1.push(
				$("input:radio[name=menu-list-icon]:checked")
					.val()
					.toLowerCase()
					.replace(/\s+/, "-")
			);
			$(".sidebar-menu").attr("class", newClass1.join(" "));
			setOptions("menuDropdownIcon", newClass1.slice(-2)[0]);
		});
		if (currentOptions.menuDropdownIcon === "icon-style-1") {
			$("input:radio[value=icon-style-1]").trigger("click");
		}
		if (currentOptions.menuDropdownIcon === "icon-style-2") {
			$("input:radio[value=icon-style-2]").trigger("click");
		}
		if (currentOptions.menuDropdownIcon === "icon-style-3") {
			$("input:radio[value=icon-style-3]").trigger("click");
		}

		// Menu List Icon
		$("input:radio[name=menu-list-icon]").change(function () {
			var newClass = ["sidebar-menu"];
			newClass.push(
				$("input:radio[name=menu-dropdown-icon]:checked")
					.val()
					.toLowerCase()
					.replace(/\s+/, "-")
			);
			newClass.push(
				$("input:radio[name=menu-list-icon]:checked")
					.val()
					.toLowerCase()
					.replace(/\s+/, "-")
			);
			$(".sidebar-menu").attr("class", newClass.join(" "));
			setOptions("menuListIcon", newClass.slice(-1)[0]);
		});
		if (currentOptions.menuListIcon === "icon-list-style-1") {
			$("input:radio[value=icon-list-style-1]").trigger("click");
		}
		if (currentOptions.menuListIcon === "icon-list-style-2") {
			$("input:radio[value=icon-list-style-2]").trigger("click");
		}
		if (currentOptions.menuListIcon === "icon-list-style-3") {
			$("input:radio[value=icon-list-style-3]").trigger("click");
		}
		if (currentOptions.menuListIcon === "icon-list-style-4") {
			$("input:radio[value=icon-list-style-4]").trigger("click");
		}
		if (currentOptions.menuListIcon === "icon-list-style-5") {
			$("input:radio[value=icon-list-style-5]").trigger("click");
		}
		if (currentOptions.menuListIcon === "icon-list-style-6") {
			$("input:radio[value=icon-list-style-6]").trigger("click");
		}

		$("#reset-settings").click(function () {
			clearOptions();
			location.reload();
		});

		jQuery(".welcome-modal-btn").click(function () {
			"use strict";
			jQuery(this).addClass("active");
			jQuery(".welcome-modal").show();
			//Store in local storage
			setOptions("welcomemodal", "show");
		});
		if (currentOptions.welcomemodal === "show") {
			jQuery(".welcome-modal-btn").trigger("click").addClass("active");
		}
		jQuery(".welcome-modal-close").click(function () {
			"use strict";
			jQuery(".welcome-modal-btn").removeClass("active");
			jQuery(".welcome-modal").slideToggle();
			//Store in local storage
			setOptions("welcomemodal", "hide");
		});
		if (currentOptions.welcomemodal === "hide") {
			jQuery(".welcome-modal-close").trigger("click");
			jQuery(".welcome-modal-btn").removeClass("active");
		}
	});
})();
    </script>

        
