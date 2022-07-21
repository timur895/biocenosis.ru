<?php 
/*
Template Name: Главная
*/
get_header();
?>
 <div class="container-fluid" style="background-color: #202f2f" >
<script src="//megatimer.ru/get/ad0c0d0376cc68079a9f96707d0c79d8.js"></script>
</div> 

    <div class="container-fluid" >
        <main class="tm-main">
            <!-- Search form -->
            <div class="link row justify-content-around ">
             <?php wp_list_categories('orderby=name&style=none&title_li='); ?>             
            </div>            
                          
                
<div class="row">
<div class="row popula justify-content-center">
<?php
                 
                 if(have_posts()) {
                     while(have_posts()) {
                         the_post();
                         $all_category = get_the_category();
                         $res_name = '';
                         foreach($all_category as $category) {
                             if($category->term_id == 8 || $category->term_id == 9  ){
                                 $res_name = $category->slug;
                             }
                         }
                 ?>
      <div class="flip col-12 col-lg-2 col-sm-4">
        <div class="card "> 
          <div class="face front" style="background-color:<?php echo CFS()->get('background_post'); ?>"> 
            <div class="inner">
            <?php the_post_thumbnail(''); ?>   
             <h3><?php the_title(); ?></h3>
            </div>
          </div>
          <div class="face back"> 
            <div class="inner text-center"> 
              <div><?= CFS()->get("description"); ?></div>
              <div style="font-size: 15px"><?= CFS()->get("contents"); ?></div>
              <?= CFS()->get("time"); ?>
              <a href="<?php the_permalink(); ?>" class="btn">Показать</a>
            </div>
          </div>
        </div>   
      </div>
      <?php
                    }
                }
                ?>	
                <div class="col-12 ">     
                <?php the_posts_pagination(); ?>         
                </div>
            </div>
                 
    </div>
</div>
  </div>
  </div>
              </main>
                                   
<?php get_footer(); ?>            