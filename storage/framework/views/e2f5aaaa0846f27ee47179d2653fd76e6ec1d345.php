<!doctype html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            text-align: center;
        }

        h1 {
            margin-bottom: 5px;
        }

        h4 {
            margin-top: 0;
            font-weight: normal;
        }

        table {
            width: 100%;
        }

        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
        }

        #filter-section {
            margin: 30px 0;
            text-align: start;
        }
    </style>
</head>
<body onload="window.print()">

<h1><?php echo e($config['institution_name']); ?></h1>
<h4><?php echo e($config['institution_address']); ?></h4>
<hr>

<h2><?php echo e($title); ?></h2>

<?php if($since && $until && $filter): ?>
    <div id="filter-section">
        <?php echo e(__('model.letter.' . $filter)); ?>: <?php echo e("$since - $until"); ?>

        <br>
        Total: <?php echo e(count($data)); ?>

    </div>
<?php endif; ?>

<table>
    <thead>
    <tr>
        <th><?php echo e(__('model.letter.agenda_number')); ?></th>
        <th><?php echo e(__('model.letter.reference_number')); ?></th>
        <th><?php echo e(__('model.letter.from')); ?></th>
        <th><?php echo e(__('model.letter.letter_date')); ?></th>
        <th><?php echo e(__('model.letter.description')); ?></th>
        <th><?php echo e(__('model.letter.note')); ?></th>
    </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $letter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($letter->agenda_number); ?></td>
            <td><?php echo e($letter->reference_number); ?></td>
            <td><?php echo e($letter->from); ?></td>
            <td><?php echo e($letter->formatted_letter_date); ?></td>
            <td><?php echo e($letter->description); ?></td>
            <td><?php echo e($letter->note); ?></td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\laravel-surat-menyurat-v1-main\resources\views/pages/transaction/incoming/print.blade.php ENDPATH**/ ?>