<?php

/**
 * BuddyPress - Users Header
 *
 * @package BuddyPress
 * @subpackage bp-default
 */

?>

<?php do_action( 'bp_before_member_header' ); ?>



<div id="item-header-content">

	
		<?php
			if (bp_displayed_user_id() == get_current_user_id()){
				echo '<h2 class="content-editable" data-field="display_name" data-table="users" contenteditable="true">';
				echo get_user_display_name(bp_displayed_user_id());
				echo '</h2>';
			} else {
				echo '<h2><a href="<?php bp_displayed_user_link(); ?>">';
				echo get_user_display_name(bp_displayed_user_id());
				echo '</a></h2>';
			}
		?>
	

	
	<!--<span class="activity"><?php bp_last_activity( bp_displayed_user_id() ); ?></span>-->

	<?php do_action( 'bp_before_member_header_meta' ); ?>

	<div id="item-meta">

		<?php if ( bp_is_active( 'activity' ) ) : ?>

			<div id="latest-update">

				<?php bp_activity_latest_update( bp_displayed_user_id() ); ?>

			</div>

		<?php endif; ?>

		<div id="item-buttons">

			<?php do_action( 'bp_member_header_actions' ); ?>

		</div><!-- #item-buttons -->

		<?php
		/***
		 * If you'd like to show specific profile fields here use:
		 * bp_profile_field_data( 'field=About Me' ); -- Pass the name of the field
		 */
		 do_action( 'bp_profile_header_meta' );

		 ?>

	</div><!-- #item-meta -->

</div><!-- #item-header-content -->

<?php do_action( 'bp_after_member_header' ); ?>

<?php do_action( 'template_notices' ); ?>