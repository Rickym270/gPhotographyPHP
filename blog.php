<?php include('blogPosts.php'); ?>
<?php 
$section = "Blog";

include ('bin/header.php');
$refID = 0;
?>
    
<!--====================== Page Header =========================-->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('imgs/bluesky.jpg')">
        <div class="container" style="padding-top:350px">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1><center>Gomez Photography:<strong> Blog</strong></center></h1>
                        <hr class="small">
                        <span class="subheading"></span>
                    </div>
                </div>
            </div>
        </div>
    </header>

<!--============================ BODY ==========================-->
      
    <div class="container" style="padding-top: 50px;">
      <div class="row row-offset-6">

<!-- =======================BLOG 1 =============================-->
<?php foreach($articles as $article){ ?>
       <table class="table table-stripped">
        <thead>
              <h1><?php echo $article["title"]; ?></h1>
        </thead><!--/.BLOG HEAD-->
          <tbody>    
            <tr>
              <td><p><strong><?php echo $article["date"]; ?></strong></p>  
                <!-- Example row of columns -->
                <div class="span4 collapse-group">
                <?php if ($article["carouselOption"] == 'yes'){ ?>
                  <div class="collapse" id="<?php echo $refID ?>">
                          
      <!-- ======================= Carousel ========================= -->

                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                      <!-- Indicators -->
                      <ol class="carousel-indicators">

                        <?php for ($i = 0; $i <=$numImages; $i++){
                          echo "<li data-target='#myCarousel' data-slide-to='$i'></li>" . "\n\t\t\t\t\t\t";
                        }
                        ?>

                      </ol>
                      <div class="carousel-inners" role="listbox">
                        <div class="item active">
                          <img class="first-slide" src=<?php echo $article["img"]; ?> alt="First slide">
                          </div>
                        </div>
                    </div>
                </div><!--/.CAROUSEL-->
              <?php } ?>
              </div>
              <div id="push"></div>
              <p><?php echo $article["bodyPreview"]; ?></p>
              <div class="span4 collapse-group">
                <p class="collapse" id="<?php echo $refID; ?>a"><?php echo $article["body"]; ?></p>
                <p><a class="btn btn-default pull-right" data-toggle="collapse" data-target="#<?php echo $refID; ?>, #<?php echo $refID; ?>a">View More <span class="caret"></span></a></p></td>
              </div>
            </tr>
          </tbody><!--/.BLOG BODY-->
      </table>
<?php 
$refID++;
} ?>
          
      </div>
    </div>
    <div id="push"></div>

<?php 
include ('bin/footer.php');
?>