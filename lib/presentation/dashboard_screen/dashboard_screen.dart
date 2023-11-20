import 'package:afiq_s_application2/utils/colors.dart' as constants;
import 'package:flutter/material.dart';

// ignore_for_file: must_be_immutable
class DashboardScreen extends StatelessWidget {
  const DashboardScreen({
    super.key,
  });

   @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        centerTitle: true,
        title: const Text(
          'Daycare Discover',
        ),
        backgroundColor: const Color(constants.primaryColorDark),
      ),
      floatingActionButton: FloatingActionButton(
        onPressed: () {},
        backgroundColor: const Color(constants.primaryColorDark),
        child: const Icon(Icons.add),
      ),
      body: const Center(
        child: Text('Schedule List'),
      ),
    );
  }
}
