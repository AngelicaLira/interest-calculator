function calculo(){
    
    
 var interface = document.getElementById("interface");


//pra debugar
   //alert ("Entrou");
   var valor = parseFloat(interface.valor.value);
   //alert ("Recebeu n1: "+n1)
   var parc = parseFloat(interface.parc.value);
   var taxa = parseFloat(interface.taxa.value);
   var fixa = parseFloat(0.69);
   var parcial = parseFloat(valor / taxa * 100);
  // alert (typeof (parcial));
   var  total = parseFloat((valor + taxa + parcial).value);
   //alert (typeof(total));
   var taxa_cartao = parseFloat(valor / (0.55));
   var  taxa_antecipacao = parseFloat(3.50);

   
   var resultado = (valor / parc) / (parcial/ (1- (1 / ((1 + taxa_cartao + taxa_antecipacao),5))));   
   document.getElementById("resultado").value = resultado;

  // var resultado2 = (valor / parc) / (parcial/ (1- (1 / ((1 + taxa_cartao + taxa_antecipacao),5))));   
   //document.getElementById("resultado2").value = resultado2;
   
  // var resultado3 = (valor / parc) / (parcial/ (1- (1 / ((1 + taxa_cartao + taxa_antecipacao),5))));   
   //document.getElementById("resultado3").value = resultado3;
   
  // var resultado4 = (valor / parc) / (parcial/ (1- (1 / ((1 + taxa_cartao + taxa_antecipacao),5))));   
   //document.getElementById("resultado4").value = resultado4;

   //var resultado5 = (valor / parc) / (parcial/ (1- (1 / ((1 + taxa_cartao + taxa_antecipacao),5))));   
   //document.getElementById("resultado5").value = resultado5;

   //var resultado6 = (valor / parc) / (parcial/ (1- (1 / ((1 + taxa_cartao + taxa_antecipacao),5))));   
   //document.getElementById("resultado6").value = resultado6;

   var antecipacao = valor - resultado;   
   document.getElementById("antecipacao").value = antecipacao;


   var cliente_paga = valor + taxa_cartao + fixa + parcial;   
   document.getElementById("cliente_paga").value = cliente_paga;

   var valor_liquido = valor - taxa_cartao - fixa - parcial;   
   document.getElementById("valor_liquido").value = valor_liquido;

  
   var dados = [

    [resultado,antecipacao,cliente_paga,valor_liquido]
];

var tbody = document.getElementById("tbody");
for (var i = 0; i < dados.length; i++) {

var tr = "<tr>" + 

"<td>" + dados[i][0] + "</td>" +

"</tr>";
tbody.innerHTML += tr;
var tr = tbody.childNodes;
}

}

      
this.create_table = function() {

    var corpo_tabela = document.querySelector("tbody");

    //criar elementos
    var linha = document.createElement("tr");
    var valor_parcelado = document.createElement("td");
    var total_pago = document.createElement("td");
    var tarifa_antecipacao = document.createElement("td");
    var tarifa_total = document.createElement("td");
    var valor_liquido_a_receber = document.createElement("td");
    


    valor_parcelado.className = "table";
    
    //criar nós
    var parcela = document.createElement(interface.valor_parcelado);
    var pago = document.createElement(interface.valor_pago);
    
    
    //vincular nós aos elementos
    valor_parcelado.appendChild(parcela);
    valor_pago.appendChild(pago);
    linha.appendChild(valor_parcelado);
    linha.appendChild(valor_pago);
    corpo_tabela.appendChild (linha);


}
