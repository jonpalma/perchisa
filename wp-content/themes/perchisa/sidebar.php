<?php 
        $categories = get_categories(array('orderby' => 'name', 'order' => 'ASC', 'exclude'=> '1'));
?>
<?php foreach($categories as $category) { ?>
    <div class="servicios"><a href="<?php echo get_category_link( $category->term_id ); ?>"><h4><b class="caret-2"></b> <?php echo $category->name; ?></h4></a></div>
<?php } ?>