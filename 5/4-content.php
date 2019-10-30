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
         <div class="vc_col-sm-12">
           <figure class="wrap">
            <img src="./images/h3-img-1.png" alt="">
          </figure>
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
<div class="type-331">
        <div class="container ">
            <div class="row">
              <div class="col-md-3">
                <a href="#">
                <img src="images/footer-img-1.png" alt="">
                <div class="textwidget text">
                  <p>
                  © Copyright Select Themes
                  </p>
                </div>
                <div class="text image">
                  <img src="images/footer-img-2.png" alt="">
                </div>
                <div class="icon">
                  <i class="fa fa-vimeo"></i>
                  <i class="fa fa-instagram"></i>
                  <i class="fa fa-twitter"></i>
                  <i class="fa fa-facebook"></i>
                  <i class="fa fa-tumblr"></i>   
                       
                </div>
              </a>
              </div>
              <div class="col-md-3">
                <h3 class="locate">locate us</h3>
                <div class="contact">
                  <p>
                  28 Bartholomeo street, NY, NY
                  </p>
                </div>
                <div class="contact">
                  <p>
                  phone: 0035 265 244 58
                  </p>
                </div>
                <div class="contact">
                  <p>
                  phone: 0035 244 58 265
                  </p>
                </div>
           
                  <a class="contact" href="#">
                  e-mail: info@bazaar.com
                  </a>
        
              </div>
              <div class="col-md-3">
                <h3 class="locate">profile</h3>
                <div class="contact">
                  <i class="fa fa-user" aria-hidden="true"></i>
                </div>
                <div class="contact">
                  <p>
                  phone: 0035 265 244 58
                  </p>
                </div>
                <div class="contact">
                  <p>
                  phone: 0035 244 58 265
                  </p>
                </div>
           
                  <a class="contact" href="#">
                  e-mail: info@bazaar.com
                  </a>
        
              </div>
              <div class="col-md-3">
                        <ul>
                <a href="#">
                              
                <span class="trans">  
                <img class="hinh" src="images/Screenshot_15.png" alt="">
                        <div class="middle">
                           <div class="instagram">
                                 <i class="fa fa-instagram"></i>
                           </div>   
                        </div>
                   </span>
                        <span class="trans">    
                        <img class="hinh" src="images/Screenshot_16.png" alt="">
                        <div class="middle">
                           <div class="instagram">
                                 <i class="fa fa-instagram"></i>
                           </div>   
                        </div>
                       </span>
                <span class="trans">    
                        <img class="hinh" src="images/Screenshot_1.png" alt="">
                        <div class="middle">
                           <div class="instagram">
                                 <i class="fa fa-instagram"></i>
                           </div>   
                        </div>
                       </span>
                       <div class="top">
                       <span class="trans">    
                        <img class="hinh" src="images/Screenshot_2.png" alt="">
                        <div class="middle">
                           <div class="instagram">
                                 <i class="fa fa-instagram"></i>
                           </div>   
                        </div>
                       </span>
                       <span class="trans">    
                        <img class="hinh" src="images/Screenshot_3.png" alt="">
                        <div class="middle">
                           <div class="instagram">
                                 <i class="fa fa-instagram"></i>
                           </div>   
                        </div>
                       </span>
                       <span class="trans">    
                        <img class="hinh" src="images/Screenshot_4.png" alt="">
                        <div class="middle">
                           <div class="instagram">
                                 <i class="fa fa-instagram"></i>
                           </div>   
                        </div>
                       </span>
                       </div>
              </a>
            </ul>
              </div>
    </div>
</div>
</div>




