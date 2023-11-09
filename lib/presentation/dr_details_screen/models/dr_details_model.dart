// ignore_for_file: must_be_immutable

import 'package:equatable/equatable.dart';
import 'dates_item_model.dart';
import 'timeslots_item_model.dart';

/// This class defines the variables used in the [dr_details_screen],
/// and is typically used to hold data that is passed between different parts of the application.
class DrDetailsModel extends Equatable {
  DrDetailsModel({
    this.datesItemList = const [],
    this.timeslotsItemList = const [],
  });

  List<DatesItemModel> datesItemList;

  List<TimeslotsItemModel> timeslotsItemList;

  DrDetailsModel copyWith({
    List<DatesItemModel>? datesItemList,
    List<TimeslotsItemModel>? timeslotsItemList,
  }) {
    return DrDetailsModel(
      datesItemList: datesItemList ?? this.datesItemList,
      timeslotsItemList: timeslotsItemList ?? this.timeslotsItemList,
    );
  }

  @override
  List<Object?> get props => [datesItemList, timeslotsItemList];
}
