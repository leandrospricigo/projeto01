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
            PAINEL DE CONTROLE - Cadastro de Serviços
       </td>
      </tr>
    <tr>
<?php require_once("../admin/menu.php"); ?>
   <td width="546">
                                
                        <div class="demo-info" style="margin-bottom:10px">
                                <div class="demo-tip icon-tip">&nbsp;</div>
                                <div>Clique na opção desejada na barra de ferramentas.</div>
                        </div>

                        <table id="dg" title="Cadastro de Serviços" class="easyui-datagrid" style="width:700px;height:250px"
                                        url="pegar_cadastroservicos.php"
                                        toolbar="#toolbar" pagination="true"
                                        rownumbers="true" fitColumns="true" singleSelect="true">
                                <thead>
                                        <tr>
                                                <th field="idservicos" width="50">Id</th>
                                                <th field="descricao" width="50">Descrição</th>
                                                <th field="valor" width="50">Valor</th>
                                            
                                        </tr>
                                </thead>
                        </table>
                        <div id="toolbar">
                                <a href="#" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="newservico()" title="Adicionar Serviço">Novo Serviço</a>
                                <a href="#" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="editservico()" title="Alterar Dados do Serviço">Editar Serviço</a>
                                <a href="#" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onclick="removeservico()" title="Remover Dados do Serviço">Remover Serviço</a>
                        </div>

                        <div id="dlg" class="easyui-dialog" style="width:400px;height:280px;padding:10px 20px"
                                        closed="true" buttons="#dlg-buttons">
                                <div class="ftitle">Dados do Produto</div>
                                <form id="fm" method="post" novalidate>
                                       <div class="fitem">
                                                <label>ID:</label>
                                                <input name="idservicos" class="easyui-combobox-item-disabled">
                                        </div>
                                        <div class="fitem">
                                                <label>Descrição:</label>
                                                <input name="descricao" class="easyui-validatebox" required="true">
                                        </div>
                                        <div class="fitem">
                                                <label>Valor:</label>
                                                <input name="valor" class="easyui-validatebox" required="true">
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
