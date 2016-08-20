<h1>Users</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Username</th>
        <th>Role</th>
    </tr>

    <!-- Aqui é onde iremos iterar nosso objeto de solicitação $articles, exibindo informações de artigos -->

    <?php foreach ($users as $user): ?>
        <tr>
            <td>
                <?= $user->id ?>
            </td>
            <td>
                <?= $user->username ?>
            </td>
            <td>
                <?= $user->role ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>