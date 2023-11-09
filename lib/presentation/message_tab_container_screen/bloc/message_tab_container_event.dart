// ignore_for_file: must_be_immutable

part of 'message_tab_container_bloc.dart';

/// Abstract class for all events that can be dispatched from the
///MessageTabContainer widget.
///
/// Events must be immutable and implement the [Equatable] interface.
@immutable
abstract class MessageTabContainerEvent extends Equatable {}

/// Event that is dispatched when the MessageTabContainer widget is first created.
class MessageTabContainerInitialEvent extends MessageTabContainerEvent {
  @override
  List<Object?> get props => [];
}
