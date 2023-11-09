import '../../../core/app_export.dart';

/// This class is used in the [eighteen_item_widget] screen.
class EighteenItemModel {
  EighteenItemModel({
    this.user,
    this.id,
  }) {
    user = user ?? ImageConstant.imgUserPrimary;
    id = id ?? "";
  }

  String? user;

  String? id;
}
