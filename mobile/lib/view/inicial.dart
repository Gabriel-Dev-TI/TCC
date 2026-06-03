import 'package:flutter/material.dart';
import 'login.dart';
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
        mainAxisAlignment: MainAxisAlignment.spaceEvenly,
        children: [
          Image.asset('assets/logoRotaJa.png', width: 250),
          Text(
            'Conectamos quem envia com quem entrega.',
            textAlign: TextAlign.center,
            style: textoDestaque,
          ),
          Text(
            'Entregas mais rápidas, seguras e eficientes para todos.',
            textAlign: TextAlign.center,
          ),
          Image.asset('assets/imagemFundo.png', fit: BoxFit.fitHeight),
          botao(
            icone: Icon(Icons.motorcycle),
            corPrincipal: corPrincipal,
            corSecundaria: corTextBotao1,
            texto: 'Sou Entregador',
            redirecionamento: Login(isEntregador: true),
          ),
          botao(
            icone: Icon(Icons.storefront),
            corPrincipal: corSecundaria,
            corSecundaria: corTextBotao2,
            texto: 'Sou Empresa',
            redirecionamento: Login(isEntregador: false),
          ),
          Row(
            mainAxisAlignment: MainAxisAlignment.center,
            children: [
              Text('Ainda não tem uma conta? '),
              Text('Contate um Administrador', style: textolink),
            ],
          ),
        ],
      ),
    );
  }
}
