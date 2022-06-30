<?php
if(isset($_POST['down-all'])){
    // print_r ("dfghjsdfgbhnmngfdsdfghjgfdsadfbnmnbvcxzxcvb mnbvcxzdfgbnhjhgfdsasdfghjhgfdsadfghnmnbvcxzxcvbnmbvfdsadfghjgfdsdfghgfdsdfgk");
       echo "asdfghjkl";
}
?>

<div class="wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                <form action = "/ACM-new/admin/adminPanel/faqadmin/certificate/adminBulkDown.php" method = "POST">
                    <!-- <input type = "button" class="btn btn-primary btn-md pull-right" name = "submit"> -->
                    <input type="submit" class="btn btn-primary btn-md pull-right" name="down-all" />
                </form>
            </div>
        </div>
    </div>
</div>