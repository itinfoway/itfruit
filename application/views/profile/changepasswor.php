<?php
/**
 * Description of changepasswor
 * https://itinfoway.com
 * @author Admin
 */
?>
<section>
    <div class="container my-container">
        <div class="profile">
            
            <!-- Modal -->

            <div class="form">
                <?= form_open() ?>
                <div class="row">
                    <div class="row">
                        <div class="col-sm-12">
                            <h1>change password</h1>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Enter Old Password" name="oldpassword">

                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Enter New Password" name="new_password" data-validation="strength" data-validation-strength="2">

                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Enter Confirm Password"  data-validation="confirmation" data-validation-confirm="new_password">

                            </div>
                        </div>
                       
                    <center><button type="submit" class="btn btn2 upload-result"> SAVE </button></center>
                        <?= form_close() ?>
                </div>
            </div>
        </div>
</section>
