<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title><?php echo $Site->title() ?></title>
  <?php
    //echo Theme::css('assets/main.css');
    //echo Theme::javascript('assets/jquery.js');
  ?>
  <!-- Load plugins with the hook siteHead -->
  <?php Theme::plugins('siteHead') ?>
</head>
<body>
  <!-- Plugins site body begin -->
  <?php Theme::plugins('siteBodyBegin') ?>
  
  <!-- Site Title -->
  <h1><?php echo $Site->title() ?></h1>

  <?php
    if ($Url->whereAmI()=='home') {
        foreach ($pages as $Page) {
            echo '<h1>'.$Page->title().'</h1>';
            echo '<div>'.$Page->content().'</div>';
            echo '<hr>';
        }
    }
    elseif ($Url->whereAmI()=='page') {
        echo '<h1>'.$Page->title().'</h1>';
        echo '<div>'.$Page->content().'</div>';
    }
    elseif ($Url->whereAmI()=='category') {
        echo 'The user is browsing a particular category';
    }
    elseif ($Url->whereAmI()=='tag') {
        echo 'The user is browsing a particular tag';
    }
  ?>
  <!-- Plugins site body end -->
  <?php Theme::plugins('siteBodyEnd') ?>
</body>
</html>
