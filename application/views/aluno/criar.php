<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Cadastrar novo discente</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="<?php echo base_url('aluno'); ?>"> Back</a>
        </div>
    </div>
</div>

<form method="post" action="<?php echo base_url('alunoCriar'); ?>">
    <?php
    if ($this->session->flashdata('errors')) {
        echo '<div class="alert alert-danger">';
        echo $this->session->flashdata('errors');
        echo "</div>";
    }
    ?>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nome</strong>
                <input type="text" name="title" class="form-control">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Matrícula</strong>
                <input type="text" name="description" class="form-control">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
    </div>
</form>