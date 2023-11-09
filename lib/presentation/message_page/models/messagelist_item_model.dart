import '../../../core/app_export.dart';

/// This class is used in the [messagelist_item_widget] screen.
class MessagelistItemModel {
  MessagelistItemModel({
    this.drMarcusHorizon,
    this.drMarcusHorizon1,
    this.time,
    this.iDonTHaveAny,
    this.id,
  }) {
    drMarcusHorizon = drMarcusHorizon ?? ImageConstant.imgProfileThumbnail;
    drMarcusHorizon1 = drMarcusHorizon1 ?? "Dr. Marcus Horizon";
    time = time ?? "10.24";
    iDonTHaveAny = iDonTHaveAny ?? "I don,t have any fever, but headchace...";
    id = id ?? "";
  }

  String? drMarcusHorizon;

  String? drMarcusHorizon1;

  String? time;

  String? iDonTHaveAny;

  String? id;
}
