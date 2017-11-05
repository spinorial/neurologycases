<?php 

const SECTIONS = [
    'presenting_complaint' => 'Presenting Complaint',
    'history_of_presenting_complaint' => 'History of Presenting Complaint',
    'past_medical_history' => 'Past Medical History',
    'family_history' => 'Family History','differential_diagnosis_1'=>'Differential 
    Diagnosis',
];

 ?>


<!-- Displays the history of the case  -->

 <div class="history">

 	<?php foreach(SECTIONS as $sectionKey => $sectionValue): ?>

 	<?php $sectionData = get_field($sectionKey) ?>

	<div class='section <?php echo $sectionKey; ?>'>

		<div class="section-title"><?php echo $sectionValue; ?></div>

		<?php if($sectionData): ?>

			<?php foreach($sectionData as $data): ?>

				<?php echo ($data['hidden']? "display:none": "display:block"); ?>

				<div class="section-content" style='<?php echo ($data['hidden']? "display:none": "display:block"); ?>'><?php echo $data['details'] ?></div>

			<?php endforeach; ?>

		<?php endif; ?>

	</div>

	<?php endforeach ?>
 	

 </div>