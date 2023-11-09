import 'bloc/app_navigation_bloc.dart';
import 'models/app_navigation_model.dart';
import 'package:afiq_s_application2/core/app_export.dart';
import 'package:flutter/material.dart';

class AppNavigationScreen extends StatelessWidget {
  const AppNavigationScreen({Key? key})
      : super(
          key: key,
        );

  static Widget builder(BuildContext context) {
    return BlocProvider<AppNavigationBloc>(
      create: (context) => AppNavigationBloc(AppNavigationState(
        appNavigationModelObj: AppNavigationModel(),
      ))
        ..add(AppNavigationInitialEvent()),
      child: AppNavigationScreen(),
    );
  }

  @override
  Widget build(BuildContext context) {
    mediaQueryData = MediaQuery.of(context);

    return BlocBuilder<AppNavigationBloc, AppNavigationState>(
      builder: (context, state) {
        return SafeArea(
          child: Scaffold(
            backgroundColor: Color(0XFFFFFFFF),
            body: SizedBox(
              width: double.maxFinite,
              child: Column(
                children: [
                  _buildAppNavigation(context),
                  Expanded(
                    child: SingleChildScrollView(
                      child: Container(
                        decoration: BoxDecoration(
                          color: Color(0XFFFFFFFF),
                        ),
                        child: Column(
                          children: [
                            _buildScreenTitle(
                              context,
                              loginText: "Splash Screen".tr,
                              onTapScreenTitle: () =>
                                  onTapScreenTitle(AppRoutes.splashScreen),
                            ),
                            _buildScreenTitle(
                              context,
                              loginText: "Login".tr,
                              onTapScreenTitle: () =>
                                  onTapScreenTitle(AppRoutes.loginScreen),
                            ),
                            _buildScreenTitle(
                              context,
                              loginText: "Signup".tr,
                              onTapScreenTitle: () =>
                                  onTapScreenTitle(AppRoutes.signupScreen),
                            ),
                            _buildScreenTitle(
                              context,
                              loginText: "Dashboard".tr,
                              onTapScreenTitle: () =>
                                  onTapScreenTitle(AppRoutes.dashboardScreen),
                            ),
                            _buildScreenTitle(
                              context,
                              loginText: "Dr List".tr,
                              onTapScreenTitle: () =>
                                  onTapScreenTitle(AppRoutes.drListScreen),
                            ),
                            _buildScreenTitle(
                              context,
                              loginText: "Dr Details".tr,
                              onTapScreenTitle: () =>
                                  onTapScreenTitle(AppRoutes.drDetailsScreen),
                            ),
                            _buildScreenTitle(
                              context,
                              loginText: "Book an appointment".tr,
                              onTapScreenTitle: () => onTapScreenTitle(
                                  AppRoutes.bookAnAppointmentScreen),
                            ),
                            _buildScreenTitle(
                              context,
                              loginText: "Chat".tr,
                              onTapScreenTitle: () =>
                                  onTapScreenTitle(AppRoutes.chatScreen),
                            ),
                            _buildScreenTitle(
                              context,
                              loginText: "Settigns".tr,
                              onTapScreenTitle: () =>
                                  onTapScreenTitle(AppRoutes.settignsScreen),
                            ),
                            _buildScreenTitle(
                              context,
                              loginText: "Pharmacy".tr,
                              onTapScreenTitle: () =>
                                  onTapScreenTitle(AppRoutes.pharmacyScreen),
                            ),
                            _buildScreenTitle(
                              context,
                              loginText: "Drug Details".tr,
                              onTapScreenTitle: () =>
                                  onTapScreenTitle(AppRoutes.drugDetailsScreen),
                            ),
                            _buildScreenTitle(
                              context,
                              loginText: "Article".tr,
                              onTapScreenTitle: () =>
                                  onTapScreenTitle(AppRoutes.articleScreen),
                            ),
                            _buildScreenTitle(
                              context,
                              loginText: "Cart".tr,
                              onTapScreenTitle: () =>
                                  onTapScreenTitle(AppRoutes.cartScreen),
                            ),
                            _buildScreenTitle(
                              context,
                              loginText: "ambulance".tr,
                              onTapScreenTitle: () =>
                                  onTapScreenTitle(AppRoutes.ambulanceScreen),
                            ),
                            _buildScreenTitle(
                              context,
                              loginText: "Schedule - Tab Container".tr,
                              onTapScreenTitle: () => onTapScreenTitle(
                                  AppRoutes.scheduleTabContainerScreen),
                            ),
                            _buildScreenTitle(
                              context,
                              loginText: "Message - Tab Container".tr,
                              onTapScreenTitle: () => onTapScreenTitle(
                                  AppRoutes.messageTabContainerScreen),
                            ),
                          ],
                        ),
                      ),
                    ),
                  ),
                ],
              ),
            ),
          ),
        );
      },
    );
  }

  /// Section Widget
  Widget _buildAppNavigation(BuildContext context) {
    return Container(
      decoration: BoxDecoration(
        color: Color(0XFFFFFFFF),
      ),
      child: Column(
        children: [
          SizedBox(height: 10.v),
          Align(
            alignment: Alignment.centerLeft,
            child: Padding(
              padding: EdgeInsets.symmetric(horizontal: 20.h),
              child: Text(
                "App Navigation".tr,
                textAlign: TextAlign.center,
                style: TextStyle(
                  color: Color(0XFF000000),
                  fontSize: 20.fSize,
                  fontFamily: 'Roboto',
                  fontWeight: FontWeight.w400,
                ),
              ),
            ),
          ),
          SizedBox(height: 10.v),
          Align(
            alignment: Alignment.centerLeft,
            child: Padding(
              padding: EdgeInsets.only(left: 20.h),
              child: Text(
                "Check your app's UI from the below demo screens of your app."
                    .tr,
                textAlign: TextAlign.center,
                style: TextStyle(
                  color: Color(0XFF888888),
                  fontSize: 16.fSize,
                  fontFamily: 'Roboto',
                  fontWeight: FontWeight.w400,
                ),
              ),
            ),
          ),
          SizedBox(height: 5.v),
          Divider(
            height: 1.v,
            thickness: 1.v,
            color: Color(0XFF000000),
          ),
        ],
      ),
    );
  }

  /// Common widget
  Widget _buildScreenTitle(
    BuildContext context, {
    required String loginText,
    Function? onTapScreenTitle,
  }) {
    return GestureDetector(
      onTap: () {
        onTapScreenTitle!.call();
      },
      child: Container(
        decoration: BoxDecoration(
          color: Color(0XFFFFFFFF),
        ),
        child: Column(
          children: [
            SizedBox(height: 10.v),
            Align(
              alignment: Alignment.centerLeft,
              child: Padding(
                padding: EdgeInsets.symmetric(horizontal: 20.h),
                child: Text(
                  loginText,
                  textAlign: TextAlign.center,
                  style: TextStyle(
                    color: Color(0XFF000000),
                    fontSize: 20.fSize,
                    fontFamily: 'Roboto',
                    fontWeight: FontWeight.w400,
                  ),
                ),
              ),
            ),
            SizedBox(height: 10.v),
            SizedBox(height: 5.v),
            Divider(
              height: 1.v,
              thickness: 1.v,
              color: Color(0XFF888888),
            ),
          ],
        ),
      ),
    );
  }

  /// Common click event
  void onTapScreenTitle(String routeName) {
    NavigatorService.pushNamed(routeName);
  }
}
