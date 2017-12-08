<?php
/**
 * @var string $type
 * @var array $patterns
 */

$typeId = sprintf('collapse_%s', substr(md5($type), 0, 3));
?>
<div class="row" style="margin-top: 15px; margin-bottom: 15px;">
    <div class="col-12">
        <button
            class="btn btn-primary"
            type="button"
            data-toggle="collapse"
            data-target="#<?= $typeId ?>"
            aria-expanded="true"
            aria-controls="<?= $typeId ?>">
            <?= $type ?>
        </button>
    </div>
</div>
<div class="collapse" id="<?= $typeId ?>">
    <div class="row">
        <? foreach ($patterns as $name => $pattern) {
            include 'index_pattern.php';
        } ?>
    </div>
</div>
