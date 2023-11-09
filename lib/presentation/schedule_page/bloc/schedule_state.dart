// ignore_for_file: must_be_immutable

part of 'schedule_bloc.dart';

/// Represents the state of Schedule in the application.
class ScheduleState extends Equatable {
  ScheduleState({this.scheduleModelObj});

  ScheduleModel? scheduleModelObj;

  @override
  List<Object?> get props => [
        scheduleModelObj,
      ];
  ScheduleState copyWith({ScheduleModel? scheduleModelObj}) {
    return ScheduleState(
      scheduleModelObj: scheduleModelObj ?? this.scheduleModelObj,
    );
  }
}
