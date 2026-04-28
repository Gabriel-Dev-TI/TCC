import 'package:flutter/material.dart';
import 'package:mobile/components/estilos.dart';
import 'package:mobile/components/botoes.dart';

class Bloco extends StatelessWidget {
  const Bloco({
    super.key,
    required this.corPrincipal,
    required this.titulo,
    required this.descricao,
    this.titulo2,
    this.icone,
  });

  final String titulo;
  final String? titulo2;
  final String descricao;
  final Widget? icone;
  final Color corPrincipal;

  @override
  Widget build(BuildContext context) {
    return Container(
      padding: EdgeInsets.all(20),
      decoration: BoxDecoration(
        color: corPrincipal,
        borderRadius: BorderRadius.circular(10),
      ),
      child: Column(
        mainAxisAlignment: MainAxisAlignment.start,
        children: [
          Row(
            mainAxisAlignment: MainAxisAlignment.spaceBetween,
            children: [
              Text(titulo, style: textoDestaque),
              if (titulo2 != null) Text(titulo2!, style: textoDestaque),
            ],
          ),
          Row(
            mainAxisAlignment: MainAxisAlignment.spaceBetween,
            children: [
              Text(descricao, style: textoSimples),
              if (icone != null) icone!,
            ],
          ),
        ],
      ),
    );
  }
}

class BlocoEntregador extends StatelessWidget {
  const BlocoEntregador({
    super.key,
    required this.corPrincipal,
    required this.preco,
    required this.distancia,
    required this.textoBotao,
    required this.retirada,
    required this.entrega,
  });

  final String preco;
  final String distancia;
  final String retirada;
  final String entrega;
  final String textoBotao;
  final Color corPrincipal;

  @override
  Widget build(BuildContext context) {
    return Container(
      margin: EdgeInsets.all(10),
      padding: EdgeInsets.all(20),
      decoration: BoxDecoration(
        color: corPrincipal,
        borderRadius: BorderRadius.circular(10),
      ),
      child: Column(
        crossAxisAlignment: CrossAxisAlignment.start,
        children: [
          Row(
            mainAxisAlignment: MainAxisAlignment.spaceBetween,
            children: [
              Text(distancia, style: textoDestaque),
              Text(preco, style: textoVerde),
            ],
          ),
          Column(
            crossAxisAlignment: CrossAxisAlignment.start,
            children: [
              SizedBox(height: 10),
              Text('Retirada', style: textoSimples),
              SizedBox(height: 5),
              Text(retirada),
              SizedBox(height: 10),
              Text('Entrega', style: textoSimples),
              SizedBox(height: 5),
              Text(entrega),
              SizedBox(height: 20),
            ],
          ),
          botao(
            corPrincipal: corBotaoEntregador,
            corSecundaria: corSecundaria,
            texto: textoBotao,
          ),
        ],
      ),
    );
  }
}
