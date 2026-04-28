import 'package:flutter/material.dart';
import 'package:mobile/components/blocos.dart';
import 'package:mobile/components/botoes.dart';
import 'package:mobile/components/estilos.dart';
import 'package:mobile/components/formularios.dart';

class Entrega extends StatelessWidget {
  const Entrega({super.key});

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        actions: [
          Expanded(
            child: Row(
              mainAxisAlignment: MainAxisAlignment.center,
              children: [Text('Nova Entrega', style: textoDestaque)],
            ),
          ),
        ],
      ),
      body: Padding(
        padding: EdgeInsets.all(10),
        child: Column(
          crossAxisAlignment: CrossAxisAlignment.start,
          children: [
            BlocoVazio(
              corPrincipal: corBlocos,
              titulo: 'Origem',
              conteudo: Column(
                children: [
                  SizedBox(height: 10),
                  TextoCampo(label: 'Seu endereço'),
                ],
              ),
            ),
            BlocoVazio(
              corPrincipal: corBlocos,
              titulo: 'Destino',
              conteudo: Column(
                children: [
                  SizedBox(height: 10),
                  TextoCampo(label: 'Endereço de destino'),
                ],
              ),
            ),
            BlocoVazio(
              corPrincipal: corBlocos,
              titulo: 'Detalhes da Entrega',
              conteudo: Column(
                children: [
                  SizedBox(height: 10),
                  TextoCampo(label: 'Descrição do produto'),
                ],
              ),
            ),
            BlocoVazio(
              corPrincipal: corBlocos,
              titulo: 'Pagamento',
              conteudo: Row(
                mainAxisAlignment: MainAxisAlignment.spaceBetween,
                children: [
                  Text('Valor a pagar', style: textoSimples),
                  Text('R\$ 28,50'),
                ],
              ),
            ),
            botao(
              corPrincipal: corPrincipal,
              corSecundaria: corSecundaria,
              texto: 'Solicitar Entrega',
            ),
          ],
        ),
      ),
    );
  }
}
