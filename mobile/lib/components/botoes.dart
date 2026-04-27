import 'package:flutter/material.dart';

class botao extends StatelessWidget {
  const botao({
    super.key,
    required this.icone,
    required this.corPrincipal,
    required this.corSecundaria,
    required this.texto,
    required this.redirecionamento,
  });

  final String texto;
  final Icon icone;
  final Color corPrincipal;
  final Color corSecundaria;
  final Widget redirecionamento;

  @override
  Widget build(BuildContext context) {
    return ElevatedButton(
      style: ElevatedButton.styleFrom(
        backgroundColor: corPrincipal,
        foregroundColor: corSecundaria,
        padding: EdgeInsets.symmetric(vertical: 20),
        shape: RoundedRectangleBorder(borderRadius: BorderRadius.circular(10)),
      ),
      onPressed: () {
        Navigator.pushReplacement(
          context,
          MaterialPageRoute(builder: (context) => redirecionamento),
        );
      },
      child: Row(
        mainAxisAlignment: MainAxisAlignment.center,
        children: [icone, SizedBox(width: 10), Text(texto)],
      ),
    );
  }
}
