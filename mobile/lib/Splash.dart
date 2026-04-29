import 'package:flutter/material.dart';
import '/components/estilos.dart';

class Splash extends StatefulWidget {
  const Splash({super.key, required this.rota});

  final Widget rota;

  @override
  _SplashState createState() => _SplashState();
}

class _SplashState extends State<Splash> {
  @override
  void initState() {
    super.initState();

    Future.delayed(Duration(seconds: 1), () {
      Navigator.pushAndRemoveUntil(//remove as outras paginas
        context,
        MaterialPageRoute(builder: (context) => widget.rota),
        (route) => false,
      );
    });
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      backgroundColor: corSecundaria,
      body: Center(
        child: Image.asset('assets/logoRotaJa.png', width: 200, height: 200),
      ),
    );
  }
}
