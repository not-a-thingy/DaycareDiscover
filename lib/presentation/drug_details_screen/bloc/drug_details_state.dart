// ignore_for_file: must_be_immutable

part of 'drug_details_bloc.dart';

/// Represents the state of DrugDetails in the application.
class DrugDetailsState extends Equatable {
  DrugDetailsState({this.drugDetailsModelObj});

  DrugDetailsModel? drugDetailsModelObj;

  @override
  List<Object?> get props => [
        drugDetailsModelObj,
      ];
  DrugDetailsState copyWith({DrugDetailsModel? drugDetailsModelObj}) {
    return DrugDetailsState(
      drugDetailsModelObj: drugDetailsModelObj ?? this.drugDetailsModelObj,
    );
  }
}
