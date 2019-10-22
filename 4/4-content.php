  <?php
  $url_host = 'http://' . $_SERVER['HTTP_HOST'];
  $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
  $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

  preg_match_all($pattern_uri, __DIR__, $matches);
  $url_path = $url_host . $matches[1][0];
  $url_path = str_replace('\\', '/', $url_path);
  ?>

  <div class="type-4">
    <div class="conatainer">
      <div class="row">

        <div class="parallax">
         <img class="hinh" src="./images/h3-parallax-1.jpg" alt="">
         <div class="vc_col-sm-12">
           <figure class="wrap">
            <img src="./images/h3-img-1.png" alt="">
          </figure>
        </div>
      </div>

      <div class="review">
      <div class="col-md-6 col-lg-6 col-sm-6">
      <img class="hinh" src="./images/h3-img-2.jpg" alt="">
      </div>
      <div class="product">
      <div class="col-md-6 col-lg-6 col-sm-6">
      <div class="text">
        <div class="price">
          <div class="text-left">
            <div class="dola">
              <div class="currency">
                $
              </div>
              35
            </div>
          </div>
          <div class="text-right">
            <h5 class="brown">
              <a href="#">Brown T-Shirt</a>
            </h5>
            <div class="excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit in ut ullamcorper leo.</div>
          </div>
        </div>
      </div>
      <div class="items">
      
        <div class="icon-list">
          <span>  <i class="fa fa-check" style="font-size:18px"></i> </span>
       
        </div>
        <p>Aliquam lorem ante, dapibus in</p>
        
      </div>
      </div>
      </div>
      </div>

      
      <div class="vc_row-fluid">
        <div class="vc_custom">
          <div class="wp_wrap">
            <h2 class="title"> what they’re saying </h2>
          </div>
          <div class="swiper-container">
            <div class="swiper-wrapper">
              <div class="swiper-slide">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut ullamcorper leo, eget <br>
               euismod orci. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur <br> ridiculus mus. Vestibulum ultricies aliquam resto pesct eres furis aviatis.
               <div class="athur">
                <h5>William Jones</h5>
                <p>Designer</p>
              </div>  

            </div>
            <div class="swiper-slide">Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut <br>
             metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue.<br> Curabitur ullamcorper ultricies nisi nam eget eres furis aviatis.
             <div class="athur">
              <h5> Jennifer Jacobs</h5>
              <p>Designer</p>
            </div>  
          </div>

        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
    </div>
  </div>
</div>
</div>
</div>




