// ignore_for_file: must_be_immutable

part of 'schedule_tab_container_bloc.dart';

/// Abstract class for all events that can be dispatched from the
///ScheduleTabContainer widget.
///
/// Events must be immutable and implement the [Equatable] interface.
@immutable
abstract class ScheduleTabContainerEvent extends Equatable {}

/// Event that is dispatched when the ScheduleTabContainer widget is first created.
class ScheduleTabContainerInitialEvent extends ScheduleTabContainerEvent {
  @override
  List<Object?> get props => [];
}
