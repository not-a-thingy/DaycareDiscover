import '../../../core/app_export.dart';

/// This class is used in the [schedule_item_widget] screen.
class ScheduleItemModel {
  ScheduleItemModel({
    this.drMarcusHorizon,
    this.chardiologist,
    this.drMarcusHorizon1,
    this.date,
    this.time,
    this.confirmed,
    this.id,
  }) {
    drMarcusHorizon = drMarcusHorizon ?? "Dr. Marcus Horizon";
    chardiologist = chardiologist ?? "Chardiologist";
    drMarcusHorizon1 = drMarcusHorizon1 ?? ImageConstant.imgEllipse27image46x46;
    date = date ?? "26/06/2021";
    time = time ?? "10:30 AM";
    confirmed = confirmed ?? "Confirmed";
    id = id ?? "";
  }

  String? drMarcusHorizon;

  String? chardiologist;

  String? drMarcusHorizon1;

  String? date;

  String? time;

  String? confirmed;

  String? id;
}
