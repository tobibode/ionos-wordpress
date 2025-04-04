<template shadowrootmode="open">

<script src="https://ce1.uicdn.net/exos/framework/3.0/exos.min.js" async="async" defer="defer"></script>
<link rel="stylesheet" href="https://ce1.uicdn.net/exos/framework/3.0/exos.min.css" />

<div class="page-content">

<main id="content">

<?php
  require_once(__DIR__ . '/blocks/banner/render.php');
?>

  <div class="page-section page-section--narrow">
    <div class="page-section__block">

      <div class="grid grid--full-height">
          <?php
            require_once(__DIR__ . '/blocks/quick-links/render.php');
?>
      </div>

    </div>
  </div>

</main>

</div>

</template>
