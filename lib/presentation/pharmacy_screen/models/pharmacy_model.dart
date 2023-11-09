// ignore_for_file: must_be_immutable

import 'package:equatable/equatable.dart';
import 'drugslist_item_model.dart';
import 'drugslist1_item_model.dart';

/// This class defines the variables used in the [pharmacy_screen],
/// and is typically used to hold data that is passed between different parts of the application.
class PharmacyModel extends Equatable {
  PharmacyModel({
    this.drugslistItemList = const [],
    this.drugslist1ItemList = const [],
  });

  List<DrugslistItemModel> drugslistItemList;

  List<Drugslist1ItemModel> drugslist1ItemList;

  PharmacyModel copyWith({
    List<DrugslistItemModel>? drugslistItemList,
    List<Drugslist1ItemModel>? drugslist1ItemList,
  }) {
    return PharmacyModel(
      drugslistItemList: drugslistItemList ?? this.drugslistItemList,
      drugslist1ItemList: drugslist1ItemList ?? this.drugslist1ItemList,
    );
  }

  @override
  List<Object?> get props => [drugslistItemList, drugslist1ItemList];
}
