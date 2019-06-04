<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title ?></title>
</head>
<body>
<?php $hoten = 'Minh' ?>
<?php $cty = 'Sotatek' ?>
{!! $hoten !!}
    <div>
    @section('sidebar')
        Day la sidebar
    @show
    </div>
    {{$name1}}
    <ul>
        {{ $name1 == $hoten ? 'Chairmen' : $name1 == $cty ? 'State of the art technology' : 'No item' }}
    </ul>
    <?php echo $name ?>
</body>
</html>
