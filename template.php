<?php
function template($id, $text, $status)
{
?>
  <div onclick="markCompleted.bind(this)(event)" class="<?= $status == 1 ? 'done' : ''; ?>" data-id="<?= $id; ?>">
    <pre><?= $text; ?></pre>

    <div onclick="event.stopPropagation();">
      <a href="/?remove=<?= $id; ?>" class="remove">x</a>
      <a href="#update" class="update-link" startUpdate.bind(this)(event)">U</a>
    </div>
  </div>
<?php
}
?>