<style type="text/css">
    #header {
        color: blue;
        background-color: #EE0000 }
</style>

<div id="header">
    <div id="headerimg">
        <h1>
            <a href="<?php echo get_option('home'); ?>">
				<?php bloginfo('name'); ?></a>
        </h1>
        <div class="description">
			<?php bloginfo('description'); ?>
            <br>
            <img src="<?php bloginfo('stylesheet_directory'); ?>/Imagenes/leo.jpg">
        </div>
    </div>
</div>