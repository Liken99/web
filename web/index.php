<?php
$news = [
    [
        'id' => 1,
        'title' => 'BBC News',
        'description' => 'BBC News является оперативным подразделением Британской радиовещательной компанией',
        'image' => 'https://nucleus-production.s3.amazonaws.com/uploads/4yWVbzgJJMNcp5iKBGqatsfQoHqynkehjWpzWNBC.jpeg',
        'date' => '2020-03-02',
        'active' => true
    ],
    [
        'id' => 2,
        'title' => 'CNN',
        'description' => 'CNN News является оперативным подразделением Британской радиовещательной компанией',
        'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b1/CNN.svg/1599px-CNN.svg.png',
        'date' => '2020-03-01',
        'active' => false
    ],
    [
        'id' => 3,
        'title' => 'Россия 1',
        'description' => 'Россия 1 является оперативным подразделением Российской радиовещательной компанией',
        'image' => 'https://ds02.infourok.ru/uploads/ex/0e3d/0005c714-4c6d46c3/img1.jpg',
        'date' => '2020-03-04',
        'active' => true
    ],
];



/**
 * @param array $news список новостей
 * @return array список отильтрованных новостей
 */
function findActive($news){
    $result = [];
    foreach ($news as $item) {
        if ($item ['active']) {
            $result[] = $item;
        }
    }
    return $result;
}

/**
 * Поиск новости по id
 * @param array $news
 * @param int $id
 * @return array
 */
function findById($news, $id){
    foreach ($news as $item) {
        if ($item ['id'] == $id) {
            return $item;
        }
    }
    return false;
}

function findNow($news){
    $result = [];
    $now = date( 'Y-m-d');
    foreach ($news as $item) {
        if ($item['date'] == $now){
            $result[] = $item;
        }
    }
    return $result;
}

$news = findActive($news);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
        <main class="d-flex">
            <?php foreach ($news as $item):?>
            <article>
                <h1><?= $item['title']?></h1>
                <img src="<?= $item['image'] ?>" style="width: 150px">
                <p><?= $item['description'] ?></p>
                <p><?= $item['date']?></p>
            </article>
            <?php endforeach; ?>
        </main>
    </body>
</html>
