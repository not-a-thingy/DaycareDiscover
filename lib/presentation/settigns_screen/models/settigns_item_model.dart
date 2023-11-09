import '../../../core/app_export.dart';

/// This class is used in the [settigns_item_widget] screen.
class SettignsItemModel {
  SettignsItemModel({
    this.heartrate,
    this.heartRate,
    this.heartRateCount,
    this.id,
  }) {
    heartrate = heartrate ?? ImageConstant.imgLocationPrimary;
    heartRate = heartRate ?? "Heart rate";
    heartRateCount = heartRateCount ?? "215bpm";
    id = id ?? "";
  }

  String? heartrate;

  String? heartRate;

  String? heartRateCount;

  String? id;
}
