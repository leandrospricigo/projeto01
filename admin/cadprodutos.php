<?php 
             session_start(); 
             if((!isset ($_SESSION['usuario']) == true) and (!isset ($_SESSION['senha']) == true)) 
                 { 
                    unset($_SESSION['usuario']); 
                    unset($_SESSION['senha']); 
                    header('location:../admin/login.php'); 
                    
                 }
                    $logado = $_SESSION['usuario']; 
?>

<?php require_once ("../conexao.php"); ?>
<?php require_once("../admin/cabecalho.php"); ?>
  <tr>
        <td height="90" colspan="2" bgcolor="#CCCCCC">
            PAINEL DE CONTROLE - Cadastro de Produtos
       </td>
      </tr>
    <tr>
<?php require_once("../admin/menu.php"); ?>
        <td width="546">
                                
                        <div class="demo-info" style="margin-bottom:10px">
                                <div class="demo-tip icon-tip">&nbsp;</div>
                                <div>Clique na opção desejada na barra de ferramentas.</div>
                        </div>

                        <table id="dg" title="Cadastro de Produtos" class="easyui-datagrid" style="width:700px;height:250px"
                                        url="pegar_cadastroprodutos.php"
                                        toolbar="#toolbar" pagination="true"
                                        rownumbers="true" fitColumns="true" singleSelect="true">
                                <thead>
                                        <tr>
                                                <th field="idprodutos" width="50">Id</th>
                                                <th field="descricao" width="50">Descrição</th>
                                                <th field="unidade" width="50">Unid</th>
                                                <th field="valor_unit" width="50">Valor Unit</th>
                                                <th field="qtd_estoque" width="50">Qtd Estoque</th>
                                        </tr>
                                </thead>
                        </table>
                        <div id="toolbar">
                                <a href="#" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="newregistro()" title="Adicionar Produto">Novo Produto</a>
                                <a href="#" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="editregistro()" title="Alterar Dados do Produto">Editar Produto</a>
                                <a href="#" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onclick="removeregistro()" title="Remover Dados do Produto">Remover Produto</a>
                        </div>

                        <div id="dlg" class="easyui-dialog" style="width:400px;height:280px;padding:10px 20px"
                                        closed="true" buttons="#dlg-buttons">
                                <div class="ftitle">Dados do Produto</div>
                                <form id="fm" method="post" novalidate>
                                       <div class="fitem">
                                                <label>ID:</label>
                                                <input name="idprodutos" class="easyui-combobox-item-disabled">
                                        </div>
                                        <div class="fitem">
                                                <label>Descrição:</label>
                                                <input name="descricao" class="easyui-validatebox" required="true">
                                        </div>
                                        <div class="fitem">
                                                <label>Unid:</label>
                                                <input name="unidade" class="easyui-validatebox" required="true">
                                        </div>
                                        <div class="fitem">
                                                <label>Valor Unit:</label>
                                                <input name="valor_unit">
                                        </div>
                                        <div class="fitem">
                                                <label>Qtd Estoque:</label>
                                                <input name="qtd_estoque" class="easyui-validatebox" >
                                        </div>
                                </form>
                        </div>
                        <div id="dlg-buttons">
                                <a href="#" class="easyui-linkbutton" iconCls="icon-ok" onclick="saveregistro()">Salvar</a>
                                <a href="#" class="easyui-linkbutton" iconCls="icon-cancel" onclick="javascript:$('#dlg').dialog('close')">Cancelar</a>
                        </div>
                          
        </td>
    </tr>
<?php require_once("../admin/rodape.php"); ?>




