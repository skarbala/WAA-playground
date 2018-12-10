<?php
require_once 'odkazovac/_inc/functions.php';
$data = load_data();
$not_deleted_messages = [];
foreach ($data as $message) {
    if ($message->deleted == false) {
        array_push($not_deleted_messages, $message);
    }
}
?>
<!doctype html>
<html lang="en">
<?php include 'partials/head.php'; ?>
<link rel="stylesheet" href="odkazovac/odkazovac.css">
<link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light+Two" rel="stylesheet">

<script>
    var baseURL = '<?php echo "odkazovac/_inc/" ?>';
</script>
<body>
<?php include 'partials/navigation.php' ?>

<div class="container">
  <h1 class="text-center">Odkazovač</h1>
  <div class="col-md-6">
    <h3>Nový odkaz</h3>
      <?php require_once "odkazovac/partials/add-new.form.php" ?>

    <h3 class="sin-header">Všetky odkazy<span><?php echo count($not_deleted_messages) ?></span></h3>
    <div class="sinsListArea">
        <?php if (!empty($data)) : ?>
          <ul class="list-of-sins">
              <?php foreach ($not_deleted_messages as $message): ?>
                <li class="sin" id="<?php echo $message->id ?>">
                    <?php echo $message->title ?>
                  <div class="description">
                    <a data="<?php echo $message->id ?>" href="">detail</a>
                  </div>
                </li>
              <?php endforeach ?>
          </ul>
          <button class="btn btn-block" data-toggle="modal" data-target="#sinCityModal">
            Vymaž všetky
          </button>
        <?php endif ?>
    </div>
  </div>
    <?php include 'odkazovac/partials/detail.php' ?>
    <?php include_once "odkazovac/partials/modal.php" ?>
</div>
<?php include_once "odkazovac/partials/modal_delete_one.php" ?>

</body>

<script src="js/bootstrap.min.js"></script>
<script src="odkazovac/odkazovac.js" type="text/javascript"></script>
<script>

</script>
</html>