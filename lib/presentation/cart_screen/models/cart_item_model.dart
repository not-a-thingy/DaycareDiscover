import '../../../core/app_export.dart';

/// This class is used in the [cart_item_widget] screen.
class CartItemModel {
  CartItemModel({
    this.oBHCombi,
    this.oBHCombi1,
    this.measurement,
    this.counter,
    this.price,
    this.id,
  }) {
    oBHCombi = oBHCombi ?? ImageConstant.imgDrugThumbnail72x72;
    oBHCombi1 = oBHCombi1 ?? "OBH Combi";
    measurement = measurement ?? "75ml";
    counter = counter ?? "1";
    price = price ?? "9.99";
    id = id ?? "";
  }

  String? oBHCombi;

  String? oBHCombi1;

  String? measurement;

  String? counter;

  String? price;

  String? id;
}
