// ignore_for_file: must_be_immutable

import 'package:equatable/equatable.dart';

/// This class defines the variables used in the [drug_details_screen],
/// and is typically used to hold data that is passed between different parts of the application.
class DrugDetailsModel extends Equatable {
  DrugDetailsModel();

  DrugDetailsModel copyWith() {
    return DrugDetailsModel();
  }

  @override
  List<Object?> get props => [];
}
