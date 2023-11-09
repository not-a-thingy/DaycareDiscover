// ignore_for_file: must_be_immutable

import 'package:equatable/equatable.dart';
import 'settigns_item_model.dart';

/// This class defines the variables used in the [settigns_screen],
/// and is typically used to hold data that is passed between different parts of the application.
class SettignsModel extends Equatable {
  SettignsModel({this.settignsItemList = const []});

  List<SettignsItemModel> settignsItemList;

  SettignsModel copyWith({List<SettignsItemModel>? settignsItemList}) {
    return SettignsModel(
      settignsItemList: settignsItemList ?? this.settignsItemList,
    );
  }

  @override
  List<Object?> get props => [settignsItemList];
}
