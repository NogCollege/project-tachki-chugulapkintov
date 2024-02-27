<? require_once('controllers/connect.php');?>


<table>
<tr>
<th>id</th>
<th>ava rent</th>
<th>title</th>
<th>city</th>
<th>category</th>
<th>full name</th>
<th>year</th>
<th>engin</th>
<th>engin capacity</th>
<th>horse</th>
<th>cost max</th>
<th>cost med</th>
<th>cost min</th>
<th>full description</th>
</tr>

<?php
// Сохранение нового (до получения!):
if (!empty($_POST)) {
$ava_rent = $_POST['ava_rent'];
$title = $_POST['title'];
$city = $_POST['city'];
$category = $_POST['category'];
$full_name = $_POST['full_name'];
$year = $_POST['year'];
$engin = $_POST['engin'];
$engin_capacity = $_POST['engin_capacity'];
$horse = $_POST['horse'];
$cost_max = $_POST['cost_max'];
$cost_med = $_POST['cost_med'];
$cost_min = $_POST['cost_min'];
$full_description = $_POST['full_description'];


$query = "INSERT INTO catalog SET 
ava_rent='$ava_rent', title='$title', city='$city', category='$category', full_name='$full_name', year='$year', engin='$engin', engin_capacity='$engin_capacity', horse='$horse', 
cost_max='$cost_max', cost_med='$cost_med', cost_min='$cost_min', full_description='$full_description'
";

mysqli_query($link, $query) or die(mysqli_error($link));
}

// Удаление|перенос по id (до получения!):
if (isset($_GET['delete'])) {
$del = $_GET['delete'];

$query="INSERT INTO deleted SELECT * FROM catalog WHERE id=$del";
mysqli_query($link, $query) or die(mysqli_error($link));

$query="DELETE FROM catalog WHERE id=$del";
mysqli_query($link, $query) or die(mysqli_error($link));

}

// Получение всех работников:
$query = "SELECT * FROM catalog";
$result = mysqli_query($link, $query) or
die(mysqli_error($link));
for ($data = []; $row = mysqli_fetch_assoc($result);
$data[] = $row);



// Вывод на экран:
$result = '';
foreach ($data as $elem) {
$result .= '<tr>';
$result .= '<td>' . $elem['id'] . '</td>';
$result .= '<td>' . $elem['ava_rent'] . '</td>';
$result .= '<td>' . $elem['title'] . '</td>';
$result .= '<td>' . $elem['city'] . '</td>';
$result .= '<td>' . $elem['category'] . '</td>';
$result .= '<td>' . $elem['full_name'] . '</td>';
$result .= '<td>' . $elem['year'] . '</td>';
$result .= '<td>' . $elem['engin'] . '</td>';
$result .= '<td>' . $elem['engin_capacity'] . '</td>';
$result .= '<td>' . $elem['horse'] . '</td>';
$result .= '<td>' . $elem['cost_max'] . '</td>';
$result .= '<td>' . $elem['cost_med'] . '</td>';
$result .= '<td>' . $elem['cost_min'] . '</td>';
$result .= '<td>' . $elem['full_description'] . '</td>';
$result .= '<td><a href="./controllers/upload-photos.php?id=' . $elem['id'] .'">Фотографии</a></td>';
$result .= '<td><a href="?delete=' . $elem['id'] .'">удалить</a></td>';
$result .= '</tr>';
}
echo $result;


?>
</table>


<?php
function input($title)
{
if (isset($_POST[$title])) {
$value = $_POST[$title];
} else {
$value = '';
}
return '<input title="' . $title . '" value="' . $value
.'">';
}

?>
<form action="" method="POST">
<input type="text" name="ava_rent" placeholder="ava rent" value="<?php input('ava_rent'); ?>">
<input type="text" name="title" placeholder="title" value="<?php input('title'); ?>">
<input type="text" name="city" placeholder="city" value="<?php input('city'); ?>">
<input type="text" name="category" placeholder="category" value="<?php input('category'); ?>">
<input type="text" name="full_name" placeholder="full_name" value="<?php input('full_name'); ?>">
<input type="text" name="year" placeholder="year" value="<?php input('year'); ?>">
<input type="text" name="engin" placeholder="engin" value="<?php input('engin'); ?>">
<input type="text" name="engin_capacity" placeholder="engin_capacity" value="<?php input('engin_capacity'); ?>">
<input type="text" name="horse" placeholder="horse" value="<?php input('horse'); ?>">
<input type="text" name="cost_max" placeholder="cost_max" value="<?php input('cost_max'); ?>">
<input type="text" name="cost_med" placeholder="cost_med" value="<?php input('cost_med'); ?>">
<input type="text" name="cost_min" placeholder="cost_min" value="<?php input('cost_min'); ?>">
<input type="text" name="full_description" placeholder="full_description" value="<?php input('full_description'); ?>">
<input type="submit" value="добавить автомобиль">
</form>

<? 
require_once('controllers/create_folders.php');
?>








