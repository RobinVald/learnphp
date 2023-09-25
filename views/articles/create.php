<?php include __DIR__ . '/../partials/header.php' ?>
<div class="container">
    <h1 class="is-size-1">new article</h1>
</div>

<form action="/admin/articles" method="POST">
<div class="field">
  <label class="label" for="title">Title</label>
  <div class="control">
    <input class="input" type="text" placeholder="Text input" name="title" id="title">
  </div>
</div>

<div class="field">
  <label class="label">Content</label>
  <div class="control">
    <textarea class="textarea" placeholder="Textarea" name="body" id="body"></textarea>
  </div>
</div>

<div class="field">
  <div class="control">
    <input class="button is-primary" type="submit">
  </div>
</div>
</form>

<?php include __DIR__ .  '/../partials/footer.php'; ?>