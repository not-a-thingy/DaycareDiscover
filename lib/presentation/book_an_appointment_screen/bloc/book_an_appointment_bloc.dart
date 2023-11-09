import 'package:equatable/equatable.dart';
import 'package:flutter/material.dart';
import '/core/app_export.dart';
import 'package:afiq_s_application2/presentation/book_an_appointment_screen/models/book_an_appointment_model.dart';
part 'book_an_appointment_event.dart';
part 'book_an_appointment_state.dart';

/// A bloc that manages the state of a BookAnAppointment according to the event that is dispatched to it.
class BookAnAppointmentBloc
    extends Bloc<BookAnAppointmentEvent, BookAnAppointmentState> {
  BookAnAppointmentBloc(BookAnAppointmentState initialState)
      : super(initialState) {
    on<BookAnAppointmentInitialEvent>(_onInitialize);
  }

  _onInitialize(
    BookAnAppointmentInitialEvent event,
    Emitter<BookAnAppointmentState> emit,
  ) async {}
}
