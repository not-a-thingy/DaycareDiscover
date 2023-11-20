import 'package:flutter/material.dart';
import 'package:flutter/services.dart';
import 'package:flutter_localizations/flutter_localizations.dart';
import 'core/app_export.dart';
import 'package:amplify_auth_cognito/amplify_auth_cognito.dart';
import 'package:amplify_flutter/amplify_flutter.dart';
import 'package:afiq_s_application2/dcd_planner_app.dart';
import 'package:flutter_riverpod/flutter_riverpod.dart';

import 'amplifyconfiguration.dart';

Future<void> main() async {
  WidgetsFlutterBinding.ensureInitialized();
  try {
    await _configureAmplify();
  } on AmplifyAlreadyConfiguredException {
    debugPrint('Amplify configuration failed.');
  }

  runApp(
    const ProviderScope(
      child: DaycareDiscovery(),
    ),
  );
}

Future<void> _configureAmplify() async {
  await Amplify.addPlugins([
    AmplifyAuthCognito(),
  ]);
  await Amplify.configure(amplifyconfig);
}
