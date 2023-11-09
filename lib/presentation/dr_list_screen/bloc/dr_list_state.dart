// ignore_for_file: must_be_immutable

part of 'dr_list_bloc.dart';

/// Represents the state of DrList in the application.
class DrListState extends Equatable {
  DrListState({this.drListModelObj});

  DrListModel? drListModelObj;

  @override
  List<Object?> get props => [
        drListModelObj,
      ];
  DrListState copyWith({DrListModel? drListModelObj}) {
    return DrListState(
      drListModelObj: drListModelObj ?? this.drListModelObj,
    );
  }
}
