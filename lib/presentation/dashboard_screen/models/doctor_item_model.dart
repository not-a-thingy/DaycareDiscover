import '../../../core/app_export.dart';

/// This class is used in the [doctor_item_widget] screen.
class DoctorItemModel {
  DoctorItemModel({
    this.drMarcusHorizo,
    this.drMarcusHorizo1,
    this.chardiologist,
    this.ratting,
    this.distance,
    this.id,
  }) {
    drMarcusHorizo = drMarcusHorizo ?? ImageConstant.imgEllipse27image;
    drMarcusHorizo1 = drMarcusHorizo1 ?? "Dr. Marcus Horizo";
    chardiologist = chardiologist ?? "Chardiologist";
    ratting = ratting ?? "4,7";
    distance = distance ?? "800m away";
    id = id ?? "";
  }

  String? drMarcusHorizo;

  String? drMarcusHorizo1;

  String? chardiologist;

  String? ratting;

  String? distance;

  String? id;
}
