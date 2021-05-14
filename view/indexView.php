<?php $title='N\'Goal.com'; ?>

<?php ob_start(); ?>

<h1>N'Goal</h1>
<ul>
<?php
    while($data_sports = $query_sports->fetch())
    {
        echo '<li><img src="public/images/sportsLogos/' . $data_sports['logo'] . '" alt="Ball of the sport"/><a href="' . $data_sports['name'] . '.php">' . $data_sports['formatted_name'] . '</a></li>';
    }
?>
</ul>

<?php $content=ob_get_clean(); ?>
<?php require('template.php'); ?>