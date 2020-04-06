<?php
/**
 * Description of index
 * https://itinfoway.com
 * @author Admin
 */


?>
<div class="row">
    <div class="col-md-12">
        <!-- general form elements disabled -->
        <div class="card card-info card-outline">
            <div class="card-header">
                <h3 class="card-title"><?=$this->lang->line("order_loading")?></h3>
                <div class="card-tools">
                    <a href="<?=  base_url("admin/setting/order_loading/")?>" class="btn btn-info btn-sm"><?=$this->lang->line("btn_list") ?></a>
                </div>
            </div>
            <!-- /.card-header -->
            <?= form_open(); ?>
            <div class="card-body">
            	<div class="form-group">
                    <label><?=$this->lang->line("order_loading_weekday") ?></label>
                     <?=  form_dropdown("week_day ",["1"=>"Monday","2"=>"Tuesday","3"=>"Wednesday","4"=>"Thursay","5"=>"Friday","6"=>"Saturday","7"=>"Sunday"], isset($type) ? $type : null, [ "id" => "type",'readonly'=>'true',"class" => "form-control"]); ?>
                </div>
                <div class="form-group">
                    <label><?= $this->lang->line("ala_carte_head") ?></label>
                    <?= form_multiselect("alacarte_ids[]", $ala_carte_loading, isset($data->alacarte_ids) ? json_decode($data->alacarte_ids) : null, ["class" => "select2", "multiple" => "multiple", "style" => "width: 100%;", "data-placeholder" => $this->lang->line("ala_carte_plac")]); ?>
                </div>
                <div class="form-group">
                    <label><?= $this->lang->line("sub_head") ?></label>
                    <?= form_multiselect("alacarte_ids[]", $ala_carte_loading, isset($data->alacarte_ids) ? json_decode($data->alacarte_ids) : null, ["class" => "select2", "multiple" => "multiple", "style" => "width: 100%;", "data-placeholder" => $this->lang->line("sub_plac")]); ?>
                </div>
                              
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-info"><?=$this->lang->line("btn_save") ?></button>
                <button type="reset" class="btn btn-default float-right"><?=$this->lang->line("btn_reset") ?></button>
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