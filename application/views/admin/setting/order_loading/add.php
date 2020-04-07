<?php
/**
 * Description of index
 * https://itinfoway.com
 * @author Admin
 */
$fromName = [
    'type' => 'text',
    "name" => "name",
    'class' => 'form-control',
    "data-validation" => "length",
    "data-validation-length" => "1-11",
    'id' => "name",
    "placeholder" => $this->lang->line("order_loading_name_plac"),
    'value' => isset($name) ? $name : "",
];
$fromAlacarte = [
    'type' => 'text',
    "name" => "ala_carte_loading",
    'class' => 'form-control',
    "data-validation" => "length,number",
    "data-validation-length" => "1-11",
    'id' => "ala_carte_loading",
    "placeholder" => $this->lang->line("ala_carte_plac"),
    'value' => isset($ala_carte_loading) ? $ala_carte_loading : "",
];

$fromSubscription = [
    'type' => 'text',
    "name" => "subscription_loading",
    'class' => 'form-control',
    "data-validation" => "length,number",
    "data-validation-length" => "1-11",
    'id' => "subscription_loading",
    "placeholder" => $this->lang->line("sub_plac"),
    'value' => isset($subscription_loading) ? $subscription_loading : "",
];
?>
<div class="row">
    <div class="col-md-12">
        <!-- general form elements disabled -->
        <div class="card card-info card-outline">
            <div class="card-header">
                <h3 class="card-title"><?= $this->lang->line("order_loading") ?></h3>
                <div class="card-tools">
                    <a href="<?= base_url("admin/setting/order-loading/") ?>" class="btn btn-info btn-sm"><?= $this->lang->line("btn_list") ?></a>
                </div>
            </div>
            <!-- /.card-header -->
            <?= form_open(); ?>
            <div class="card-body">
                 <div class="form-group">
                    <label><?= $this->lang->line("order_loading_name") ?></label>
                    <?= form_input($fromName); ?>
                </div>
                <div class="form-group">
                    <label><?= $this->lang->line("order_loading_weekday") ?></label>
                    <?= form_dropdown("week_day", ["1" => "Monday", "2" => "Tuesday", "3" => "Wednesday", "4" => "Thursday", "5" => "Friday", "6" => "Saturday", "7" => "Sunday"], isset($week_day) ? $week_day : null, [ "id" => "type", "class" => "form-control"]); ?>
                </div>
                <div class="form-group">
                    <label><?= $this->lang->line("ala_carte_head") ?></label>
                    <?= form_input($fromAlacarte); ?>
                </div>
                <div class="form-group">
                    <label><?= $this->lang->line("sub_head") ?></label>
                    <?= form_input($fromSubscription); ?>
                </div>

            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-info"><?= $this->lang->line("btn_save") ?></button>
                <button type="reset" class="btn btn-default float-right"><?= $this->lang->line("btn_reset") ?></button>
            </div>
            <?= form_close(); ?>
            <!-- /.card-body -->
        </div>
    </div>
</div>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<script>
    $.validate();
</script>