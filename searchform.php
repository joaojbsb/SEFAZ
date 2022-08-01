<?php
/**
 * Template for displaying search forms in Twenty Sixteen
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">

<div class="row ">

	<div class="col-md-12 text-center ">

		<script language=javascript type="text/javascript">
          document.write (" Águas Lindas de Goiás, " + dayName[now.getDay() ] + ", " + now.getDate () + " de " + monName [now.getMonth() ]   +  " de "  +     now.getFullYear () + ". ")

		</script>
			<label class="float-sm-right">
			<input type="search" class="search-field text-center" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'twentysixteen' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
		</label>
	</div>


	</div>
</form>
