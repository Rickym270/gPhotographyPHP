<?php include('images.php');?>
<?php
$section = "Galleries";

include('bin/header.php');



?>
    
<!--====================== Page Header =========================-->
<!-- Set your background image for this header on the line below. -->
<header class="intro-header" style="background-image: url('imgs/bluesky.jpg')">
  <div class="container" style="padding-top:350px">
    <div class="row">
      <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
        <div class="site-heading">
          <h1><center>Gomez Photography:<strong> Galleries</strong></center></h1>
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
              <th><h1>Galleries</h1></th>
          </tr>
        </thead><!--/.GALLERIES HEAD-->
        <tbody>
          <tr>
            <td>
              <div class="row">
                <?php foreach($galleries as $gallery_id => $gallery){ ?>
                  <div class="col-sm-6 col-md-4">
                    <div id="effect-5" class="effects clearfix">
                      <div class="thumbnail">
                          <img src="<?php echo $gallery["img"];?>"alt="<?php echo $gallery["caption"];?>">
                          <div class="overlay">
                              <a href="gallery.php?id=<?php echo $gallery_id; ?>" class="expand"><center><?php echo $gallery["caption"];?></center></a>
                              <a class="close-overlay hidden">x</a>
                          </div>
                      </div>
                    </div>
                  </div>
                <?php } ?>
              </div><!--/.Row-->
            </td>
          </tr>
        </tbody><!--/.GALLERIES BODY-->
      </section>
    </table>
  </div>
</div>
<div id="push"></div>

<?php include('bin/footer.php'); ?>