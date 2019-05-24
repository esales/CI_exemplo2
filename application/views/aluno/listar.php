<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Listagem de discentes</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="<?php echo base_url('aluno/criar') ?>">Cadastrar</a>
        </div>
    </div>
</div>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Matrícula</th>
            <th width="220px">Ação</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($data as $item) { ?>      
            <tr>
                <td><?php echo $item->title; ?></td>
                <td><?php echo $item->description; ?></td>          
                <td>
                    <form method="DELETE" action="<?php echo base_url('aluno/excluir/' . $item->id); ?>">
                        <a class="btn btn-info" href="<?php echo base_url('aluno/' . $item->id) ?>"> Mostrar</a>
                        <a class="btn btn-primary" href="<?php echo base_url('aluno/editar/' . $item->id) ?>"> Editar</a>
                        <button type="submit" class="btn btn-danger"> Excluir</button>
                    </form>
                </td>     

            </tr>
        <?php } ?>
    </tbody>
</table>