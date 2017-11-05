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

<?php $sectionCount = 0 ?>

<?php $sectionType = 'history' ?>

 <div class="history">

 	<?php foreach(SECTIONS as $sectionKey => $sectionValue): ?>

 	<?php $sectionData = get_field($sectionKey) ?>

	<div class='section <?php echo $sectionKey; ?>'>

		<div class="section-title"><?php echo $sectionValue; ?></div>



		<?php if($sectionData): ?>

			<?php $sectionCount++; ?>

			<?= $sectionType ?>,<?= $sectionCount ?>

			
			<?php $dataCount=0; ?>

			<?php foreach($sectionData as $data): ?>

				<?php $dataCount++; ?>

				<?php if($data['hidden']): ?>

					<div class="prompt"><?php echo $data['prompt'] ?></div>

					<button class="prompt-button" id='button-<?= $sectionType ?>-<?= $sectionCount ?><?= $dataCount ?>' onclick='revealContent()'>Reveal</button>

				<?php endif; ?>

				<div class="section-content" id='content-<?= $sectionType ?>-<?= $sectionCount ?><?= $dataCount ?>' style='<?php echo ($data['hidden']? "display:none": "display:block"); ?>'><?php echo $data['details'] ?></div>

			<?php endforeach; ?>

		<?php endif; ?>

	</div>

	<?php endforeach ?>
 	

 </div>