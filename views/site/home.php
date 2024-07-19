<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
/** @var yii\web\View $this */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent mt-5 mb-5">
        <h1 class="display-4" style="color:cornflowerblue">MY TODO LIST</h1>


    </div>

    <div class="body-content">

        <div class="row">
            <!-- On tables -->
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($users as $user):?>
    <tr>
      <th scope="row"><?= Html::encode("{$user->id}") ?></th>
      <td><?= Html::encode("{$user->name}") ?></td>
      <td><?= Html::encode("{$user->password}") ?></td>
      <td>
        <?= Html::a('View') ?>
        <?= Html::a('Update') ?>
        <?= Html::a('Delete') ?>
      </td>
    </tr>
    <?php endforeach; ?>
    <tr>
  </tbody>
</table>
            </div>
        </div>

    </div>
</div>
<?= LinkPager::widget(['pagination' => $pagination]) ?>