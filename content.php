
<div class='post-block card'>
    <?php if(is_single()) :?>
        <h1 class="mt-4"><?php the_title()?></h1>
    <?php else: ?>
        <?php if(is_page( )):?>
            <h1 class="mt-4"><?php the_title()?></h1>
        <?php else: ?>
            <h1 class="mt-4"><a href="<?php the_permalink()?>"><?php the_title()?></a></h1>
        <?php endif ;?>
    <?php endif; ?>
        <!-- Author Date/Time -->
        <small >
        <?php if(is_single() || is_page()){
           
        }else{
            if(has_category( )){
                echo "Posted in ";
                $category_detail=get_the_category(get_the_ID());//$post->ID
                foreach($category_detail as $cd){
                    echo $cd->cat_name . "|  ";
                }
            }
        }
        ?>
    </small>
    <hr>
    <!-- Preview Image -->
    <!-- <img class="img-fluid rounded" src="http://placehold.it/900x300" alt=""> -->
    <?php if(has_post_thumbnail()) :?>
            <?php the_post_thumbnail(); ?>
    <?php endif;?>

    <?php if(is_single()):?>
        <?php the_content(); ?>   
    <?php else: ?>
        <?php if(is_page( )):?>
            <?php the_content(); ?>
        <?php else: ?>
            <?php the_excerpt(); ?>
            <a class='' href="<?php the_permalink() ?> ">Read more</a>
        <?php endif ;?>
    <?php endif; ?>
    <hr>
</div>

