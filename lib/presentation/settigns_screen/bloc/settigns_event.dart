// ignore_for_file: must_be_immutable

part of 'settigns_bloc.dart';

/// Abstract class for all events that can be dispatched from the
///Settigns widget.
///
/// Events must be immutable and implement the [Equatable] interface.
@immutable
abstract class SettignsEvent extends Equatable {}

/// Event that is dispatched when the Settigns widget is first created.
class SettignsInitialEvent extends SettignsEvent {
  @override
  List<Object?> get props => [];
}
