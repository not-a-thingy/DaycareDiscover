// ignore_for_file: must_be_immutable

part of 'schedule_tab_container_bloc.dart';

/// Represents the state of ScheduleTabContainer in the application.
class ScheduleTabContainerState extends Equatable {
  ScheduleTabContainerState({this.scheduleTabContainerModelObj});

  ScheduleTabContainerModel? scheduleTabContainerModelObj;

  @override
  List<Object?> get props => [
        scheduleTabContainerModelObj,
      ];
  ScheduleTabContainerState copyWith(
      {ScheduleTabContainerModel? scheduleTabContainerModelObj}) {
    return ScheduleTabContainerState(
      scheduleTabContainerModelObj:
          scheduleTabContainerModelObj ?? this.scheduleTabContainerModelObj,
    );
  }
}
