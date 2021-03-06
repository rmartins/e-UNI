<?PHP // $Id: question.php,v 1.3 2009/10/11 16:34:00 papita Exp $ 
      // question.php - created with Moodle 1.9.5+ (Build: 20091007) (2007101553)


$string['adminreport'] = 'Reportar possíveis problemas no banco de questões.';
$string['broken'] = 'Este é um \"link quebrado\", ele aponta para um arquivo inexistente.';
$string['byandon'] = 'por <em>$a->user</em> em <em>$a->time</em>';
$string['categorycurrent'] = 'Categoria Atual';
$string['categorycurrentuse'] = 'Usar essa categoria';
$string['categorydoesnotexist'] = 'Esta categoria não existe';
$string['categorymoveto'] = 'Salvar na categoria';
$string['changepublishstatuscat'] = '<a href=\"$a->caturl\">A categoria \"$a->name\"</a> no curso \"$a->coursename\" terá seu status de compartilhamento trocado de <strong>$a->changefrom para $a->changeto</strong>.';
$string['copy'] = 'Copiar de $a e mudar links.';
$string['created'] = 'Criado';
$string['createdmodifiedheader'] = 'Criado/modificado';
$string['cwrqpfs'] = 'Questões aleatórias selecionando questões de sub categorias.';
$string['cwrqpfsinfo'] = '<p>Durante a migração para o Moodle 1.9 iremos separar categorias de questões em diferentes contextos. Algumas categorias de questões e algumas questões terão seu status de compartilhamento alterado. Isto é necessário em um caso raro quando uma ou mais questões \'aleatória\' em um questionário são configuradas para selecionar de uma mistura de categorias compartilhadas e não compartilhadas(como é o caso neste site).Isto acontece quando uma questão \'aleatória\' é configurada para selecionar de subcategorias e uma ou mais subcategorias tem status diferentes de compartilhamento com a categoria ascendente na qual a questão \'aleatória\' é criada.</p><p>As categorias de questões seguintes, das quais as questões \'aleatórias\' em categorias ascendentes são selecionadas, terão o seu status de compartilhamento alterado para o mesmo status de compartilhamento da categoria que contém a questão \'aleatória\' quando da migração para o Moodle 1.9. As categorias seguintes terão seus status de compartilhamento alterado. Questões que são afetadas continuarão a funcionar em todos os questionários até que você as remova destes questionários.</p>';
$string['cwrqpfsnoprob'] = 'Nenhuma categoria de questões no seu site é afetada pelo problema de \'Selecionar questões aleatórias de subcategorias\'';
$string['defaultfor'] = 'Padrão para $a';
$string['defaultinfofor'] = 'A categoria padrão para as questões compartilhadas no contexto \'$a\'.';
$string['deletecoursecategorywithquestions'] = 'Existem questões deste banco associadas à esta categoria de curso. Se você continuar, serão apagadas. Use a interface de administração do banco de questões para transferir as questões.';
$string['donothing'] = 'Não copie, mova arquivos ou mude os links.';
$string['editingcategory'] = 'Editando a categoria';
$string['editingquestion'] = 'Editando uma questão';
$string['erroraccessingcontext'] = 'Não pode acessar o contexto';
$string['errordeletingquestionsfromcategory'] = 'Erro excluindo questões da categoria $a.';
$string['errorfilecannotbecopied'] = 'Erro, impossível copiar arquivo $a.';
$string['errorfilecannotbemoved'] = 'Erro, impossível mover arquivo $a.';
$string['errorfileschanged'] = 'Os arquivos de erro ligados às questões foram mudados desde que o formulário foi mostrado.';
$string['errormanualgradeoutofrange'] = 'A nota $a->grade não está entre 0 e $a->maxgrade na questão $a->name. A pontuação e o comentário não foram salvos.';
$string['errormovingquestions'] = 'Erro movendo as questões com id $a.';
$string['errorprocessingresponses'] = 'Erro durante o processamento das respostas.';
$string['errorsavingcomment'] = 'Erro salvando o comentário da questão $a->name.';
$string['errorupdatingattempt'] = 'Erro atualizando a tentativa $a->id.';
$string['exportcategory'] = 'Exportar categoria';
$string['filesareacourse'] = 'a área de arquivos do curso';
$string['filesareasite'] = 'a área de arquivos do site';
$string['filestomove'] = 'Mover / copiar arquivos para $a?';
$string['fractionsnomax'] = 'Uma das respostas deve ter valor de 100%% para que seja possível obter a nota total.';
$string['getcategoryfromfile'] = 'Tirar categoria do arquivo';
$string['getcontextfromfile'] = 'Tirar contexto do arquivo';
$string['ignorebroken'] = 'Ignorar links quebrados';
$string['invalidcontextinhasanyquestions'] = 'Contexto inválido para question_context_has_any_questions.';
$string['linkedfiledoesntexist'] = 'Arquivo associado $a não existe';
$string['makechildof'] = 'Criar descendente de $a';
$string['maketoplevelitem'] = 'Mover para o nível mais alto';
$string['missingimportantcode'] = 'Neste tipo de questão falta código importante: $a.';
$string['modified'] = 'Último salvo';
$string['move'] = 'Mover de $a e mudar links';
$string['movecategory'] = 'Mover Categoria';
$string['movedquestionsandcategories'] = 'Questões e categorias movidas de $a->oldplace para $a->newplace.';
$string['movelinksonly'] = 'Apenas mudar para onde os links apontam, não mover ou copiar arquivos.';
$string['moveq'] = 'Mover pergunta(s)';
$string['moveqtoanothercontext'] = 'Mover pergunta para outro contexto';
$string['movingcategory'] = 'Movendo categoria';
$string['movingcategoryandfiles'] = 'Você tem certeza que deseja mover a categoria {$a->name} e todas as categorias descendentes para o contexto \"{$a->contextto}\"?<br /> Foram detectados {$a->urlcount} arquivos ligados a questões em {$a->fromareaname}, você gostaria de copiar ou mover isto para {$a->toareaname}?';
$string['movingcategorynofiles'] = 'Você tem certeza que deseja mover a categoria \"{$a->name}\" e todas as categorias descendentes para o contexto \"{$a->contextto}\"?';
$string['movingquestions'] = 'Movendo perguntas e todos os arquivos';
$string['movingquestionsandfiles'] = 'Você tem certeza que deseja mover a(s) questõe(s) {$a->questions} para o contexto de <strong>\"{$a->tocontext}\"</strong>?<br /> Foram detectados <strong>{$a->urlcount} arquivos</strong> ligados a esta(s) questão(s) em {$a->fromareaname}, você quer copiar ou mover isto para {$a->toareaname}?';
$string['movingquestionsnofiles'] = 'Você tem certeza que deseja mudar as questões {$a->questions} para o contexto <strong>\"{$a->tocontext}\"</strong>?<br />  <strong>Não existem arquivos</strong> ligados a estas questões em {$a->fromareaname}.';
$string['needtochoosecat'] = 'Você precisa escolher uma categoria para mover as questões, ou então clicar em \'cancelar\'.';
$string['nopermissionadd'] = 'Você não tem permissão para adicionar questões aqui.';
$string['nopermissionmove'] = 'Você não tem permissão para remover estas questões. Você pode salvar a questão nesta categoria ou salvá-la como nova pergunta.';
$string['noprobs'] = 'Nenhum problema encontrado no banco de dados da sua pergunta.';
$string['notenoughdatatoeditaquestion'] = 'Não foram especificados: id da questão, id da categoria e tipo de questão.';
$string['notenoughdatatomovequestions'] = 'Você precisa fornecer os ids das questões que você quer mover.';
$string['permissionedit'] = 'Editar essa questão';
$string['permissionmove'] = 'Mover essa questão';
$string['permissionsaveasnew'] = 'Salvar essa como uma nova questão';
$string['permissionto'] = 'Você tem permissão para:';
$string['published'] = 'compartilhado';
$string['questionaffected'] = '<a href=\"$a->qurl\">Questão \"$a->name\" ($a->qtype)</a> está nesta categoria de questão mas também está na <a href=\"$a->qurl\">questão \"$a->quizname\"</a> no curso \"$a->coursename\".';
$string['questionbank'] = 'Banco de questões';
$string['questioncategory'] = 'Categoria de questões';
$string['questioncatsfor'] = 'Categorias de questão para \'$a\'';
$string['questiondoesnotexist'] = 'Esta questão não existe';
$string['questionsmovedto'] = 'Questões ainda utilizadas movidas para \"$a\" na categoria de curso correspondente.';
$string['questionsrescuedfrom'] = 'Questões copiadas do contexto $a.';
$string['questionsrescuedfrominfo'] = 'Estas questões (algumas podem estar escondidas) foram salvas quando o contexto $a foi apagado pois ainda eram utilizadas.';
$string['questionuse'] = 'Usar questão nessa atividade';
$string['shareincontext'] = 'Compartilhar o contexto com $a';
$string['tofilecategory'] = 'Escrever categoria em arquivo';
$string['tofilecontext'] = 'Escrever contexto em arquivo';
$string['unknown'] = 'Desconhecido';
$string['unknownquestiontype'] = 'Tipo de questão desconhecido: $a.';
$string['unpublished'] = 'Não-compartilhado';
$string['upgradeproblemcategoryloop'] = 'Problema atualizando categorias de questões. Loop na árvore de categorias. O id da categoria com problemas é $a.';
$string['upgradeproblemcouldnotupdatecategory'] = 'Não foi possível modificar a categoria $a->name ($a->id).';
$string['upgradeproblemunknowncategory'] = 'Problema atualizando categorias de questões. A categoria $a->id aponta para $a->parent,que não existe. O problema foi resolvido apontando para uma categoria existente.';
$string['yourfileshoulddownload'] = 'Se o seu arquivo de exportação não for baixado automaticamente, <a href=\"$a\">clickar aqui</a>.';

?>
