import 'package:flutter/material.dart';
import '/components/estilos.dart';

AppBar appBarEntregador = AppBar(
  backgroundColor: corSecundaria,
  toolbarHeight: 60,
  actions: [
    Expanded(
      child: Padding(
        padding: EdgeInsetsGeometry.fromLTRB(10, 3, 10, 0),
        child: Row(
          children: [
            Icon(Icons.menu),
            SizedBox(width: 30),
            Column(
              mainAxisAlignment: MainAxisAlignment.center,
              crossAxisAlignment: CrossAxisAlignment.start,
              children: [
                Text(
                  'Olá, Entregador',
                  style: TextStyle(fontSize: 16, fontWeight: FontWeight.bold),
                ),
                Text('Pronto para entregar?', style: TextStyle(fontSize: 13)),
              ],
            ),
            Spacer(),
            Icon(Icons.notifications),
          ],
        ),
      ),
    ),
  ],
);

AppBar appBarEmpresa = AppBar(
  backgroundColor: corSecundaria,
  toolbarHeight: 60,
  actions: [
    Expanded(
      child: Padding(
        padding: EdgeInsetsGeometry.fromLTRB(10, 3, 10, 0),
        child: Row(
          children: [
            Icon(Icons.menu),
            SizedBox(width: 30),
            Column(
              mainAxisAlignment: MainAxisAlignment.center,
              crossAxisAlignment: CrossAxisAlignment.start,
              children: [
                Text(
                  'Olá, Empresa',
                  style: TextStyle(fontSize: 16, fontWeight: FontWeight.bold),
                ),
                Text(
                  'Vamos fazer uma entrega?',
                  style: TextStyle(fontSize: 13),
                ),
              ],
            ),
            Spacer(),
            Icon(Icons.notifications),
          ],
        ),
      ),
    ),
  ],
);
