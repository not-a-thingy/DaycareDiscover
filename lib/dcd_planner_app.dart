import 'package:amplify_authenticator/amplify_authenticator.dart';
import 'package:afiq_s_application2/routes/router.dart';
import 'package:afiq_s_application2/utils/colors.dart' as constants;
import 'package:flutter/material.dart';

class DaycareDiscovery extends StatelessWidget {
  const DaycareDiscovery({
    super.key,
  });

  @override
  Widget build(BuildContext context) {
    return Authenticator(
      child: MaterialApp.router(
        routerConfig: router,
        builder: Authenticator.builder(),
        theme: ThemeData(
          colorScheme:
              ColorScheme.fromSwatch(primarySwatch: constants.primaryColor)
                  .copyWith(
            background: const Color(0xff82CFEA),
          ),
        ),
      ),
    );
  }
}