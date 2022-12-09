<?php

/** 
 * Main template file
 *
 * @link developer website
 * @package wordpressPortfolio
 * @subpackage 
 * 
 * theme will be built using no css frame work to show css skills
 *  
*/

get_header();
 ?>
 <main id='site-content'>
    <?php 
    $archive_title='';
    $archive_subtitle='';
    
    if( is_search( )){
       global $wp_query;
 
       if($wp_query->found_posts){
        // fornat archive title and subtitle

       }
       else{
        // format archive title and sub to say nothing was found in search

       }       
    }
    elseif (is_archive(  ) && !have_posts(  )) {
      # code...
      // html wrapper for title and subtitle
      // archive title and sub shoult say that arhcive is empty and git 
    }
    elseif (!is_home(  )) {
      # code...
      // get archive title and subtitle
    }

    // print archive title or archive subtitle if they they are true
    if($archive_title || $archive_subtitle){
      // if header is true wrap with html headers if subtitle is true warp with html
      if (archive_title) {
        # code...

      }
      if (archive_subtitle) {
        # code...

      }


    }

    // if have post loop through them
    if (have_posts()) {
      $i=0;
      # code...
      while(have_posts()){
        $i++;
        if($i > 1){
          // add html for seperator between posts
        }

        // get content and then use template to present data
        the_post();
        // insert template for file

      }
    } 
      
    ?>
 </main>