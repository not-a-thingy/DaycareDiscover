// ignore_for_file: must_be_immutable

part of 'ambulance_bloc.dart';

/// Represents the state of Ambulance in the application.
class AmbulanceState extends Equatable {
  AmbulanceState({
    this.searchController,
    this.ambulanceModelObj,
  });

  TextEditingController? searchController;

  AmbulanceModel? ambulanceModelObj;

  @override
  List<Object?> get props => [
        searchController,
        ambulanceModelObj,
      ];
  AmbulanceState copyWith({
    TextEditingController? searchController,
    AmbulanceModel? ambulanceModelObj,
  }) {
    return AmbulanceState(
      searchController: searchController ?? this.searchController,
      ambulanceModelObj: ambulanceModelObj ?? this.ambulanceModelObj,
    );
  }
}
