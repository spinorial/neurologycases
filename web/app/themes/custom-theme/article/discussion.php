<?php 

const SECTIONSB = [
    'differential_diagnosis_3' => 'Differential Diagnosis','discussion'=>'Discussion'
];

 ?>


<!-- Displays the history of the case  -->

<?php $sectionCount = 0 ?>


<!-- Change this variable for the different sectin types -->
<?php $sectionType = 'discussion' ?>

 <div class="discussion">

 	<?php foreach(SECTIONSB as $sectionKey => $sectionValue): ?>

 	<?php $sectionData = get_field($sectionKey) ?>

		<?php if($sectionData): ?>

		<div class='section <?php echo $sectionKey; ?>'>

		<div class="section-title"><?php echo $sectionValue; ?></div>

			<?php $sectionCount++; ?>

			
			<?php $dataCount=0; ?>

			<?php foreach($sectionData as $data): ?>

				<?php $dataCount++; ?>

				<?php if($data['hidden']): ?>

					<div class="prompt" id='prompt-<?= $sectionType ?>-<?= $sectionCount ?><?= $dataCount ?>'><?php echo $data['prompt'] ?></div>

					<button class="prompt-button" id='button-<?= $sectionType ?>-<?= $sectionCount ?><?= $dataCount ?>' onclick='revealContent()'>Reveal</button>

				<?php endif; ?>

				<div class="section-content" id='content-<?= $sectionType ?>-<?= $sectionCount ?><?= $dataCount ?>' style='<?php echo ($data['hidden']? "display:none": "display:block"); ?>'><?php echo $data['details'] ?>


					<?php if($sectionKey=='discussion'): ?>

					<div class="section-title">References</div>

					<div class="section-content"><?php echo get_field('references') ?></div>

					<?php endif; ?>
					

				</div>

			<?php endforeach; ?>

		<?php endif; ?>


	</div>

	<?php endforeach ?>

 </div>