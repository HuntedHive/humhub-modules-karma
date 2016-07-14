<?php
use humhub\modules\karma\models\KarmaUser;
?>
<div class="pull-left entry">
    <span class="count"><?php echo KarmaUser::score($user->id); ?></span><br>
    <span class="title">Karma Score</span>
</div>