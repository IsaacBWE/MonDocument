	
  <div id="root">
  <div id="topnav" class="topnav">
    <a id="home_link" class="topnav_link" href="/"><img src="img/logo.png" width="104px">
    <!-- Classic Menu -->
    <nav role="navigation" id="topnav_menu">
      <span style="font-size: 24px;color:#0598dd;margin-top:1px;">Signature</span>
      <a class="topnav_link" href="index.php"><i class="fa-solid fa-house"></i> Portail</a>
      <a class="topnav_link" href="about.php"><i class="fa-solid fa-bookmark"></i> Qui sommes-nous</a>
      <a class="topnav_link" href="service.php"><i class="fa-solid fa-cart-shopping"></i> Nous vous offrons</a>
      <a class="topnav_link" href="contact.php"><i class="fa-solid fa-phone"></i>  Contact</a>
    </nav>
    <a id="topnav_hamburger_icon" href="javascript:void(0);" onclick="showResponsiveMenu()">
      <!-- Some spans to act as a hamburger -->
      <span></span>
      <span></span>
      <span></span>
    </a>
    <!-- Responsive Menu -->
    <nav role="navigation" id="topnav_responsive_menu">
      <ul>
        <span style="font-size: 24px;color: #0598dd;margin-top:1px;">Signature</span>
        <li><a href="index.php"><i class="fa-solid fa-house"></i> Portail</a></li>
        <li><a href="about.php"><i class="fa-solid fa-bookmark"></i> Qui sommes-nous</a></li>
        <li><a href="service.php"><i class="fa-solid fa-cart-shopping"></i> Nous vous offrons</a></li>
        <li><a href="contact.php"><i class="fa-solid fa-phone"></i> Contact</a></li>
      </ul>
    </nav>
  </div>
  </div>

     <!-- fonction menu hamberger -->
  <script type="text/javascript">
    function showResponsiveMenu() {
        var menu = document.getElementById("topnav_responsive_menu");
        var icon = document.getElementById("topnav_hamburger_icon");
        var root = document.getElementById("root");
        if (menu.className === "") {

          menu.className = "open";
          icon.className = "open";
          root.style.overflowY = "hidden";

        } else {
          menu.className = "";                    
          icon.className = "";
          root.style.overflowY = "";
        }
    }
  </script>