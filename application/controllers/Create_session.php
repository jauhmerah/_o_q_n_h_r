<?php
session_start();
include ('steps.php'); //exteranlised steps.php
?>

<?php
if ((isset($username)) && (isset($us_id))) { //checks if user is logged in
    if (allowed_in() === "Allowed") {
        //create_session.php code:
    } else {
        $page = allowed_in() + 1;
?>
 <div class="boxed">
<a href="<?php echo $steps[$page] ?>">Continue with Current Assessment</a>
<?php
    }

} else {
    echo "Please Login to Access this Page | <a href='./main/page/signin'>Sign In</a>";
    //show above echo if user is not logged in
}
?>