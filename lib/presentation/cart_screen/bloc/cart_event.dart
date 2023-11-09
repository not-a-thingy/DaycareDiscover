// ignore_for_file: must_be_immutable

part of 'cart_bloc.dart';

/// Abstract class for all events that can be dispatched from the
///Cart widget.
///
/// Events must be immutable and implement the [Equatable] interface.
@immutable
abstract class CartEvent extends Equatable {}

/// Event that is dispatched when the Cart widget is first created.
class CartInitialEvent extends CartEvent {
  @override
  List<Object?> get props => [];
}
