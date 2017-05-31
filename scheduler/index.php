<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Scheduler</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
<?php

$arrEvents = array(
    1 => array(
        'start_date' => '08:00',
        'end_date'   => '09:00',
        'text'       => 'Terça Teste',
        'day_week'   => 2
    ),
    2 => array(
        'start_date' => '10:00',
        'end_date'   => '09:00',
        'text'       => 'Segunda Teste',
        'day_week'   => 1
    ),
);

$arrWeek = array(
    1 => 'Segunda',
    2 => 'Terça',
    3 => 'Quarta',
    4 => 'Quinta',
    5 => 'Sexta',
    6 => 'Sábado',
    7 => 'Domingo',
);

$arrTime = array(
    '00:00', '01:00', '02:00', '03:00', '04:00', '05:00', '06:00', '07:00', '08:00', '09:00','10:00', '11:00',
    '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00', '19:00', '20:00','21:00', '22:00', '23:00',
);

?>

<table class="table table-bordered">
    <thead>
        <th></th>
        <?php foreach ($arrWeek as $week): ?>
            <th><?php echo $week ?></th>
        <?php endforeach; ?>
    </thead>
    <tbody>
        <?php foreach ($arrTime as $key => $value): ?>
            <tr>
                <td><?php echo $value ?></td>
                <?php foreach ($arrWeek as $week_index => $week): ?>
                    <?php $class = ''; ?>
                    <?php $texto = ''; ?>
                    <?php foreach ($arrEvents as $event): ?>
                        <?php if ($event['day_week'] == $week_index && ($event['start_date'] == $value || $event['end_date'] == $value)): ?>
                            <?php $class = 'style="background-color:#008DFD;color:#fff"' ?>
                            <?php $texto = $event['text'] ?>
                        <?php endif ?>
                    <?php endforeach ?>
                    <td <?php echo $class ?> >
                        <?php echo $texto ?>
                    </td>
                <?php endforeach ?>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

</body>
</html>



