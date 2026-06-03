import 'package:flutter/material.dart';
import 'package:mobile/components/estilos.dart';

class botao extends StatelessWidget {
  const botao({
    super.key,
    required this.corPrincipal,
    required this.corSecundaria,
    required this.texto,
    this.redirecionamento,
    this.icone,
  });

  final String texto;
  final Icon? icone;
  final Color corPrincipal;
  final Color corSecundaria;
  final Widget? redirecionamento;

  @override
  Widget build(BuildContext context) {
    return Padding(
      padding: const EdgeInsets.all(8.0),
      child: ElevatedButton(
        style: ElevatedButton.styleFrom(
          backgroundColor: corPrincipal,
          foregroundColor: corSecundaria,
          side: BorderSide(color: corNeutra, width: 1),
          padding: EdgeInsets.symmetric(vertical: 20, horizontal: 20),
          shape: RoundedRectangleBorder(
            borderRadius: BorderRadius.circular(10),
          ),
        ),
        onPressed: () {
          if (redirecionamento != null) {
            Navigator.push(
              context,
              MaterialPageRoute(builder: (context) => redirecionamento!),
            );
          }
        },
        child: Row(
          mainAxisAlignment: MainAxisAlignment.center,
          children: [
            if (icone != null) icone!,
            SizedBox(width: 10),
            Text(texto),
          ],
        ),
      ),
    );
  }
}
