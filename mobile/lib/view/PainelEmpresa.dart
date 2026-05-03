import 'package:flutter/material.dart';
import 'package:mobile/components/appbar.dart';
import 'package:mobile/components/botoes.dart';
import '/components/estilos.dart';
import 'package:mobile/components/blocos.dart';
import 'CriarEntrega.dart';

class PainelEmpresa extends StatelessWidget {
  const PainelEmpresa({super.key});

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: appBarEmpresa,
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
              },
            ),
            ListTile(
              title: Text('Criar Entrega'),
              onTap: () {
                Navigator.pop(context);
                Navigator.pushReplacement(
                  context,
                  MaterialPageRoute(builder: (context) => Entrega()),
                );
              },
            ),
          ],
        ),
      ),

      body: Padding(
        padding: EdgeInsets.all(30),
        child: Column(
          children: [
            Bloco(
              corPrincipal: corBlocos,
              titulo: 'Pedidos ativos',
              titulo2: '3',
              descricao: 'Acompanhe suas entregas em andamento',
            ),
            SizedBox(height: 30),
            Column(
              children: [
                Row(
                  mainAxisAlignment: MainAxisAlignment.spaceBetween,
                  children: [
                    Text('Histórico', style: textoDestaque),
                    Text('Ver Detalhes', style: textolink),
                  ],
                ),
                SizedBox(height: 10),
                SizedBox(
                  height: 300,
                  child: ListView(
                    children: [
                      Bloco(
                        corPrincipal: corBlocos,
                        titulo: 'Pedido#1023',
                        titulo2: 'Entregue',
                        descricao: '12/05/2024 - 10:23',
                        icone: Text('R\$ 25,00'),
                      ),
                      SizedBox(height: 10),
                      Bloco(
                        corPrincipal: corBlocos,
                        titulo: 'Pedido#1022',
                        titulo2: 'Entregue',
                        descricao: '11/05/2024 - 15:45',
                        icone: Text('R\$ 18,00'),
                      ),
                      SizedBox(height: 10),
                      Bloco(
                        corPrincipal: corBlocos,
                        titulo: 'Pedido#1021',
                        titulo2: 'Cancelado',
                        descricao: '10/05/2024 - 09:20',
                        icone: Text('R\$ 22,00'),
                      ),
                      SizedBox(height: 10),
                      Bloco(
                        corPrincipal: corBlocos,
                        titulo: 'Pedido#1020',
                        titulo2: 'Cancelado',
                        descricao: '09/05/2024 - 07:25',
                        icone: Text('R\$ 15,00'),
                      ),
                    ],
                  ),
                ),
              ],
            ),
          ],
        ),
      ),
    );
  }
}
