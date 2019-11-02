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
            <div class="sho">
    <div class="row ">
        <div class="col-md-6">
            <h2 class="title">shooting campaign</h2>
            <div class="shoo">
       </div>
       <p class="noidung">
           Alierewnum phaedrum torquatos nec eu, dasvis detraxit ertssa periculiser eres frtisi reex,nihdail dexpetendis in mei Meis an lorem tincidunt vix at, vele.adsaasx sensibus id, errdsaeore rwrepicurei mea et. Mea facilisis urbanies tas moderatius id. Vis eires rationibus definiebass, eu qui purto zril laoreet.. Ex error es omnium es interpretaris prout legimus similique vix, te equidem.
       </p>
        </div>
         <!-- Skill Bars -->
         <div class="col-md-6">
         <div>
         <span class="tieude">Development</span>
         <span class="pro" id="demo"></span>
         </div>
            <div class="progress skill-bar ">

                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">
                    
                </div>
            </div>
            <div>
         <span class="tieude">Web Design</span>
         <span class="pro" id="demo1"></span>
         </div>    
            <div class="progress skill-bar">
                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="76" aria-valuemin="0" aria-valuemax="100" >
                    
                </div>
            </div>
             <div>
         <span class="tieude">Web Design</span>
         <span class="pro" id="demo2"></span>
         </div>
            <div class="progress skill-bar">
                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="76" aria-valuemin="0" aria-valuemax="100">
            
                </div>
            </div>  
             <div>
         <span class="tieude">Web Design</span>
         <span class="pro" id="demo3"></span>
         </div>
            <div class="progress skill-bar">
                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="76" aria-valuemin="0" aria-valuemax="100">
                    
                </div>
            </div> 
            </div> 
            
    </div>
    </div>
</div>
</div>


