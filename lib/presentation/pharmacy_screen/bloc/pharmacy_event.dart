// ignore_for_file: must_be_immutable

part of 'pharmacy_bloc.dart';

/// Abstract class for all events that can be dispatched from the
///Pharmacy widget.
///
/// Events must be immutable and implement the [Equatable] interface.
@immutable
abstract class PharmacyEvent extends Equatable {}

/// Event that is dispatched when the Pharmacy widget is first created.
class PharmacyInitialEvent extends PharmacyEvent {
  @override
  List<Object?> get props => [];
}
