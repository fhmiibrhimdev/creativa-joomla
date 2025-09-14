<?php

/**
 * @package     Joomla.Site
 * @subpackage  Templates.cassiopeia
 *
 * @copyright   (C) 2017 Open Source Matters, Inc. <https://www.joomla.org>
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>

<!doctype html>
<html lang="en">

<head>
  <jdoc:include type="head" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Creativa</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />

  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

  <!-- Font Awesome -->
  <!-- <link rel="stylesheet" href="https://cors-anywhere.herokuapp.com/https://pro.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-xVVam1KS4+Qt2OrFa+VdRUoXygyKIuNWUUUBZYv+n27STsJ7oDOHJgfF0bNKLMJF" crossorigin="anonymous"> -->

  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      prefix: 'tw-'
    }
  </script>
</head>

<body class="tw-flex tw-flex-col tw-min-h-screen">

  <?php
$app = JFactory::getApplication();
$menu = $app->getMenu();
$active = $menu->getActive();
$currentAlias = $active ? $active->alias : '';
?>

<nav class="navbar navbar-expand-lg tw-bg-gray-950">
    <div class="container-fluid tw-text-2xl">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav tw-font-semibold ">
      <a class="nav-link tw-uppercase hover:tw-text-cyan-400 <?php echo $currentAlias == 'home' ? 'tw-text-cyan-400' : 'tw-text-white'; ?>" href="/index.php">HOME</a>
      <a class="nav-link tw-uppercase hover:tw-text-cyan-400 <?php echo $currentAlias == 'organizer' ? 'tw-text-cyan-400' : 'tw-text-white'; ?>" href="/organizer">ORGANIZER</a>
      <a class="nav-link tw-uppercase hover:tw-text-cyan-400 <?php echo $currentAlias == 'registration' ? 'tw-text-cyan-400' : 'tw-text-white'; ?>" href="/registration">REGISTRATION</a>
      <a class="nav-link tw-uppercase hover:tw-text-cyan-400 <?php echo $currentAlias == 'contact-us' ? 'tw-text-cyan-400' : 'tw-text-white'; ?>" href="/contact-us">CONTACT US</a>
    </div>
      </div>
      <a class="navbar-brand tw-uppercase hover:tw-text-cyan-400 tw-text-2xl tw-text-white tw-font-semibold"
        href="#">CREATIVA.ID</a>
    </div>
  </nav>

  
  <main>
    <!-- Joomla Main Component -->
    <jdoc:include type="component" />
  </main>

  <footer class="tw-bg-gray-950 tw-mt-20 tw-text-center tw-text-white tw-p-4">
    <p class="tw-text-xl">© 2025 Creativa.ID</p>
  </footer>



  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>