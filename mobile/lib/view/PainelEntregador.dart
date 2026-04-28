import 'package:flutter/material.dart';
import 'package:mobile/components/appbar.dart';
import 'package:mobile/components/botoes.dart';
import '/components/estilos.dart';
import 'package:mobile/components/blocos.dart';

class PainelEntregador extends StatelessWidget {
  const PainelEntregador({super.key});

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: appBarEntregador,
      body: Padding(
        padding: EdgeInsets.all(30),
        child: ListView(
          children: [Text('Entregas Disponíveis', style: textoDestaque)],
        ),
      ),
    );
  }
}
