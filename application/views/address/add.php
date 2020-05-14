<?= form_open() ?>
<section>
    <div class="saved-add new-add">
        <img class="fruits watermelon" src="<?= base_url(); ?>/assert/fontend/img/watermelon.svg">
        <img class="fruits grapes" src="<?= base_url(); ?>/assert/fontend/img/grapes.svg">
        <img class="fruits orange" src="<?= base_url(); ?>/assert/fontend/img/orange.svg">
        <img class="fruits avocado" src="<?= base_url(); ?>/assert/fontend/img/avocado.svg">
        <div class="container my-container">
            <?php
            if (isset($address)) {
                ?>
                <h1>Update Address</h1>
                <?php
            } else {
                ?>
                <h1>Add New Address</h1>
                <?php
            }
            ?>
            <div class="add-part">
                <div class="row">
                    <div class="col-sm-6">
                        <img src="<?= base_url() ?>assert/fontend/img/b1.png" class="map-right">
                        <img src="<?= base_url() ?>assert/fontend/img/b2.png" class="map-left">
                        <img src="<?= base_url() ?>assert/fontend/img/b3.png" class="map-top">
                        <img src="<?= base_url() ?>assert/fontend/img/b4.png" class="map-bottom">
                        <div style="height:100%;width:100%" id="map"></div>
                    </div>
                    <div class="col-sm-6">
                        <div class="bill-pay">
                            <div class="billing new-add-bg">
                                <div class="profile billing-form">
                                    <div class="form bill-form">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <input name="address" data-validation="length" data-validation-length="min3" type="text" class="form-control" id="autocomplete" placeholder="Enter your address"  type="text" name="full_address" value="<?= isset($address) ? $address : "" ?>">

                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <input name="address1" type="text" data-validation="length" data-validation-length="min2" class="form-control" id="street_number" placeholder="Street Number (Address 1)" disabled="true" value="<?= isset($address1) ? $address1 : "" ?>">

                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <input name="address2" type="text" data-validation="length" data-validation-length="min3" class="form-control" placeholder="Address 2" id="route" disabled="true" value="<?= isset($address2) ? $address2 : "" ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="buttons">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6">
                                            <input type="hidden" id="lat" name="latitude" value="<?= isset($latitude) ? $latitude : "" ?>">
                                            <input type="hidden" id="lng" name="longitude" value="<?= isset($longitude) ? $longitude : "" ?>">
                                            <input name="city" data-validation="length" data-validation-length="min2" placeholder="CITY" class="button" id="locality" disabled="true" value="<?= isset($city) ? $city : "" ?>">
                                            <input name="country" data-validation="length" data-validation-length="min2" placeholder="COUNTRY" class="button" id="country" disabled="true" value="<?= isset($country) ? $country : "" ?>">
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <input name="postalcode" value="<?= isset($postalcode) ? $postalcode : "" ?>" data-validation="length" data-validation-length="min2" placeholder="POST CODE" class="button" id="postal_code" disabled="true">
                                            <input name="state" value="<?= isset($state) ? $state : "" ?>" data-validation="length" data-validation-length="min2" placeholder="REGION / STATE" class="button" id="administrative_area_level_1" disabled="true">
                                        </div>
                                    </div>
                                </div>
                                <div class="billing payment-part">
                                    <div class="rdo-btn">
                                        <div class="rdo">
                                            <input id="Radio1" name="type" type="radio" value="1" <?= (isset($type) && $type == 1) ? "checked" : "" ?>>
                                            <label for="Radio1"></label>
                                            <p>Home</p>
                                        </div>
                                        <div class="rdo">
                                            <input id="Radio2" name="type" type="radio" value="2"  <?= (isset($type) && $type == 2) ? "checked" : "" ?>>
                                            <label for="Radio2"></label>
                                            <p>Work</p>
                                        </div>
                                        <div class="rdo">
                                            <input id="Radio3" name="type" type="radio" value="3" <?= (isset($type) && $type == 3) ? "checked" : "" ?>>
                                            <label for="Radio3"></label>
                                            <p>Other</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="buttons new-add-btns">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <button class="new-add-save-btn button">save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= form_close() ?>
<?php
if (isset($latitude) && isset($longitude)) {
    ?>
    <script>
        var dataLat = <?= $latitude ?>, dataLon = <?= $longitude ?>;
    </script>
    <?php
} else {
    ?>
    <script>
        var dataLat = '', dataLon = '';
    </script>
    <?php
}
?>
<script src="<?= base_url("assert/fontend/js/address.js") ?>"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=<?= GOOGLE_MAP_KEY ?>&amp;ver=2.1.6&libraries=places&callback=initAutocomplete" async defer></script>