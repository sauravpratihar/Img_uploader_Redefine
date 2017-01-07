<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Redefine Hackathon | Image Gallery</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- CSS
================================================== -->
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap-responsive.css">
<link rel="stylesheet" href="css/prettyPhoto.css" />
<link rel="stylesheet" href="css/flexslider.css" />
<link rel="stylesheet" href="css/custom-styles.css">

<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link rel="stylesheet" href="css/style-ie.css"/>
<![endif]--> 

<!-- Favicons
================================================== -->
<link rel="shortcut icon" href="img/favicon.ico">
<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

<!-- JS
================================================== -->
<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/jquery.custom.js"></script>
<script type="text/javascript">
$(document).ready(function () {

    $("#btn-blog-next").click(function () {
      $('#blogCarousel').carousel('next')
    });
     $("#btn-blog-prev").click(function () {
      $('#blogCarousel').carousel('prev')
    });

     $("#btn-client-next").click(function () {
      $('#clientCarousel').carousel('next')
    });
     $("#btn-client-prev").click(function () {
      $('#clientCarousel').carousel('prev')
    });
    
});

 $(window).load(function(){

    $('.flexslider').flexslider({
        animation: "slide",
        slideshow: true,
        start: function(slider){
          $('body').removeClass('loading');
        }
    });  
});

</script>

</head>

<body class="home">
    <!-- Color Bars (above header)-->
	<div class="color-bar-1"></div>
    <div class="color-bar-2 color-bg"></div>
    
    <div class="container">
    
      <div class="row header"><!-- Begin Header -->
      
        <!-- Logo
        ================================================== -->
        <div class="span5 logo">
        	<a href="index.htm"><img src="img/piccolo-logo.png" alt="" /></a>
            <h5>Big Things... Small Packages</h5>
        </div>
        
        <!-- Main Navigation
        ================================================== -->
        <div class="span7 navigation">
            <div class="navbar hidden-phone">



            <!-- Mobile Nav
            ================================================== -->
            
        </div>
        
      </div><!-- End Header -->
     
    
    
    <div class="row gallery-row"><!-- Begin Gallery Row --> 
      
    	<div class="span12">
           <div style="text-align: center">
                <h3>Upload Images</h3>
                <form action="upload.php" method="post" enctype="multipart/form-data">
                    Select images: 
                    <input type="file" name="image[]" multiple><br>
                    <input type="submit" value="Upload!" name="submit">
                </form>
            </div>
    	
        <!-- Gallery Thumbnails
        ================================================== -->

            <div class="row clearfix no-margin">
            <ul class="gallery-post-grid holder">

                    <!-- Gallery Item 1 -->

                    <?php 
                        $dirname = "guru/";
                        $images = glob($dirname."*.jpg");
                        // if($images[0] == null){
                        //     $images = glob($dirname."*.png");

                        // }

                        foreach($images as $image) {
                            // echo '<img src="'.$image.'" /><br />';
                        // }

                    ?>
                    <li  class="span3 gallery-item" data-id="id-1" data-type="illustration">
                        <span class="gallery-hover-4col hidden-phone hidden-tablet" style="height:190px;">
                            <span class="gallery-icons">
                                <a href="<?=$image;?>" class="item-zoom-link lightbox" data-rel="prettyPhoto"></a>
                                <!-- <a href="gallery-single.htm" class="item-details-link"></a> -->
                            </span>
                        </span>
                        <a href="gallery-single.htm"><img src="<?=$image;?>" alt="Gallery" style="height:190px;width:400px;"></a>
                        <!-- <span class="project-details"><a href="gallery-single.htm">Custom Illustration</a>For an international ad campaign.</span> -->
                    </li>

                   <?php
                    }
                   ?>

                   
                </ul>
                </div>
            </div>
 
    </div><!-- End Gallery Row -->
    
    
    
    </div> <!-- End Container -->

    
    
    <!-- Scroll to Top -->  
    <div id="toTop" class="hidden-phone hidden-tablet">Back to Top</div>
    
</body>
</html>
