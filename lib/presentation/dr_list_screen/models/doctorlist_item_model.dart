import '../../../core/app_export.dart';

/// This class is used in the [doctorlist_item_widget] screen.
class DoctorlistItemModel {
  DoctorlistItemModel({
    this.drMarcusHorizon,
    this.title,
    this.chardiologist,
    this.ratting,
    this.distance,
    this.id,
  }) {
    drMarcusHorizon = drMarcusHorizon ?? ImageConstant.imgProfilePic;
    title = title ?? "Dr. Marcus Horizon";
    chardiologist = chardiologist ?? "Chardiologist";
    ratting = ratting ?? "4.7";
    distance = distance ?? "800m away";
    id = id ?? "";
  }

  String? drMarcusHorizon;

  String? title;

  String? chardiologist;

  String? ratting;

  String? distance;

  String? id;
}
