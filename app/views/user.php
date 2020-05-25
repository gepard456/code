<?php $this->layout('layout', ['title' => 'User Profile'])?>

<h1>Name: <?= $this->e($name) ?></h1>
<p>Surname: <?= $this->e($surname) ?></p>