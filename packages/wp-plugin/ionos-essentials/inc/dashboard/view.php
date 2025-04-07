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
            require(__DIR__ . '/blocks/quick-links/render.php');
?>
      </div>
    </div>

    <div class="page-section page-section--narrow">
          <div class="page-section__block">

            <div class="grid grid--full-height">

              <div class="grid-col grid-col--3 grid-col--medium-6 grid-col--small-12">

                <div class="card __direct-selection">
                  <header class="card__header">
                    <img class="card__visual" src="https://placehold.co/320x180">
                  </header>
                  <div class="card__content">
                    <section class="card__section">
                      <h3 class="card__preheadline">Pre Headline</h3>
                      <h2 class="card__headline">Card Headline</h2>
                      <p class="paragraph">Aliqua aliquip aliquip amet amet. Aute aute cillum commodo commodo. Consectetur consequat culpa culpa cupidatat deserunt.</p>
                    </section>
                    <footer class="card__footer card__footer--align-center">
                      <a class="button button--primary __direct-selection--target">Select</a>
                    </footer>
                  </div>
                </div>

              </div>

              <div class="grid-col grid-col--3 grid-col--medium-6 grid-col--small-12">

                <div class="card __direct-selection">
                  <header class="card__header">
                    <img class="card__visual" src="https://placehold.co/320x180">
                  </header>
                  <div class="card__content">
                    <section class="card__section">
                      <h3 class="card__preheadline">Pre Headline</h3>
                      <h2 class="card__headline">Card Headline</h2>
                      <ul class="check-list">
                        <li>Aliqua aliquip</li>
                        <li>Aute aute cillum</li>
                        <li>Consectetur</li>
                      </ul>
                    </section>
                    <footer class="card__footer card__footer--align-center">
                      <a class="button __direct-selection--target">Order now</a>
                    </footer>
                  </div>
                </div>

              </div>

              <div class="grid-col grid-col--3 grid-col--medium-6 grid-col--small-12">

                <div class="card __direct-selection">
                  <header class="card__header">
                    <img class="card__visual" src="https://placehold.co/320x180">
                  </header>
                  <div class="card__content">
                    <section class="card__section">
                      <h2 class="card__headline">Card Headline</h2>
                      <p class="paragraph">Aliqua aliquip aliquip amet amet. Aute aute cillum commodo commodo. Consectetur consequat culpa culpa cupidatat deserunt.</p>
                    </section>
                    <footer class="card__footer card__footer--align-center">
                      <a class="button __direct-selection--target">Order now</a>
                    </footer>
                  </div>
                </div>

              </div>

              <div class="grid-col grid-col--3 grid-col--medium-6 grid-col--small-12">

                <div class="card __direct-selection">
                  <header class="card__header">
                    <img class="card__visual" src="https://placehold.co/320x180">
                  </header>
                  <div class="card__content">
                    <section class="card__section">
                      <h2 class="card__headline">Card Headline</h2>
                      <h4 class="card__subheadline">Sub Headline</h4>
                      <ul class="check-list">
                        <li>Aliqua aliquip</li>
                        <li>Aute aute cillum</li>
                        <li>Consectetur</li>
                      </ul>
                    </section>
                    <footer class="card__footer card__footer--align-center">
                      <a class="button __direct-selection--target">Order now</a>
                    </footer>
                  </div>
                </div>

              </div>

            </div>

          </div>
        </div>
  </div>

</main>

</div>

</template>
