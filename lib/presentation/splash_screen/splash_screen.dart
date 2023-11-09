import 'bloc/splash_bloc.dart';
import 'models/splash_model.dart';
import 'package:afiq_s_application2/core/app_export.dart';
import 'package:afiq_s_application2/widgets/custom_elevated_button.dart';
import 'package:afiq_s_application2/widgets/custom_outlined_button.dart';
import 'package:flutter/material.dart';

class SplashScreen extends StatelessWidget {
  const SplashScreen({Key? key}) : super(key: key);

  static Widget builder(BuildContext context) {
    return BlocProvider<SplashBloc>(
        create: (context) =>
            SplashBloc(SplashState(splashModelObj: SplashModel()))
              ..add(SplashInitialEvent()),
        child: SplashScreen());
  }

  @override
  Widget build(BuildContext context) {
    mediaQueryData = MediaQuery.of(context);
    return BlocBuilder<SplashBloc, SplashState>(builder: (context, state) {
      return SafeArea(
          child: Scaffold(
              backgroundColor: appTheme.cyan300,
              body: Container(
                  width: double.maxFinite,
                  padding:
                      EdgeInsets.symmetric(horizontal: 17.h, vertical: 46.v),
                  child: Column(children: [
                    Spacer(),
                    CustomImageView(
                        imagePath: ImageConstant.imgHiDocLogo,
                        height: 368.v,
                        width: 338.h),
                    SizedBox(height: 87.v),
                    CustomOutlinedButton(
                        text: "lbl_login".tr,
                        margin: EdgeInsets.only(right: 6.h),
                        onPressed: () {
                          onTapLogin(context);
                        }),
                    SizedBox(height: 15.v),
                    CustomElevatedButton(
                        text: "lbl_sign_up".tr,
                        margin: EdgeInsets.only(right: 6.h),
                        buttonStyle: CustomButtonStyles.fillPrimary,
                        buttonTextStyle: CustomTextStyles.titleSmallTeal300,
                        onPressed: () {
                          onTapSignUp(context);
                        })
                  ]))));
    });
  }

  /// Navigates to the loginScreen when the action is triggered.
  onTapLogin(BuildContext context) {
    NavigatorService.pushNamed(
      AppRoutes.loginScreen,
    );
  }

  /// Navigates to the signupScreen when the action is triggered.
  onTapSignUp(BuildContext context) {
    NavigatorService.pushNamed(
      AppRoutes.signupScreen,
    );
  }
}
