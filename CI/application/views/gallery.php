  

<div id="content">
         <div id="page">
            <div id="container">
                <h1><a href="index.html">Galleriffic</a></h1>
                <h2>Cornerstone Kitchens and Baths Gallery</h2>

                <!-- Start Advanced Gallery Html Containers -->
                <div id="gallery" class="content">
                    <div id="controls" class="controls"></div>
                    <div class="slideshow-container">
                         
                        <div id="slideshow" class="slideshow"></div>
                        <div id="loading" class="loader"></div>
                    </div>
                    <div id="caption" class="caption-container"></div>
                </div>
                <div id="thumbs" class="navigation">
                    <ul class="thumbs noscript">                                
                        <li>
                            <div class="caption"> 
                                <div class="image-title">Charleston Chesnut</div>
                                <div class="image-desc"></div>
                            </div>
                            <a class="thumb" name="drop" href="<?php echo base_url();?>images/cabinet_types/large/charleston_chestnut3.jpg" title="Charleston Chesnut">
                                <img src="<?php echo base_url();?>images/cabinet_types/charleston_chestnut3.jpg" alt="Charleston Chesnut" width = "75px" height = "75px"/>
                            </a>
 
                        </li>    
                        <?php 
                        //echo each image 
                            $directory = BASEPATH . '../images/cabinet_types/' ;                                                                                          
                                          
                                          $self = SELF; 
                                          $apppath = APPPATH;          
                            // create an array to hold directory list
                            $results = array();

                            // create a handler for the directory
                            $handler = opendir($directory);

                            // open directory and walk through the filenames
                            while ($file = readdir($handler)) {

                              // if file isn't this directory or its parent, add it to the results
                              if ($file != "." && $file != "..") {
                                $results[] = $file;
                              }

                            }

                            // tidy up: close the handler
                            closedir($handler);

                            // done!
                           var_dump($results);
                        ?>                                
                     </ul>
                </div>
                <div style="clear: both;"></div>
            </div>
        </div>
         
        <script type="text/javascript">
            jQuery(document).ready(function($) {
                // We only want these styles applied when javascript is enabled
                $('div.navigation').css({'width' : '300px', 'float' : 'left'});
                $('div.content').css('display', 'block');

                // Initially set opacity on thumbs and add
                // additional styling for hover effect on thumbs
                var onMouseOutOpacity = 0.67;
                   
                
                // Initialize Advanced Galleriffic Gallery
                var gallery = $('#thumbs').galleriffic({
                    delay:                     2500,
                    numThumbs:                 18,
                    preloadAhead:              10,
                    enableTopPager:            true,
                    enableBottomPager:         true,
                    maxPagesToShow:            7,
                    imageContainerSel:         '#slideshow',
                    controlsContainerSel:      '#controls',
                    captionContainerSel:       '#caption',
                    loadingContainerSel:       '#loading',
                    renderSSControls:          true,
                    renderNavControls:         true,
                    playLinkText:              '',
                    pauseLinkText:             '',
                    prevLinkText:              '&lsaquo; Previous Photo',
                    nextLinkText:              'Next Photo &rsaquo;',
                    nextPageLinkText:          'Next &rsaquo;',
                    prevPageLinkText:          '&lsaquo; Prev',
                    enableHistory:             false,
                    autoStart:                 false,
                    syncTransitions:           true,
                    defaultTransitionDuration: 900,
                    onSlideChange:             function(prevIndex, nextIndex) {
                        // 'this' refers to the gallery, which is an extension of $('#thumbs')
                        this.find('ul.thumbs').children()
                            .eq(prevIndex).fadeTo('fast', onMouseOutOpacity).end()
                            .eq(nextIndex).fadeTo('fast', 1.0);
                    },
                    onPageTransitionOut:       function(callback) {
                        this.fadeTo('fast', 0.0, callback);
                    },
                    onPageTransitionIn:        function() {
                        this.fadeTo('fast', 1.0);
                    }
                });
            });
        </script>
</div><!-- end content --> 

