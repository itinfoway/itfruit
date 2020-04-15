<section>
    <div class="address">
        <div class="container my-container">
            <div class="add-address">
                <img class="fruits pinapple" src="http://localhost/sliced1/assert/fontend/img/pinapple.svg">
                <img class="fruits strawberry" src="http://localhost/sliced1/assert/fontend/img/strawberry.svg">
                <center>
                    <h1><?= $this->lang->line("fn_wallet_history"); ?></h1>
                </center>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-bordered table-wallet">
                    <thead>
                        <tr>
                            <th><?= $this->lang->line("fn_tranction_id"); ?></th>
                            <th><?= $this->lang->line("fn_description"); ?></th>
                            <th><?= $this->lang->line("fn_tranction_type"); ?></th>
                            <th><?= $this->lang->line("fn_date_time"); ?></th>
                            <th><?= $this->lang->line("fn_amount"); ?></th>
                            <th><?= $this->lang->line("fn_wallet"); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (!empty($data)) {
                            foreach ($data as $t) {
                                ?>
                                <tr>
                                    <td><?=$t->orderid?></td>
                                    <td><?=$t->type?></td>
                                    <td class="<?=($t->credit<0)?"text-danger":"text-success"?>"><?=($t->credit<0)?$this->lang->line("fn_debit"):$this->lang->line("fn_credit")?></td>
                                    <td><?=  date("M/d/Y h:i a",strtotime($t->date_time))?></td>
                                    <td><?=$t->amount?> <?=  is_null($t->amount)?"-":$this->lang->line("fn_sgd")?></td>
                                    <td><?=$t->credit?> <?=$this->lang->line("fn_points")?></td>
                                </tr>
                                <?php
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>