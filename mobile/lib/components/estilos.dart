import 'package:flutter/material.dart';

//Para transformar hexadecimal tem que adicionar 0xFF
//Roxo principal: #6C4CF1
//Roxo mais escuro (gradiente): #4B2FD6
//Roxo mais claro: #8A6BFF

Color corPrincipal = Color(0xFF6C4CF1);
Color corSecundaria = Colors.white;
Color corDestaque1 = Color(0xFF4B2FD6);
Color corDestaque2 = Color(0xFF8A6BFF);
Color corNeutra = Colors.grey;

Color corTextBotao1 = Colors.white;
Color corTextBotao2 = Colors.black;

TextStyle textoDestaque = TextStyle(
  color: Colors.black,
  fontSize: 20,
  fontWeight: FontWeight.bold,
);

TextStyle textoSimples = TextStyle(color: Colors.grey, fontSize: 15);
TextStyle textolink = TextStyle(color: corPrincipal);
