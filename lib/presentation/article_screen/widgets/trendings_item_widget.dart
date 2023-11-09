import '../models/trendings_item_model.dart';
import 'package:afiq_s_application2/core/app_export.dart';
import 'package:flutter/material.dart';

// ignore: must_be_immutable
class TrendingsItemWidget extends StatelessWidget {
  TrendingsItemWidget(
    this.trendingsItemModelObj, {
    Key? key,
  }) : super(
          key: key,
        );

  TrendingsItemModel trendingsItemModelObj;

  @override
  Widget build(BuildContext context) {
    return Container(
      padding: EdgeInsets.symmetric(
        horizontal: 6.h,
        vertical: 7.v,
      ),
      decoration: AppDecoration.outlineTeal50.copyWith(
        borderRadius: BorderRadiusStyle.roundedBorder10,
      ),
      width: 153.h,
      child: Column(
        mainAxisSize: MainAxisSize.min,
        crossAxisAlignment: CrossAxisAlignment.start,
        children: [
          Container(
            height: 87.v,
            width: 138.h,
            margin: EdgeInsets.only(left: 1.h),
            child: Stack(
              alignment: Alignment.topRight,
              children: [
                CustomImageView(
                  imagePath: trendingsItemModelObj.covidNineteen,
                  height: 87.v,
                  width: 138.h,
                  radius: BorderRadius.circular(
                    8.h,
                  ),
                  alignment: Alignment.center,
                ),
                CustomImageView(
                  imagePath: ImageConstant.imgBookmark,
                  height: 15.adaptSize,
                  width: 15.adaptSize,
                  alignment: Alignment.topRight,
                  margin: EdgeInsets.only(
                    top: 5.v,
                    right: 1.h,
                  ),
                ),
              ],
            ),
          ),
          SizedBox(height: 13.v),
          Padding(
            padding: EdgeInsets.only(left: 6.h),
            child: Text(
              trendingsItemModelObj.covidNineteen1!,
              style: CustomTextStyles.labelMediumCyan300,
            ),
          ),
          SizedBox(height: 5.v),
          Container(
            width: 106.h,
            margin: EdgeInsets.only(left: 1.h),
            child: Text(
              trendingsItemModelObj.description!,
              maxLines: 4,
              overflow: TextOverflow.ellipsis,
              style: CustomTextStyles.labelLargeOnPrimarySemiBold.copyWith(
                height: 1.50,
              ),
            ),
          ),
          SizedBox(height: 6.v),
          Padding(
            padding: EdgeInsets.only(left: 1.h),
            child: Row(
              crossAxisAlignment: CrossAxisAlignment.start,
              children: [
                Text(
                  trendingsItemModelObj.date!,
                  style: theme.textTheme.labelSmall,
                ),
                Container(
                  height: 2.adaptSize,
                  width: 2.adaptSize,
                  margin: EdgeInsets.only(
                    left: 10.h,
                    top: 3.v,
                    bottom: 4.v,
                  ),
                  decoration: BoxDecoration(
                    color: appTheme.gray500,
                    borderRadius: BorderRadius.circular(
                      1.h,
                    ),
                  ),
                ),
                Padding(
                  padding: EdgeInsets.only(left: 4.h),
                  child: Text(
                    trendingsItemModelObj.time!,
                    style: CustomTextStyles.labelSmallCyan300,
                  ),
                ),
              ],
            ),
          ),
        ],
      ),
    );
  }
}
