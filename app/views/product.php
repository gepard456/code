<?php $this->layout('layout', ['title' => $this->e($name)])?>

<h1><?= $this->e($name) ?></h1>
<p>Описание: <?= $this->e($description) ?></p>
<p>Подробно: <?= $this->e($text) ?></p>