// ignore_for_file: must_be_immutable

part of 'dr_list_bloc.dart';

/// Abstract class for all events that can be dispatched from the
///DrList widget.
///
/// Events must be immutable and implement the [Equatable] interface.
@immutable
abstract class DrListEvent extends Equatable {}

/// Event that is dispatched when the DrList widget is first created.
class DrListInitialEvent extends DrListEvent {
  @override
  List<Object?> get props => [];
}
