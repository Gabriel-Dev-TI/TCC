import 'package:flutter/material.dart';
import 'Login.dart';
import '/components/botoes.dart';
import '/components/estilos.dart';

//Icons.motorcycle_outlined
class Inicial extends StatelessWidget {
  const Inicial({super.key});

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      backgroundColor: corSecundaria,
      body: Column(
        children: [
          Expanded(
            child: Column(
              children: [
                Image.asset('assets/logoRotaJa.png', height: 150, width: 250),
                Text(
                  'Conectamos quem envia com quem entrega.',
                  style: textoDestaque,
                ),
                Text('Entregas mais rápidas, seguras e eficientes para todos.'),
              ],
            ),
          ),
          Expanded(
            child: Image.asset(
              'assets/imagemFundo.png',
              fit: BoxFit.fill,
              width: double.infinity,
            ),
          ),

          Expanded(
            child: Container(
              margin: EdgeInsets.fromLTRB(20, 10, 20, 50),
              child: Column(
                mainAxisAlignment: MainAxisAlignment.end,
                children: [
                  botao(
                    icone: Icon(Icons.motorcycle),
                    corPrincipal: corPrincipal,
                    corSecundaria: corTextBotao1,
                    texto: 'Sou Entregador',
                    redirecionamento: Login(isEntregador: true),
                  ),

                  SizedBox(height: 20),
                  botao(
                    icone: Icon(Icons.storefront),
                    corPrincipal: corSecundaria,
                    corSecundaria: corTextBotao2,
                    texto: 'Sou Empresa',
                    redirecionamento: Login(isEntregador: false),
                  ),
                  SizedBox(height: 30),
                  Row(
                    mainAxisAlignment: MainAxisAlignment.center,
                    children: [
                      Text('Ainda não tem uma conta?'),
                      SizedBox(width: 5),
                      Text('Contate um ADM', style: textolink),
                    ],
                  ),
                ],
              ),
            ),
          ),
        ],
      ),
    );
  }
}

//Navigator.push( context,MaterialPageRoute(builder: (context) =>Entregador()),);
