<h1><?=$title?></h1>

<!--<?=isset($msg) ? $msg : null?>-->

<?php
    foreach ($users as $user) :
    $user = $user->getProperties();

     $gravatar = 'http://www.gravatar.com/avatar/' . md5(strtolower(trim($user['email']))) . '.jpg?s=80';
?>

<div>
  <h2><a href="<?=$this->url->create('users/id/' . $user['id']) ?>">#<?=$user['id']?>:<img class="gavatar" src="<?=$gravatar?>" title="" style="border-radius:50px" ></a></h2>
  <p><b>Användarnamn:</b> <?=$user['acronym']?></p>
  <p><b>E-post:</b> <?=$user['email']?></p>
  <p><b>Namn:</b> <?=$user['name']?></p>
  <p><b>Skapad:</b> <?=$user['created']?></p>
</div>

<div>
  <p><?=isset($user['updated']) ? 'Användaren är uppdaterad den ' . $user['updated'] : null?>
<!--  <p><?=isset($user['deleted']) ? 'Användaren är raderad den ' . $user['deleted'] : null?> -->
  <p>Användaren är <?=isset($user['active']) ? 'aktiv' : 'inaktiv'?>
  <?=isset($user['deleted']) ? 'och i papperskorgen' : ''?></p>
</div>


<?php endforeach; ?>
