<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
    <h1>All Tasks</h1>

    <table>
        <tr>
            <th>Task</th>
            <th>Status</th>
            <th>Date</th>
        </tr>

        <?php foreach ($tasks as $task): ?>
            <tr>
                <td><?= esc($task['title']) ?></td>
                <td><span class="badge"><?= esc($task['status']) ?></span></td>
                <td><?= esc($task['task_date']) ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
<?= $this->endSection() ?>