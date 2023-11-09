// ignore_for_file: must_be_immutable

import 'package:equatable/equatable.dart';

/// This class is used in the [timeslots_item_widget] screen.
class TimeslotsItemModel extends Equatable {
  TimeslotsItemModel({
    this.timeOne,
    this.isSelected,
  }) {
    timeOne = timeOne ?? "09:00 AM";
    isSelected = isSelected ?? false;
  }

  String? timeOne;

  bool? isSelected;

  TimeslotsItemModel copyWith({
    String? timeOne,
    bool? isSelected,
  }) {
    return TimeslotsItemModel(
      timeOne: timeOne ?? this.timeOne,
      isSelected: isSelected ?? this.isSelected,
    );
  }

  @override
  List<Object?> get props => [timeOne, isSelected];
}
