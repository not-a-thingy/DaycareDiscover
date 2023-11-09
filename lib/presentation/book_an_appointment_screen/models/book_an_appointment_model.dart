// ignore_for_file: must_be_immutable

import 'package:equatable/equatable.dart';

/// This class defines the variables used in the [book_an_appointment_screen],
/// and is typically used to hold data that is passed between different parts of the application.
class BookAnAppointmentModel extends Equatable {
  BookAnAppointmentModel();

  BookAnAppointmentModel copyWith() {
    return BookAnAppointmentModel();
  }

  @override
  List<Object?> get props => [];
}
