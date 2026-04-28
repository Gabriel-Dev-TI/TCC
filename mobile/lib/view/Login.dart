import 'package:flutter/material.dart';
import '/components/formularios.dart';
import '/components/estilos.dart';
import '/components/botoes.dart';
import 'Inicial.dart';
import '/Splash.dart';
import 'PainelEmpresa.dart';
import 'PainelEntregador.dart';

class Login extends StatelessWidget {
  const Login({super.key, required this.isEntregador});

  final bool isEntregador;

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      body: Padding(
        padding: EdgeInsetsGeometry.fromLTRB(30, 30, 30, 50),
        child: Column(
          children: [
            Expanded(
              flex: 2,
              child: Column(
                mainAxisAlignment: MainAxisAlignment.spaceAround,
                crossAxisAlignment: CrossAxisAlignment.center,
                children: [
                  Text('Entrar', style: textoDestaque),
                  Text('Perfil Selecionado:', style: textoSimples),
                  Row(
                    mainAxisAlignment: MainAxisAlignment.center,
                    children: [
                      Expanded(
                        child: botao(
                          icone: Icon(
                            isEntregador ? Icons.motorcycle : Icons.storefront,
                          ),
                          corPrincipal: isEntregador
                              ? corPrincipal
                              : corSecundaria,
                          corSecundaria: isEntregador
                              ? corTextBotao1
                              : corTextBotao2,
                          texto: isEntregador ? 'Entregador' : 'Empresa',
                          redirecionamento: Splash(rota: Inicial()),
                        ),
                      ),
                    ],
                  ),
                ],
              ),
            ),
            Expanded(
              flex: 3,
              child: Column(
                crossAxisAlignment: CrossAxisAlignment.start,
                children: [
                  Spacer(),
                  Text('Email', style: textoDestaque),
                  TextoCampo(label: 'seu@email.com'),
                  Spacer(),
                  Text('Senha', style: textoDestaque),
                  TextoCampo(label: 'Digite sua Senha'),
                  SizedBox(height: 10),
                  Text('Esqueceu sua senha?', style: textolink),
                  Spacer(),
                ],
              ),
            ),
            Expanded(
              child: Column(
                mainAxisAlignment: MainAxisAlignment.end,
                children: [
                  botao(
                    corPrincipal: corPrincipal,
                    corSecundaria: corTextBotao1,
                    texto: 'Entrar',
                    redirecionamento: (isEntregador ? Splash(rota: PainelEntregador()) : Splash(rota: PainelEmpresa()) ),
                  ),
                  SizedBox(height: 20),
                  Row(
                    mainAxisAlignment: MainAxisAlignment.center,
                    children: [
                      Text('Ainda não tem conta?'),
                      SizedBox(width: 10),
                      Text('Cadastre-se', style: textolink),
                    ],
                  ),
                ],
              ),
            ),
          ],
        ),
      ),
    );
  }
}
