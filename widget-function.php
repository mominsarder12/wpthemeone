<?php

// my widget function start here
class My_Widget extends WP_Widget
{
	public function __construct()
	{
		parent::__construct(
			'my-widget',  // Base ID
			'My Widget'   // Name
		);
		add_action('widgets_init', function () {
			register_widget('My_Widget');
		});
	}

	public function widget($args, $instance)
	{
		echo $args["before_widget"];
		echo $args["before_title"];
		echo  $instance['title'];
		echo $args["after_title"];
		echo "<p>" . $instance['desc'] . "</p>";
		echo $args["after_widget"];
	}

	public function form($instance)
	{
		$title = $instance['title'];
		$desc = $instance['desc'];
?>
		<p>
			<label for="<?php echo $this->get_field_id('title'); ?>">Title</label>
			<input type="text" name="<?php echo $this->get_field_name('title'); ?>" id="<?php echo $this->get_field_id('title'); ?>" value="<?php echo $title; ?>">
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('desc'); ?>">Description</label>
			<textarea name="<?php echo $this->get_field_name('desc'); ?>" id="<?php echo $this->get_field_id('desc'); ?>"> <?php echo $desc; ?> </textarea>
		</p>
		<?php
	}

	// public function update( $new_instance, $old_instance ) {

	// }

}
$my_widget = new My_Widget();
// my widget function end here


// latest post widget function start here
class my_recent_post extends WP_Widget
{
	public function __construct()
	{
		parent::__construct(
			'my-recent-post',  // Base ID
			'My recent Post'   // Name
		);
		add_action('widgets_init', function () {
			register_widget('my_recent_post');
		});
	}

	public function widget($args, $instance)
	{
		echo $args["before_widget"];
		echo $args["before_title"];
		echo  $instance['title'];
		echo $args["after_title"];
		$arg = array(
			'post_type' => 'post',
			'posts_per_page'    => $instance['count'],
			'order'    => $instance['order']
		);
		$query = new WP_Query($arg);
		while ($query->have_posts()) {
			$query->the_post();
		?>
			<div class="single-latest-post">
				<img src="<?php the_post_thumbnail_url(); ?>" alt="">
				<h5><?php the_title(); ?></h5>
			</div>
			<p class="center-single"><?php the_date(); ?></p>

		<?php

		}
		echo $args["after_widget"];
	}

	public function form($instance)
	{
		$title = $instance['title'];
		$count = $instance['count'];
		$order = $instance['order'];
		?>
		<p>
			<label for="<?php echo $this->get_field_id('title'); ?>">Title</label>
			<input type="text" name="<?php echo $this->get_field_name('title'); ?>" id="<?php echo $this->get_field_id('title'); ?>" value="<?php echo $title; ?>">
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('count'); ?>">Count</label>
			<input type="text" name="<?php echo $this->get_field_name('count'); ?>" id="<?php echo $this->get_field_id('count'); ?>" value="<?php echo $count; ?>">
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('order'); ?>" type="text">OrderBy</label>
			<select name="<?php echo $this->get_field_name('order'); ?>" id="<?php echo $this->get_field_id('order'); ?>">
				<option value='ASC' <?php echo ($order == 'ASC') ? 'selected' : ''; ?>>ASC</option>
				<option value='DESC' <?php echo ($order == 'DESC') ? 'selected' : ''; ?>>DESC</option>


			</select>
		</p>

<?php
	}

	// public function update( $new_instance, $old_instance ) {

	// }

}
$my_recent_post = new my_recent_post();
// latest post widget function end here



?>