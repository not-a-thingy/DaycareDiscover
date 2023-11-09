// ignore_for_file: must_be_immutable

part of 'drug_details_bloc.dart';

/// Abstract class for all events that can be dispatched from the
///DrugDetails widget.
///
/// Events must be immutable and implement the [Equatable] interface.
@immutable
abstract class DrugDetailsEvent extends Equatable {}

/// Event that is dispatched when the DrugDetails widget is first created.
class DrugDetailsInitialEvent extends DrugDetailsEvent {
  @override
  List<Object?> get props => [];
}
