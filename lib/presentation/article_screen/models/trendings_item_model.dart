import '../../../core/app_export.dart';

/// This class is used in the [trendings_item_widget] screen.
class TrendingsItemModel {
  TrendingsItemModel({
    this.covidNineteen,
    this.covidNineteen1,
    this.description,
    this.date,
    this.time,
    this.id,
  }) {
    covidNineteen = covidNineteen ?? ImageConstant.imgRectangle54;
    covidNineteen1 = covidNineteen1 ?? "Covid-19";
    description = description ??
        "Comparing the \nAstraZeneca and \nSinovac COVID-19 \nVaccines";
    date = date ?? "Jun 12, 2021";
    time = time ?? "6 min read";
    id = id ?? "";
  }

  String? covidNineteen;

  String? covidNineteen1;

  String? description;

  String? date;

  String? time;

  String? id;
}
