<?
$form = new nbrAdminForms('Membros');

$form->AddFieldString('Nome', 'Nome', 150, 2);
$form->AddFieldList('Situacao', 'Situação', 'MMB=Membro|VIS=Visitante|FLT=Faltoso|DES=Desligado', 1, 'ATV');
$form->AddFieldString('Apelido', 'Apelido', 100, 2);
$form->AddFieldList('SituacaoCivil', 'Situação Civil', 'SOL=Solteiro(a)|CAS=Casado(a)|DIV=Divorciado(a)|VIU=Viúvo(a)', 1);

$form->AddGroup('Documentação');
$form->AddFieldString('RG', 'RG', 25, 1, null, false);
$form->AddFieldString('CPF', 'CPF', 14, 1, null, false, false, 'required', '999.999.999-99');

$form->AddGroup('Endereço');
$form->AddFieldString('EnderecoLogradouro', 'Logradouro', 200, 3, null, false);
$form->AddFieldString('EnderecoComplemento', 'Complemento', 150, 3, null, false);
$form->AddFieldString('EnderecoCidade', 'Cidade', 100, 2, null, false);
$form->AddFieldString('EnderecoUF', 'UF', 2, 1, null, false);
$form->AddFieldString('EnderecoCEP', 'CPF', 9, 1, null, false, false, 'required', '99999-999');

$form->AddGroup('Datas Importantes');
$form->AddFieldDate('DataNascimento', 'Dt. Nascimento', 1, null, false);
$form->AddFieldDate('DataBatismo', 'Dt. Batismo', 1, null, false);
$form->AddFieldDate('DataCasamento', 'Dt. Casamento', 1, null, false);


$form->AddCollections('Contatos', 'contatos.grid.php', 'MembroContatos', 'Membro');
$form->AddCollections('Fotos', 'fotos.grid.php', 'MembroFotos', 'Membro');
$form->AddCollections('Ministérios', 'ministerios.grid.php', 'MembroMinisterios', 'Membro');

$form->AddGroup('Login');
$form->AddDescriptionText('Esses campos abaixo serão utilizados para autenticar nos sistemas');
$form->AddFieldString('Email', 'E-mail', '80', 2, null, false);
$form->AddFieldPassword('Senha', 'Senha', 50, 2, false);

$form->PrintHTML();
?>