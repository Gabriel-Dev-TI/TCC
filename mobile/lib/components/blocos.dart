import 'package:flutter/material.dart';
import 'package:mobile/components/estilos.dart';

class Bloco extends StatelessWidget {
  const Bloco({
    super.key,
    required this.corPrincipal,
    required this.titulo,
    required this.descricao,
    this.titulo2,
    this.icone,
  });

  final String titulo;
  final String? titulo2;
  final String descricao;
  final Widget? icone;
  final Color corPrincipal;

  @override
  Widget build(BuildContext context) {
    return Container(
      padding: EdgeInsets.all(20),
      decoration: BoxDecoration(
        color: corPrincipal,
        borderRadius: BorderRadius.circular(10),
      ),
      child: Column(
        mainAxisAlignment: MainAxisAlignment.start,
        children: [
          Row(
            mainAxisAlignment: MainAxisAlignment.spaceBetween,
            children: [
              Text(titulo, style: textoDestaque),
              if (titulo2 != null) Text(titulo2!, style: textoDestaque),
            ],
          ),
          Row(
            mainAxisAlignment: MainAxisAlignment.spaceBetween,
            children: [
              Text(descricao, style: textoSimples),
              if (icone != null) icone!,
            ],
          ),
        ],
      ),
    );
  }
}
