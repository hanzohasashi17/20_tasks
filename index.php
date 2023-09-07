<?php
$tasks = [
    [
        "id" => 1,
        "title" => "arrays and loop: posts",
        "path" => "task_1.php",
        "isDone" => true
    ],
    [
        "id" => 2,
        "title" => "arrays and loop: filter",
        "path" => "task_2.php",
        "isDone" => true
    ],
    [
        "id" => 3,
        "title" => "arrays and loop: diagramm",
        "path" => "task_3.php",
        "isDone" => true
    ],
    [
        "id" => 4,
        "title" => "arrays and loop: images",
        "path" => "task_4.php",
        "isDone" => true
    ],
    [
        "id" => 5,
        "title" => "arrays and loop: users",
        "path" => "task_5.php",
        "isDone" => true
    ],
    [
        "id" => 6,
        "title" => "condition: users",
        "path" => "task_6.php",
        "isDone" => true
    ],
    [
        "id" => 7,
        "title" => "arrays and loop: contacts",
        "path" => "task_7.php",
        "isDone" => true
    ],
    [
        "id" => 8,
        "title" => "condition: link",
        "path" => "task_8.php",
        "isDone" => true
    ],
    [
        "id" => 9,
        "title" => "arrays and loop: admin panel",
        "path" => "task_9.php",
        "isDone" => true
    ],
    [
        "id" => 10,
        "title" => "database: post",
        "path" => "task_10.php",
        "isDone" => true
    ],
    [
        "id" => 11,
        "title" => "session, database: alert",
        "path" => "task_11.php",
        "isDone" => true
    ],
    [
        "id" => 12,
        "title" => "session, database: alert 2",
        "path" => "task_12.php",
        "isDone" => true
    ],
    [
        "id" => 13,
        "title" => "session, handler",
        "path" => "task_13.php",
        "isDone" => true
    ],
    [
        "id" => 14,
        "title" => "session, condition: counter",
        "path" => "task_14.php",
        "isDone" => true
    ],
    [
        "id" => 15,
        "title" => "password_hash(): register",
        "path" => "task_15.php",
        "isDone" => true
    ],
    [
        "id" => 16,
        "title" => "log out",
        "path" => "task_16.php",
        "isDone" => true
    ],
    [
        "id" => 17,
        "title" => "file upload: images",
        "path" => "task_17.php",
        "isDone" => true
    ],
    [
        "id" => 18,
        "title" => "file upload: delete images",
        "path" => "task_18.php",
        "isDone" => true
    ],
    [
        "id" => 19,
        "title" => "file upload: multiple",
        "path" => "task_19.php",
        "isDone" => true
    ],
]; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task page</title>
</head>
<body>
    <h3>Student: <span class="name">Aidos Sergibaev</span></span> <br> <a href="https://hh.kz/resume/c7025a5cff0c223ad90039ed1f797142793968"><span>resume on hh.kz</span><br></a><a href="https://github.com/hanzohasashi17"><span>account on github.com</span></a></h3>
    <table>
        <tr>
            <th>Task №</th>
            <th>Title</th>
            <th>To page</th>
            <th>Achievement</th>
        </tr>
        <?php
        if ($tasks) {
            foreach ($tasks as $task) {
        ?>
        <tr>
            <td><?= $task['id'] ?></td>
            <td><?= $task['title'] ?></td>
            <td><a href="<?= $task['path'] ?>"><?= $task['path'] ?></a></td>
            <td><span><?= $task['isDone'] ? "done" : '' ?></span></td>
        </tr>
        <?php
            }}
        ?>
    </table>
</body>
</html>
<style>
    table {
        margin: 0 auto;
    }
    td {
        padding-left: 10px;
        padding-right: 10px;
    }
    .name {
        font-size: 18px;
        color: #a90707;
    }
    a {
        text-decoration: none;
    }
    span {
        font-size: 12px;
        color: rgba(35,54,144,0.44);
    }
    td span {
        color: #a90707;
        display: flex;
        justify-content: center;
    }
</style>