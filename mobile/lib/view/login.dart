import 'package:flutter/material.dart';
import '/components/formularios.dart';
import '/components/estilos.dart';
import '/components/botoes.dart';
import 'inicial.dart';
import '../splash.dart';
import 'painelEmpresa.dart';
import 'painelEntregador.dart';

class Login extends StatelessWidget {
  const Login({super.key, required this.isEntregador});

  final bool isEntregador;

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Center(child: Text('Entrar', style: textoDestaque)),
      ),
      body: Padding(
        padding: const EdgeInsets.all(10.0),
        child: Column(
          crossAxisAlignment: CrossAxisAlignment.start,
          children: [
            Row(
              crossAxisAlignment: CrossAxisAlignment.center,
              mainAxisAlignment: MainAxisAlignment.center,
              children: [
                Text('Perfil Selecionado:', style: textoSimples),
                botao(
                  icone: Icon(
                    isEntregador ? Icons.motorcycle : Icons.storefront,
                  ),
                  corPrincipal: isEntregador ? corPrincipal : corSecundaria,
                  corSecundaria: isEntregador ? corTextBotao1 : corTextBotao2,
                  texto: isEntregador ? 'Entregador' : 'Empresa',
                  redirecionamento: Splash(rota: Inicial()),
                ),
              ],
            ),
            SizedBox(height: 30),
            Text('Email', style: textoDestaque),
            TextoCampo(label: 'seu@email.com'),
            SizedBox(height: 30),
            Text('Senha', style: textoDestaque),
            TextoCampo(label: 'Digite sua Senha'),
            Text('Esqueceu sua senha?', style: textolink),
            SizedBox(height: 30),
            botao(
              corPrincipal: corPrincipal,
              corSecundaria: corTextBotao1,
              texto: 'Entrar',
              redirecionamento: isEntregador
                  ? Splash(rota: PainelEntregador())
                  : Splash(rota: PainelEmpresa()),
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
      ),
    );
  }
}
