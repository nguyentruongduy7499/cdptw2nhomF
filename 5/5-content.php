<?php
$url_host = 'http://'.$_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-331">
        <div class="container ">
            <div class="row">
            	<div class="col-md-3 repon">
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
            	<div class="col-md-3 repon">
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
            	<div class="col-md-3 repon3">
            		<h3 class="locate">profile</h3>
                  <div class="icontext">
                  <a href="#">
            			<i class="fa fa-user" aria-hidden="true"></i>
                        <span class="icon-text">my account</span>
                  </a>
                  </div>
                  <div class="icontext">
            		<a href="#">
                     <i class="fa fa-search"></i>
                        <span class="icon-text">my account</span>
                  </a>
                  </div>
            		<div class="icontext">
                  <a href="#">
                     <i class="fa fa-home"></i>
                        <span class="icon-text">my account</span>
                  </a>
                  </div>
           
            			<div class="icontext">
                  <a href="#">
                     <i class="fa fa-map-marker"></i>
                        <span class="icon-text">my account</span>
                  </a>
                  </div>
        
            	</div>
            	<div class="col-md-3 repon4">
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
            <div class="email"> 
            <input class="emaill" type="email" name="your-email" value="" size="40"  placeholder="e-mail">
            <input class="sub" type="submit" value="subscribe" class="wpcf7-form-control wpcf7-submit">
            	</div>
               </div>
    </div>
</div>
</div>


