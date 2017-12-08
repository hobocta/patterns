<?php
/**
 * @var string $name
 * @var closure $pattern
 */

$reflection = new ReflectionFunction($pattern);

$fileName = $reflection->getFileName();

$startLine = $reflection->getStartLine();
$endLine = $reflection->getEndLine() - 1;

$length = $endLine - $startLine;

$source = array_slice(file($fileName), $startLine, $length);

$source = array_map(
    function ($item) {
        return preg_replace('/^\s{12}/', '', $item);
    },
    $source
);

$source = implode('', $source);
?>
<div class="col-12" style="margin-bottom: 15px;">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">
                <?= $name ?>
            </h4>
            <div class="alert alert-warning" role="alert">
                Код:
            </div>
            <pre class="card-text"><?= $source ?></pre>
            <div class="alert alert-success" role="alert">
                Результат:
            </div>
            <pre class="card-text"><? $pattern() ?></pre>
        </div>
    </div>
</div>
