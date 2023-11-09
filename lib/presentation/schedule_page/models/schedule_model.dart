// ignore_for_file: must_be_immutable

import 'package:equatable/equatable.dart';
import 'schedule_item_model.dart';

/// This class defines the variables used in the [schedule_page],
/// and is typically used to hold data that is passed between different parts of the application.
class ScheduleModel extends Equatable {
  ScheduleModel({this.scheduleItemList = const []});

  List<ScheduleItemModel> scheduleItemList;

  ScheduleModel copyWith({List<ScheduleItemModel>? scheduleItemList}) {
    return ScheduleModel(
      scheduleItemList: scheduleItemList ?? this.scheduleItemList,
    );
  }

  @override
  List<Object?> get props => [scheduleItemList];
}
