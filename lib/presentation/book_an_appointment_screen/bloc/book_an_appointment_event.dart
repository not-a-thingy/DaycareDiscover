// ignore_for_file: must_be_immutable

part of 'book_an_appointment_bloc.dart';

/// Abstract class for all events that can be dispatched from the
///BookAnAppointment widget.
///
/// Events must be immutable and implement the [Equatable] interface.
@immutable
abstract class BookAnAppointmentEvent extends Equatable {}

/// Event that is dispatched when the BookAnAppointment widget is first created.
class BookAnAppointmentInitialEvent extends BookAnAppointmentEvent {
  @override
  List<Object?> get props => [];
}
