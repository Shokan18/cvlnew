<div class="row">
    <div class="offset">
        <p class="pull-right">
            <a class="btn" href="<?=$this->createUrl('update', array('id' => $data->id))?>"><i class="icon-pencil"></i> Ред.</a>
            <a class="btn btn-danger delete-link-list" href="#modal-delete" data-toggle="modal" data-title="<?=CHtml::encode($data->name_text)?>" data-id="<?=$data->id?>"><i class="icon-trash"></i> Уд.</a>
        </p>
        <p class="pull-right">
            <?=CHtml::checkbox('PortfolioimagesCheck[status_int][' . $data->id . ']', $data->status_int, array('class' => 'toggle-on-check'))?>
            <span class="label label-info"><i class="icon-eye-open"></i> Видимость</span>
        </p>
        <div style = "display:inline-block; vertical-align: top; margin-right:10px;">
            <? $img = json_decode($data->image, true); ?>
            <img width = "100" src = "/upload/Portfolioimages/tm/<?=$img[0]?>">
        </div>
        <div style="display: inline-block">
            <span class="label label-info"><?=date('d.m.Y', $data->created_at)?></span>
            <? $img = json_decode($data->image, true); ?>
            <h3 style = "margin-top:5px;">
                <a target = "_blank"><?=$data->name_text?></a>
            </h3>
            <p style = "margin-left:0; font-weight:bold;">Порядковый номер: <?=$data->serial_number?></p>
            <p style = "margin-left:0; font-weight:bold;">Порядковый номер в лэндингах: <?=$data->serial_landingnumber?></p>
            <? $parent_name = Portfolio::model()->find("id = '$data->parent_id'")->name_text; ?>
            <p style = "margin-left:0; font-weight:bold;">Относится к группе: <span style="font-size: initial"><?=$parent_name?></span> </p>
        </div>
    </div>
</div>