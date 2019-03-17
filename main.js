$(function(){

  $('#placa').mask('AAA-0000', {'translation': {
    A: {pattern: /[A-Za-z]/},
    Y: {pattern: /[0-9]/}
    }
  });

  $('#pesquisa').mask('AAA-0000', {'translation': {
    A: {pattern: /[A-Za-z]/},
    Y: {pattern: /[0-9]/}
    }
  })

  
  $('#dinheiro').mask('00,00');

  $('#enviar').click(function () { 
    $('.sucesso').css('display','block');
    
  });


  $('.hide').css('display','none');

  $('#enviar').click(function () { 
    $('.hide').css('display','');
    
  });

  $('#enviar').click(function () { 
    $('.hide').css('display','');
    
  });
  

  /** Manual */
  $('#formManual').submit(function (e) { 
    e.preventDefault();
    var txt = $(this).serialize();

  $.ajax({
    type: "POST",
    url: "/php/insert/insereManual.php",
    data: txt,
    dataType: "json",
    success: function (response) {
      $('.sucesso').html('Cadastro Realizado com Sucesso: <br>'+ 'placa : '+response.placa+ '<br>Data :'+response.data+ '<br>Entrada :'+response.entrada + '<br>saida : '+ response.saida +' <br>CNPJ :' + response.cnpj + '<button tyep="button" class="close" data-dismiss="alert" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>');

    },
    error: function(){
      $('.sucesso').html('Erro ao cadastrar Veiculo <br> Por favor verifique se todos so campos estão preenchidos corretamente');
    }
  });

  });

  /** Entrada */
  $('#formEntrada').submit(function (e) { 
    e.preventDefault();
    var txt = $(this).serialize();


  $.ajax({
    type: "POST",
    url: "/php/insert/insere.php",
    data: txt,
    dataType: "json",
    success: function (response) {
      $('.sucesso').html('Cadastro Realizado com Sucesso: <br>'+ 'placa : '+response.placa+ '<br>Data :'+response.data+ '<br>Entrada :'+response.entrada+ '<button tyep="button" class="close" data-dismiss="alert" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>');
    },
    error: function(){
      $('.sucesso').html('Erro ao cadastrar Veiculo');
    }
  });

  });


//Pesquisa
$('#consulta').submit(function (e) { 
  e.preventDefault();
  $('.content').css('display', '');
  var txt = $(this).serialize();
  var placa = $('input#pesquisa').val();

$.ajax({
  type: "POST",
  url: "php/select/select.php",
  data: txt,
  dataType: "json",
  success: function (response) {
    $('#id').val(response.id);
    $('#placa').val(placa);
    $('#inputdate').val(response.data);
    $('#entrada').val(response.entrada);
    $('#saida').val(response.saida);
    $('#dinheiro').val(response.valor);
    $('#cnpj').val(response.cnpj);
console.log(txt);
  },
  error: function(){
    $('.sucesso').html('Erro ao consultar Veiculo digite novamente a placa');
  }
});

});



  /** Saida */
  $('#formSaida').submit(function (e) { 
    e.preventDefault();
    var txt = $(this).serialize();

  $.ajax({
    type: "POST",
    url: "php/update/update.php",
    data: txt,
    dataType: "json",
    success: function (response) {
      $('.sucesso').html('Cadastro Realizado com Sucesso: <br>'+ 'placa : '+response.placa+ '<br>Data :'+response.data+ '<br>Entrada :'+response.entrada+ '<br>Saida :'+response.saida+ '<br>valor :'+response.dinheiro+ '<button tyep="button" class="close" data-dismiss="alert" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>');
    },
    error: function(){
      $('.sucesso').html('Erro ao cadastrar Veiculo <br> Por favor verifique se todos so campos estão preenchidos corretamente');
    }
  });

  });
});