<?php
@include __DIR__ . '/partials/template/_header.php';
 ?>

<div class="container">
  <form action="partials/create/server.php" method="post">
    <div class="form-group">
      <label for="roomNumber">Numero della stanza</label>
      <input id="roomNumber" type="text" class="form-control" name="roomNumber" value="" placeholder="Inserisci il numero della stanza">
    </div>
    <div class="form-group">
      <label for="floor">Numero del piano</label>
      <input id="floor" type="text" class="form-control" name="floor" value="" placeholder="Inserisci il numero del piano">
    </div>
    <div class="form-group">
      <label for="beds">Numero di letti</label>
      <input id="beds" type="text" class="form-control" name="beds" value="" placeholder="Inserisci il numero dei letti">
    </div>
    <div class="form-group">
      <input type="hidden" class="form-control" name="id" value="">
    </div>
    <div class="form-group">
      <input type="submit" class="form-control bg-warning" value="Inserisci">
    </div>

  </form>
</div>

 <?php
 @include __DIR__ . '/partials/template/footer.php';
 ?>
