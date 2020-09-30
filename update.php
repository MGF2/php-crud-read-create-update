<?php
@include __DIR__ . '/partials/template/_header.php';
@include __DIR__ . '/partials/update/server.php';
 ?>

<div class="container">
  <form action="partials/update/server-edit.php" method="post">
    <div class="form-group">
      <label for="roomNumber">Numero della stanza</label>
      <input id="roomNumber" type="text" class="form-control" name="roomNumber" value="<?php echo $row['room_number']; ?>">
    </div>
    <div class="form-group">
      <label for="floor">Numero del piano</label>
      <input id="floor" type="text" class="form-control" name="floor" value="<?php echo $row['floor']; ?>">
    </div>
    <div class="form-group">
      <label for="beds">Numero di letti</label>
      <input id="beds" type="text" class="form-control" name="beds" value="<?php echo $row['beds']; ?>">
    </div>
    <div class="form-group">
      <input type="hidden" class="form-control" name="id" value="<?php echo $row['id']; ?>">
    </div>
    <div class="form-group">
      <input id="beds" type="submit" class="form-control bg-warning" value="Modifica">
    </div>

  </form>
</div>

 <?php
 @include __DIR__ . '/partials/template/footer.php';
 ?>
