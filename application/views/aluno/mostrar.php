<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Mostrar</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="<?php echo base_url('aluno');?>"> voltar</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nome:</strong>
            <?php echo $item->title; ?>
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Matrícula:</strong>
            <?php echo $item->description; ?>
        </div>
    </div>
</div>