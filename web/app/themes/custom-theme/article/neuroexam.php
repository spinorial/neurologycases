<?php 

//Toggles to see if which part of exam for this case. These are checked
//before loading other parts

$parent_toggles = array('toggle_ul','toggle_ll','toggle_reflexes');

?>

<?php $anchor = ""; ?>
<?php $media = get_field('media'); ?>

<?php $toggle_ul_bool = get_field($parent_toggles[0]); ?>
<?php $toggle_ll_bool = get_field($parent_toggles[1]); ?>
<?php $toggle_reflexes = get_field($parent_toggles[2]); ?>

<?php if($toggle_ul_bool): ?> <!-- Start of Upper Limb Examination -->


	<?php $shoulder_ab = get_field('shoulder_ab'); ?>
	<?php $shoulder_ad = get_field('shoulder_ad'); ?>
	<?php $elbow_fl = get_field('elbow_fl'); ?>
	<?php $elbow_ex = get_field('elbow_ex'); ?>
	<?php $wrist_ex = get_field('wrist_ex'); ?>
	<?php $wrist_fl = get_field('wrist_fl'); ?>

<!-- <div class="article-sections"> -->

<div>

<h2>On Examination</h2>

<div class='prompt' id='examprompt'>
<button id="exambutton" onclick="revealExamination()">Reveal</button>
</div>

<div class="examination" id="neuroexam">

	<?php $anchor = "top"; ?>

	<?php if($media): ?>

		<?php foreach($media as $med): ?>

			<?php if($med['media_location']==$anchor): ?>

			<div class="media"><?php echo $med['media_content']; ?></div>

			<?php endif; ?>
			
		<?php endforeach; ?>

	<?php endif; ?>

	<div class="examtext">

		<p><?php echo get_field("examination_free_text"); ?></p>

	</div>

		<?php $anchor = "eft"; ?>

		<?php if($media): ?>

		<?php foreach($media as $med): ?>

			<?php if($med['media_location']==$anchor): ?>

			<div class="media"><?php echo $med['media_content']; ?></div>

			<?php endif; ?>
			
		<?php endforeach; ?>

	<?php endif; ?>

	<div class="examtables">

	<table class="upper_limb_examination mrc_power">

	<!-- header row -->
		
		<tr>
			<th class='power_label'></th>
			<th>Right</th>
			<th>Left</th>
		</tr>

	<!-- Display the shoulder power in table -->

	<!-- shoulder abduction -->

	<?php if($shoulder_ab['toggle_shoulder_ab']): ?>

	<tr>
		<td>Shoulder Ab</td>
		<td><?php echo $shoulder_ab['shoulder_abduction_r'] ."/5";?></td>
		<td><?php echo $shoulder_ab['shoulder_abduction_l'] ."/5";?></td>
	</tr>

	<?php endif; ?>

	<!-- shoulder adduction -->

	<?php if($shoulder_ad['toggle_shoulder_ad']): ?>

	<tr>
		<td>Shoulder Ad</td>
		<td><?php echo $shoulder_ad['shoulder_adduction_r'] ."/5";?></td>
		<td><?php echo $shoulder_ad['shoulder_adduction_l'] ."/5";?></td>
	</tr>

	<?php endif; ?>

	<!-- elbow flexion -->

	<?php if($elbow_fl['toggle_elbow_fl']): ?>

	<tr>
		<td>Elbow Fl</td>
		<td><?php echo $elbow_fl['elbow_flexion_r'] ."/5";?></td>
		<td><?php echo $elbow_fl['elbow_flexion_l'] ."/5";?></td>
	</tr>

	<?php endif; ?>

	
	<!-- elbow extension -->

	<?php if($elbow_ex['toggle_elbow_ex']): ?>

	<tr>
		<td>Elbow Ex</td>
		<td><?php echo $elbow_ex['elbow_extension_r'] ."/5";?></td>
		<td><?php echo $elbow_ex['elbow_extension_l'] ."/5";?></td>
	</tr>

	<?php endif; ?>

	<?php if($wrist_ex['toggle_wrist_ex']): ?>

	<tr>
		<td>Wrist Ex</td>
		<td><?php echo $wrist_ex['wrist_extension_r'] ."/5"; ?></td>
		<td><?php echo $wrist_ex['wrist_extension_l'] ."/5"; ?></td>
	</tr>

	<?php endif; ?>

	<?php if($wrist_fl['toggle_wrist_fl']): ?>

	<tr>
		<td>Wrist Fl</td>
		<td><?php echo $wrist_fl['wrist_flexion_r'] ."/5"; ?></td>
		<td><?php echo $wrist_fl['wrist_flexion_l'] ."/5"; ?></td>
	</tr>



	<?php endif; ?>

	</table>

<?php endif; ?> <!-- Endo of Upper Limb Examination -->

	<?php $anchor = "ule"; ?>

	<?php if($media): ?>	

		<?php foreach($media as $med): ?>

			<?php if($med['media_location']==$anchor): ?>

			<div class="media"><?php echo $med['media_content']; ?></div>

			<?php endif; ?>
			
		<?php endforeach; ?>

	<?php endif; ?>

	

<?php if($toggle_ll_bool): ?> <!-- Start of Lower limb examination -->

	<?php $hip_fl = get_field('hip_fl'); ?>
	<?php $hip_ex = get_field('hip_ex'); ?>
	<?php $knee_fl = get_field('knee_fl'); ?>
	<?php $knee_ex = get_field('knee_ex'); ?>
	<?php $ankle_dfl = get_field('ankle_dfl'); ?>
	<?php $ankle_pfl = get_field('ankle_pfl'); ?>

	<!-- header row -->

	<table class='lower_limb_examination mrc_power'>
	
	<tr>
		<th class='power_label'></th>
		<th>Right</th>
		<th>Left</th>
	</tr>


	<!-- hip flexion -->

	<?php if($hip_fl['toggle_hip_fl']): ?>

		<tr>
			<td>Hip Fl</td>
			<td><?php echo $hip_fl['hip_flexion_r'] ."/5"; ?></td>
			<td><?php echo $hip_fl['hip_flexion_l'] ."/5"; ?></td>
		</tr>

	<?php endif; ?>

	<!-- hip extension -->

		<?php if($hip_ex['toggle_hip_ex']): ?>

		<tr>
			<td>Hip Ex</td>
			<td><?php echo $hip_ex['hip_extension_r'] ."/5"; ?></td>
			<td><?php echo $hip_ex['hip_extension_l'] ."/5"; ?></td>
		</tr>

	<?php endif; ?>

	<!-- knee extension -->

	<?php if($knee_ex['toggle_knee_ex']): ?>

		<tr>
			<td>Knee Ex</td>
			<td><?php echo $knee_ex['knee_extension_r'] ."/5"; ?></td>
			<td><?php echo $knee_ex['knee_extension_l'] ."/5"; ?></td>
		</tr>

	<?php endif; ?>

	<!-- knee flexion -->

	<?php if($knee_fl['toggle_knee_fl']): ?>

		<tr>
			<td>Knee Fl</td>
			<td><?php echo $knee_fl['knee_flexion_r'] ."/5"; ?></td>
			<td><?php echo $knee_fl['knee_flexion_l'] ."/5"; ?></td>
		</tr>

	<?php endif; ?>

	<!-- ankle plantarflexion -->

	<?php if($ankle_pfl['toggle_ankle_pfl']): ?>

		<tr>
			<td>Ankle Pfl</td>
			<td> <?php echo $ankle_pfl['ankle_plantarflexion_r'] ."/5";?></td>
			<td> <?php echo $ankle_pfl['ankle_plantarflexion_l'] ."/5"; ?></td>
		</tr>

	<?php endif; ?>

	<?php if($ankle_dfl['toggle_ankle_dfl']): ?>

		<tr>
			<td>Ankle Dfl</td>
			<td> <?php echo $ankle_dfl['ankle_dorsiflexion_r'] ."/5";?></td>
			<td> <?php echo $ankle_dfl['ankle_dorsiflexion_l'] ."/5"; ?></td>
		</tr>

	<?php endif; ?>

	</table>


<?php endif; ?> <!-- End of Lower limb examination -->

<?php $anchor = "lle"; ?>

<?php if($media): ?>

		<?php foreach($media as $med): ?>

			<?php if($med['media_location']==$anchor): ?>

			<div class="media"><?php echo $med['media_content']; ?></div>

			<?php endif; ?>
			
		<?php endforeach; ?>

<?php endif; ?>


<?php if($toggle_reflexes): ?> <!-- Start of Rexflexes -->

<?php $reflexes_biceps = get_field('reflexes_biceps'); ?>
<?php $reflexes_triceps = get_field('reflexes_triceps'); ?>
<?php $reflexes_brachioradialis = get_field('reflexes_brachioradialis'); ?>
<?php $reflexes_patella = get_field('reflexes_patella'); ?>
<?php $reflexes_ankle = get_field('reflexes_ankle'); ?>
<?php $reflexes_plantar = get_field('reflexes_plantar'); ?>
<?php $clonus = get_field('clonus'); ?>

<div class="reflexestext"><?php echo get_field("reflexes_free_text"); ?></div>

	<table class="reflexes">

		<tr>
			<th class='reflexes_label'></th>
			<th>Right</th>
			<th>Left</th>
		</tr>

	<!-- biceps reflexes -->

<?php if($reflexes_biceps['toggle_biceps']): ?>

	<tr>
		<td>Biceps</td>
		<td><?php echo $reflexes_biceps['biceps_r']; ?></td>
		<td><?php echo $reflexes_biceps['biceps_l']; ?></td>
	</tr>

<?php endif; ?>	

<!-- triceps reflexes	 -->

<?php if($reflexes_triceps['toggle_triceps']): ?>

	<tr>
		<td>Triceps</td>
		<td><?php echo $reflexes_biceps['biceps_r']; ?></td>
		<td><?php echo $reflexes_biceps['biceps_l']; ?></td>
	</tr>

<?php endif; ?>		

<!-- brachioradialis reflexes -->

<?php if($reflexes_brachioradialis['toggle_brachioradialis']): ?>

	<tr>
		<td>Brachioradialis</td>
		<td><?php echo $reflexes_brachioradialis['brachioradialis_r']; ?></td>
		<td><?php echo $reflexes_brachioradialis['brachioradialis_l']; ?></td>
	</tr>

<?php endif; ?>	

<!-- patella reflexes -->

<?php if($reflexes_patella['toggle_patella']): ?>

	<tr>
		<td>Patella</td>
		<td><?php echo $reflexes_patella['patella_r']; ?></td>
		<td><?php echo $reflexes_patella['patella_l']; ?></td>
	</tr>

<?php endif; ?>	



<!-- ankle reflexes -->


<?php if($reflexes_ankle['toggle_ankle']): ?>

	<tr>
		<td>Ankle</td>
		<td><?php echo $reflexes_ankle['ankle_r']; ?></td>
		<td><?php echo $reflexes_ankle['ankle_l']; ?></td>
	</tr>

<?php endif; ?>	

<!-- pantar reflexes -->


<?php if($reflexes_plantar['toggle_plantar']): ?>

	<tr>
		<td>Plantar</td>
		<td><?php echo $reflexes_plantar['plantar_r']; ?></td>
		<td><?php echo $reflexes_plantar['plantar_l']; ?></td>
	</tr>

<?php endif; ?>	

<!-- clonus -->

<?php if($reflexes_plantar['toggle_plantar']): ?>

	<tr>
		<td>Clonus</td>
		<td><?php echo $clonus['clonus_r']; ?></td>
		<td><?php echo $clonus['clonus_l']; ?></td>
	</tr>

<?php endif; ?>	

</table>


<?php endif; ?> <!-- End of Reflexes -->


</div>

<?php $anchor = "bottom"; ?>

<?php if($media): ?>

		<?php foreach($media as $med): ?>

			<?php if($med['media_location']==$anchor): ?>

			<div class="media"><?php echo $med['media_content']; ?></div>

			<?php endif; ?>
			
		<?php endforeach; ?>

<?php endif; ?>

</div>


</div>



