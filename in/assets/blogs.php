<?php

  $ch = curl_init();
  curl_setopt($ch,CURLOPT_URL,"https://blogs.webmarlins.com/wp-json/wp/v2/posts?order=desc&per_page=3");
  curl_setopt($ch, CURLOPT_HEADER, 0);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $blogs = curl_exec($ch);
  if(curl_errno($ch)){
    echo "error";
    die();
  }

  curl_close($ch);
  $blogs = json_decode($blogs,true);
  // echo "<pre>";
  // print_r($blogs[0]);
  // echo "</pre>";

?>


<section class="site-section" id="blog-section">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-md-8 text-center">
          <h2 class="site-section-heading text-center">Blog</h2>
        </div>
      </div>

      <div class="row">
        <?php
        for($i=0;$i<3;$i++){
          $blog = $blogs[$i];
          $date = $blog["date"];
          $date = explode("T",$date);
          $date = $date[0];
          ?>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="h-entry">
              <img src="<?php echo $blog["yoast_head_json"]["og_image"][0]["url"];?>" alt="Image" class="img-fluid" />
              <h2 class="font-size-regular">
                <a href="<?php echo $blog["link"];?>"><?php echo $blog["title"]["rendered"];?></a>
              </h2>
              <div class="meta mb-4">
                <span class="mx-2">&bullet;</span><?php echo $date;?>
              </div>
              <p>
                <?php echo $blog["excerpt"]["rendered"];?>
              </p>
              <p><a href="<?php echo $blog["link"];?>">Continue Reading...</a></p>
            </div>
          </div>
          <?php
        }
        ?>
      </div>
    </div>
  </section>
