<h2 class="helvetica fs28 uc pull-right">
  <span class="" style="color: #ccc;">Faça sua</span> <span class="red" style="color: #3096AD;">pré-inscrição</span>
</h2>

<?php $fields_campos = array(
  '' => '',
  'tec-informatica' => 'Técnico em Informática',
  'tec-logistica' => 'Técnico em Logística',
  'tec-manutencao' => 'Técnico de Manutenção e Suporte em Informática',
  'tec-citopatologia' => 'Técnico em Citopatologia',
  'tec-ambiental' => 'Técnico em Controle Ambiental',
  'tec-meio_ambiente' => 'Técnico em Meio Ambiente'
); ?>

<script type="text/javascript">
  jQuery(document).ready(function($) {
    $('.selected1').click(function(e) {
      e.preventDefault();

      var texto = $(this).text();

      $('#fi_opcao-curso-1').first().html("<option value='"+texto+"'>"+texto+"</option>");
      $('.filter-option1').text(texto);
    });

    $('.selected2').click(function(e) {
      e.preventDefault();

      var texto = $(this).text();

      $('#fi_opcao-curso-2').first().html("<option value='"+texto+"'>"+texto+"</option>");
      $('.filter-option2').text(texto);
    });

    $('.selected3').click(function(e) {
      e.preventDefault();

      var texto = $(this).text();

      $('#fi_opcao-curso-3').first().html("<option value='"+texto+"'>"+texto+"</option>");
      $('.filter-option3').text(texto);
    });

    $('.btn-submit').click(function(e) {
      var form = $('#form-inscreva-se');

      if( form.valid() ) {
        var form_data = form.serialize();        

        $.post(
          PRONATEC_AJAX_URL,
          form_data, 
          function ( json ) {
            var resposta = $.parseJSON( json );
            console.log( resposta );
        });
      }
    });
  });
</script>

<div class="content-inscreva_se">
  <form id="form-inscreva-se">
    <input type="hidden" name="action" value="form-inscricao">
    <div class="row">
      <div class="col-md-12">
        <label for="fi_nome">Nome Completo <span style="color: red;">*</span></label>

        <input type="text" name="fi_nome" id="fi_nome" class="fi_nome form-text user-input" required>
      </div>
    </div>

    <div class="row mt10">
      <div class="col-md-6">
        <label for="fi_telefone">Telefone <span style="color: red;">*</span></label>

        <input type="text" name="fi_telefone" id="fi_telefone" class="fi_telefone form-text telephone-input telephone-mask" placeholder="(00) 0000-0000" required>
      </div>
      <div class="col-md-6">
        <label for="fi_email">Email <span style="color: red;">*</span></label>

        <input type="email" name="fi_email" id="fi_email" class="fi_email form-text email-input" placeholder="usuario@mail.com" required>
      </div>
    </div>
    
    <div class="row mt10">
      <div class="col-md-12">
        <label for="fi_opcao-curso-1">1˚ Opção de Curso <span style="color: red;">*</span></label>
        <select name="fi_opcao-curso-1" id="fi_opcao-curso-1" class="field-select" title="Selecione um curso." style="display: none" required>
          <?php foreach( $fields_campos as $field ): ?>
            <option value="<?php echo $field; ?>"><?php echo $field; ?></option>
          <?php endforeach; ?>
        </select>
        <div class="btn-group select select-block container-full">
          <button class="btn dropdown-toggle clearfix btn-success container-full" data-toggle="dropdown">
            <span class="filter-option1 pull-left italic">Selecione sua 1˚ opção de curso</span>&nbsp;<span class="pull-right caret-select"></span>
          </button>
          <span class="dropdown-arrow dropdown-arrow-inverse"></span>
          <ul class="dropdown-menu dropdown-inverse container-full" role="menu" style="max-height: 564px; overflow-y: auto; min-height: 108px;">
            <?php foreach( $fields_campos as $field ): ?>
              <li rel="0" class="">
                <a tabindex="-1" href="#" class="selected1">
                  <?php echo $field; ?>
                </a>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>
    </div>

    <div class="row mt10">
      <div class="col-md-12">
        <label for="fi_opcao-curso-1">2˚ Opção de Curso <span style="color: red;">*</span></label>
        <select name="fi_opcao-curso-2" id="fi_opcao-curso-2" class="field-select" title="Selecione um curso." style="display: none" required>
          <?php foreach( $fields_campos as $field ): ?>
            <option value="<?php echo $field; ?>"><?php echo $field; ?></option>
          <?php endforeach; ?>
        </select>
        <div class="btn-group select select-block container-full">
          <button class="btn dropdown-toggle clearfix btn-success container-full" data-toggle="dropdown">
            <span class="filter-option2 pull-left italic">Selecione sua 2˚ opção de curso</span>&nbsp;<span class="pull-right caret-select"></span>
          </button>
          <span class="dropdown-arrow dropdown-arrow-inverse"></span>
          <ul class="dropdown-menu dropdown-inverse container-full" role="menu" style="max-height: 564px; overflow-y: auto; min-height: 108px;">
            <?php foreach( $fields_campos as $field ): ?>
              <li rel="0" class="">
                <a tabindex="-1" href="#" class="selected2">
                  <?php echo $field; ?>
                </a>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>
    </div>

    <div class="row mt10">
      <div class="col-md-12">
        <label for="fi_opcao-curso-1">3˚ Opção de Curso <span style="color: red;">*</span></label>
        <select name="fi_opcao-curso-3" id="fi_opcao-curso-3" class="field-select" title="Selecione um curso." style="display: none" required>
          <?php foreach( $fields_campos as $field ): ?>
            <option value="<?php echo $field; ?>"><?php echo $field; ?></option>
          <?php endforeach; ?>
        </select>
        <div class="btn-group select select-block container-full">
          <button class="btn dropdown-toggle clearfix btn-success container-full" data-toggle="dropdown">
            <span class="filter-option3 pull-left italic">Selecione sua 3˚ opção de curso</span>&nbsp;<span class="pull-right caret-select"></span>
          </button>
          <span class="dropdown-arrow dropdown-arrow-inverse"></span>
          <ul class="dropdown-menu dropdown-inverse container-full" role="menu" style="max-height: 564px; overflow-y: auto; min-height: 108px;">
            <?php foreach( $fields_campos as $field ): ?>
              <li rel="0" class="">
                <a tabindex="-1" href="#" class="selected3">
                  <?php echo $field; ?>
                </a>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>
    </div>
  </form>

  <div class="row mt10">
    <div class="col-md-12">
      <divl class="pull-right">
        <div class="btn-group">
          <button type="button" class="btn btn-success btn-submit">Enviar</button>
          <button type="button" class="btn btn-success btn-submit">
            <span class="glyphicon glyphicon-chevron-right"></span>
          </button>
        </div>
      </divl>
    </div>
  </div>

</div>