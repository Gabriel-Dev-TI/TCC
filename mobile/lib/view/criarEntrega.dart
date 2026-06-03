import 'package:flutter/material.dart';
import 'package:mobile/components/blocos.dart';
import 'package:mobile/components/botoes.dart';
import 'package:mobile/components/estilos.dart';
import 'package:mobile/components/formularios.dart';
import 'package:mobile/view/painelEmpresa.dart';

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
      drawer: Drawer(
        backgroundColor: corSecundaria,
        child: ListView(
          padding: EdgeInsets.zero,
          children: [
            DrawerHeader(
              child: Expanded(child: Image.asset('assets/logoRotaJa.png')),
            ),
            ListTile(
              title: Text('Principal'),
              onTap: () {
                Navigator.pop(context);
                Navigator.pushReplacement(
                  context,
                  MaterialPageRoute(builder: (context) => PainelEmpresa()),
                );
              },
            ),
            ListTile(
              title: Text('Criar Entrega'),
              onTap: () {
                Navigator.pop(context);
              },
            ),
          ],
        ),
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
