 <div>
    <footer>
  <p><small>&copy; 2021 - <?=date("Y")?> by <a href="contact.php" target="_blank">Hien Nguyen</a>, All Rights Reserved ~ <a href="https://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="https://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a> ~ <a href="privacy.php" target="_blank">Privacy</a></small></p>
</footer>
    </div>
       
     
  </main>

<script>
  $(document).ready(function($) {
    $(".slide").fadeImages({
      arrows: true,
      complete: function() {
        console.log("Fade Images Complete");
      }
    });

  });
</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
     
 </body>
 
  
    
</html>