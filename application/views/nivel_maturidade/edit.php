<form class="form-horizontal" method="post" action="<?=base_url('index.php/nivel_maturidade/save');?>" >
<fieldset>

<input type="hidden" id="_id" name="_id" value="<?=$dados['_id'];?>">


<!-- Form Name -->

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="sigla">Sigla</label>  
  <div class="col-md-6">
  <input id="sigla" name="sigla" type="text" placeholder="Sigla do nível de maturidade" class="form-control input-md" required="" 
    value="<?=$dados['sigla'];?>">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nome">Nome</label>  
  <div class="col-md-4">
  <input id="nome" name="nome" type="text" placeholder="Digite o nome do nível de maturidade" class="form-control input-md"
   value="<?=$dados['nome'];?>">
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="descricao">Descrição</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="descricao" name="descricao"><?=$dados['descricao'];?></textarea>
  </div>
</div>

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="button1id"></label>
  <div class="col-md-8">
    <button id="button1id" name="button" value="ok" class="btn btn-success">Salvar</button>
    <button id="button2id" name="button" value="cancelar" class="btn btn-danger" formnovalidate>Cancelar</button>
  </div>
</div>

</fieldset>
</form>
