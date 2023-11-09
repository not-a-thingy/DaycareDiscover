// ignore_for_file: must_be_immutable

part of 'chat_bloc.dart';

/// Abstract class for all events that can be dispatched from the
///Chat widget.
///
/// Events must be immutable and implement the [Equatable] interface.
@immutable
abstract class ChatEvent extends Equatable {}

/// Event that is dispatched when the Chat widget is first created.
class ChatInitialEvent extends ChatEvent {
  @override
  List<Object?> get props => [];
}
