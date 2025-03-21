<?php $this->layout = 'admin'; ?>
<?php

use app\models\Player;

$id = $_GET['id'] ?? false;

if ($id == false) {
    return $this->request->redirect('/admin/players/list.html');
}

$player = Player::get($id);
if (!$player) {
    return $this->request->redirect('/admin/players/list.html');
}


if ($data = $this->request->getPostData()) {
    $player->save($data);
    return $this->request->redirect('/admin/players/list.html');
}

?>
<h2>Adding new Player</h2>
<form method="POST">
    <fieldset>
        <label>
            <span>Name</span><br />
            <input type="text" name="name" value="<?=$player->name?>" />
        </label>
        <br />
        <label>
            <span>Reddit account</span><br />
            <input type="text" name="reddit"  value="<?=$player->reddit?>"  />
        </label>
        <br />
        <label>
            <span>Discord name</span><br />
            <input type="text" name="discord"  value="<?=$player->discord?>"  />
        </label>
        <br />
        <input type="submit" name="Save">
    </fieldset>
</form>
