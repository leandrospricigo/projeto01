<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
   <head> 


    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
    <title>PAINEL DE CONTROLE</title> 
        
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="keywords" content="crud, cadastro de clientes, php, mysql, crud php mysql">
	<meta name="description" content="administre os seus clientes, banco de dados completo em www.montepage.com.br">
	<link rel="stylesheet" type="text/css" href="css/easyui.css">
	<link rel="stylesheet" type="text/css" href="css/icon.css">
	<link rel="stylesheet" type="text/css" href="css/demo.css">
	<style type="text/css">
		#fm{
			margin:0;
			padding:10px 30px;
		}
		.ftitle{
			font-size:14px;
			font-weight:bold;
			color:#666;
			padding:5px 0;
			margin-bottom:10px;
			border-bottom:1px solid #ccc;
		}
		.fitem{
			margin-bottom:5px;
		}
		.fitem label{
			display:inline-block;
			width:80px;
		}
	</style>
	<script type="text/javascript" src="js/jquery-1.6.min.js"></script>
	<script type="text/javascript" src="js/jquery.easyui.min.js"></script>
	<script type="text/javascript">
		var url;
		function newregistro(){
			$('#dlg').dialog('open').dialog('setTitle','Novo Registro');
			$('#fm').form('clear');
			url = 'salvar_cadastro.php';
		}
                function newservico(){
			$('#dlg').dialog('open').dialog('setTitle','Novo Registro');
			$('#fm').form('clear');
			url = 'salvar_servico.php';
		}
                function newusuario(){
			$('#dlg').dialog('open').dialog('setTitle','Novo Registro');
			$('#fm').form('clear');
			url = 'salvar_usuario.php';
		}

		function editregistro(){
			var row = $('#dg').datagrid('getSelected');
			if (row){
				$('#dlg').dialog('open').dialog('setTitle','Editar Registro');
				$('#fm').form('load',row);
				url = 'atualizar_cadastroprodutos.php?id='+row.idprodutos;
			}
		}
                function editservico(){
			var row = $('#dg').datagrid('getSelected');
			if (row){
				$('#dlg').dialog('open').dialog('setTitle','Editar Registro');
				$('#fm').form('load',row);
				url = 'atualizar_cadastroservicos.php?id='+row.idservicos;
			}
		}
                function editusuario(){
			var row = $('#dg').datagrid('getSelected');
			if (row){
				$('#dlg').dialog('open').dialog('setTitle','Editar Registro');
				$('#fm').form('load',row);
				url = 'atualizar_cadastrousuarios.php?id='+row.idusuario;
			}
		}
		function saveregistro(){
			$('#fm').form('submit',{
				url: url,
					onSubmit: function(){
					return $(this).form('validate');
				},
				success: function(result){
					var result = eval('('+result+')');
					if (result.success){
						$('#dlg').dialog('close');		// close the dialog
						$('#dg').datagrid('reload');	// reload the user data
					} else {
						$.messager.show({
							title: 'Erro',
							msg: result.msg
						});
					}
				}
			});
		}
		function removeregistro(){
			var row = $('#dg').datagrid('getSelected');
			if (row){
				$.messager.confirm('Confirm','Tem certeza que deseja remover o Registro?',function(r){
					if (r){
						$.post('remover_cadastroprodutos.php',{idprodutos:row.idprodutos},function(result){
							if (result.success){
								$('#dg').datagrid('reload');	// reload the user data
							} else {
								$.messager.show({	// show error message
									title: 'Error',
									msg: result.msg
								});
							}
						},'json');
					}
				});
			}
		}
                function removeservico(){
			var row = $('#dg').datagrid('getSelected');
			if (row){
				$.messager.confirm('Confirm','Tem certeza que deseja remover o Registro?',function(r){
					if (r){
						$.post('remover_cadastroservicos.php',{idservicos:row.idservicos},function(result){
							if (result.success){
								$('#dg').datagrid('reload');	// reload the user data
							} else {
								$.messager.show({	// show error message
									title: 'Error',
									msg: result.msg
								});
							}
						},'json');
					}
				});
			}
		}
                function removeusuario(){
			var row = $('#dg').datagrid('getSelected');
			if (row){
				$.messager.confirm('Confirm','Tem certeza que deseja remover o Registro?',function(r){
					if (r){
						$.post('remover_cadastrousuarios.php',{idusuario:row.idusuario},function(result){
							if (result.success){
								$('#dg').datagrid('reload');	// reload the user data
							} else {
								$.messager.show({	// show error message
									title: 'Error',
									msg: result.msg
								});
							}
						},'json');
					}
				});
			}
		}
	</script>

   </head>

<body>
<table width="800" height="748" border="1">
