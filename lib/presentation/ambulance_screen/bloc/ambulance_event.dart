// ignore_for_file: must_be_immutable

part of 'ambulance_bloc.dart';

/// Abstract class for all events that can be dispatched from the
///Ambulance widget.
///
/// Events must be immutable and implement the [Equatable] interface.
@immutable
abstract class AmbulanceEvent extends Equatable {}

/// Event that is dispatched when the Ambulance widget is first created.
class AmbulanceInitialEvent extends AmbulanceEvent {
  @override
  List<Object?> get props => [];
}
