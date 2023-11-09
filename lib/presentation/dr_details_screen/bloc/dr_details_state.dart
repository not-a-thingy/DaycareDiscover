// ignore_for_file: must_be_immutable

part of 'dr_details_bloc.dart';

/// Represents the state of DrDetails in the application.
class DrDetailsState extends Equatable {
  DrDetailsState({this.drDetailsModelObj});

  DrDetailsModel? drDetailsModelObj;

  @override
  List<Object?> get props => [
        drDetailsModelObj,
      ];
  DrDetailsState copyWith({DrDetailsModel? drDetailsModelObj}) {
    return DrDetailsState(
      drDetailsModelObj: drDetailsModelObj ?? this.drDetailsModelObj,
    );
  }
}
