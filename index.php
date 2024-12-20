<?php
  // Define page title and meta description
  $pageTitle = 'Welcome to My PHP Website';
  $metaDescription = 'A simple PHP website demonstrating basic concepts';

  // Output HTML header
  echo '<!DOCTYPE html>';
  echo '<html>';
  echo '<head>';
  echo '<title>' . $pageTitle . '</title>';
  echo '<meta name="description" content="' . $metaDescription . '">';
  echo '</head>';
  echo '<body>';

  // Display a simple message
  echo '<h1>' . $pageTitle . '</h1>';
  echo '<p>This is a sample PHP webpage.</p>';

  // Create a dynamic link
  $linkText = 'About';
  $linkUrl = 'about.php';
  echo '<p><a href="' . $linkUrl . '">' . $linkText . '</a></p>';

  // Output HTML footer
  echo '</body>';
  echo '</html>';
?>
