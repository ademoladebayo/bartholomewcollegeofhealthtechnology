function loadCommonContent() {
  // PRIMARY MENU
  document.getElementById("primary-menu").innerHTML = `
    <li id="menu-item-85"
    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-85"><a
        href="admission-form/index.html">Admission Form</a></li>

    <li id="menu-item-119"
    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-119">
        <a href="departments/index.html">Departments<svg class="icon icon-down "
                aria-hidden="true" role="img">
                <use href="#icon-down" xlink:href="#icon-down"></use>
            </svg></a>
        <ul class="sub-menu">
            <li id="menu-item-140"
                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-140">
                <a href="departments/department-of-community-health/index.html">Department Of
                    Community Health</a>
            </li>
            <li id="menu-item-215"
                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-215">
                <a href="department-of-pharmaceutical-technology/index.html">Department of
                    Pharmaceutical Technology</a>
            </li>
            <li id="menu-item-216"
                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-216">
                <a href="department-of-medical-laboratory-technician/index.html">Department Of
                    Medical Laboratory Technician</a>
            </li>
            <li id="menu-item-217"
                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-217">
                <a href="department-of-health-technician/index.html">Department of Health
                    technician</a>
            </li>
        </ul>
    </li>

    <li id="menu-item-70"
    class="menu-item menu-item-type-post_type menu-item-object-page current_page_parent menu-item-70">
    <a href="latest-college-information/index.html">Latest College Information</a>
    </li>

    <li id="menu-item-119"
    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-119">
    <a href="departments/index.html">Portal<svg class="icon icon-down " aria-hidden="true"
            role="img">
            <use href="#icon-down" xlink:href="#icon-down"></use>
        </svg></a>
        <ul class="sub-menu">
            <li id="menu-item-140"
                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-140">
                <a href="#">Kwara Campus</a>
            </li>
            <li id="menu-item-215"
                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-215">
                <a href="#">Benue Campus</a>
            </li>
        </ul>
    </li>

    <li id="menu-item-95"
    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-95">
    <a href="contact-us/index.html">Contact Us<svg class="icon icon-down "
            aria-hidden="true" role="img">
            <use href="#icon-down" xlink:href="#icon-down"></use>
        </svg></a>
    <ul class="sub-menu">
        <li id="menu-item-96"
            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-96"><a
                href="the-rector/index.html">The Rector</a></li>
    </ul>
    </li>

    <li class="search-menu"><a href="#" class=""><svg class="icon icon-search "
            aria-hidden="true" role="img">
            <use href="#icon-search" xlink:href="#icon-search"></use>
        </svg><svg class="icon icon-close " aria-hidden="true" role="img">
            <use href="#icon-close" xlink:href="#icon-close"></use>
        </svg></a>
        <div id="search" style="display: none;">
            <form role="search" method="get" class="search-form"
                action="https://bartholomewcollegeofhealth.edu.ng/">
                <label>
                    <span class="screen-reader-text">Search for:</span>
                </label>
                <input type="search" class="search-field" placeholder="Search &hellip;" value=""
                    name="s" />
                <button type="submit" class="search-submit"><svg class="icon icon-search "
                        aria-hidden="true" role="img">
                        <use href="#icon-search" xlink:href="#icon-search"></use>
                    </svg><span class="screen-reader-text">Search</span></button>
            </form>
        </div>
    </li>  
    `;
  // SECONDARY MENU
  document.getElementById("secondary").innerHTML = `
                    <section id="nav_menu-4" class="widget widget_nav_menu">
						<h2 class="widget-title">The College</h2>
						<div class="menu-the-college-container">
							<ul id="menu-the-college" class="menu">
								<li id="menu-item-24"
									class="menu-item menu-item-type-post_type menu-item-object-page menu-item-24"><a
										href="about-us/index.html">About Us</a></li>
								<li id="menu-item-72"
									class="menu-item menu-item-type-post_type menu-item-object-page menu-item-72"><a
										href="the-rector/index.html">The Rector</a></li>
								<li id="menu-item-83"
									class="menu-item menu-item-type-post_type menu-item-object-page menu-item-83"><a
										href="contact-us/index.html">Contact Us</a></li>
								<li id="menu-item-144"
									class="menu-item menu-item-type-post_type menu-item-object-page menu-item-144"><a
										href="the-registrar/index.html">The Registrar</a></li>
							</ul>
						</div>
					</section>

					<section id="nav_menu-5" class="widget widget_nav_menu">
						<h2 class="widget-title">Payments</h2>
						<div class="menu-payments-container">
							<ul id="menu-payments" class="menu">
								<li id="menu-item-102"
									class="menu-item menu-item-type-post_type menu-item-object-page menu-item-102"><a
										href="school-account-details/index.html">School Account Details</a></li>
								<li id="menu-item-103"
									class="menu-item menu-item-type-post_type menu-item-object-page menu-item-103"><a
										href="school-fees-for-different-levels-and-departments/index.html">School Fees
										for Different Levels and Departments</a></li>
							</ul>
						</div>
					</section>

					<section id="custom_html-2" class="widget_text widget widget_custom_html">
						<h2 class="widget-title">Call US NOW</h2>
						<div class="textwidget custom-html-widget">
							<script src="../static.elfsight.com/platform/platform.js" defer></script>
							<div class="elfsight-app-cef6e7c3-1f88-42e6-b3fb-3d1cb0f1c0a7"></div>
						</div>
					</section>
  `;
  //   FOOTER
  document.getElementById("colophon").innerHTML = `
           <div class="site-info col-2">
				<div class="wrapper">
					<span>
						Copyright © [2022] [bartholomewcollegeofhealth.edu.ng]. SMARTSCHOOLHUB.NET&nbsp;By&nbsp;<a
							target="_blank" href="https://smartschoolhub.net/">Dextroux Technologies</a> </span>
					<span>
					</span>
				</div><!-- .wrapper -->
			</div><!-- .site-info -->

			<div class="backtotop"><svg class="icon icon-up " aria-hidden="true" role="img">
					<use href="#icon-up" xlink:href="#icon-up"></use>
				</svg></div>
`;
}
