// ignore_for_file: must_be_immutable

part of 'book_an_appointment_bloc.dart';

/// Represents the state of BookAnAppointment in the application.
class BookAnAppointmentState extends Equatable {
  BookAnAppointmentState({this.bookAnAppointmentModelObj});

  BookAnAppointmentModel? bookAnAppointmentModelObj;

  @override
  List<Object?> get props => [
        bookAnAppointmentModelObj,
      ];
  BookAnAppointmentState copyWith(
      {BookAnAppointmentModel? bookAnAppointmentModelObj}) {
    return BookAnAppointmentState(
      bookAnAppointmentModelObj:
          bookAnAppointmentModelObj ?? this.bookAnAppointmentModelObj,
    );
  }
}
