<?php 

include './libs/load.php';

if (!isset($_SESSION['Username'])) {
    header("Location: _signin.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<?php load_template('head'); ?>

<body>
    
        <main class="container p-5">
            <div class="col border bg-light">
                <h2 class="pt-5 px-5" style="color: green">Welcome <?php echo $_SESSION['Username'];?>!</h2>
                <p class="pt-2 px-5 pb-5">If you want to logout, Click here! <a href="_logout.php">Click me</a></p>
            </div>
        </main>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script></body>

</body>
</html>