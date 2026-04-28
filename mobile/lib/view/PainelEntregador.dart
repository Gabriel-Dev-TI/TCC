import 'package:flutter/material.dart';
import 'package:mobile/components/appbar.dart';
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
          children: [
            Text('Entregas Disponíveis', style: textoDestaque),
            SizedBox(height: 20),
            BlocoEntregador(
              corPrincipal: corBlocos,
              preco: 'R\$ 28,50',
              distancia: '2,3 km',
              textoBotao: 'Aceitar',
              retirada: 'Rua das Empresas, 100',
              entrega: 'Av. Paulista, 1578 - Bela Vista',
            ),
            BlocoEntregador(
              corPrincipal: corBlocos,
              preco: 'R\$ 17,80',
              distancia: '4,1 km',
              textoBotao: 'Aceitar',
              retirada: 'Rua Augusta, 750',
              entrega: 'R. Frei Caneca, 569 - Consolação',
            ),
            BlocoEntregador(
              corPrincipal: corBlocos,
              preco: 'R\$ 19,50',
              distancia: '1,2 km',
              textoBotao: 'Aceitar',
              retirada: 'Rua das Empresas, 100',
              entrega: 'Av. Paulista, 1578 - Bela Vista',
            ),
          ],
        ),
      ),
    );
  }
}
