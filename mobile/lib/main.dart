import 'package:flutter/material.dart';
import 'view/Inicial.dart';
import 'Splash.dart';

void main() {
  runApp(const MyApp());
}

class MyApp extends StatelessWidget {
  const MyApp({super.key});

  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      debugShowCheckedModeBanner: false, // Remove aquela etiqueta do debug
      title: 'Delivery',
      home: Splash(rota: Inicial()),
    );
  }
}
