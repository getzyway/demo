<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.html"><h1><img src="images/mitrphol/logo.png" alt="" /></h1></a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
  <div class="top-search">
    <form class="navbar-form navbar-right">
      <input type="text" class="form-control" placeholder="Search...">
      <input type="submit" value=" ">
    </form>
  </div>
  <div class="header-top-right">
    <div class="signin">

      <!-- pop-up-box -->
      <script type="text/javascript" src="js/modernizr.custom.min.js"></script>
      <link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
      <script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
      <!--//pop-up-box -->

      <a href="#small-dialog" class="play-icon popup-with-zoom-anim">Sign In</a>
      <div id="small-dialog" class="mfp-hide">
        <h3>Login</h3>
        <div class="social-sits">
            <img src="./images/mitrphol/mp_dev.png"/>
        </div>
        <div class="signup">
          <form>
            <input type="text" class="email" placeholder="Enter email / mobile" required="required" pattern="([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?"/>
            <input type="password" placeholder="Password" required="required" pattern=".{6,}" title="Minimum 6 characters required" autocomplete="off" />
            <input type="submit"  value="LOGIN"/>
          </form>
          <div class="forgot">
            <a href="#">Forgot password ?</a>
          </div>
        </div>
        <div class="clearfix"> </div>
      </div>

      <script>
          $(document).ready(function() {
          $('.popup-with-zoom-anim').magnificPopup({
            type: 'inline',
            fixedContentPos: false,
            fixedBgPos: true,
            overflowY: 'auto',
            closeBtnInside: true,
            preloader: false,
            midClick: true,
            removalDelay: 300,
            mainClass: 'my-mfp-zoom-in'
          });

          });
      </script>

    </div>
    <div class="clearfix"> </div>
  </div>
    </div>
<div class="clearfix"> </div>
  </div>
</nav>
