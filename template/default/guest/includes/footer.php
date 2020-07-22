
  <!--==========================
    Footer
  ============================-->
  
  
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; <?=date("Y");?> Copyright <strong><?=project_name;?></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->



  <!-- Vendor JS Files -->
  <script src="<?=$this_folder;?>/asset/vendor/jquery/jquery.min.js"></script>
  <script src="<?=$this_folder;?>/asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?=$this_folder;?>/asset/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="<?=$this_folder;?>/asset/vendor/php-email-form/validate.js"></script>
  <script src="<?=$this_folder;?>/asset/vendor/wow/wow.min.js"></script>
  <script src="<?=$this_folder;?>/asset/vendor/venobox/venobox.min.js"></script>
  <script src="<?=$this_folder;?>/asset/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="<?=$this_folder;?>/asset/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="<?=$this_folder;?>/asset/vendor/superfish/superfish.min.js"></script>
  <script src="<?=$this_folder;?>/asset/vendor/hoverIntent/hoverIntent.js"></script>
  <script src="<?=$this_folder;?>/asset/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Template Main JS File -->
  <script src="<?=$this_folder;?>/asset/js/main.js"></script>





<!--share this-->
<script type='text/javascript' src='//platform-api.sharethis.com/js/sharethis.js#property=5b38e81bc5ed96001152162e&product=sticky-share-buttons' async='async'></script>

  <!--drift-->
  <script>
"use strict";

!function() {
  var t = window.driftt = window.drift = window.driftt || [];
  if (!t.init) {
    if (t.invoked) return void (window.console && console.error && console.error("Drift snippet included twice."));
    t.invoked = !0, t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ], 
    t.factory = function(e) {
      return function() {
        var n = Array.prototype.slice.call(arguments);
        return n.unshift(e), t.push(n), t;
      };
    }, t.methods.forEach(function(e) {
      t[e] = t.factory(e);
    }), t.load = function(t) {
      var e = 3e5, n = Math.ceil(new Date() / e) * e, o = document.createElement("script");
      o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + n + "/" + t + ".js";
      var i = document.getElementsByTagName("script")[0];
      i.parentNode.insertBefore(o, i);
    };
  }
}();
drift.SNIPPET_VERSION = '0.3.1';
drift.load('ryn92xris6a6');
</script>
      
  

</body>
</html>
