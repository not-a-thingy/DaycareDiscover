/// This class is used in the [dates_item_widget] screen.
class DatesItemModel {
  DatesItemModel({
    this.mon,
    this.date,
    this.id,
  }) {
    mon = mon ?? "Mon";
    date = date ?? "21";
    id = id ?? "";
  }

  String? mon;

  String? date;

  String? id;
}
