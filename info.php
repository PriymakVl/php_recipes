<? 
$messages = include 'messages.php';
if($_GET['mess']) {
    $message = $messages['success'][$_GET['mess']];
    echo '<div class="alert alert-success mt-3" >' . $message . '</div>';
}
if($_GET['error']) {
    $message = $messages['error'][$_GET['error']];
    echo '<div class="alert alert-danger mt-3 ">' . $message . '</div>';
}