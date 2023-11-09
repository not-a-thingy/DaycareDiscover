import 'bloc/drug_details_bloc.dart';
import 'models/drug_details_model.dart';
import 'package:afiq_s_application2/core/app_export.dart';
import 'package:afiq_s_application2/widgets/app_bar/appbar_leading_image.dart';
import 'package:afiq_s_application2/widgets/app_bar/appbar_subtitle.dart';
import 'package:afiq_s_application2/widgets/app_bar/appbar_trailing_image.dart';
import 'package:afiq_s_application2/widgets/app_bar/custom_app_bar.dart';
import 'package:afiq_s_application2/widgets/custom_elevated_button.dart';
import 'package:afiq_s_application2/widgets/custom_icon_button.dart';
import 'package:afiq_s_application2/widgets/custom_rating_bar.dart';
import 'package:flutter/material.dart';
import 'package:readmore/readmore.dart';

class DrugDetailsScreen extends StatelessWidget {
  const DrugDetailsScreen({Key? key}) : super(key: key);

  static Widget builder(BuildContext context) {
    return BlocProvider<DrugDetailsBloc>(
        create: (context) => DrugDetailsBloc(
            DrugDetailsState(drugDetailsModelObj: DrugDetailsModel()))
          ..add(DrugDetailsInitialEvent()),
        child: DrugDetailsScreen());
  }

  @override
  Widget build(BuildContext context) {
    mediaQueryData = MediaQuery.of(context);
    return BlocBuilder<DrugDetailsBloc, DrugDetailsState>(
        builder: (context, state) {
      return SafeArea(
          child: Scaffold(
              appBar: _buildAppBar(context),
              body: Container(
                  width: double.maxFinite,
                  padding:
                      EdgeInsets.symmetric(horizontal: 20.h, vertical: 24.v),
                  child: Column(children: [
                    CustomImageView(
                        imagePath: ImageConstant.imgDrugImage,
                        height: 147.adaptSize,
                        width: 147.adaptSize,
                        radius: BorderRadius.circular(73.h)),
                    SizedBox(height: 65.v),
                    _buildDrugDetail(context),
                    SizedBox(height: 41.v),
                    _buildDrugDescription(context),
                    SizedBox(height: 5.v)
                  ])),
              bottomNavigationBar: _buildBuyNow(context)));
    });
  }

  /// Section Widget
  PreferredSizeWidget _buildAppBar(BuildContext context) {
    return CustomAppBar(
        leadingWidth: 45.h,
        leading: AppbarLeadingImage(
            imagePath: ImageConstant.imgArrowLeft,
            margin: EdgeInsets.only(left: 21.h, top: 10.v, bottom: 10.v),
            onTap: () {
              onTapArrowLeft(context);
            }),
        centerTitle: true,
        title: AppbarSubtitle(text: "lbl_drugs_details".tr),
        actions: [
          AppbarTrailingImage(
              imagePath: ImageConstant.imgCart,
              margin: EdgeInsets.fromLTRB(14.h, 14.v, 14.h, 10.v),
              onTap: () {
                onTapCart(context);
              })
        ]);
  }

  /// Section Widget
  Widget _buildDrugDetail(BuildContext context) {
    return Column(children: [
      Row(
          mainAxisAlignment: MainAxisAlignment.spaceBetween,
          crossAxisAlignment: CrossAxisAlignment.start,
          children: [
            Column(crossAxisAlignment: CrossAxisAlignment.start, children: [
              Text("lbl_obh_combi".tr, style: theme.textTheme.titleLarge),
              SizedBox(height: 7.v),
              Text("lbl_75ml".tr, style: CustomTextStyles.titleMediumGray500),
              SizedBox(height: 7.v),
              Row(children: [
                Padding(
                    padding: EdgeInsets.symmetric(vertical: 1.v),
                    child: CustomRatingBar(initialRating: 0)),
                Padding(
                    padding: EdgeInsets.only(left: 5.h),
                    child: Text("lbl_4_0".tr,
                        style: CustomTextStyles.titleSmallCyan300))
              ])
            ]),
            CustomImageView(
                imagePath: ImageConstant.imgFavorite,
                height: 24.adaptSize,
                width: 24.adaptSize,
                margin: EdgeInsets.only(top: 25.v, bottom: 27.v))
          ]),
      SizedBox(height: 29.v),
      Row(mainAxisAlignment: MainAxisAlignment.center, children: [
        CustomImageView(
            imagePath: ImageConstant.imgMenuGray500,
            height: 32.adaptSize,
            width: 32.adaptSize,
            margin: EdgeInsets.only(bottom: 2.v)),
        Padding(
            padding: EdgeInsets.only(left: 23.h, bottom: 2.v),
            child: Text("lbl_1".tr, style: theme.textTheme.headlineSmall)),
        CustomImageView(
            imagePath: ImageConstant.imgPlus,
            height: 32.adaptSize,
            width: 32.adaptSize,
            margin: EdgeInsets.only(left: 29.h, bottom: 2.v)),
        Spacer(),
        Padding(
            padding: EdgeInsets.only(top: 4.v),
            child: Text("lbl_9_99".tr, style: theme.textTheme.headlineSmall))
      ])
    ]);
  }

  /// Section Widget
  Widget _buildDrugDescription(BuildContext context) {
    return Container(
        padding: EdgeInsets.symmetric(horizontal: 1.h),
        child: Column(crossAxisAlignment: CrossAxisAlignment.start, children: [
          Text("lbl_description".tr, style: theme.textTheme.titleMedium),
          SizedBox(height: 6.v),
          SizedBox(
              width: 331.h,
              child: ReadMoreText("msg_obh_combi_is_a".tr,
                  trimLines: 4,
                  colorClickableText: appTheme.cyan300,
                  trimMode: TrimMode.Line,
                  trimCollapsedText: "lbl_read_more".tr,
                  moreStyle: theme.textTheme.bodySmall!.copyWith(height: 1.50),
                  lessStyle: theme.textTheme.bodySmall!.copyWith(height: 1.50)))
        ]));
  }

  /// Section Widget
  Widget _buildBuyNow(BuildContext context) {
    return Padding(
        padding: EdgeInsets.only(left: 20.h, right: 20.h, bottom: 28.v),
        child: Row(mainAxisAlignment: MainAxisAlignment.center, children: [
          CustomIconButton(
              height: 50.adaptSize,
              width: 50.adaptSize,
              padding: EdgeInsets.all(13.h),
              decoration: IconButtonStyleHelper.fillGray,
              child: CustomImageView(imagePath: ImageConstant.imgCartCyan300)),
          Expanded(
              child: CustomElevatedButton(
                  text: "lbl_buy_now".tr,
                  margin: EdgeInsets.only(left: 19.h),
                  onPressed: () {
                    onTapBuyNow(context);
                  }))
        ]));
  }

  /// Navigates to the previous screen.
  onTapArrowLeft(BuildContext context) {
    NavigatorService.goBack();
  }

  /// Navigates to the cartScreen when the action is triggered.
  onTapCart(BuildContext context) {
    NavigatorService.pushNamed(
      AppRoutes.cartScreen,
    );
  }

  /// Navigates to the cartScreen when the action is triggered.
  onTapBuyNow(BuildContext context) {
    NavigatorService.pushNamed(
      AppRoutes.cartScreen,
    );
  }
}
