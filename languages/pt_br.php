<?php
/*
 * Português / BR Arquivo de linguagem
 *
 * $Id: en_us.php 121 2011-02-01 18:25:46Z imooreyahoo $
 *
 */

class language {

public static $trans = array(

// General actions
'File' => 'Arquivo',
'Edit' => 'Editar',
'Save' => 'Salvar',
'OK' => 'OK',
'Cancel' => 'Cancelar',
'Create' => 'Criar',
'Select' => 'Selecionar',
'Up' => 'Conectado',
'Down' => 'Não Conectado',
'Yes' => 'Sim',
'No' => 'Não',
'Close' => 'Fechar',
'Any' => 'Qualquer',
'New' => 'Novo',
'Add' => 'Adicionar',
'Delete' => 'Apagar',
'Keep' => 'Manter',
'Settings' => 'Configurações',
'Preferences' => 'Preferências',
'Refresh' => 'Atualizar',
'Start' => 'Iniciar',
'Power Off' => 'Desligar',
'Details' => 'Detalhes',
'Console' => 'Console',
'Description' => 'Descrição',
'Configuration' => 'Configuração',
'Operating System' => 'Sistema Operacional',
'Machine' => 'Máquina',
'Enabled' => 'Habilitado',
'Disabled' => 'Desabilitado',
'Hosting' => 'Versão',
'Basic' => 'Básico',
'Advanced' => 'Avançado',
'None' => 'Nenhum',
'Help' => 'Ajuda',
'About' => 'Sobre',
'Version' => 'Versão',
'VirtualBox User Manual' => 'Manual de Usuário do VirtualBox',
'Operation Canceled' => 'Operação Cancelada',
'Next' => 'Próximo',
'Back' => 'Anterior',
'Finish' => 'Finalizar',
'Select File' => 'Selecionar Arquivo',
'Select Folder' => 'Selecionar Diretório',
'Server List' => 'Lista de Servidores',
'Interface Language' => 'Idioma da Interface',
'Language' => 'Idioma',

// Users and Login
'Username' => 'Usuário',
'Password' => 'Senha',
'Log in' => 'Entrar',
'Log out' => 'Sair',
'Change Password' => 'Alterar Senha',
'Old Password' => 'Senha Anterior',
'New Password' => 'Nova Senha',
'The passwords you have entered do not match.' => 'As senhas inseridas não conferem.',
'Password changed.' => 'Senha Alterada.',
'The password you have entered is invalid.' => 'A senha inserida é inválida.',
'Retype' => 'Digite novamente', // Retype password
'Invalid username or password.' => 'Usuário ou senha inválidos.',
'Users' => 'Usuários',
'Add User' => 'Adicionar Usuário',
'A user with that username already exists.' => 'Este nome de usuário já existe.',
'Remove User' => 'Remover Usuário',
'Are you sure you want to remove the user <b>%s</b>? This action
cannot be undone.' => 'Tem certeza que deseja remover este usuário? Esta ação não poderá ser desfeita.',
'Edit User' => 'Editar Usuário',
'Admin User' => 'Usuário Admin',
'Can administer users' => 'Pode administrar usuários',
'Not logged in.' => 'Não conectado.',

// Power button
'Stop' => 'Parar',
'Pause' => 'Pausar',
'Reset' => 'Reiniciar',
'Save State' => 'Salvar Estado',
'ACPI Power Button' => 'Desligar por APCI',
'ACPI Sleep Button' => 'Adormecer por ACPI',
'ACPI event not handled' => 'O evento ACPI não foi aceito pela máquina virtual.',

// Settings button while VM is running
'CD/DVD Devices' => 'Dispositivos de CD/DVD',
'Floppy Devices' => 'Dispositivos de Disquet',
'USB Devices' => 'Dispositivos USB',
'Network Adapters...' => 'Adaptadores de Rede...',
'Shared Folders...' => 'Pastas Compartilhadas...',

'Approx X remaining' => 'Restam %s aproximadamente', /* %s will be replaced with a time. E.g. Approx 2 minutes, 4 seconds remaining */
'X ago' => '%s atrás', /* %s will be replaced with a time. E.g. 20 hours ago */
'minutes' => 'minutos',
'seconds' => 'segundos',
'hours' => 'horas',
'days' => 'dias',

/* Preview box */
'Preview' => 'Pré-visualização',
'Update Disabled' => 'Atualização Desabilitada',
'Every X seconds' => 'A cada %s segundos', /* %s will be replaced with numeric values */
'Open in new window' => 'Abrir em uma nova janela', /* View VM screenshot in new window*/

/* Snapshots */
'Snapshots' => 'Snapshots',
'Snapshot X' => 'Snapshot %s', /* %s will be replaced with snapshot number to generate a snapshot name */
'Snapshot Folder' => 'Diretório de Snapshots',
'Current State' => 'Estado Atual',
'Restore' => 'Restaurar',
'Restore Snapshot' => 'Restaurar Snapshot',
'Take Snapshot' => 'Executar Snapshot',
'Delete Snapshot' => 'Apagar Snapshot',
'Snapshot Details' => 'Detalhes do Snapshot',
'Snapshot Name' => 'Nome do Snapshot',
'Snapshot Description' => 'Descrição do Snapshot',
'Restore Snapshot Message' => 'Tem certeza que deseja restaurar o snapshot %s? Isto causara a perda do estado atual da máquina, o qual não poderá ser recuperado.',
'Delete Snapshot Message1' => 'Apagar o snapshot causará a perda das informações de estado da máquina contidas nele e as informações de disco separadas nos vários arquivos criados pelo VirtualBox junto com o snapshot, serão inseridas em um unico arquivo. Este pode ser um processo lento e a informação no snapshot não poderá ser recuperada.',
'Delete Snapshot Message2' => 'Tem certeza que deseja apagar o snapshot %s?',
'Taken' => 'Tirado',
'changed' => 'alterado',

/* Discard State */
'Discard' => 'Discartado',
'Discard Message1' => 'Tem certeza que deseja discartar o estado salvo da máquina virtual %s?', // %s willl be replaced with VM name
'Discard Message2' => 'Esta operação é equivalente a reiniciar ou desligar a máquina sem o devido processo do próprio sistema operacional convidado.',

/* Delete or Unregister Inaccessible Machine */
'VM Inaccessible' => 'A VM selecionada está inacessível. Por favor respeite a mensagem de erro mostrada abaixo e pressione o botão de Atualização se desejar verificar a acessibilidade novamente.',
'Delete VM Message1' => 'Você está prestes a remover a máquina virtual %s da lista de máquinas virtuais.',
'Delete VM Message2' => 'Gostaria  de apagar os arquivos de disco que contem a máquina virtual? Ao fazer isso serão removidos também os arquivos que contêm os discos virtuais da máquina, caso eles não estajam em uso por outra máquina virtual.',
'Delete all files' => 'Apagar todos os arquivos',
'Remove only' => 'Somente remover',
'Unregister VM Message1' => 'Tem certeza que deseja desregistrar a máquina virtual inacessível %s?',
'Unregister VM Message2' => 'você não poderá registra-la novamente a partir desta GUI',
'Unregister' => 'Desregistrar',

/* Error fetching machines */
'Error vmlist 1' => 'Houve um erro ao obter a lista de máquinas virtuais registradas no VirtualBox. Certifique-se que o serviço vboxwebsrv esteja ativo e que as configurações no arquivo config.php estejam corretas.',
'Error vmlist 2' => 'A lista de máquinas virtuais não será atualizada automaticamente até que esta página seja recarregada.',

/* Properties */
'host' => 'Hospedeiro do VirtualBox',
'Port' => 'Porta',
'General' => 'Principal',
'Name' => 'Nome',
'OS Type' => 'Tipo de SO',

/* Options in Preferences / Global Settings */
'Default Hard Disk Folder' => 'Diretório padrão para criação de discos',
'Default Machine Folder' => 'Diretório padrão para máquinas virtuais',
'VRDE Authentication Library' => 'Biblioteca de Autenticação VRDE',
'Add host-only network' => 'Adicionar rede de comunicação com o hospedeiro',
'Remove host-only network' => 'Remover rede de comunicação com o hospedeiro',
'Edit host-only network' => 'Editar rede de comunicação com o hospedeiro',
'Host-only Network Details' => 'Detalhes da rede de comunicação com o hospedeiro',
'Host-only Networks' => 'Redes de comunicação com o hospedeiro',
'IPv4Mask' => 'Máscara de Rede',
'IPv6Mask' => 'Tamanho da Máscara de Rede IPV6',
'Server Address' => 'Endereço do Servidor',
'Server Mask' => 'Máscara de Rede do Servidor',
'Lower Address Bound' => 'IP Inicial do intervalo',
'Upper Address Bound' => 'IP Final do intervalo',
'DHCP Server' => 'Servidor DHCP',
'DHCP enabled' => 'Habilitado por DHCP',
'Manually configured' => 'Configurado Manualmente',
'Delete Interface Message1' => 'Removendo esta rede de comunicação com o hospedeiro irá remover também o adaptador de rede no qual esta rede faz parte. Gostaria de remover o adaptador (rede de comunicação com o hospedeiro) %s?',
'Delete Interface Message2' => 'Nota: este adaptador pode estar em uso por um ou mais adaptadores de rede virtuais pertencentes a uma de suas VMs. Depois de  removido, estes adaptadores não poderão ser utilizados até que suas configurações sejam corrigidas, mudando o nome da interface ou mudando a forma como a interface é anexada à máquina virtual.',

'System' => 'Sistema',
'Base Memory' => 'Memória Principal',
'Memory' => 'Memória',
'free' => 'livre', // as in free/available memory
'Enable IO APIC' => 'Habilitar IO APIC',
'Enable EFI' => 'Habilitar EFI (Sistemas Operacionais específicos)',
'Hardware clock in UTC time' => 'Relógio do Hardware no tempo UTC',
'Processors' => 'Processador(es)',
'Boot Order' => 'Ordem de Inicialização',
'Removable Media' => 'Mídia Removível',
'Remember Runtime Changes' => 'Relembrar Alterações em Tempo de Execução',
'Motherboard' => 'Placa-mãe',
'Chipset' => 'Chipset',
'Acceleration' => 'Aceleração',
'Extended Features' => 'Recursos Extendidos',
'CPUs' => 'CPUs',
'VCPU' => 'VT-x/AMD-V',
'Nested Paging' => 'Paginação Aninhada',
'Hardware Virtualization' => 'Virtualização de Hardware',
'Enable VCPU' => 'Habilitar VT-x/AMD-V',
'Enable Nested Paging' => 'Habilitar Paginação Aninhada',
'Enable PAE/NX' => 'Habilitar PAE/NX',

'Display' => 'Display',
'Video' => 'Vídeo',
'Video 2d' => 'Aceleração 2D',
'Video 3d' => 'Aceleração 3D',
'Video Memory' => 'Memória de Vídeo',

'Remote Display' => 'Display Remoto',
'Remote Console' => 'Console Remota',
'Ports' => 'Portas',
'Net Address' => 'Endereço de Rede',
'Enable Server' => 'Habilitar Servidor',
'Server Port' => 'Porta do Servidor',
'Authentication Timeout' => 'Timpo Limite de Autenticação',
'Authentication Method' => 'Método de Autenticação',
'External' => 'Externa',
'Guest' => 'Convidado',
'Allow Multiple Connections' => 'Permitir Múltiplas Conexões',

'Storage' => 'Armazenamento',
'Storage Tree' => 'Árvore de Armazenamento',
'Attributes' => 'Atributos',
'Type' => 'Tipo',
'Slot' => 'Slot',
'Size' => 'Tamanho',
'Virtual Size' => 'Tamanho Virtual',
'Actual Size' => 'Tamanho Atual',
'Location' => 'Localização',
'Information' => 'Informação',
'Use host I/O cache' => 'Utilizar cache de I/O do hospedeiro',
'IDE Controller' => 'Controlador IDE',
'Primary Master' => 'Primário Mestre',
'Primary Slave' => 'Primário Escravo',
'Secondary Master' => 'Secundário Mestre',
'Secondary Slave' => 'Secundário Escravo',
'Floppy Controller' => 'Controlador de Disquete',
'Floppy Drive' => 'Drive de Disquete',
'SCSI Controller' => 'Controlador SCSI',
'SCSI Port %s' => 'Porta SCSI %s',
'SATA Controller' => 'Controlador SATA',
'SATA Port %s' => 'Porta SATA %s',
'SAS Controller' => 'Controlador SAS',
'SAS Port %s' => 'Porta SAS %s',
'HardDisk' => 'Disco Rígido',
'Floppy' => 'Disquete',
'Floppy Device %s' => 'Dispositivo de Disquete %s',
'DVD' => 'CD/DVD',
'Type (Format)' => 'Tipo (Formato)',
'Add Attachment' => 'Conectar Disco',
'Remove Attachment' => 'Desconectar Disco',
'Add Controller' => 'Adicionar Controlador',
'Remove Controller' => 'Remover Controlador',
'Add CD/DVD Device' => 'Adicionar drive de CD/DVD',
'Add Hard Disk' => 'Adicionar Disco Rígido',
'Add Floppy Device' => 'Adicionar Drive de Disquete',
'DVD Drive' => 'Drive de CD/DVD',
'Empty' => 'Vazio',
'Passthrough' => 'Transparente',
'Unknown Device' => 'Dispositivo Desconhecido',
'Host Drive' => 'Drive do Hospedeiro',
'Add IDE Controller' => 'Adicionar Controlador IDE',
'Add Floppy Controller' => 'Adicionar Controlador de Disquete',
'Add SCSI Controller' => 'Adicionar Controlador SCSI',
'Add SATA Controller' => 'Adicionar COntrolador SATA',
'Add SAS Controller' => 'Adicionar Controlador SAS',
'LsiLogic' => 'LsiLogic',
'BusLogic' => 'BusLogic',
'IntelAhci' => 'AHCI',
'PIIX3' => 'PIIX3',
'PIIX4' => 'PIIX4',
'ICH6' => 'ICH6',
'I82078' => 'I82078',
'LsiLogicSas' => 'LsiLogic SAS',
'Differencing Disks' => 'Discos de Diferença',
'No unused media message 1' => 'Não há mídia vaga disponível para a nova conexão criada.',
'No unused media message 2' => 'Pressione o botão Criar para iniciar o assistente de Novo Disco Virtual e criar uma nova mídia ou pressione Selecionar para abrir o Gerenciador de Mídias Virtuais.',
'storage attached indirectly' => 'A conexão deste disco será efetuada indiretamente utilizando um novo disco de Diferença criado.',
'base disk indirectly attached' => 'Este disco base será indiretamente conectado utilizando-se o seguinte disco de Diferença:',
'Attached to' => 'Conectado a',
'Not Attached' => 'Não Conectado',
'Set up the virtual hard disk' => 'Criar disco rígido virtual',
'Set up the virtual floppy drive' => 'Configurar o drive de disquete virtual',
'Set up the virtual CD/DVD drive' => 'Configurar o drive de CD/DVD virtual',
'Choose a virtual floppy disk file...' => 'Selecione um arquivo de imagem de disquete...',
'Choose a virtual CD/DVD disk file...' => 'Selecione um arquivo de CD/DVD virtual...',
'Choose a virtual hard disk file...' => 'Selecione um arquivo de disco rígido virtual...',
'Create a new hard disk...' => 'Criar novo disco rígido...',
'Remove disk from virtual drive' => 'Remover disco do drive virtual',
'Image' => 'Imagem', // CD/DVD or Floppy image

'Serial Ports' => 'Portas Seriais',
'Port X' => 'Porta %s', // %s will be replaced with port number
'Enable Serial Port' => 'Habilitar Porta Serial',
'Port Number' => 'Número da Porta',
'IRQ' => 'IRQ',
'I/O Port' => 'Endereço de I/O',
'User-defined' => 'Definido pelo Usuário',
'Port Mode' => 'Modo da Porta',
'Disconnected' => 'Desconectada',
'HostPipe' => 'Pipe no Hospedeiro',
'HostDevice' => 'Dispositivo no Hospedeiro',
'RawFile' => 'Arquivo de Saída',
'Create Pipe' => 'Criar Pipe',
'Port/File Path' => 'Porta/Caminho do Arquivo',

'Parallel Ports' => 'Portas Paralelas',
'Enable Parallel Port' => 'Habilitar Porta Paralela',
'Port Path' => 'Caminho da Porta',


'USB' => 'USB',
'USB Controller' => 'Controlador USB',
'Enable USB Controller' => 'Habilitar Controlador USB',
'Enable USB 2.0 Controller' => 'Habilitar Controlador USB 2.0',
'USB Device Filters' => 'Filtro de Dispositivos USB',
'Add Empty Filter' => 'AAdicionar Filtro Vazio',
'Add Filter From Device' => 'Adicionar Filtro do Dispositivo',
'Edit Filter' => 'Editar Filtro',
'Remove Filter' => 'Remover Filtro',
'Move Filter Up' => 'Mover Filtro Acima',
'Move Filter Down' => 'Mover Filtro Abaixo',
'Device Filters' => 'Filtro de Dispositivo',
'active' => 'ativo',
'no devices available' => 'nenhum dispositivo disponivel',

'USB Filter' => 'Filtro USB',
'New Filter' => 'Novo Filtro',
'Vendor ID' => 'ID do Fabricante',
'Product ID' => 'ID do Produto',
'Revision' => 'Revisão',
'Manufacturer' => 'Fabricante',
'Serial No' => 'Número Serial',
'Remote' => 'Remoto',

'Shared Folders' => 'Diretórios Compartilhados',
'Shared Folder' => 'Diratório Compartilhado',
'Folders List' => 'Lista de Diretórios',
'Machine Folders' => 'Diretórios Máquinas',
'Transient Folders' => 'Diretórios Temporários',
'Path' => 'Caminho',
'Access' => 'Acesso',
// read only & read/write
'ro' => 'Leitura',
'rw' => 'Escrita',
'Auto-Mount' => 'Montagem Automática', // 3.2.8
'Make Permanent' => 'Tornar Permanente',
'Full Access' => 'Acesso Completo',
'Add Shared Folder' => 'Adicionar Diretório Compartilhado',
'Edit Shared Folder' => 'Editar Diretório Compartilhado',
'Remove Shared Folder' => 'Remover Diretório Compartilhado',


'Audio' => 'Áudio',
'Enable Audio' => 'Habilitar Áudio',
'Host Audio Driver' => 'Driver de Áudio do Hospedeiro',
'Audio Controller' => 'Controlador de Áudio',

'WinMM' => 'Windows multimedia',
'Null Audio Driver' => 'Null Audio Driver',
'OSS' => 'Open Sound System',
'ALSA' => 'Advanced Linux Sound Architecture',
'DirectSound' => 'Microsoft DirectSound',
'CoreAudio' => 'Core Audio',
'MMPM' => 'Reservado por razões históricas.', /* In API. May never see it in the real world */
'Pulse' => 'Pulse Audio',
'SolAudio' => 'Solaris Audio',

'HDA' => 'Intel HD Audio', // 3.2.8
'AC97' => 'ICH AC97',
'SB16' => 'SoundBlaster 16',

'Network' => 'Rede',
'Adapter' => 'Adaptador',
'Network Adapter' => 'Adaptador de Rede',
'Enable Network Adapter' => 'Habilitar Adaptador de Rede',
'Adapter Type' => 'Tipo do Adaptador',
'Bridged Adapter' => 'Adaptador em modo Bridge',
'Internal Network' => 'Rede Interna',
'Host-only Adapter' => 'Adaptador de rede com o Hospedeiro',
'VDE Adapter' => 'Controladora VDE',
'Not attached' => 'Não conectado',
'Bridged adapter, %s' => 'Placa em modo Bridge, %s', // %s will be replaced by adapter name
'Host-only adapter, \'%s\'' => 'Placa de rede exclusiva de hospedeiro (host-only), \'%s\'', // %s will be replaced by adapter name
'Internal network, \'%s\'' => 'Rede interna, \'%s\'', // %s will be replaced by network name
'VDE network, \'%s\'' => 'Rede VDE, \'%s\'', // %s will be replaced by network name
'NAT' => 'NAT',
'network' => 'Rede',
'Ethernet' => 'Ethernet',
'PPP' => 'PPP',
'SLIP' => 'SLIP',
'IPv4Addr' => 'Endereço IP',
'IPv6Addr' => 'Endereço IP(v6)',
'Mac Address' => 'Endereço MAC',
'Cable connected' => 'Cabo conectado',
'netMediumType' => 'Tipo',
'Guest Network Adapters' => 'Adaptadores de Rede do Convidado',
/* New */
'Port Forwarding' => 'Encaminhamento de Porta',
'Port Forwarding Rules' => 'Regras de Encaminhamento de Porta',
'Protocol' => 'Protocolo',
'Host IP' => 'IP do Hospedeiro',
'Host Port' => 'Porta do Hospedeiro',
'Guest IP' => 'IP do Convidado',
'Guest Port' => 'Porta do Convidado',
'TCP' => 'TCP',
'UDP' => 'UDP',
'Rule' => 'Regra',
'Insert new rule' => 'Inserir nova regra',
'Delete selected rule' => 'Apagar regra selecionada',
'Invalid IP Address' => 'Endereço IP Inválido',
'The current port forwarding rules are not valid' => 'As regras atuais de encaminhamento de porta não são válidas. Nenhum dos valores de portas do hospedeiro ou convidado pode ser configurado para zero.',


'Am79C970A' => 'Placa de rede - AMD PCNet-PCI II',
'Am79C973' => 'Placa de rede - AMD PCNet-FAST III',
'I82540EM' => 'Placa de rede - Intel PRO/1000 MT Desktop',
'I82543GC' => 'Placa de rede - Intel PRO/1000 T Server',
'I82545EM' => 'Placa de rede - Intel PRO/1000 MT Server',
'Virtio' => 'Placa de rede - Virtio',


// Machine states
'PoweredOff' => 'Desligado',
'Saved' => 'Salvo',
'Teleported' => 'Teletransportado',
'Aborted' => 'Abortado',
'Running' => 'Ligada',
'Paused' => 'Pausada',
'Stuck' => 'Travada',
'Teleporting' => 'Teleportando',
'LiveSnapshotting' => 'Snapshot em Tempo Real',
'Starting' => 'Iniciando',
'Stopping' => 'Parando',
'Saving' => 'Salvando',
'Restoring' => 'Restaurando',
'TeleportingPausedVM' => 'Teletransporte parou a VM',
'TeleportingIn' => 'Teletransportando Em',
'RestoringSnapshot' => 'Restaurando Snapshot',
'DeletingSnapshot' => 'Apagando Snapshot',
'SettingUp' => 'Configurando',

// list separator
'LIST_SEP' => ', ',

// Sizes
'B' => 'B',
'KB' => 'KB',
'MB' => 'MB',
'GB' => 'GB',
'TB' => 'TB',

// Virtual Media Manager
'Open Virtual Media Manager' => 'Abrir o Gerenciador de Mídias Virtuais',
'Virtual Media Manager' => 'Gerenciador de Mídias Virtuais',
'Are you sure remove medium' => 'Tem certeza da remoção da mídia %s da lista de mídias conhecidas?',
'Medium remove note' => 'Note que a imagem da mídia no disco rígido não será removida e que será possível adicioná-la à lista novamente.',
'Are you sure release medium' => 'Tem certeza da liberação da mídia %s?',
'This will detach from' => 'Ela será desconectada da(s) máquina(s) virtual(is): %s.',
'Please select a medium.' => 'Por favor, selecione a mídia.',
'VMM Remove Media Message1' => 'Deseja remover a unidade de armazenamento do disco rígido %s?',
'VMM Remove Media Message2' => 'Se Apagar for selecionado, a unidade de armazenamento especificada será permanentemente apagada. <b>Esta operação não poderá ser desfeita.</b>',
'VMM Remove Media Message3' => 'Se Manter for selecionado, então o disco rígido somente será removido da lista, permanecendo o arquivo de dados intacto.',
'Normal' => 'Normal',
'Writethrough' => 'Writethrough',
'Immutable' => 'Imutável',
'Actions' => 'Ações',
'Clone' => 'Clone',
'Remove' => 'Remover',
'Release' => 'Liberar',
'Hard Disks' => 'Discos Rígidos',
'CD/DVD Images' => 'Imagens de CD/DVD',
'Floppy Images' => 'Imagens de Floppy',

/* New hard disk wizard */
'Create New Virtual Disk' => 'Criar novo Disco Virtual',
'newDisk Welcome' => 'Bem Vindo ao Assistente de criação de Novo Disco Rígido!',
'newDisk Step1 Message1' => 'O Assistente irá auxiliá-lo a criar um novo disco rígido virtual para sua máquina virtual.',
'newDisk Step1 Message2' => 'Utilize o botão Próximo para ir à próxima página do assistente e o botão Voltar para voltar à página anterior.',
'Hard Disk Storage Type' => 'Tipo de disco rígido',
'newDisk Step2 Message1' => 'Selecione o tipo de disco rígido virtual que gostaria de criar.',
'newDisk Step2 dynamic' => 'Um <b>disco com tamanho dinâmico</b> ocupa inicialmente pouco espaço no disco rígido físico. Ele irá aumentar gradualmente (até o tamanho especificado) à medida que o SO Convidado necessitar de espaço.',
'newDisk Step2 fixed' => 'Um <b>disco com tamanho fixo</b> não aumenta. O arquivo do disco virtual possui praticamente o tamanho real especificado. A criação do disco com tamanho fixo pode demorar muito tempo dependendo do tamanho selecionado e do desenpenho dos discos rígidos do hospedeiro.',
'Storage Type' => 'Tipo de Armazenamento',
'Dynamically expanding storage' => 'Disco com tamanho dinâmico',
'Fixed-size storage' => 'Disco com tamanho fixo',
'Virtual Disk Location and Size' => 'Tamanho e localização do disco virtual',
'newDisk Step3 Message1' => 'Selecione a localização do disco virtual ou digite o nome do mesmo.',
'newDisk Step3 Message2' => 'Selecione o tamanho do disco em megabytes.',
'Summary' => 'Sumário',
'newDisk Step4 Message1' => 'O disco com os seguintes parâmetros está prestes a ser criado:',
'newDisk Step4 Message2' => 'Se as configurações acima estão corretas, pressione o botão Finalizar.',

/* New virtual machine wizard */
'Create New Virtual Machine' => 'Criar nova máquina virtual',
'New Virtual Machine Wizard' => 'Assistente para nova Máquina Virtual',
'newVM Welcome' => 'Bem Vindo ao Assistente para nova Máquina Virtual!',
'newVM Step1 Message1' => 'Este assistente ira auxiliá-lo na criação de nova Máquina Virtual para o VirtualBox.',
'newVM Step1 Message2' => 'Use o botão Próximo para ir à próxima página do assistente e o botão Voltar para voltar à página anterior.',
'VM Name and OS Type' => 'Nome da máquina virtual e Tipo de sistema operacional',
'newVM Step2 Message1' => 'Insira um nome para a nova máquina virtual e selecione o tipo de sistema operacional convidado a ser instalado na máquina virtual.',
'newVM Step2 Message2' => 'O nome da máquina virtual geralmente indica a configuração de hardware e o software utilizado. Estas informações serão utilizadas pelos componentes do VirtualBox para reconhecer sua máquina virtual.',
'newVM Step3 Message1' => 'Selecione a quantidade de memória principal (RAM) em megabytes a ser alocada para a  máquina virtual.',
'newVM Step3 Message2' => 'A memória principal recomendada é de %s MB.', /* %s will be replaced with the recommended memory size at run time */
'Virtual Hard Disk' => 'Disco Rígido Virtual',
'Boot Hard Disk' => 'Disco Rígido de Boot',
'Create new hard disk' => 'Criar novo Disco',
'Use existing hard disk' => 'Usar Disco Existente',
'newVM Step4 Message1' => 'Selecione a imagem do disco rígido a ser utilizada como disco de boot da máquina virtual. Você pode tanto criar um novo disco rígido utilizando o botão <b>Criar Novo Disco</b> ou selecionar uma imagem existente selecionando <b>Usar Disco Existente</b>. Se preferir acessar diretamente desta mesma janela o Gerenciador de Mídias Virtuais, pressione o botão <b>Usar Disco Existente</b> e clique no ícone da pasta ao lado da caixa abaixo.',
'newVM Step4 Message2' => 'Se você necessita de uma configuração de disco mais complicada, você pode pular este passo e conectar discos rígidos  mais tarde utilizando a janela de configurações da máquina virtual. Para pular esta etapa, desmarque a caixa <b>Disco Rígido de Boot.</b>',
'newVM Step4 Message3' => 'O tamanho recomendado do disco rígido de boot é %s MB.', /* %s will be replaced with the recommended memory size at run time */
'newVM Step5 Message1' => 'Você está prestes a criar uma nova máquina virtual com os seguintes parâmetros:',
'newVM Step5 Message2' => 'Se as informações acima estiverem corretas, pressione o botão Finalizar.',
'newVM Step5 Message3' => 'Note que você poderá alterar essas e outras configurações a qualquer momento através da janela de configuração da máquina virtual, localizada na tela principal.',

/* VM Log files */
'Show Log' => 'Mostrar Log',
'Logs' => 'Logs',
'No logs found.' => 'Nenhum log encontrado para a máquina virtual selecionada.',

/* Import / Export Appliances */
'Export Appliance' => 'Exportar Máquina Virtual',
'Appliance Export Wizard' => 'Assistente para exportação de Máquinas Virtuais',
'Appliance Export Wizard Welcome' => 'Bem vindo ao assistente para exportação de Máquinas Virtuais!',
'appExport Step1 Message1' => 'Este assistente irá guiá-lo para a exportação de Máquinas Virtuais.',
'appExport Step1 Message2' => 'Utilize o botão Próximo para ir à próxima página do assistente e o botão Voltar para voltar à página anterior. Você pode também pressionar Cancelar se você quiser cancelar a execução deste assistente.',
'appExport Step1 Message3' => 'Por favor selecione a(s) máquina(s) virtual(ais) que deverá(ão) ser exportada(s). Certifique-se que estas máquinas estejam desligadas antes de serem exportadas.',
'Appliance Export Settings' => 'Configurações de Exportação',
'appExport Step2 Message1' => 'Escolha o nome do arquivo para exportar o OVF/OVA. Se você utilizar a extensão ova no nome do arquivo, todos os arquivos serão combinados em um só Arquivo do Formato Open Virtualization. Se você utilizar a extensão ovf, os arquivos de dados e controle serão escritos separadamente. Outras extensões não são permitidas.',
'appExport Step3 Message1' => 'Aqui você pode alterar parâmetros de configuração adicionais para as máquinas virtuais selecionadas. Você pode alterar a maioria das propriedades exibidas clicando duas vezes em cada item.',
'Import Appliance' => 'Importar Máquina Virtual',
'Appliance Import Wizard' => 'Assistente para importação de Máquinas Virtuais',
'Appliance Import Wizard Welcome' => 'Bem vindo ao assistente para importação de Máquinas Virtuais!',
'appImport Step1 Message1' => 'Este assistente irá guiá-lo para a importação de Máquinas Virtuais.',
'appImport Step1 Message2' => 'Utilize o botão Próximo para ir à próxima página do assistente e o botão Voltar para voltar à página anterior. Você pode também pressionar Cancelar se você quiser cancelar a execução deste assistente.',
'appImport Step1 Message3' => 'VirtualBox atualmente suporta a importação de máquinas virtuais salvas no formato Open Virtualization Format (OVF). Para continuar, selecione o arquivo para importação abaixo:',
'Appliance Import Settings' => 'Configurações de Importação',
'appImport Step2 Message1' => 'Essas são as máquinas virtuais contidas no arquivo e as configurações importadas sugeridas. Você poderá mudar várias das propriedades mostradas através de duplo clique em cada ítem além de desabilitar outras marcando as caixas abaixo.',
'appImport Step3 Message1' => 'Por favor especifique um nome de arquivo para importar no formato OVF.',
'Write legacy OVF' => 'Gravar no formato de compatibilidade OVF 0.9',
'Write Manifest file' => 'Criar arquivo Manifest',
'Virtual System X' => 'Virtual System %s', // %s will be replaced with the virtual system number
'Product' => 'Produto',
'Product-URL' => 'URL-Produto',
'Vendor' => 'Fabricante',
'Vendor-URL' => 'URL-Fabricante',
'License' => 'Licença',
'Hard Disk Controller' => 'Controlador do Disco Rígido',
'Virtual Disk Image' => 'Imagem do Disco Virtual',
'Warnings' => 'Avisos',

/* Operation in progress onUnLoad warning message */
'Operation in progress' => 'Aviso: Uma operação do VirtualBox está em execução. Fechar esta janela ou navegar fora desta página pode causar resultados inesperados e indesejáveis. Por favor espere até que a tarefa seja executada.',
'Loading ...' => 'Carregando ...', // "loading ..." screen

/* Versions */
'Unsupported version' => 'Você está utilizando uma versão não suportada do VirtualBox (%s) com o phpVirtualbox. Isto pode ocasionar resultados desconhecidos e indesejáveis.',
'Do not show message again' => 'Não mostrar esta mensagem novamente.',

/* Fatal connection error */
'Fatal error' => 'Ocorreu um erro ao tentar comunicar-se com o serviço vboxwebsrv. Não serão enviadas novas requisições pelo phpVirtualBox até que este erro seja corrigido a esta página atualizada. Os detalhes deste erro de conexão serão apresentados em uma janela subsequente.',

/* Guest properties error */
'Unable to retrieve guest properties' => 'Não foi possível abrir as propriedades da máquina virtual. Certifique-se de que ela esteja ligada e possui o VirtualBox Guest Additions instalado.',

/*Remote Console */
'User name' => 'Usuário',
'Password' => 'Senha',
'Connecting to' => 'Conectando-se',
'Connected to' => 'Conectado a',
'Requested desktop size' => 'Tamanho da tela',
'Connect' => 'Conectar',
'Detach' => 'Abrir em janela separada',
'Disconnect' => 'Desconectar',
"Ctrl-Alt-Del" => "Send Ctrl-Alt-Del",
'Disconnect reason' => 'Razão da Desconexão',
"Redirection by" => "Redirection by",
'Virtual machine is not running or RDP configured.' => 'A Máquina Virtual não está ligada ou não está configurada para aceitar conexões RDP.',

/* Guest Additions */
'Install Guest Additions' => 'Instalar Guest Additions',
'Guest Additions Mounted' => 'O CD do VirtualBox Guest Additions foi montado no drive de CD/DVD da máquina virtual. Para completar a instalação você precisa efetuar login na máquina virtual e instalar manualmente o VirtualBox Guest Additions.',
'Guest Additions No CDROM' => 'Não foi possível montar a imagem do VirtualBox Guest Additions na máquina virtual. Não existem drivers de CD/DVD-ROM instalados. Por favor adicione um drive utilizando a página de armazenamento nas configurações da máquina virtual.',

/* USB devices */
'USB Device' => 'Dispositivo', // USB device name
'USB Attached' => 'Conectado', // Is it attached to the VM
'USB Available' => 'Disponível', // 	Is it available

/* VM List Tooltip
 * %1 replaced with VM Name
 * %2 replaced with VM state
 * %3 replaced with time since state change
 * %4 replaced with session state (locked or unlocked)
 * */
'<nobr>%1</nobr><br /><nobr>%2 since %3</nobr><br /><nobr>Session %4</nobr>' => '<nobr>%1</nobr><br /><nobr>%2 desde %3</nobr><br /><nobr>Sessão %4</nobr>',
// Session states
'Locked' => 'Bloqueada',
'Unlocked' => 'Desbloqueada',
'Unlocking' => 'Desbloqueando',

/* Operating Systems */
'Other' => 'Outro/Desconhecido',
'Windows31' => 'Windows 3.1',
'Windows95' => 'Windows 95',
'Windows98' => 'Windows 98',
'WindowsMe' => 'Windows Me',
'WindowsNT4' => 'Windows NT 4',
'Windows2000' => 'Windows 2000',
'WindowsXP' => 'Windows XP',
'WindowsXP_64' => 'Windows XP (64 bit)',
'Windows2003' => 'Windows 2003',
'Windows2003_64' => 'Windows 2003 (64 bit)',
'WindowsVista' => 'Windows Vista',
'WindowsVista_64' => 'Windows Vista (64 bit)',
'Windows2008' => 'Windows 2008',
'Windows2008_64' => 'Windows 2008 (64 bit)',
'Windows7' => 'Windows 7',
'Windows7_64' => 'Windows 7 (64 bit)',
'WindowsNT' => 'Outro Windows',
'Linux22' => 'Linux 2.2',
'Linux24' => 'Linux 2.4',
'Linux24_64' => 'Linux 2.4 (64 bit)',
'Linux26' => 'Linux 2.6',
'Linux26_64' => 'Linux 2.6 (64 bit)',
'ArchLinux' => 'Arch Linux',
'ArchLinux_64' => 'Arch Linux (64 bit)',
'Debian' => 'Debian',
'Debian_64' => 'Debian (64 bit)',
'OpenSUSE' => 'openSUSE',
'OpenSUSE_64' => 'openSUSE (64 bit)',
'Fedora' => 'Fedora',
'Fedora_64' => 'Fedora (64 bit)',
'Gentoo' => 'Gentoo',
'Gentoo_64' => 'Gentoo (64 bit)',
'Mandriva' => 'Mandriva',
'Mandriva_64' => 'Mandriva (64 bit)',
'RedHat' => 'Red Hat',
'RedHat_64' => 'Red Hat (64 bit)',
'Turbolinux' => 'Turbolinux',
'Ubuntu' => 'Ubuntu',
'Ubuntu_64' => 'Ubuntu (64 bit)',
'Xandros' => 'Xandros',
'Xandros_64' => 'Xandros (64 bit)',
'Linux' => 'Outro Linux',
'Solaris' => 'Solaris',
'Solaris_64' => 'Solaris (64 bit)',
'OpenSolaris' => 'OpenSolaris',
'OpenSolaris_64' => 'OpenSolaris (64 bit)',
'FreeBSD' => 'FreeBSD',
'FreeBSD_64' => 'FreeBSD (64 bit)',
'OpenBSD' => 'OpenBSD',
'OpenBSD_64' => 'OpenBSD (64 bit)',
'NetBSD' => 'NetBSD',
'NetBSD_64' => 'NetBSD (64 bit)',
'OS2Warp3' => 'OS/2 Warp 3',
'OS2Warp4' => 'OS/2 Warp 4',
'OS2Warp45' => 'OS/2 Warp 4.5',
'OS2eCS' => 'eComStation',
'OS2' => 'Outro OS/2',
'DOS' => 'DOS',
'Netware' => 'Netware',
'MacOS' => 'Mac OS X Server',
'MacOS_64' => 'Mac OS X Server (64 bit)',

);



function trans($item = '') {
	return (@self::$trans[$item] ? @self::$trans[$item] : $item);
}


}
