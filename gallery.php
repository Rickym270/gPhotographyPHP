<?php
include('images.php');

if(isset($_GET["id"])){
  $gallery_id = $_GET["id"];
  if(isset($galleries[$gallery_id])){
    $gallery = $galleries[$gallery_id];
  }
}

if(!isset($gallery)){
  header("Location: galleries.php");
  exit();
}

$section = "Galleries";
$imageSection = "imageSection";

include('bin/header.php');
?>





    
<!--====================== Page Header =========================-->
<!-- Set your background image for this header on the line below. -->
<header class="intro-header" style="background-image: url('imgs/bluesky.jpg')">
  <div class="container" style="padding-top:350px">
    <div class="row">
      <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
        <div class="site-heading">
          <h1><center>Gomez Photography:<strong> <?php echo $gallery["caption"]; ?></strong></center></h1>
          <hr class="small">
          <span class="subheading"></span>
        </div>
      </div>
    </div>
  </div>
</header>

<!--========================= BODY =============================-->

<div id = "wrap" class="container marketing">
  <div id = "main" class="row">
    <table class="table table-stripped" id="apple"><!--LOADS TO-->  
      <section id="galleries">
        <thead>
          <tr>
              <th><h1><a style= "color:gray;" href="galleries.php">Galleries</a> > <?php echo $gallery["caption"]; ?></h1></th>
          </tr>
        </thead><!--/.GALLERIES HEAD-->
        <tbody>
          <tr>
            <td>
              <div class="row">
<!--
                <?php
                  //$path = "imgs/{$gallery['caption']}/*.*";
                  //$files = glob($path);
                  //for ($i = 1; $i<count($files); $i++){ 
                    //$num = $files[$i];
                ?><div class="col-sm-6 col-md-4">
                    <div id="effect-5" class="effects clearfix">
                      <div class="thumbnail">
                        <?php //echo '<img src="' . $num . '" alt="">'?>
                        <div class="overlay">
                          <a href="gallery.php?id=" class="expand">+</a>
                          <a class="close-overlay hidden">x</a>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php //} ?>
-->
              </div><!--/.Row-->
            </td>
          </tr>
        </tbody><!--/.GALLERIES BODY-->
      </section>
    </table>
  </div>
</div>
<div id="push"></div>

<!--========================= FOOTER ===========================-->
<footer id = "footer">
 <div class="social-icons">
  <a href="https://www.facebook.com/pages/Gomez-Photography-NJ//114912778571306"><span class="social-icon social-f"><i class="fa fa-facebook"></i></span></a>
  <a href="http://www.instagram.com/j_gomez_photography"><span class="social-icon social-i"><i class="fa fa-instagram"></i></span></a>
</div>
  <!--<p class="pull-right"><a href="#">Back to top</a></p>
  <p>&copy; 2015 Gomez Photograhy &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
-->
</footer>

<!-- ===============Bootstrap core JavaScript================== -->
<!-- Placed at the end of the document so the pages load faster -->
    
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script src="../js/ie-emulation-modes-warning.js"></script>
    <script src="../../assets/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    <script> $('.dropdown-menu input').click(function(e) {
        e.stopPropagation();
    });</script>
    <script src="js/modernizr.js"></script>
    <script>
        $(document).ready(function(){
            if (Modernizr.touch) {
                // show the close overlay button
                $(".close-overlay").removeClass("hidden");
                // handle the adding of hover class when clicked
                $(".thumbnail").click(function(e){
                    if (!$(this).hasClass("hover")) {
                        $(this).addClass("hover");
                    }
                });
                // handle the closing of the overlay
                $(".close-overlay").click(function(e){
                    e.preventDefault();
                    e.stopPropagation();
                    if ($(this).closest(".thumbnail").hasClass("hover")) {
                        $(this).closest(".thumbnail").removeClass("hover");
                    }
                });
            } else {
                // handle the mouseenter functionality
                $(".thumbnail").mouseenter(function(){
                    $(this).addClass("hover");
                })
                // handle the mouseleave functionality
                .mouseleave(function(){
                    $(this).removeClass("hover");
                });
            }
        });
    </script>


  </body>
</html>

<?php include('bin/footer.php'); ?>