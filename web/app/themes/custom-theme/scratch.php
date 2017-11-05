<?php
/*
Template Name: Scratch
*/
?>


<?php get_header(); ?>

<br>

<?php $pc = get_field('presenting_complaint', 177); ?>



<?php var_dump($pc); ?>

<br>

<br>

<?php $pc = get_field('history_of_presenting_complaint', 177); ?>



<?php var_dump($pc); ?>

<br>





<?php get_footer(); ?>