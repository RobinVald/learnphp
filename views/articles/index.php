<?php include __DIR__ . '/../partials/header.php' ?>
<div class="container">
    <a href="/admin/articles/new" class="button is-primary">new article</a>
    <table class="table is-striped is-fullwidth">
        <thead>
            <th>Id</th>
            <th>Title</th>
            <th>Actions</th>
        </thead>
        <tbody>
            <?php foreach($articles as $article): ?>
                <tr>
                    <td><?=$article->id?></td>
                    <td><?=$article->title?></td>
                    <td>
                        <div class="buttons has-addons">
                            <a class="button is-info" href="/admin/articles/view?id=<?=$article->id?>">view</a>
                            <a class="button is-warning" href="/admin/articles/edit?id=<?=$article->id?>">edit</a>
                            <a class="button is-danger" href="/admin/articles/delete?id=<?=$article->id?>">delete</a>
                        </div>
                    </td>
                </tr>
                <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?php include __DIR__ .  '/../partials/footer.php'; ?>