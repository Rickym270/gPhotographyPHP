<?php
  if ($_SERVER["REQUEST METHOD"] == "POST"){
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $message = trim($_POST["message"]);
    $human = trim(intval($_POST["human"]));

    //Validation
    foreach($_POST as $value){
      if(stripos($value, 'Content-Type:') !== FALSE){
        exit();
      }
    }

    if ($name == "" || $email == "" || $message = ""){
        echo "ERROR";
        exit;
    }

    header("Location: index.php?status=thanks");
    exit;

  }
?><?php 

include ('images.php');

$about = "SAMPLE TEXT";

$section = "home";

include ('bin/Mainheader.php');

?>

<!--====================== CAROUSEL ============================-->
      
    <section id="home">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner" role="listbox">
        <div class="item active">             
            <img src="imgs/WebCoverPhoto.jpg" alt="...">
          <div class="container">
            <div class="carousel-caption">
              <p><a class="btn btn-lg btn-primary btn-outline page-scroll" href="#contact" role="button">Request A Photoshoot</a></p>
            </div>
          </div>
        </div><!--originally below last .div-->
      </div>
    </div><!-- /.carousel -->
    </section>
      
<!--========================= BODY =============================-->
<!-- Wrap the rest of the page in another container to center all the content. -->
    <div id = "wrap" class="container marketing">
      <!-- Example row of columns -->
      <div id = "main" class="row">

<!--========================= BLOG =============================-->
        
        <table class="table table-stripped">    
          <section id="blog">
          <thead>
            <tr>
                <th><h1>Blog</h1></th>
            </tr>
          </thead><!--/.BLOG HEAD-->
            <tbody>    
              <tr>
                  <td><p><strong>DD/MM/YYYY HH:MM:SS</strong></p><p>SAMPLE TEXT SAMPLE TEXT SAMPLE TEXT SAMPLE TEXT SAMPLE TEXT SAMPLE TEXT SAMPLE TEXT SAMPLE TEXT SAMPLE TEXT SAMPLE TEXT SAMPLE TEXT SAMPLE TEXT SAMPLE TEXT SAMPLE TEXT SAMPLE TEXT SAMPLE TEXT SAMPLE TEXT SAMPLE TEXT SAMPLE TEXT SAMPLE TEXT SAMPLE TEXT SAMPLE TEXT SAMPLE TEXT SAMPLE TEXT SAMPLE TEXT SAMPLE TEXT SAMPLE TEXT SAMPLE TEXT SAMPLE TEXT SAMPLE TEXT SAMPLE TEXT SAMPLE TEXT SAMPLE TEXT SAMPLE TEXT SAMPLE TEXT SAMPLE TEXT SAMPLE TEXT SAMPLE TEXT SAMPLE TEXT SAMPLE TEXT SAMPLE TEXT SAMPLE TEXT SAMPLE TEXT SAMPLE TEXT SAMPLE TEXT SAMPLE TEXT SAMPLE TEXT SAMPLE TEXT SAMPLE TEXT SAMPLE TEXT SAMPLE TEXT SAMPLE TEXT SAMPLE TEXT SAMPLE TEXT SAMPLE TEXT SAMPLE TEXT SAMPLE TEXT SAMPLE TEXT SAMPLE TEXT SAMPLE TEXT SAMPLE TEXT SAMPLE TEXT SAMPLE TEXT SAMPLE TEXT SAMPLE TEXT SAMPLE TEXT SAMPLE TEXT SAMPLE TEXT SAMPLE TEXT SAMPLE TEXT SAMPLE TEXT SAMPLE TEXT SAMPLE TEXT SAMPLE TEXT SAMPLE TEXT SAMPLE TEXT SAMPLE TEXT SAMPLE TEXT SAMPLE TEXT SAMPLE TEXT SAMPLE TEXT SAMPLE TEXT SAMPLE TEXT SAMPLE TEXT SAMPLE TEXT SAMPLE TEXT SAMPLE TEXT SAMPLE TEXT SAMPLE TEXT SAMPLE TEXT SAMPLE TEXT<p></p> <a class="btn btn-default pull-right" href="blog.php" role="button">View Entire Blog &raquo;</a></p></td>
              </tr>
            </tbody><!--/.BLOG BODY-->
            </section>
            </table>
            
<!--====================== GALLERIES ===========================-->
    
        <table class="table table-stripped">    
            <section id="galleries">
            <thead>
                <tr>
                    <th><h1>Galleries</h1></th>
                </tr>
            </thead><!--/.GALLERIES HEAD-->
            <tbody>
              <tr>
                <td><div class="row">
                <?php foreach($galleries as $gallery_id => $gallery){ ?>
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img src="<?php echo $gallery["img"];?>"alt="<?php echo $gallery["caption"];?>">
                            <div class="caption">
                                <h3><?php echo $gallery["caption"];?></h3>
                                <p><?php echo $gallery["description"];?></p>
                                <a class="btn btn-default pull-right" href="gallery.php?id=<?php echo $gallery_id ?>" role="button">View <?php echo $gallery["caption"]; ?> Galleries &raquo;</a>
                            </div><!--/.Caption-->
                        </div><!--/.Thumbnail-->
                    </div><!--/.col-sm-6 col-md-4-->
                    <?php } ?>
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img src="#" alt="...">
                            <div class="caption">
                                <h3>View All</h3>
                                <p>View All Galleries</p>
                                <a class="btn btn-default pull-right" href="galleries.php" role="button">View # Galleries &raquo;</a>
                            </div><!--/.Caption-->
                        </div><!--/.Thumbnail-->
                    </div><!--/.col-sm-6 col-md-4-->
                </div><!--/.Row--></td>
              </tr>
            </tbody><!--/.GALLERIES BODY-->
          </section>
        </table>
        
<!--========================= ABOUT ============================-->
    
        <table class="table table-stripped">
        <section id="about">
        <thead>
            <tr>
                <th><h1>About</h1></th>
            </tr>
        </thead><!--/.ABOUT HEAD-->
        <tbody>
            <tr>
                <td><p><?php echo $about ?></p></td>
            </tr>
        </tbody><!--/.ABOUT BODY-->
      </section>
    </table>
    <div id = "push"></div>

<!--=================== REQUEST CONTACT ========================-->
    <table class="table table-stripped">
    <thead>
        <tr>
            <th><h1>Request Photoshoot</h1></th>
        </tr>
    </thead>
    <tbody>
    <tr>
    <td>
    <div id="push"></div>
    <?php if( isset($_GET["status"]) AND $_GET["status"] == "thanks"){?>
    <p> Thank you! I'll be in contact with you shortly!</p>
    <?php }else{ ?>
      <form class="form-horizontal" role="form" method="post" action="index.php" id="contact">
        <div class="form-group">
          <label for="name" class="col-sm-2 control-label">Name</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="name" name="name" placeholder="First , Last Name" value="" required />
          </div>
        </div>
        <div class="form-group">
          <label for="email" class="col-sm-2 control-label">Email</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="" required />
          </div>
        </div>
        <div class="form-group">
          <label for="message" class="col-sm-2 control-label">Message</label>
          <div class="col-sm-10">
            <textarea class="form-control" rows="4" name="message" pattern: ".{1,250}" required placeholder = "250 Character MAX" ></textarea>
          </div>
        </div>
        <div class="form-group">
          <label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="human" name="human" placeholder="Your Answer" required/>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-10 col-sm-offset-2">
              <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-10 col-sm-offset-2">
            <!-- ERROR MESSAGE -->
          </div>
        </div>
      </form>
    <?php } ?>
</td>
</tr>
</tbody>
</table>


<!--    
    <table class="table table-stripped">
    <section id="contact">
    <thead>
        <tr>
            <th><h1>Request Photoshoot</h1></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <tr>
                <td><p>
                        <br />
                         <!- a row has to be in a container ->
                        <div class="container">	
                         <!- Contacts ->
                            <div id="contacts">
                                <div class="row">	
                                  <div class="responsive-video">
                                    <iframe src="https://docs.google.com/forms/d/1vHbIxHm4_WnI-QurG1KwSoZdbFmBPt0FTwayhW-lTpQ/viewform?embedded=true" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
                                  </div><!-inCont->
                                </div><!-/.ROW FORM->
                            </div><!-/.CONTACTS FORM->
                        </div><!-/.CONTAINER FORM->
                    </p>
                </td>
            </tr>
        </tr>
    </thead>
    </section>
        </table>
-->
    <div id="push"></div>
    <div id="push"></div>
      </div><!-- /.row -->
      <div id="push"></div>
    </div><!--/.container marketing-->


<?php 

include('bin/footer.php');
?>