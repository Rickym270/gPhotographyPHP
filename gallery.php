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
if(isset($_GET["img"])){ echo "img is set";}
if(!isset($_GET["img"])){echo "img is not set";}
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
          <div id="dimViewPort">
            <div id="myCarouselGal" class="carousel slide" data-ride="carousel" data-interval="false">
              <div class="carousel-inner" role="listbox">
                <?php 
                $path = "imgs/{$gallery['caption']}/*.*";
                $files = glob($path);
                $first_image = array_shift($files);
                
                echo '<div class="item active">             
                  <img class="first-slide img-responive" src="'.$first_image.'" alt="...">
                </div><!--originally below last .div /.ItemActive-->';
                
               
                foreach ($files as $fileNum =>$file){
                  echo '<div class="item img-responsive">
                  <img src="'.$file.'"></div>';
                  }?>
              </div><!--/.Carousel-Inner-->
              <a class="left carousel-control" id="left" href="#myCarouselGal" role="button" data-slide="prev"><span class="glyphicon-chevron-left"><</span></a>
              <a class="right carousel-control" id="right" href="#myCarouselGal" role="button" data-slide="next"><span class="glyphicon-chevron-left">></span></a>
            </div><!-- /.carousel -->
          </div>
              <div class="row">
                <?php
                  array_unshift($files,$first_image);

                  foreach($files as $fileNum => $file){
                  //for ($i = 0; $i<count($files); $i++){
                    //$num = $files[$i];
                ?><div class="col-sm-6 col-md-4">
                    <div id="effect-5" class="effects clearfix">
                      <div class="thumbnail" id="img">
                        <?php echo '<img src="' . $file . '" alt="" data-target="#myCarouselGal" data-slide-to='.$fileNum.'>';?>
                        <!--<div class="overlay">
                          <a href="gallery.php?id=?<?php echo $gallery_id;?>&img=<?php echo $fileNum?>"  name="link<?php echo $fileNum; ?>" class="expand">+</a>
                          <a class="close-overlay hidden">x</a>
                        </div>-->
                      </div>
                    </div>
                  </div>
                <?php } ?></div><!--/.Row-->
            </td>
          </tr>
        </tbody><!--/.GALLERIES BODY-->
      </section>
    </table>
  </div>
</div>
<div id="push"></div>




<?php include('bin/footer.php'); ?>
