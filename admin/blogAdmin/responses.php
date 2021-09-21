<?php


$db = mysqli_connect("localhost","root","","acmbackend");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>

<?php
include('api.php');
?>

<?php
$page = isset($_GET["page"]) ? $_GET["page"] : 1;
$ID = $_GET["Id"];
$formName = $_GET["name"];

?>

<script>
        let allEvents = document.getElementById("eventPage");
        let urlEvent = './admin/blogAdmin/api.php/?q=readResponses&Id=' + <?php echo $ID ?> + '&name=' + <?php echo $formName ?>;
        // let pagination = document.getElementById("pagination_row_2021");
        // allEvents.innerHTML = "";
        $(document).ready(function() {
            $.ajax({
                url: urlEvent,
                method: 'GET',
                dataType: 'JSON',
                success: function(data) {
                    console.log("check data ywar", data);
                    if (<?php echo $page ?> > Math.ceil(data[1] / 7)) {
                        allEvents.innerHTML += `<h1 class='noEvents'>No Events on this page</h1>`;
                    } else {
                        data[0].forEach(allEvent);
                    }