// ignore_for_file: must_be_immutable

part of 'message_bloc.dart';

/// Abstract class for all events that can be dispatched from the
///Message widget.
///
/// Events must be immutable and implement the [Equatable] interface.
@immutable
abstract class MessageEvent extends Equatable {}

/// Event that is dispatched when the Message widget is first created.
class MessageInitialEvent extends MessageEvent {
  @override
  List<Object?> get props => [];
}
