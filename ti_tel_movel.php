<!--<p>lol lol lol</p>-->

<div class="crud row">
    <div class="seletor col-sm-2"><!--Radio Button Seletor-->

        <?php /*
        <div class="alimanentoSeletor panel-body">
            <div class="radio">
                <label><input type="radio" id="create" name="seletor">Cadastrar</label>
            </div>
            <div class="radio">
                <label><input type="radio" id="red" name="seletor">Buscar</label>
            </div>
            <div class="radio">
                <label><input type="radio" id="update" name="seletor">Alterar</label>
            </div>
            <div class="radio">
                <label><input type="radio" id="delete" name="seletor">Remover</label>
            </div>
        </div> 
        */?>
        
        <div class="alimanentoSeletor panel-body">
            <div class="radio">
                <label><input type="radio" value="plano" name="seletor">Plano</label>
            </div>
            <div class="radio">
                <label><input type="radio" value="celular" name="seletor">Celular</label>
            </div>
            <div class="radio">
                <label><input type="radio" value="linha" name="seletor">Linha</label>
            </div>
            <div class="radio">
                <label><input type="radio" value="chip" name="seletor">Chip</label>
        </div>
        
        
        
        
    </div><!--FIM - Radio Button Seletor-->

      <?php /*  <div class="col-sm-3"><!--Button Seletor Função-->

   
        <div name=Plano>
            <button type="button" class="btn btn-default btn-md botao">Plano</button>
            <button type="button" class="btn btn-default btn-md botao">Linha</button>
            <button type="button" class="btn btn-default btn-md botao">Chip.</button>
        </div>

        
        <div class="alimanentoSeletorFunccao panel-body" name="Plano">
            <div class="radio">
                <label><input type="radio" id="create" name="seletor">Cadastrar</label>
            </div>
            <div class="radio">
                <label><input type="radio" id="red" name="seletor">Buscar</label>
            </div>
            <div class="radio">
                <label><input type="radio" id="update" name="seletor">Alterar</label>
            </div>
            <div class="radio">
                <label><input type="radio" id="delete" name="seletor">Remover</label>
            </div>
        </div> 
        
        
        
        

    </div><!--FIM - Button Seletor Função-->*/?>
    <div class="inputDados col-sm-6"><!--Função Selecionada-->

        <div class="row funcSelec">
            <div>
                <label class="inputValores panel-body plano box" name="plano">Plano</label>
            </div>
            <div>
                <label class="inputValores panel-body celular box" name="celular">Celular</label>
            </div>
            <div>
                <label class="inputValores panel-body linha box" name="linha">Linha</label>
            </div>
            <div>
                <label class="inputValores panel-body chip box" name="chip">Chip</label>
            </div>
            
    </div><!--FIM - Button Seletor Função-->


</div>