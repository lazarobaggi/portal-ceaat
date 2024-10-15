<?php
  if(isset($_SESSION['success_message']))
  {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert" id="liveAlert">';
    echo '<strong></strong>'.$_SESSION['success_message'];
    echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close">';
    echo '<span aria-hidden="true">&times;</span>';
    echo '</button>';
    echo '</div>';
    unset($_SESSION['success_message']);
  }
  if(isset($_SESSION['error_message']))
  {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert" id="liveAlert">';
    echo '<strong></strong>'.$_SESSION['error_message'];
    echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close">';
    echo '<span aria-hidden="true">&times;</span>';
    echo '</button>';
    echo '</div>';
    unset($_SESSION['error_message']);
  }
?>


