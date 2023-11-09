// ignore_for_file: must_be_immutable

part of 'pharmacy_bloc.dart';

/// Represents the state of Pharmacy in the application.
class PharmacyState extends Equatable {
  PharmacyState({
    this.searchController,
    this.pharmacyModelObj,
  });

  TextEditingController? searchController;

  PharmacyModel? pharmacyModelObj;

  @override
  List<Object?> get props => [
        searchController,
        pharmacyModelObj,
      ];
  PharmacyState copyWith({
    TextEditingController? searchController,
    PharmacyModel? pharmacyModelObj,
  }) {
    return PharmacyState(
      searchController: searchController ?? this.searchController,
      pharmacyModelObj: pharmacyModelObj ?? this.pharmacyModelObj,
    );
  }
}
