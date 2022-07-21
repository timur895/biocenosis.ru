<?php 
/*
Template Name: записи
*/
get_header();
?>

    <div class="container-fluid" >
        <main class="tm-main">
            <!-- Search form -->
            <div class="row tm-row text-center">
                <button class="btn"type="button" data-filter=".<?php echo get_category( 8, ARRAY_A )['slug'] ?>"><?php echo get_category( 8, ARRAY_A )['name'] ?></button>
                <button class="btn"type="button" data-filter=".<?php echo get_category( 9, ARRAY_A )['slug'] ?>"><?php echo get_category( 9, ARRAY_A )['name'] ?></button>   
            </div>            
             <div class="row popula">
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
                 <div class="col-12 col-lg-3 col-sm-3 <?= $res_name ?>">
                 <a href="<?the_permalink();?>"><img class="card-img-top" src="<?php echo get_the_post_thumbnail_url(null, 'full'); ?>" alt="<?the_title();?>"></a>
    <div class="card-body">
        <p class="card-text"><small class="text-muted"><?the_time('j F Y');?></small> <?php the_tags('');?></p>
        <?the_content('');?>
        <a href="<?the_permalink();?>" class="btn btn-primary shadow-none">Читать далее →</a>
    </div>
                    </div>
                <?php
                    }
                }
                ?>
                <?php the_posts_pagination(); ?>   
                   
            </div>
                                   
<?php get_footer(); ?>            