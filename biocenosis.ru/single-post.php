<?php 
/*
Template Name: Каталог
*/
get_header();
?>

    <div class="container-fluid" style="background-color: #ffffff ">
    <?php the_content(); ?>
    <!-- Put this div tag to the place, where the Comments block will be -->
    <div id="vk_comments"></div>
    <script type="text/javascript"> 
    VK.Widgets.Comments("vk_comments", {limit: 10, attach: "*"});
     </script>	
</div>      
<?php get_footer(); ?>            