<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?= esc($title) ?></title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>

<body>

    <!-- HEADER: MENU + HEROE SECTION -->
    <header>
        <h1><?= esc($heading) ?></h1>
    </header>

    <!-- CONTENT -->

    <section>

        <table class="table table-bordered">
            <thead>
                <th>Time Used</th>
                <th>Step</th>
                <th>Description</th>
            </thead>
            <tbody>
                <?php foreach ($todo_list as $x => $x_value) : ?>
                    <tr>
                        <td><?= esc($x) ?></td>
                        <?php foreach ($x_value as $x => $value) : ?>
                            <td><?= esc($value) ?></td>
                        <?php endforeach ?>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </section>

</body>

</html>