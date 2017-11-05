<?php

const SECTIONS = [
    'presenting_complaint' => 'Presenting Complaint',
    'history_of_presenting_complaint' => 'History of Presenting Complaint',
    'past_medical_history' => 'Past Medical History',
    'family_history' => 'Family History','differential_diagnosis_1'=>'Differential 
    Diagnosis',
];

?>

    <div> <!-- Start of Presenation history -->

    <?php

    $overallCounter = 0;
    foreach (SECTIONS as $sectionName => $sectionTitle) : ?>

        <?php $section = get_field($sectionName); ?>

        <?php if ($section) : ?>

            <div class="<?= $sectionName ?>">

            <h2><?= $sectionTitle ?></h2>

            <?php foreach ($section as $element) : ?>

                <?php $hideElement = (isset($element['hidden']) && $element['hidden']) ? true : false; ?>

                <!-- Prompt message and reveal button -->
                <?php if ($hideElement) : ?>
                    <div class="prompt">
                        <?= $element['prompt'] ? '<h4>' . $element['prompt'] . '</h4>' : '' ?>
                        <button id="button-<?= $overallCounter ?>"
                                onclick="revealElementById('element-' + (<?= $overallCounter ?>), this)">
                            Reveal
                        </button>
                    </div>
                <?php endif; ?>

                <!-- Element body content -->
                <div id="element-<?= $overallCounter ?>"
                     class="element <?= $hideElement ?: 'reveal' ?>">
                    <?= $element['details'] ?>
                </div>

                <?php
                $overallCounter++;
            endforeach; ?>

        <?php endif; ?>

        </div>

    <?php endforeach; ?>

</div> <!-- End of Presentation history -->