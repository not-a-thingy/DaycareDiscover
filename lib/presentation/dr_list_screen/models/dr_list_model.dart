// ignore_for_file: must_be_immutable

import 'package:equatable/equatable.dart';
import 'doctorlist_item_model.dart';

/// This class defines the variables used in the [dr_list_screen],
/// and is typically used to hold data that is passed between different parts of the application.
class DrListModel extends Equatable {
  DrListModel({this.doctorlistItemList = const []});

  List<DoctorlistItemModel> doctorlistItemList;

  DrListModel copyWith({List<DoctorlistItemModel>? doctorlistItemList}) {
    return DrListModel(
      doctorlistItemList: doctorlistItemList ?? this.doctorlistItemList,
    );
  }

  @override
  List<Object?> get props => [doctorlistItemList];
}
