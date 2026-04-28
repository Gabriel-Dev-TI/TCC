import 'package:flutter/material.dart';
import 'package:mobile/components/estilos.dart';

class TextoCampo extends StatelessWidget {
  const TextoCampo({super.key, required this.label});
  final String label;
  @override
  Widget build(BuildContext context) {
    return TextFormField(
      decoration: InputDecoration(
        labelText: label,
        border: OutlineInputBorder(
          borderSide: BorderSide(color: corNeutra, width: 1),
        ),
      ),
    );
  }
}
