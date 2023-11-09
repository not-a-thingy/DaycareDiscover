import '../../../core/app_export.dart';

/// This class is used in the [ninetyfour_item_widget] screen.
class NinetyfourItemModel {
  NinetyfourItemModel({
    this.image,
    this.theHealthiest,
    this.date,
    this.time,
    this.id,
  }) {
    image = image ?? ImageConstant.imgThumbnail;
    theHealthiest = theHealthiest ??
        "The 25 Healthiest Fruits You Can Eat, According to a Nutritionist";
    date = date ?? "Jun 10, 2021 ";
    time = time ?? "5min read";
    id = id ?? "";
  }

  String? image;

  String? theHealthiest;

  String? date;

  String? time;

  String? id;
}
